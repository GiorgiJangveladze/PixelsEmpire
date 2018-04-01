<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/chat.css')}}"/>
    <div class="o-m">
        <i class="ion ion-android-textsms" id="jsf"></i>
    </div>
    <div class="container left-side" style="background: url('/images/chat.jpg')">
        <div id="close">
            <i class="ion ion-chevron-left" ></i>
            <i class="ion ion-chevron-left" ></i>
            <i class="ion ion-chevron-left" ></i>
        </div>
        <div class="people-list" id="people-list" ">
            <ul class="list" id='all_message'>
                @if($messages->isEmpty())
                <li class="person">
                    <div class="about row" id="enterMes">
                        <p class="p-name col">Enter Message</p>
                        <p class="status col-2">00:00</p>
                        <p class="status col-12">Admin</p>
                    </div>
                </li>
                @else
                    @foreach($messages as $message)
                    <li class="person" id="{{$message->id}}">
                        <div class="about row">
                                <p class="p-name col">{{$message->message}}</p>
                                <p class="status col-2">{{$message->user_id}}</p>
                            </div>
                    </li>
                    @endforeach
                
                @endif

            </ul>
            <div class=" send">
                <div class="row" style="margin:0">
                    <textarea class="form-control  send-m col-10" name="message" id="message" placeholder="ჩაწერე ტექსტი..." id="exampleFormControlTextarea1"></textarea>
                    <button type="submit" id="send" class="btn send-b btn-dark col-2">
                        <i class="ion ion-paper-airplane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

<img id="map" width="220" height="277" src="{{asset('images/map.png')}}" alt="The Scream" style="display: none;">
<img id="nazi_flag" width="20" height="20" src="{{asset('images/nazi_flag.jpeg')}}" alt="The Scream" style="display: none;">
<audio id="audio" src="{{asset('images/gun.mp3')}}" controls style="display: none;"></audio>
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
        1: {name: 'Land', color: '#0000FF' },
        2: {name: 'Land', color: 'red' },
        3: {name: 'Reaver', color: 'lightblue' },
        0: {name: 'Land', color: '#D3D3D3' },
    };

    //pixel size
    const sizeOfDiv = 20;

    // Map tile data
    const countryID = {{ \Illuminate\Support\Facades\Auth::user()->country_id }}
    var mapData = {{ json_encode($coord) }};

    var elem = document.getElementById('orthogonal-map'),
        elemLeft = elem.offsetLeft,
        elemTop = elem.offsetTop,
        ctx = elem.getContext('2d');


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
            this.ctx.globalAlpha=0.6;
            this.ctx.fillStyle = this.type.color;
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
            const xPos = x * this.tileSize;
            const yPos = y * this.tileSize;

            // Draw grid
            this.ctx.strokeStyle = '#000000';
            this.ctx.lineWidth = 1;
            this.ctx.strokeRect(xPos, yPos, this.tileSize, this.tileSize);
        }
    }

    let map;

    window.onload = function() {
        let img = document.getElementById("map");
        ctx.drawImage(img, 0, 0, 1400, 1440);
    };

    document.addEventListener('DOMContentLoaded', function () {
        map = new OrthogonalMap('orthogonal-map', mapData, { tileSize: sizeOfDiv });
        drawInitialLine(ctx);
    });

    setInterval(function () {
        $.ajax({
            type: "POST",
            url: "/update_map_online",
            data: { map: JSON.stringify(mapData) },
            dataType: "json",
            success:function(data){
                map = new OrthogonalMap('orthogonal-map', data, { tileSize: sizeOfDiv });
                drawInitialLine(ctx);
            }
        });
    },1000*300);

    /**
     Tile class
     */


    let itemsArray = [];

    mapData.map((yitem, ykey)=>{
        yitem.map((xitem, xkey)=>{
            itemsArray.push({x:xkey*sizeOfDiv, y:ykey*sizeOfDiv})
        });
    });

    elem.addEventListener('click', function(event) {
        var x = event.pageX - elemLeft,
            y = event.pageY - elemTop;
        itemsArray.map((item)=>{
            let Xsxvaoba = x-item.x;
            let Ysxvaoba = y-item.y;

            if((Xsxvaoba<sizeOfDiv && Xsxvaoba>0) && (Ysxvaoba<sizeOfDiv && Ysxvaoba>0)){
                if(item.x+Xsxvaoba===x && item.y+Ysxvaoba===y){
                    let pixel = mapData[item.y / sizeOfDiv][item.x / sizeOfDiv];
                    checkPixels(item.y / sizeOfDiv, item.x / sizeOfDiv, pixel, countryID, mapData, ctx,item);

                    drawInitialLine(ctx);
                    return 0;
                }
            }
        })
    }, false);

    function checkPixels(x, y, currentPixel, countryId, map,ctx,item){
        if(currentPixel!==0 && currentPixel!==3 && currentPixel!==countryId){
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
                    //image upload
                    let img = document.getElementById("nazi_flag");
                    ctx.drawImage(img, item.x, item.y, 20, 20);

                    let audioMusic = document.getElementById('audio').src;
                    let audio = new Audio(audioMusic);
                    audio.play();
                    //hide
                    setTimeout(function(){
                        colored(ctx, item);
                    },3000);

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
        // ctx.clearRect(item.x, item.y, sizeOfDiv, sizeOfDiv);
        ctx.globalAlpha=0.3;
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

    function drawInitialLine(ctx) {
        let color = '';
        for(let i = 1; i < mapData.length;i++) {
            for(let j = 1; j < mapData[i].length-1; j++) {

                color = 'black';

                if (mapData[i - 1][j] != mapData[i][j]) {
                    ctx.beginPath();
                    ctx.strokeStyle = color;
                    ctx.lineWidth = 10;
                    ctx.moveTo(j * sizeOfDiv, i * sizeOfDiv);
                    ctx.lineTo(j * sizeOfDiv + sizeOfDiv, i * sizeOfDiv);
                    ctx.stroke();
                }
                if (mapData[i][j + 1] != mapData[i][j]) {
                    ctx.beginPath();
                    ctx.strokeStyle = color;
                    ctx.lineWidth = 10;
                    ctx.moveTo(j * sizeOfDiv + sizeOfDiv, i * sizeOfDiv);
                    ctx.lineTo(j * sizeOfDiv + sizeOfDiv, i * sizeOfDiv + sizeOfDiv);
                    ctx.stroke();
                }
            }
        }
    }

    setInterval(function () {
        let oldWaitTime = sessionStorage.getItem('wait');
        if(oldWaitTime>=1000){
            sessionStorage.setItem('wait', (parseInt(oldWaitTime)-1000));
        }
    }, 1000);

</script>

<script src="{{asset('js/chat.js')}}"></script>