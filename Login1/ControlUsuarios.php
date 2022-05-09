<?php
    class ControladorUsuarios{
        static public function controlIngreso(){
            if(isset($_POST['ingCorreo'])){
                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingCorreo'])&&preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingContraseña'])){
                    $tabla = 'usuarios';
                    $item = 'usuario';
                    $valor = $_POST['ingUsuario'];
                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);

                    if($respuesta['usuario']==$_POST['ingCorreo']&&$respuesta['password']==$_POST['ingContraseña']){
                        $_SESSION['iniciarSesion']="ok";
                        //el script esta como ejemplo, que despues de ingresar el usuario y contraseña se ira al main 
                        echo '<script>
                                    window.location="Inicio";
                                    </script>';
                    }else{
                        echo("<div class='alert alert-danger'>El correo y/o la contraseña que usted ingresó es incorrecta");
                    }
                }
            }
        }//controlIngreso()
    }//classControladorUsuarios