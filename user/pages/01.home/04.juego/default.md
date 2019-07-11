---
title: juego-canvas
published: true
---

<html>
<head>
<meta name="viewport" content="initial-scale=1">
</head>
<body onload="startGame()">
<table class="egt" >
<style>
canvas {
    border:1px solid #d3d3d3; /*  Peter Garcia */
    background-color: #f1f1f1;
}
   html { overflow-y:hidden; } 

</style>
  <tr>
    <td>
        <script>
              document.write('instrucción del juego'+"<br>");
              document.write('precione tecla de direccion arriba ↑'+"<br>");
              document.write('precione tecla de direccion izquierda ← '+"<br>");/*  Peter Garcia */
              document.write('precione tecla de direccion derecha →'+"<br>");
              document.write('precione tecla de direccion abajo ↓ ');
             
var myGamePiece;
var myBackground;
var myObstacles = [];
var myObstacleup;
var myObstacledown;/*  Peter Garcia */
var myObstaclexi;
var myObstaclexf;
var myScore;
var tiempo = 0;
function startGame() {
    myGamePiece = new component(30, 30, "", 10, 120, "image");
    myBackground = new component(656, 270, "citymarket.jpg", 0, 0, "image");
    myScore = new component("30px", "Consolas", "black", 280, 40, "text");
    myObstacleup  = new component(480, 10, "green", 0, 0);/*  Peter Garcia */
    myObstacledown  = new component(480, 270, "green",0, 260); 
    myObstaclexi  = new component(9, 258, "green", 0, 10);
    myObstaclexf  = new component(9, 258, "green", 478, 10);
    /* ancho, largo ,color , x, y */   

    myGameArea.start();
}
/*  Peter Garcia */
var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");/*  Peter Garcia */
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function (e) {
            myGameArea.keys = (myGameArea.keys || []);
            myGameArea.keys[e.keyCode] = (e.type == "keydown");
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.keys[e.keyCode] = (e.type == "keydown");            
        })
    }, 
    clear : function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    },
    stop : function() {
        clearInterval(this.interval);/*  Peter Garcia */
    }
}

function component(width, height, color, x, y,type) {

   // this.gamearea = myGameArea;
       this.type = type; /*  Peter Garcia */
    if (type == "image") {
        this.image = new Image();
        this.image.src = color;
    }
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;    
    this.x = x;
    this.y = y;    
    // movimiento del juego

    this.update = function() {/*  Peter Garcia */
        ctx = myGameArea.context;


        if (type == "image") {
            ctx.drawImage(this.image, 
                this.x, 
                this.y,
                this.width, this.height);
        } else {/*  Peter Garcia */
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
        //////////// add score
        if (this.type == "text") {/*  Peter Garcia */
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);
        } else {
            ctx.fillStyle = color;/*  Peter Garcia *//*  Peter Garcia *//*  Peter Garcia */
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }/*  Peter Garcia *//*  Peter Garcia */
    }
    this.newPos = function() {
        this.x += this.speedX;/*  Peter Garcia */
        this.y += this.speedY;        
    }    
    // movimiento 
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    } // fin movimiento
}
function everyinterval(n) {
    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}

function clearmove() {
    myGamePiece.image.src = "smiley.gif";
    myGamePiece.speedX = 0; 
    myGamePiece.speedY = 0; 
}
function updateGameArea() {

    myGameArea.clear();
/*  Peter Garcia */
    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    for (i = 0; i < myObstacles.length; i += 1) {
        if (myGamePiece.crashWith(myObstacles[i])) {  
        return;

            //myGameArea.stop();
        }      
    }
// inicio obtaculos
        myGameArea.frameNo += 1;
        if (myGameArea.frameNo == 1 || everyinterval(150)) {
        x = myGameArea.canvas.width;/*  Peter Garcia *//*  Peter Garcia *//*  Peter Garcia */
        minHeight = 20;
        maxHeight = 200;
        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
        minGap = 50;
        maxGap = 200;/*  Peter Garcia *//*  Peter Garcia */
        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap); // barras/*  Peter Garcia */
        myObstacles.push(new component(10, height, "green", x, 9));
        myObstacles.push(new component(480, 10, "green", 0, 0)); // agregado arriba
        myObstacles.push(new component(480, 270, "green",0, 260)); // agregado abajo
        myObstacles.push(new component(9, 258, "green", 0, 10)); // agregado atras
      //  myObstacles.push(new component(9, 258, "green", 478, 10)); //agregado adelante
        myObstacles.push(new component(10, x - height - gap, "green", x, height + gap));
    }
    for (i = 0; i < myObstacles.length; i += 1) {
              tiempo = tiempo + myGameArea.frameNo ;
        if (myGameArea.frameNo < 500){
                myObstacles[i].x += -1;  // velocidad del 
        }else{
            if (myGameArea.frameNo < 1000){

                myObstacles[i].x += -1.5;  // velocidad del 
                }else{
                     if (myGameArea.frameNo < 1500){
                        myObstacles[i].x += -2;

                     }else{/*  Peter Garcia */
                        if (myGameArea.frameNo < 1500) {
                             myObstacles[i].x += -2.5;/*  Peter Garcia */
                        }else{/*  Peter Garcia */
                            if (myGameArea.frameNo < 1500) {
                             myObstacles[i].x += -3;
                            }
                            else{
                             myObstacles[i].x += -3.5;  
                            }
                        }
                     }

                }   
        }
        myObstacleup.x -= 0; 
        myObstacledown.x -= 0;
        myObstaclexi.x -= 0;   
        myObstaclexf.x -= 0;   
        myObstacleup.update();
        myObstacledown.update();
        myObstaclexi.update();/*  Peter Garcia */
        myObstaclexf.update();
        myObstacles[i].update();
        //document.write("<br>"+myObstacles.length);
        //document.write("<br>"+tiempo);/*  Peter Garcia */
    }
// fin obstaculos
    myGamePiece.speedX = 0;
    myGamePiece.speedY = 0;
    if (myGameArea.keys && myGameArea.keys[37]) {myGamePiece.speedX = -1; 
       // myGamePiece.image.src = "angry.gif";
    }
    if (myGameArea.keys && myGameArea.keys[39]) {myGamePiece.speedX = 1; 
       // myGamePiece.image.src = "angry.gif";
    }
    if (myGameArea.keys&& myGameArea.keys[38]) {myGamePiece.speedY = -1; 
       // myGamePiece.image.src = "angry.gif";
    }/*  Peter Garcia */
    if (myGameArea.keys && myGameArea.keys[40]) {myGamePiece.speedY = 1; 
        //myGamePiece.image.src = "angry.gif";
    }
    myScore.text="SCORE: " + myGameArea.frameNo;
    myScore.update();
    myGamePiece.newPos();    /*  Peter Garcia */
    myGamePiece.update();/*  Peter Garcia */
}
</script>
    </td>
  </tr>     /*  SORRY*/
</table>
<form method="get" action="https://thepetergarcia.com/home/juego">
<input type="submit" value="Repetir" />
</body>
</html>