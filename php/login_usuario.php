<?php 

session_start();   

include 'conexion.php';

$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$validar_login = mysqli_query($conexion, "SELECT *
    FROM usuarios
    WHERE mail='$mail' AND contrasena='$contrasena'"
);

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $mail;
    header("location: ../users_page.php");

    exit();


} else {
    echo '
    <script>
        alert("Usuario no registrado o datos incorrectos");
        window.location = "../login.php";
    </script>
    ';

    exit();

}

?>