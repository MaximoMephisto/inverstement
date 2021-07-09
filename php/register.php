<?php 

include 'conexion.php';

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuarios(
    nombre,
    mail,
    contrasena
) VALUES (
    '$nombre',
    '$mail',
    '$contrasena'
);";

$verificar_correo = mysqli_query($conexion, "SELECT * 
    FROM usuarios 
    WHERE mail ='$mail'"
);

if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Correo ya registrado, intenta con otro.");
        window.location = "../signin.php";
    </script>
    ';

    exit();

}

$verificar_usuario = mysqli_query($conexion, "SELECT * 
    FROM usuarios 
    WHERE nombre ='$nombre'"
);

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
        alert("Nombre de usuario ya registrado, intenta con otro.");
        window.location = "../signin.php";
    </script>
    ';

    exit();

}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Registrado exitosamente");
        window.location = "../login.php";
    </script>
    ';
} else {
    echo '
    <script>
        alert("Lamentamos no poder registrar el usuario, revise bien los datos");
        window.location = "../signin.php"
    </script>
    ';
}

mysqli_close($conexion);

?>