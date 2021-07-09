<?php 



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login in IN</title>
    <link rel="stylesheet" href="css/diseno.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ff041f84fb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body id="init-page">
    <div id="login">
        <div class="wrapper fadeInDown abs-center">
              <div id="formContent">
                  <div class="fadeIn first mt-2">
                      <a><i class="fas fa-hand-holding-usd"></i></a>
                  </div>
                  <form action="php/login_usuario.php" method="POST">
                      <input type="text" id="login" class="fadeIn second" name="mail" placeholder="mail" required>
                      <div class="row">
                          <div class="col-10 col-sm-10" style="margin-left: 40px;">
                              <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Password" required>
                          </div>
                       </div>
                      <input type="submit" class="fadeIn fourth" value="Log In">
                  </form>
                  <div id="formFooter">
                      <a class="underlineHover" href="signin.php">Sign in</a>
                      <br>
                      <a class="underlineHover" href="index.php">Go to principal page</a>
                  </div>
              </div>
        </div>
    </div>
</body>
</html>