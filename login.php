<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Systematic Documentary Work</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cleaning Company Website Template" name="keywords">
    <meta content="Cleaning Company Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    if (isset($_POST["usuario"]) and isset($_POST["contraseña"])) {
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "system_work_bd";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM tbl_usuario_int where Nombre_usuario = '$usuario' and Contrasena = '$contraseña'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["activo"] = true;
            header("location:dashboard/index.php");
        }

        mysqli_close($conn);
    }
    ?>
    <div class="wrapper">
        <!-- Header Start -->
        <div class="header home">
            <div class="container-fluid">
                <div class="header-top row align-items-center">
                    <div class="col-lg-5">
                        <div class="brand">
                            <a href="index.php" style="font-size:30px !important">
                                Systematic Documentary Work
                                <!-- <img src="img/logo.png" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="tel:+057 345 67890"><i class="fa fa-phone-alt"></i>+057 345 67890</a>
                            </div>
                            <div class="topbar-col">
                                <a href="mailto:info@swdoc.com"><i class="fa fa-envelope"></i>info@swdoc.com</a>
                            </div>
                            <div class="topbar-col">
                                <div class="topbar-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero row align-items-center">
                    <div class="col-md-7">
                        <h2>Sistema de Gestión Documental</h2>
                        <p>Nuestro sistema estará enfocado en la automatización de los procesos de la documentación
                            electrónica en los Sistemas de Gestión ISO, BMP, HACCP, BASC</p>
                    </div>
                    <div class="col-md-5">
                        <div class="form">
                            <h3>Inicio de Sesión</h3>
                            <form action="#" method="post">
                                <input class="form-control" type="text" placeholder="Usuario" name="usuario">
                                <input class="form-control" type="password" placeholder="Contraseña" name="contraseña">
                                <div class="control-group">
                                </div>
                                <button class="btn btn-block">Ingresar</button>
                                <a class="btn btn-block" href="Registro Usuario/index.php">Registrar Clientes</a>
                                <!-- <button class="btn btn-block">Registrarse</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>