---
title: Tareas-Clases
published: true
taxonomy:
    category:
        - docs
twig_first: true
never_cache_twig: true
visible: true
content:
    items:
        - '@self.children'
    limit: 5
    order:
        by: folder
        dir: desc
    pagination: true
    url_taxonomy_filters: true
process:
    markdown: false
    twig: false
resume:
    general:
        bgcolor: '#2fc0d1'
        secondarycolor: '#9bd952'
        github: '0'
feed:
    limit: 10
    description: 'Aprendizaje de la herramienta de la materia Animacion y Graficacion'
textsize:
    scale: ''
    modifier: ''
style:
    header-font-family: ''
    header-color: ''
    block-font-family: ''
    block-color: ''
    background-color: ''
    background-image: ''
    background-size: ''
    background-repeat: ''
    justify-content: ''
    align-items: ''
class: ''
footer: ''
presentation:
    content: ''
    parser: ''
    styles: ''
layout: boxed
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio Blog Adrian Garcia</title>
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
<!-- <p><center>Graficas y Animaciones.</center></p> -->
  <!--  <div id="menu">
        <ul><center>
            <li><a href="https://www.thepetergarcia.com">inicio</a></li>
            <li><a href="https://github.com/garciaa94">Github</a></li>
            <li><a href="https://www.facebook.com/garciaa94">FaceBook</a></li>
        </center></ul>
    </div> -->
<!--     
    <table  style="border: hidden">
  <tr style="border: hidden">
    <td style="border: hidden"><a href="https://thepetergarcia.com/home/ejercicio-css-html"> <br> Ejercicios HTML-CSS</a></td>
    <td style="border: hidden"><a href="https://thepetergarcia.com/documentacion-grav"> <br>Documentacion de Grav</a></td>
    <td style="border: hidden"><a href="https://thepetergarcia.com/home/bandera-de-jamaica"> <br> Bandera Jamaica </a></td>
  </tr>

  <tr>
      <td style="border: hidden"><a href="https://thepetergarcia.com/reloj"> <br> Reloj </a></td>
      <td style="border: hidden"><a href="https://thepetergarcia.com/juego"> <br> Juego </a></td>
      <td style="border: hidden"><a href="https://thepetergarcia.com/home/juego-gravedad"> <br> Juego modificado </a></td>

  </tr>
</table>  -->
    
    
</body>
</html>

