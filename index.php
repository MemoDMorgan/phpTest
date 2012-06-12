<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" >
            $(document).ready( function ()
            {
                //alert("La página se ha terminado de cargar");
                //$('.verde').css('color','red');//Cambiar el color de las etiquetas que usan la clase .verde
                //$('p.verde').css('color','red');//Cambiar el color de las etiquetas parrafo que usan la clase .verde
                //$('.bordeRojo').show('slow');//Mostrar una imagen que tenga la clase .bordeRojo oculta en una animación con un retardo
                //$('.bordeNaranja').fadeIn('slow');//Mostrar una imagen que tenga la clase .bordeRojo oculta en una animación con un retardo                
                $('tr:odd').css('background','green');//Pintar el fondo de las tr pares de una tabla.
                $('tr:even').css('background','red');//Pintar el fondo de las tr impares de una tabla.
                $('tr:first').css('background','orange');//Pintar el fondo de la primera tr de una tabla.
                $('tr:last').css('background','orange');//Pintar el fondo de la ultima tr de una tabla.
                $('p').click( function (){
                    //alert("Clic en etiqueta <p>");
                    $(this).hide();//desaparecen solo la p del evento (se ocultan)   
                    //$('p').hide();//desaparecen todas las p    
                });
                $('.verde').click( function (){                  
                    $('p').fadeIn('slow');//aparecen todas las p en animación (las ocultas)  
                });
                
                $('#btnEnviar').click( function (){   
                    var name=$("#txtNombre").val();
                    var age=$("#txtEdad").val();
                    //alert (name);
                    $('#resultado').load("MuestraParametros.php", {nombre: name, edad: age}, 
                    function(){
                        //alert("recibidos los datos por ajax");                    
                        $('#resultado').css("color","red");                        
                    });
                });
    
                /***/
                var delay = 500;
                $("#mydiv").bind('fadein', function()
                {
                    $(this).fadeOut(1000, function()
                    {
                        $(this).delay(delay).trigger('fadeout');
                    });
                });

                $("#mydiv").bind('fadeout', function()
                {
                    $(this).fadeIn(1000, function()
                    {
                        $(this).delay(delay).trigger('fadein');
                    });
                });

                $("#mydiv").fadeIn(1000, function()
                {
                    $(this).trigger("fadein");
                });
                /**/
    
                $("#divstop").click(function()
                {
                    //$("#mydiv").stop().hide();
                    $("#mydiv").stop();
                });
            });
    
        </script>

        <style type="text/css">
            .verde{color:green;
            }
            .azul{color:blue; 
            }
            .bordeRojo{
                border: solid red;
            }
            .bordeNaranja{
                border: solid orange;
            }
            td {
                border: solid 1px black;
            }

            #titulo{
                font-weight: bold;
            }
            #formulario{  
                position: absolute;
                /*nos posicionamos en el centro del navegador*/
                top:50%;
                left:50%;
                /*determinamos una anchura*/
                width:250px;
                /*indicamos que el margen izquierdo, es la mitad de la anchura*/
                margin-left:-200px;
                /*determinamos una altura*/
                height:150px;
                /*indicamos que el margen superior, es la mitad de la altura*/
                margin-top:-150px;
                border:1px solid #808080;
                padding:10px;                
            }

            .etiq{
                width: 70px;
                display: block;
                float: left;
            }

            .campo{
                width: 80px;
            }

            #btnEnviar{
                width: 70px;
                position: absolute;
                left: 80px;
                top: 110px;
            }
        </style>
    </head>
    <body>
        <?php
        echo "<p class='azul'>Hola ...<p><br/> ";
        ?> 
        <p class="verde">Texto de un parrafo</p>        
        <ul>
            <li class="verde">item 1</li>
            <li class="verde">item 2</li>
        </ul>        

        <img class="bordeRojo" src="300px-Bandera_de_Luffy_ondenadose.jpg" style="display:none;"  width="300" height="192" alt="OnePiece"/>
        <br/>
        <img class="bordeNaranja" alt="tumaestroweb" style="display:none;" src="http://www.tumaestroweb.com/wp-content/themes/MaestroWeb/imagenes/logo.png">

        <table>                        
            <tr>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Genero</td>
            </tr>
            <tr>
                <td>Pepe</td>
                <td>18</td>
                <td>M</td>
            </tr>
            <tr>
                <td>Paco</td>
                <td>19</td>
                <td>M</td>
            </tr>
            <tr>
                <td>Cocoliso</td>
                <td>10</td>
                <td>F</td>
            </tr>
            <tr>
                <td>Cocoliso</td>
                <td>10</td>
                <td>F</td>
            </tr>
            <tr>
                <td>Cocoliso</td>
                <td>10</td>
                <td>F</td>
            </tr>

        </table>
        <br>
        <br>
        <div id="formulario">
            <p id="titulo">Ejemplo Envio por ajax</p>            
            <form method="POST">
                <label class="etiq">Nombre:</label><input type="text" class="campo" id="txtNombre" name="txtNombre" value="" size="100px" />
                <br>
                <label class="etiq">Edad:</label><input type="text" class="campo" id="txtEdad" name="txtEdad" value="" size="100px" />
                <br>
                <input type="button" value="Enviar" name="btnEnviar" id="btnEnviar" />
            </form>
        </div>
        <br>
        <div id="resultado">
        </div><br>
        <div id="mydiv">
            algo aca
        </div><br>
        <div id="divstop">
            otro mas
        </div>
    </body>
</html>
