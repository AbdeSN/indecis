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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/font-awesome/css/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">
    <link href="../assets/css/mdb.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="card-sm">
        <img src="../assets/images/gfi-logo.png">
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
            <!-- <li class="nav-item">
              <form class="form-inline my-2 my-lg-0 mr-lg-2">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Search...">
                  <span class="input-group-btn">
                    <button class="btn btn-warning" type="button">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>
              </form>
            </li>-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="table">
                <a class="nav-link" href="tickets_list.php">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tickets list</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="list">
                <a class="nav-link" href="ticket.phphp">
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
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-fit" datatable-show-refresh="true" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Identifiant</th>
                            <th>Statut</th>
                            <th>Titre</th>
                            <th>Date</th>
                            <th>Client</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Open</td>
                            <td>System Infra Architecture</td>
                            <td>20/11/2017</td>
                            <td>Orange</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Open</td>
                            <td>Consulting</td>
                            <td>20/12/2017</td>
                            <td>EDF</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Win</td>
                            <td>App Solution</td>
                            <td>01/02/2017</td>
                            <td>BNP</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lost</td>
                            <td>Consulting</td>
                            <td>01/02/2017</td>
                            <td>BNP</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lost</td>
                            <td>Consulting</td>
                            <td>01/02/2017</td>
                            <td>BNP</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<!--            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
                    <a class="btn btn-warning" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin.min.js"></script>
    <script src=../assets/"js/mdb.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../assets/js/sb-admin-datatables.min.js"></script>
    <script src="../assets/js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>