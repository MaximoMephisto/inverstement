<?php 

session_start();

include 'conexion.php';

$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT *
    FROM usuarios
    WHERE mail='$mail' AND contrasena='$contrasena'
");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $mail;
    header("Location: ../users_page.php");
    exit;
} else {
    echo '
    <script>
        alert("El usuario que introdujo no existe, 
        por favor intentelo de nuevo");
        window.location = "../login.php";
    </script>
    ';

    exit;

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorry</title>
</head>
<body>
    
</body>
</html>