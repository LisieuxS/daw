<?php
    session_start();
    $_SESSION['usuario']='';
    $_SESSION['mensaje']='';
    $mensaje='';
    $admin=1;
    $maestro=2;
    $padre=3;
    require_once("modelo.php");
    $conn=conectDb();
   
    if(isset($_POST["submit"])){
        $conn=conectDb();
        $username=htmlentities($_POST["correo"]);
        $pass=htmlentities($_POST['contra']);
        $query= "SELECT * FROM usuario WHERE correo='$username'";
        $res=$conn->query($query);
        if($f2=mysqli_fetch_array($res,MYSQLI_BOTH)){
            if($pass==$f2['contrasena']){
                   
                    $_SESSION['usuario']=$f2['nombre'];
                    if($f2 ['id_rol']== '1'){
                        
                        echo'<script type="text/javascript">
                        window.location="https://www.serescapaces.com/SITIO/Login/admin.php";
                        </script>';
                            }else if($f2 ['id_rol']=='2'){
                              
                                echo'<script type="text/javascript">
                                window.location="https://www.serescapaces.com/SITIO/Login/maestro.php";
                                </script>';
                            }else if( $f2 ['id_rol']== '3'){
                              
                                echo'<script type="text/javascript">
                                window.location="https://www.serescapaces.com/SITIO/Login/padres.php";
                                </script>';
                            }
                    
               
            }else {
                $_SESSION['mensaje']="Los datos introducidos no coincides con los de la base de datos";
                header("location: login.html");
                echo '<script type="text/javascript"> alert("LOS DATOS INTRODUCIDOS SON INCORRECTOS")</script>';
            }
        }else{
            echo'<script type="text/javascript">
                        window.location="https://www.serescapaces.com/SITIO/Login/admin.php";
                        </script>';
        }
              
        }
        
    
?>