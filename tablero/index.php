<?php

       $dato1=file_get_contents("../co2_0001/dato.txt");
       $dato2=file_get_contents("../co2_0002/dato.txt");
       $dato3=file_get_contents("../co2_0003/dato.txt");
       $dato4=file_get_contents("../co2_0004/dato.txt");
       $dato5=file_get_contents("../co2_0005/dato.txt");
       $dato6=file_get_contents("../co2_0006/dato.txt");         

?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <meta http-equiv="refresh" content="3">
        <link rel="shortcut icon" href="img/ibero_icon.png">
        <title>Tabla de Sensores | Dómotica</title>

        <link rel="stylesheet" href="estilo.css">
	</head>

     
    <header class="hero3">
         
        <div class="container">
          <nav class="nav">
              
              <a href="/principal.html" class="nav__items nav__items--cta">INICIO</a>
              <a href="/index.html" class="nav__items nav__items--cta">INICIA SESIÓN</a>
              <a href="/Contacto.html" class="nav__items nav__items--cta">CONTACTO</a>
             

          </nav>
          <section class="hero__container">
               <img src="rojo.png" alt="#" class="hero__picture">
              <div class="hero__texts">
                  <h1 class="hero_title">UNIVERSIDAD IBEROAMERICANA PUEBLA</h1>
                  <h1 class="hero__title">CREAR NUEVO USUARIO</h1>
                  
                  <a href="principal.html"  class="hero__cta">INICIO</a>
              </div>
          </section>
        </div>
        <div class= "hero__wave" style= "overflow:hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    
	
	<body>
        <table width=375px height=72px align=center>
            <tr>
                <td align=left width=50%>
                    <img src="img/logo_ibero.png"  width=70%>
                </td>
                <td align=center width=50%>
                    <img src="img/logo_ingenierias.png" width=100%>
                </td>
            </tr>
        </table>

        <table width=375px height=33px align=center>
            <tr >
                <td align=center class="tabla_titulo">
                <p class="titulo"> Monitoreo Domótica</p>
                </td>
            </tr>
        </table>


        <table width=375px align=center>
            <tr >
                <td align=center>
                    
                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/ST.png">
                                <p class="texto_min">Normal: 23°C a 26°C</p>
                                <p class="texto_min">Alta: >27°C</p>
                                <p class="texto_min">Baja: >18°C</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 1</p>
                                <b class="texto_grande"> Temperatura</b>
                                <p class="texto_grande"><?php echo $dato1?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/SPresion.png">
                                <p class="texto_min">Presión normal</p>
                                <p class="texto_min">Puebla: 779.9 mb</p>
                          
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 2</p>
                                <b class="texto_grande"> Presión</b>
                                <p class="texto_grande"><?php echo $dato2?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/Shumedad.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >100</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 3</p>
                                <b class="texto_grande"> Humedad</b>
                                <p class="texto_grande"><?php echo $dato3?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/Sultrasonico.png">
                                <p class="texto_min">Sano:30% a 50%</p>
                                <p class="texto_min">Alto: >51%</p>
                                <p class="texto_min">Bajo: 29% </p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 4</p>
                                <b class="texto_grande"> Distancia</b>
                                <p class="texto_grande"><?php echo $dato4?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/Sco2.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >100</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 5</p>
                                <b class="texto_grande"> CO2</b>
                                <p class="texto_grande"><?php echo $dato5?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>

                    
                    <table width=307px height=177px align=center class="tabla_sensor">
                        <tr >
                            <td align=center width=50%>
                                <p></p>
                                <p></p>
                                <img src="img/Sco2.png">
                                <p class="texto_min">Sano: 0 a 100</p>
                                <p class="texto_min">Viciado: 100-200</p>
                                <p class="texto_min">Peligro: >100</p>
                            </td>

                            <td align=center width=50%>
                                <p class="texto_grande"> Sensor 6</p>
                                <b class="texto_grande"> CO2</b>
                                <p class="texto_grande"><?php echo $dato6?></p>
                                <p class="texto_min">Ultima actualización:</p>
                                <p class="texto_min">25/04/22 11:00am</p>
                            </td>
                        </tr>
                    </table>
            
                </td>
            </tr>
        </table>
    </body>
</html>