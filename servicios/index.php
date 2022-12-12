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

  $vista = 3;

  include "../Includes/Validar_sesion.php";
  include "../Includes/Admin/header.php";

  ?>


  <div class="container-fluid">
    <div class="row">
      <?php

      include "../Includes/Admin/nav.php";

      ?>


      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Servicios</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Cargar</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Fecha
            </button>
          </div>
        </div>

        <h2>Gestion Documental</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col">Versión</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>001</td>
                <td>Tablas de Retencion Documental</td>
                <td>data</td>
                <td>placeholder</td>
              </tr>
              <tr>
                <td>002</td>
                <td>Tablas de Valoración Documental</td>
                <td>irrelevant</td>
                <td>visual</td>
              </tr>
              <tr>
                <td>003</td>
                <td>Programa de Gestión Documental</td>
                <td>rich</td>
                <td>dashboard</td>
              </tr>
              <tr>
                <td>004</td>
                <td>Cuadros de Clasificación Documental</td>
                <td>placeholder</td>
                <td>illustrative</td>
              </tr>
              <tr>
                <td>005</td>
                <td>FUID</td>
                <td>random</td>
                <td>layout</td>
              </tr>
            </tbody>
          </table>
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