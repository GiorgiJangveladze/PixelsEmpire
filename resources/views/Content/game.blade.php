<canvas id="orthogonal-map" class="canvas-map" width="2000" height="2000"></canvas>
    <script>
        // Possible tile types
        const TILE_TYPES = {
            0: { name: 'Land', color: ' #994d00' },
            1: { name: 'Land', color: '#ff3333' },
            2: { name: 'Reaver', color: 'lightblue' },
            3: { name: 'Land', color: ' #f2f2f2' },
        };

        // Map tile data
        const mapData = {{$coord}}

        console.log(mapData);

        const sizeOfDiv = 20;
        /**
         Tile class
         */
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

            toggleGrid () {
                // Toggle show grid option
                this.showGrid = !this.showGrid

                // Redraw map
                this.draw()
            }
        }

        /**
         OrthogonalMap class
         */
        class OrthogonalMap extends Map {

            constructor (selector, data, opts) {
                super(selector, data, opts)
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

        // Init canvas tile map on document ready
        document.addEventListener('DOMContentLoaded', function () {

            // Init orthogonal map
            const map = new OrthogonalMap('orthogonal-map', mapData, { tileSize: sizeOfDiv })

            // Bind click event to show grid checkbox toggle
        })

        let itemsArray = [];

        mapData.map((yitem, ykey)=>{
                yitem.map((xitem, xkey)=>{
                itemsArray.push({x:xkey*sizeOfDiv, y:ykey*sizeOfDiv})
            });
        });

        console.log(itemsArray)

        //clickis codi

        var   elem = document.getElementById('orthogonal-map'),
            elemLeft = elem.offsetLeft,
            elemTop = elem.offsetTop;
        ctx = elem.getContext('2d');



        elem.addEventListener('click', function(event) {
            var x = event.pageX - elemLeft,
                y = event.pageY - elemTop;
            Xsxvaoba = 0,
                Ysxvaoba = 0;


            itemsArray.map((item)=>{
                let Xsxvaoba = x-item.x;
            let Ysxvaoba = y-item.y;

            if((Xsxvaoba<sizeOfDiv && Xsxvaoba>0) && (Ysxvaoba<sizeOfDiv && Ysxvaoba>0)){

                if(item.x+Xsxvaoba==x && item.y+Ysxvaoba==y){
                    console.log(item.x/sizeOfDiv,item.y/sizeOfDiv)

                    ctx.fillStyle = 'red';
                    ctx.fillRect(item.x, item.y, sizeOfDiv,sizeOfDiv);
                    return;
                }
            }
        })

        }, false);
    </script>

