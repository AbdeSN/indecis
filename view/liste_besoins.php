<?php
session_start();
/* if(isset($_POST['out']))
    {
        // Suppression des variables de session et de la session
        session_destroy();

    // Suppression des cookies de connexion automatique
//        setcookie('login', '');
//        setcookie('pass_hache', '');

        header("Location: Index");
    }
    else
    {

    }
*/?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GFI App</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/mdb.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="card-sm">
        <img src="assets/images/gfi-logo.png">
    </div>
    <div style="display: inline-block">
        <p style="font-size: small; float: left; color: white;">
            <?php
                    var_dump($_SESSION['mail']);
            ?>
        </p>

        <p style="font-size: x-small; float: left; color: #f5b01f; margin-left: 5px;">(Connecté)</p>
    </div>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="table">
                <a class="nav-link" href="ListeBesoins">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tickets list</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="list">
                <a class="nav-link" href="FormBesoin">
                    <i class="fa fa-fw fa-list-alt"></i>
                    <span class="nav-link-text">Create ticket</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>
                    <span class="nav-link-text">Logout</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Tickets list</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div  style="height: 1rem" class="card-header"></div>
            <a style="text-align: center;" href="formBesoin">
                <button style="text-align: center;" class="btn btn-warning btn-sm">Create a ticket</button>
            </a>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-fit" datatable-show-refresh="true" id="dataTable" width="100%" cellspacing="0">
                      <?php

                      $servername = 'localhost';
                      $username = 'root';
                      $dbname = 'indecis';
                      $password = '';

                      $bdd = new mysqli($servername, $username, $password, $dbname);

                      $result = mysqli_query($bdd,"SELECT * FROM besoins");

                      echo "<thead>
                      <tr>
                      <th class='text-center'>ID</th>
                      <th class='text-center'>State</th>
                      <th class='text-center'>Title</th>
                      <th class='text-center'>Date</th>
                      <th class='text-center'>Costumer</th>
                      </tr>
                      </thead>
                      </tbody>";

                      while($row = mysqli_fetch_array($result))
                      {
                      echo "<tr>";
                      echo "<td class='text-center'>" . $row['idB'] . "</td>";
                      echo "<td class='text-center'>" . $row['statut'] . "</td>";
                      echo "<td class='text-center'>" . $row['titreticket'] . "</td>";
                      echo "<td class='text-center'>" . $row['datedujour'] . "</td>";
                      echo "<td class='text-center'>" . $row['nomentreprise'] . "</td>";
                      echo "</tr>";
                      }
                      echo "</tbody>
                      </table>";
                      mysqli_close($bdd);
                      ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <form method="post  ">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-grey" type="button" data-dismiss="modal">Cancel</button>
                        <input class="btn btn-warning" type="submit" name="out" value="Logout">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin.min.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="assets/js/sb-admin-datatables.min.js"></script>
    <script src="assets/js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>
