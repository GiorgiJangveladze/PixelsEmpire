<meta name="csrf-token" content="{{ csrf_token() }}">
<canvas id="orthogonal-map" class="canvas-map" width="2000" height="2000"></canvas>

{{--es unda amovshalot mere--}}
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
{{--aqamde--}}

<script>
    // Possible tile types
    const TILE_TYPES = {
        0: {name: 'Land', color: ' #994d00' },
        1: {name: 'Land', color: '#ff3333' },
        2: {name: 'Reaver', color: 'lightblue' },
        3: {name: 'Land', color: ' #f2f2f2' },
    };
    const sizeOfDiv = 20;

    // Map tile data

    const countryID = {{ \Illuminate\Support\Facades\Auth::user()->country_id }}
    var mapData = {{ json_encode($coord) }};


    class Tile {

        constructor (size, type, ctx) {
            this.size = size
            this.type = type
            this.ctx = ctx
        }

        draw (x, y) {
            // Store positions
            const xPos = x * this.size
            const yPos = y * this.size

            //   console.log(xPos, yPos)

            // Draw tile
            this.ctx.fillStyle = this.type.color
            this.ctx.fillRect(xPos, yPos, this.size, this.size)
        }
    }

    /**
     Map class
     */
    class Map {

        constructor (selector, data, opts) {
            this.canvas = document.getElementById(selector)
            this.ctx = this.canvas.getContext('2d')
            this.data = data
            this.tileSize = opts.tileSize
            this.showGrid = false
        }

        draw () {
            // Clear canvas before redrawing
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        }

    }

    /**
     OrthogonalMap class
     */
    class OrthogonalMap extends Map {

        constructor (selector, data, opts) {
            super(selector, data, opts);
            this.draw()
        }

        draw () {
            super.draw() // Call draw() method from Map class

            const numCols = this.data[0].length
            const numRows = this.data.length

            // Iterate through map data and draw each tile
            for (let y = 0; y < numRows; y++) {
                for (let x = 0; x < numCols; x++) {

                    // Get tile ID from map data
                    const tileId = this.data[y][x]

                    // Use tile ID to determine tile type from TILE_TYPES (i.e. Sea or Land)
                    const tileType = TILE_TYPES[tileId]

                    // Create tile instance and draw to our canvas
                    new Tile(this.tileSize, tileType, this.ctx).draw(x, y)

                    // Draw an outline with coordinates on top of tile if show grid is enabled

                    this.drawGridTile(x, y)

                }
            }
        }

        drawGridTile (x, y) {
            // Store positions
            const xPos = x * this.tileSize
            const yPos = y * this.tileSize

            // Draw coordinate text
            this.ctx.font = '1px serif'
            this.ctx.textAlign= 'center'
            this.ctx.fillStyle = '#333'
            this.ctx.fillText(x + ', ' + y, xPos + this.tileSize / 2, yPos + this.tileSize / 2 + 5)

            // Draw grid
            this.ctx.strokeStyle = '#999'
            this.ctx.lineWidth = 0.5
            this.ctx.strokeRect(xPos, yPos, this.tileSize, this.tileSize)
        }
    }

    let map;

    // Init canvas tile map on document ready
    document.addEventListener('DOMContentLoaded', function () {

        // Init orthogonal map
        map = new OrthogonalMap('orthogonal-map', mapData, { tileSize: sizeOfDiv })

        // Bind click event to show grid checkbox toggle
    });

    setInterval(function () {
        $.ajax({
            type: "POST",
            url: "/update_map_online",
            data: { map: JSON.stringify(mapData) },
            dataType: "json",
            success:function(data){
                // mapData = data;



                    // Init orthogonal map
                    map = new OrthogonalMap('orthogonal-map', data, { tileSize: sizeOfDiv })


            }
        });
    },3000);

    /**
     Tile class
     */


    let itemsArray = [];

    mapData.map((yitem, ykey)=>{
            yitem.map((xitem, xkey)=>{
            itemsArray.push({x:xkey*sizeOfDiv, y:ykey*sizeOfDiv})
        });
    });

    var elem = document.getElementById('orthogonal-map'),
        elemLeft = elem.offsetLeft,
        elemTop = elem.offsetTop;
        ctx = elem.getContext('2d');



    elem.addEventListener('click', function(event) {
        var x = event.pageX - elemLeft,
            y = event.pageY - elemTop;

        itemsArray.map((item)=>{
            let Xsxvaoba = x-item.x;
            let Ysxvaoba = y-item.y;

            if((Xsxvaoba<sizeOfDiv && Xsxvaoba>0) && (Ysxvaoba<sizeOfDiv && Ysxvaoba>0)){
                if(item.x+Xsxvaoba===x && item.y+Ysxvaoba===y){
                    let pixel = mapData[item.y / sizeOfDiv][item.x / sizeOfDiv];
                    checkPixels(item.y / sizeOfDiv,item.x / sizeOfDiv, pixel, countryID, mapData, ctx,item);
                    return 0;
                }
            }
        })
    }, false);

    function checkPixels(x, y, currentPixel, countryId, map,ctx,item){
        if(currentPixel!==2 && currentPixel!==3 && currentPixel!==countryId){
            if( map[x-1][y]===countryId ||
                map[x+1][y]===countryId ||
                map[x][y-1]===countryId ||
                map[x][y+1]===countryId ||
                map[x-1][y-1]===countryId ||
                map[x-1][y+1]===countryId ||
                map[x+1][y-1]===countryId ||
                map[x+1][y+1]===countryId){
                if(sessionStorage.getItem('wait')==null || sessionStorage.getItem('wait')<1000) {
                    sessionStorage.setItem('wait', (1000 * 5));
                    mapData[x][y] = countryId;
                    colored(ctx, item);
                    // JSON.stringify(mapData),
                    axios(countryId,x,y);
                }
                else{
                    alert('you time is '+sessionStorage.getItem('wait')/1000)
                }
            }else{
                alert('araavs sazgvari');
            }
        }else{
            alert('zgvaaa an neitrali')
        }
    }

    function colored(ctx, item){
        ctx.fillStyle =TILE_TYPES[countryID].color;
        ctx.fillRect(item.x, item.y, sizeOfDiv, sizeOfDiv);
    }

    function axios(countryID,x,y){
        $.ajax({
            type: "POST",
            url: "/update_map",
            data: {countryID: countryID,x:x,y:y},
            dataType: "json"
        });
    }

    setInterval(function () {
        let oldWaitTime = sessionStorage.getItem('wait');
        if(oldWaitTime>=1000){
            sessionStorage.setItem('wait', (parseInt(oldWaitTime)-1000));
        }
    }, 1000);

</script>

