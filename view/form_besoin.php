<?php

function insertion()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indecis";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  //$datedujour = $_POST['datedujour'];
  $nomentreprise = $_POST['nomentreprise'];
  $nomclient = $_POST['nomclient'];
  $titreticket = $_POST['titreticket'];
  $descriptionticket = $_POST['descriptionticket'];
  $factor1 = $_POST['factor1'];
  $factor2 = $_POST['factor2'];
  $factor3 = $_POST['factor3'];
  $montant = $_POST['montant'];
  //$statut = $_POST['statut'];
  $streetnb = $_POST['streetnb'];
  $street = $_POST['street'];
  $postalcode = $_POST['postalcode'];
  $city = $_POST['city'];
  $datedebut = $_POST['datedebut'];
  $datefin = $_POST['datefin'];
  $nbjoursemaine = $_POST['nbjoursemaine'];
  $dateauplustard = $_POST['dateauplustard'];
  $consultantname1 = $_POST['consultantname1'];
  $consultantname2 = $_POST['consultantname2'];
  $consultantname3 = $_POST['consultantname3'];
  $consultantname4 = $_POST['consultantname4'];
  $consultantname5 = $_POST['consultantname5'];

  $sql = "INSERT INTO besoins (datedujour, nomentreprise, nomclient, idC, titreticket, descriptionticket, factor1, factor2, factor3,
    montant, statut, streetnb, street, postalcode, city, datedebut, datefin, nbjoursemaine, dateauplustard, consultantname1, consultantname2,
    consultantname3, consultantname4, consultantname5)
  VALUES ('', '$nomentreprise', '$nomclient', '1', '$titreticket', '$descriptionticket', '$factor1', '$factor2', '$factor3',
    '$montant', '', '$streetnb', '$street', '$postalcode', '$city', '$datedebut', '$datefin', '$nbjoursemaine', '$dateauplustard', '$consultantname1',
    '$consultantname2', '$consultantname3', '$consultantname4', '$consultantname5')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}


if(isset($_POST['submit1']))
{
   insertion();
}

 ?>


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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/datepicker3.css" rel="stylesheet" type="text/css">

    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="assets/css/mdb.css" rel="stylesheet" type="text/css">

    <script>
        $(function(){
            $('.datepicker').datepicker();
        });
    </script>
    <script>
      	$('.input-daterange input').each(function() {
      	$('.datepicker').datepicker();
      	});
    </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="card-sm">
        <img src="assets/images/gfi-logo.png">
    </div>

        <div style="display: inline-block">
            <p style="font-size: small; float: left; color: white;">Name of commercial</p>

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
                    <span class="nav-link-text">Ticket list</span>
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
        <ol class="breadcrumb">
                <li class="breadcrumb-item active">Create ticket</li>
        </ol>
<form method="post" action="">
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-list-alt"></i> Fiches Besoins</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3"> <div class="md-form form-sm">
          <input name="datedujour" placeholder="Date" type="text" id="nowdate" class="form-control" disabled>
        </div></div>
        <div class="col-md-3"> <div class="md-form form-sm">
          <input name="nomentreprise" placeholder="Client" type="text" id="Client" class="form-control">
        </div> </div>
        <div class="col-md-3"><div class="md-form form-sm">
          <input name="nomclient" placeholder="Name" type="text" id="Name" class="form-control">
        </div> </div>
        <div class="col-md-3"><div class="md-form form-sm">
          <input name="titreticket" placeholder="Title" type="text" id="Title" class="form-control">
        </div> </div>
      </div>
      <div class="row">
        <div class="col md">
          <div class="md-form form-sm">
            <textarea name="descriptionticket" type="text" id="fulldescription" class="md-textarea" rows="" placeholder="Full description"></textarea>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-6">
            <div class="md-form form-sm">
            <div class="form-group">
                <textarea name="factor1" placeholder="factor1"></textarea>
                <textarea name="factor2" placeholder="factor2"></textarea>
                <textarea name="factor3" placeholder="factor3"></textarea>
            </div>
          </div>
          </div>
          <div class="col-md-3"> <div class="md-form form-sm">
        <i class="fa fa-eur"></i>
          <input name="montant" placeholder="Rate" type="number" min="0.00" step="0.01" id="Rate" class="form-control">
        </div>
          </div>
          <div class="col-md-3"><label for="form5">Status :</label>
            <div class="md-form form-sm">
            <div class="form-group">
              <select class="form-control form-control-lg">
                <option name="statut">Open</option>
                <option name="statut">Win</option>
                <option name="statut">Lost</option>
              </select>
            </div>
          </div>

          </div>
        </div>
      <div class="row">
        <div class="col-md-3">
        <i class="fa fa-map-marker"></i> <span>Location</span><div class="md-form form-sm">
          <input name="streetnb" placeholder="Number" type="number" id="Location" class="form-control">
          <input name="street" placeholder="Street" type="text" id="Location" class="form-control">
          <input name="postalcode" placeholder="Postal Code" type="number" id="Location" class="form-control">
          <input name="city" placeholder="City" type="text" id="Location" class="form-control">
        </div></div>
        <div class="col-md-3">
          <div class="form-inline">
            <div class="md-form form-sm">
                <div class="input-group input-daterange">
                <input name="datedebut" type="text" class="form-control datepicker" value="" placeholder="date début">
                <div class="input-group-addon"><span>to</span></div>
                <input name="datefin" type="text" class="form-control datepicker" value="" placeholder="date fin">
                </div>
            </div>
            <div class="md-form form-sm">
              <input name="nbjoursemaine" placeholder="Days/Week" type="number" min="0" step="1" id="Duration" class="form-control">
            </div>
          </div>
            <div class="from-group date">
              <input class="datepicker" type="text" name="dateauplustard" placeholder="Start at the latest">
            </div>
        </div>
        <div class="col-md-3">
        <i class="fa fa-user"></i> <span>Names</span>
          <div class="md-form form-sm">
          <input name ="consultantname1" placeholder="Consultant Name" type="text" id="consultantname1" class="form-control">
          <input name ="consultantname2" placeholder="Consultant Name" type="text" id="consultantname2" class="form-control">
          <input name ="consultantname3" placeholder="Consultant Name" type="text" id="consultantname3" class="form-control">
          <input name ="consultantname4" placeholder="Consultant Name" type="text" id="consultantname4" class="form-control">
          <input name ="consultantname5" placeholder="Consultant Name" type="text" id="consultantname5" class="form-control">
        </div> </div>
        <div class="col-md-3">
        <form action="#">
            <div class="file-field">
              <div class="btn btn-primary btn-sm">
                <input type="file" multiple></input>
              </div>
            </div>
          </form>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md col-lg">
           </div>
      </div>
    <div class="row">
      <div class="col-md">
          <center><input class="btn btn-primary btn-lg" value="Save & Share" type="submit" name="submit1"></center>
        </input>
      </div>
    </div>
  </div>
</form>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
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
                    <a class="btn btn-warning" href="Index">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        }

        if(mm<10) {
            mm = '0'+mm
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById('nowdate').value = today;
    </script>

    <!-- Bootstrap core JavaScript-->
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
    <script src="assets/js/mdb.js"></script>
    <!-- Custom scripts for this page-->

    <script src="assets/js/sb-admin-datatables.min.js"></script>
    <script src="assets/js/sb-admin-charts.min.js"></script>
</div>
</body>
</html>
