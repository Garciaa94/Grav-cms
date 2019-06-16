---
title: HOME
media_order: 'main.js,style.css,google tag.jpg'
content:
    items: '@self.modular'
    order:
        by: ''
        dir: ''
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú Responsive</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            padding: 0;
            margin: 0; 
        }
        #menu{
            background-color: black;
        }
        #menu ul{
            list-style: none;
            margin: 0;
            padding: 20px 30px;
        }
        #menu li{
            display: inline;
            margin: 0;
        }
        #menu li a{
            color: white;
            padding: 20px 30px;
            text-decoration: none;
        }
        #menu li a:hover{
            background-color: cornflowerblue;
            color: white;
        }
        @media screen and (max-width: 747px){
            #menu ul{
                padding: 0;
            }
            #menu ul li{
                margin-right: -3px;
                display: inline-block;
                text-align: center;
                width: 33%;
            }
            #menu li a{
                display: list-item;
            }
        }
        @media screen and (max-width: 480px){
            #menu ul li{
                width: 100%;
            }
        }
    </style>
</head>
<body>
<p><center>Graficas y Animaciones.</center></p>
    <div id="menu">
        <ul><center>
            <li><a href="https://www.thepetergarcia.com">inicio</a></li>
            <li><a href="https://github.com/garciaa94">Github</a></li>
            <li><a href="https://www.facebook.com/garciaa94">FaceBook</a></li>
        </center></ul>
    </div>
    <br>
   Bandera Jamaica
	<br>
    <svg width="600" height="300"> 
<rect width="100%" height="100%" style="fill:rgb(254,223,0);"></rect><!-- Color base bandera -->
<path d="M300 110 L20 0 L580 0 Z " style="fill:rgb(0,155,58);"></path> <!-- triangulo arriba-->
<path d="M300 190 L20 300 L580 300 Z " style="fill:rgb(0,155,58);"></path><!-- triangulo abajo -->
<path d="M330 150 L600 270 L600 30 Z " style="fill:rgb(0,0,0);"></path><!-- triangulo derecho -->
<path d="M270 150 L0 270 L0 30 Z " style="fill:rgb(0,0,0);"></path><!-- tringulo Izquierdo -->
</svg>
</body>
</html>
    Google tag    
   ![](google%20tag.jpg)