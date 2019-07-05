---
title: juego-de-Memoria
media_order: 'images.json,images.png,pixi.dev.js'
published: true
---
<html>
	<head>
		<title>PIXI Concentration</title>
		<style>
			body {
				margin: 0;
				padding: 0;
			}
		</style>
		<script src="pixi.dev.js"></script>
	<!--<script src="pixi-sound.js"></script>--LIBRERIA DE SONIDO
	<link rel="icon" type="imagen/png" href="favicon.png">-->
	</head>
	<body>
		<!--<audio id="myAudio" controls>
					<source src="iphone-notificacion.mp3" type="audio/mpeg">
				  </audio>	-->	
	<script>
		var x = document.getElementById("myAudio");//AUDIO

  document.body.style.backgroundImage = "url('memo1.gif')";//poner imagen
			// first tile picked up by the player
			var firstTile=null;
			// second tile picked up by the player
			var secondTile=null;
			// can the player pick up a tile?
			var canPick=true;
			// create an new instance of a pixi stage with a grey background
			var stage = new PIXI.Stage(0x888888);
			// create a renderer instance width=640 height=480
			
			//var renderer = PIXI.autoDetectRenderer(315,315);  //4
			// recir del juego
			var myScore;

			var renderer = PIXI.autoDetectRenderer(640,480);
			// importing a texture atlas created with texturepacker
			var tileAtlas = ["images.json"];
			// create a new loader
			var loader = new PIXI.AssetLoader(tileAtlas);
			// create an empty container
			var gameContainer = new PIXI.DisplayObjectContainer();
			// add the container to the stage
     		stage.addChild(gameContainer);
     		// add the renderer view element to the DOM
			document.body.appendChild(renderer.view);
			// use callback
			loader.onComplete = onTilesLoaded
			//begin load
			loader.load();	
			var c=4;
			var f=4;
			var cartas=c*f;
			var niveles=1;
			// area del scorre
			function startGame() {
				myScore = new component("20px", "Consolas", "black", 280, 40, "text");

			}
			function component(width, height, color, x, y, type) { // ver panel de score

				this.type = type;
				this.width = width;
            	this.height = height;
            	this.speedX = 0;
            	this.speedY = 3;    
            	this.x = x;
            	this.y = y; 
				if (this.type == "text") {
                    ctx.font = this.width + " " + this.height;
                    ctx.fillStyle = color;
                    ctx.fillText(this.text, this.x, this.y);
                } else {
                    ctx.fillStyle = color;
                    ctx.fillRect(this.x, this.y, this.width, this.height);
                }

			}


			function onTilesLoaded(){
				// choose 24 random tile images
				var chosenTiles=new Array();
				//while(chosenTiles.length<48){
					while(chosenTiles.length<48){
				//	var candidate=Math.floor(Math.random()*44);
				var candidate=Math.floor(Math.random()*44);
				
					if(chosenTiles.indexOf(candidate)==-1){
						chosenTiles.push(candidate,candidate)
					}			
				}
				
				// shuffle the chosen tiles
				//for(i=0;i<96;i++){
					for(i=0;i<cartas*2;i++){
				//var from = Math.floor(Math.random()*16);//cambio por que son 4 x4 y da para 16 cartas en total
				var from = Math.floor(Math.random()*(c*f));//cambio por que son 4 x4 y da para 16 cartas en total
				//var to = Math.floor(Math.random()*16);	
					var to = Math.floor(Math.random()*(c*f));
					var tmp = chosenTiles[from];
					chosenTiles[from]=chosenTiles[to];
					chosenTiles[to]=tmp;
				}
				// place down tiles
				for(i=0;i<c;i++){ //cambio en columnas
					for(j=0;j<f;j++){//cambio en filas
						// new sprite
						var tile = PIXI.Sprite.fromFrame(chosenTiles[i*f+j]);//cambio por el tamaÃ±o de las casillas
						// buttonmode+interactive = acts like a button
						tile.buttonMode=true;
						tile.interactive = true;
						// is the tile selected? // Â¿EstÃ¡ seleccionada la ficha?
						tile.isSelected=false;
						// set a tile value // establecer un valor de mosaico
						tile.theVal=chosenTiles[i*f+j]//tile.theVal=chosenTiles[i*6+j] //cambio por el tamaÃ±o de las casillas
						// place the tile
						tile.position.x = 7+i*80;
						tile.position.y = 7+  j*80;
						// paint tile black
						tile.tint = 0x000000;
						// set it a bit transparent (it will look grey)
						tile.alpha=0.5;
						// add the tile
						gameContainer.addChild(tile);
						var suma=20;
						// mouse-touch listener
						tile.mousedown = tile.touchstart = function(data){
							// can I pick a tile? // Â¿Puedo recoger una baldosa?
							if(canPick) {
							     // is the tile already selected? // Â¿el mosaico ya estÃ¡ seleccionado?
								if(!this.isSelected){
									// set the tile to selected // establecer el mosaico a seleccionado
									this.isSelected = true;
									// show the tile
				      				this.tint = 0xffffff;
									this.alpha = 1;
									// is it the first tile we uncover? // Â¿Es la primera baldosa que descubrimos?
									if(firstTile==null){
										firstTile=this

									}
									// this is the second tile // esta es la segunda ficha
									else{
										secondTile=this
										// can't pick anymore // ya no puedo elegir
										canPick=false;


										// did we pick the same tiles?
										if(firstTile.theVal==secondTile.theVal){
											
// wait a second then remove the tiles and make the player able to pick again 
// espere un segundo, luego retire las fichas y haga que el jugador pueda elegir nuevamente

											setTimeout(function(){

												gameContainer.removeChild(firstTile);
												gameContainer.removeChild(secondTile);
												firstTile=null;
												secondTile=null;
												canPick=true;
												suma=suma+20;
												x.autoplay = true;//AUDIIIO
  x.load();//CARGE EL AUDIO
cartas=cartas-2;
document.getElementById("demo").innerHTML ="SCORE:"+suma+ "    NIVEL: "+niveles; //TOTAL DEL SCRORE
myScore.text = "SCORE: " + suma;
           // myinfo.text ="precione tecla de direccion ↑|| precione tecla de direccion ↓"
            myScore.update();

if(cartas==0)
{
	//document.getElementById("demo2").innerHTML ="Buena memoria pasas al siguiente nivel*-*";
	alert("siguiente nivel");

	niveles=niveles+1;
	if(niveles==2){
c=4;
f=6;
cartas=c*f;
loader.load();
document.getElementById("demo").innerHTML ="SCORE:"+suma+ "    NIVEL: "+niveles; //TOTAL DEL SCRORE			

	}
	alert("siguiente nivel");					 			

	if(niveles==3){
		
c=5;
f=6;
cartas=c*f;
loader.load();
document.getElementById("demo").innerHTML ="SCORE:"+suma+ "    NIVEL: "+niveles; //TOTAL DEL SCRORE								 			
	}
	alert("siguiente nivel");

	if(niveles==4){
c=6;
f=6;
cartas=c*f;
loader.load();
document.getElementById("demo").innerHTML ="SCORE:"+suma+ "    NIVEL: "+niveles; //TOTAL DEL SCRORE							 			
	}
	alert("siguiente nivel");

	if(niveles==5){
c=7;
f=6;
cartas=c*f;
loader.load();
document.getElementById("demo").innerHTML ="SCORE: "+suma+ "  NIVEL: "+niveles; //TOTAL DEL SCRORE							 			
	}
	alert("siguiente nivel");

	if(niveles==6){
c=8;
f=6;
cartas=c*f;
loader.load();
document.getElementById("demo").innerHTML ="SCORE: "+suma+ "  NIVEL: "+niveles; //TOTAL DEL SCRORE							 			
	}
}

											},1000);
										}
										// we picked different tiles
										else{
											// wait a second then cover the tiles and make the player able to pick again
								 			setTimeout(function(){
												 
								 				firstTile.isSelected=false
								 				secondTile.isSelected=false
								 				firstTile.tint = 0x000000;
								 				secondTile.tint = 0x000000;
								 				firstTile.alpha=0.5;
								 				secondTile.alpha=0.5;
								 				firstTile=null;
												secondTile=null;
												canPick=true	
												suma=suma-2;
												//document.write(suma);
												//document.getElementById("demo").innerHTML =suma; //TOTAL DEL SCRORE
												document.getElementById("demo").innerHTML ="SCORE: "+suma+ "  NIVEL: "+niveles; //TOTAL DEL SCRORE

										 	},1000);
										}
									}	
								}
							}
						}
					}
				} 
				requestAnimFrame(animate);
			}
			function animate() {
				requestAnimFrame(animate);
				renderer.render(stage);
			}


		</script>
	<!--<p>SCRORE:</p> -->
			 <p id="demo"> </p>
			  
		  <p id="demo2"> </p>
	</body>
</html>