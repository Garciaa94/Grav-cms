---
title: 'Ejercicio JS 1.2'
published: true
---

<html lang="es">
    <body>
<center>        
<script type="text/javascript">
     /**
       * Delay for a number of milliseconds
       */
      function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
      } // fin sleep
    function myFunction() {
        var max = document.getElementById("valor").value;
        var dato = parseInt(max);
            if(Number.isInteger(dato)){
                var filas,columnas;
                var cadena = "";
                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<=filas;columnas++){
                        cadena = cadena +"*";
                    }
                    cadena = cadena +"<br>"; 
                }
                for (filas=0;filas<max;filas++){
                    for(columnas=0;columnas<max;columnas++){
                        if(columnas<=filas){
                            cadena = cadena +"&nbsp";
                        }else{
                             cadena = cadena +"*";
                        }
                    }
                    cadena = cadena +"<br>"; 
                } 
                document.getElementById("figura").innerHTML= cadena;
                document.getElementById("valor").value=" "; 
            }else{
                //alert("El dato ingresado no es un numero entero");
                document.getElementById("valor").value=" "; 
            }
    }
</script>
            <p><label for="valor">Ingrese un número:</label><br><input type="text" style="width:80px;height:30px" id="valor" onkeyup="myFunction()"><script>.sleep(50000);</script><br><br><code id="figura" class="fig"></code></p>
			<script>//sleep(2000);</script>
    </center> 
</body>
</html>