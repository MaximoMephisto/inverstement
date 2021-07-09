<?php 

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
        alert("Por favor, inicia sesion.");
        window.location= "login.php";
    </script>
    ';
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="css/images/logo.png">
    <title>INverstement</title>
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
<body id="users_page">
    <div id="ocult">
    <header>
        <nav id="navbar" class="navbar navbar-expand-md sticky-top">
            <div class="col-12 col-sm-12 text-center">
                <div class="container">
                    <div class="row">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <div class="col-6 col-sm-3 my-2">
                                <a href="#" class="nav-link">Instagram</a>
                            </div>
                            <div class="col-6 col-sm-3 my-2">
                                <a href="#" class="nav-link">Instagram</a>
                            </div>
                            <div class="col-6 col-sm-3 my-2">
                                <a href="#" class="nav-link">Instagram</a>
                            </div>
                            <div class="col-6 col-sm-3 my-2">
                                <a href="#" class="nav-link">Instagram</a>
                            </div>
                            <div class="d-inline">
                                <a><i class="fas fa-hand-holding-usd"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container card-person">
                <div class="row">
                    <div class="col-12 col-sm-12 text-center mt-5">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">INvestement</div>
                            <div class="card-body">
                                <h5 class="card-title">Send your coins to</h5>
                                <a href="#" class="card-text" onclick="Copiar(this)" onmouseover="" onmouseout="copyalert()">$lqajsfajsfjdnfasd5f46sdf325sd46f4ds324fdsfd5f64s6d84</a><a><i class="far fa-copy"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container container-person-two">
                <div class="row">
                    <div class="col-12 col-sm-12 text-center mt-5">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Your INvestement</div>
                            <div class="card-body">
                                <h5 class="card-title">The tokens that you have invested in us <br> will be shown after a period of three days</h5>
                                <div class="col-12 col-sm-12 text-center mt-3">
                                    <p class="tokens">XXX XXX</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <section>
            <div class="col-12 col-sm-12 fixed-bottom footer-person">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12  text-end  mt-3 mb-3">
                            <a href="php/cerrar_sesion.php"><button class="btn btn-info">Close session</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    </div>

    <script src="js/copy.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>