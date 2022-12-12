<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Sistematic Work System</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>
  <?php
  if (isset($_POST["nombres"], $_POST["correo"], $_POST["cargo"], $_POST["documento"], $_POST["usuario"], $_POST["contraseña"])) {
    $nombre = $_POST["nombres"];
    $correo = $_POST["correo"];
    $cargo = $_POST["cargo"];
    $documento = $_POST["documento"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    include "../Includes/conexion.php";

    $sql = "INSERT INTO `tbl_usuario_int`(`Nombre_usuario`, `correo`, `cargo`, `Documento`, `usuario`,`Contrasena`) 
    VALUES ('$nombre','$correo','$cargo','$documento', '$usuario','$contraseña')";

    if (mysqli_query($conn, $sql)) {
      die("corregir");
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
  ?>
  <?php

  include "../Includes/Validar_sesion.php";
  include "../Includes/Admin/header.php";

  ?>


  <div class="container-fluid">
    <div class="row">
      <?php
      $vista = 2;
      include "../Includes/Admin/nav.php";

      ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Usuarios</h1>

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Registrar Usuario
          </button>

        </div>

        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Cargo</th>
                <th scope="col">ID</th>
              </tr>
            </thead>
            <tbody>

              <?php

              include "../Includes/conexion.php";
              $sql = "SELECT * FROM tbl_usuario_int";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
              ?>

                  <tr>
                    <td><?php echo $row['Nombre_usuario'] ?> </td>
                    <td><?php echo $row['correo'] ?> </td>
                    <td><?php echo $row['cargo'] ?> </td>
                    <td><?php echo $row['Documento'] ?> </td>
                  </tr>
              <?php

                }
              } else {
                echo "0 results";
              }

              mysqli_close($conn);
              ?>
              <tr>
                <td>001</td>
                <td>Tablas de Retencion Documental</td>
                <td>data</td>
                <td>placeholder</td>
              </tr>

            </tbody>
          </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="#" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Registrar Usuarios</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nombres Completos</span>
                    <input name="nombres" type="text" class="form-control" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">Correo</span>
                    <input name="correo" type="text" class="form-control" placeholder="Correo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Cargo</span>
                    <input name="cargo" type="text" placeholder="Cargo" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Documento</span>
                    <input name="documento" type="text" placeholder="Documento" class="form-control" aria-label="Amount (to the nearest dollar)">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Usuario</span>
                    <input name="usuario" type="text" class="form-control" placeholder="Usuario" aria-label="Usuario">
                    <span class="input-group-text">Contraseña</span>
                    <input name="contraseña" type="password" class="form-control" placeholder="Contraseña" aria-label="Server">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>