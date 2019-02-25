<?php include("header.html");?>

<br><br>
<div class="container">
    <p>
        <h4>Preguntas a responder</h4>
        <dl>
           <dt><h6><i>¿Qué hace la función phpinfo()?</i></h6></dt> 
        </dl>
        <dd >
            
               <p align="right"><b> "PHPinfo is a useful function of PHP for returning compiled information about the PHP environment on your server. This includes information about PHP compilation options and extensions, the PHP version, server information and environment, the PHP environment, OS version information, paths, master and local values of configuration options, HTTP headers and the PHP license." [3]</b> </p>
           
        </dd>
        <dl>
            <dt>
                <h6><i>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</i></h6>
            </dt>
            <dd>
             
                  <p align="right"> <b> Cambiar php.ini-development por php.ini-production </b> </p>
                
            </dd>
        </dl>
        <dl>
            <dt>
                <h6><i>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</i></h6>
            </dt>
            <dd>
              
                   <p align="right"> <b> El cliente realiza una petición al servidor para el archivo HTML, lo que se presenta es sólamente una interpretación dada desde el navegador</b></p>
               
            </dd>
        </dl>
    </p><hr>

    <div>
        <p>
            <h4>Ejercicios</h4>
            <ol>
                <li>
                    <p class="left-align">
                        Una función que reciba un arreglo de números y devuelva su promedio
                    </p>
                    <form action= "prob1.php" method="POST">
                        <label for="arg">Ingrese cada elemento del arreglo separado por espacios</label>
                        <input name="arg" id="arg">
                        <button class="btn waves-effect waves-light red" type="submit" name="Evaluar">Evaluar
                            <i class="material-icons left">send</i>
                        </button><br><br>
                    </form>
                </li>
                <li>
                    <p class="left-align">
                        Una función que reciba un arreglo de números y devuelva su mediana
                    </p>
                    <form action= "prob2.php" method="POST">
                        <label for="arg">Ingrese cada elemento del arreglo separado por espacios</label>
                        <input name="arg" id="arg">
                        <button class="btn waves-effect waves-light orange" type="submit" name="Evaluar">Evaluar
                            <i class="material-icons left">send</i>
                        </button><br><br>
                    </form>
                </li>
                <li>
                    <p class="left-align">
                        Una función que reciba un arreglo de números y muestre la lista de números, y como ítems de una lista html muestre el promedio, la media, y el arreglo ordenado de menor a mayor, y posteriormente de mayor a menor
                    </p>
                    <form action= "prob3.php" method="POST">
                        <label for="arg">Ingrese nuevamente cada elemento del arreglo separado por comas y sin espacios</label>
                        <input name="arg" id="arg">
                        <button class="btn waves-effect waves-light green" type="submit" name="Ingresar">Ingresar
                            <i class="material-icons left">send</i>
                        </button><br><br>
                    </form>
                </li>
                <li>
                    <p class="left-align">
                        Una función que imprima una tabla html (mostrando los cuadrados y cubos de 1 hasta un número n)
                    </p>
                    <form action= "prob4.php" method="POST">
                        <label for="num">Ingrese el valor mayor que será evaluado en las tablas</label>
                        <input name="num" id="num">
                        <button class="btn waves-effect waves-light blue" type="submit" name="Imprimir">Imprimir
                            <i class="material-icons left">send</i>
                        </button><br><br>
                    </form>
                </li>
                <li>
                    <p class="left-align">
                        Escoge algún problema que hayas implementado en otro lenguaje de programación, y dale una solución en php, en una vista agradable para el usuario.
                    </p>
                    <p class="left-align">
                        <i>Generador de Índice de Masa Corporal y evaluación del estado del paciente</i>
                    </p>
                    <form action= "prob.php" method="POST">
                        <label for="peso">Ingrese su peso en kilogramos</label>
                        <input name="peso" id="Peso">
                        <label for="altura">Ingrese su altura en centímetros</label>
                        <input name="altura" id="altura">
                        <button class="btn waves-effect waves-light purple" type="submit" name="Consultar">Consultar
                            <i class="material-icons left">send</i>
                        </button><br><br>
                    </form>
                </li>
            </ol>
        </p><hr>
    </div>

    <p>
        <h4>Referencias</h4>
        </p>
       
                    [1] <a href="http://php.net/manual/es/function.phpinfo.php" target="blank">http://php.net/manual/es/function.phpinfo.php</a><br><br>
              
                    [2] <a href="https://manuales.guebs.com/php/function.phpinfo.html" target="blank">https://manuales.guebs.com/php/function.phpinfo.html</a><br><br>
              
                    [3] <a href="https://hetzner.co.za/help-centre/website/what-is-phpinfo-and-how-can-i-run-it/" target="blank">https://hetzner.co.za/help-centre/website/what-is-phpinfo-and-how-can-i-run-it/</a>

       
</div>

<?php include("footer.html");?>