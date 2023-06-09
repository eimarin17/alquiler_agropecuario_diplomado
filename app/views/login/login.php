<?php
// session_start();
//  $_SESSION["usuario"] = "usuario";
// echo 'funcionaa';
session_start();

// Definir las credenciales de inicio de sesión
$usuario_valido = "admin";
$contrasena_valida = "123456";

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos ingresados por el usuario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Verificar las credenciales ingresadas
    if ($usuario == $usuario_valido && $contrasena == $contrasena_valida) {
        // Iniciar sesión y redirigir al usuario a la página protegida
        $_SESSION["usuario"] = $usuario;
        header("Location: ../../../index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si las credenciales son incorrectas
        $mensaje_error = "Credenciales inválidas. Por favor, intenta nuevamente.";
    }
}
?>

<?php include('../../../header.php') ?>
<?php include('../../../menu.php') ?>

<div class="m-0 vh-100 row justify-content-center align-items-center">
    <div class="content">
      <div class="container">
        <h1>Inicio de sesión</h1>        

        <!-- Alert message -->
        <?php if (isset($mensaje_error)) { ?>        
        <div class="alert alert-danger alert-dismissible fade show" id="messageAlert" role="alert" >
         <strong><?php echo $mensaje_error; ?></strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
        <?php } ?>
        <!-- End alert message -->            

        <div class="container">
          <div class="mb-3">
          <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <!-- Username input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Usuario</label>
                <input type="text"  name="usuario" id="usuario" class="form-control" placeholder="Digita tu usuario" required/>                
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" placeholder="Digita tu contraseña" required/>                
            </div>            

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
            
            </form>
          </div>          
        </div>
        
        
        
      </div>
    </div>
  </div>


<?php include('../../../footer.php') ?>