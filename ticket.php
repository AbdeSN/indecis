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
    <link href="css/datepicker3.css" rel="stylesheet" type="text/css">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="view/css/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="view/css/mdb.css" rel="stylesheet" type="text/css">

    <script>
        $(function(){
            $('.datepicker').datepicker();
        });
    </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="card-sm">
        <center><img src="images\gfi-logo.png"></center>
    </div>
    <a class="navbar-brand" href="index.html" ></a>
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
                <a class="nav-link" href="index.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Clients</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="list">
                <a class="nav-link" href="blank.html">
                    <i class="fa fa-fw fa-list-alt"></i>
                    <span class="nav-link-text">Fiche besoins</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="send">
                <a class="nav-link" href="contact.html">
                    <i class="fa fa-fw fa-send"></i>
                    <span class="nav-link-text">Contact</span>
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
                <li class="breadcrumb-item active">Create ticket</li>
        </ol>
        <!-- /.container-fluid-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list-alt"></i> Form</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"> <div class="md-form form-sm">
                            <input placeholder="Date" type="text" id="Date" class="form-control" disabled>
                        </div></div>
                    <div class="col-md-3"> <div class="md-form form-sm">
                            <input placeholder="Client" type="text" id="Client" class="form-control">
                        </div> </div>
                    <div class="col-md-3"><div class="md-form form-sm">
                            <input placeholder="Name" type="text" id="Name" class="form-control">
                        </div> </div>
                    <div class="col-md-3"><div class="md-form form-sm">
                            <input placeholder="Title" type="text" id="Title" class="form-control">
                        </div> </div>
                </div>
                <div class="row">
                    <div class="col md">
                        <div class="md-form form-sm">
                            <textarea type="text" id="fulldescription" class="md-textarea"rows=""></textarea>
                            <label for="textarea-char-counter">Full description</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form form-sm">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Factor 1</option>
                                    <option>Factor 2</option>
                                    <option>Factor 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"> <div class="md-form form-sm">
                            <input placeholder="Duration(Days/Week/Month)" type="text" id="Duration" class="datepicker">
                        </div></div>
                    <div class="col-md-3">
                        <input class="datepicker" type="text" name="date" placeholder="Date">
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3"> <div class="md-form form-sm">
                            <i class="fa fa-map-marker "></i>
                            <input placeholder="Loaction" type="text" id="Location" class="form-control">
                        </div></div>
                    <div class="col-md-3"> <div class="md-form form-sm">
                            <i class="fa fa-eur"></i>
                            <input placeholder="Rate" type="text" id="Rate" class="form-control">
                        </div> </div>
                    <div class="col-md-3">
                        <i class="fa fa-user"></i>
                        <div class="md-form form-sm">
                            <input placeholder="Consultant Name" type="text" id="consultantname1" class="form-control">
                            <input placeholder="Consultant Name" type="text" id="consultantname2" class="form-control">
                            <input placeholder="Consultant Name" type="text" id="consultantname3" class="form-control">
                            <input placeholder="Consultant Name" type="text" id="consultantname4" class="form-control">
                            <input placeholder="Consultant Name" type="text" id="consultantname5" class="form-control">
                        </div> </div>
                    <div class="col-md-3">
                        <label for="form5">Status :</label>
                        <form class="form-inline">

                            <div class="form-group">
                                <input name="group1" type="radio" id="radio1" checked="checked">
                                <label for="radio11">Open</label>
                            </div>
                            <div class="form-group">
                                <input name="group1" type="radio" id="radio2">
                                <label for="radio21">Win</label>
                            </div>
                            <div class="form-group">
                                <input name="group1" type="radio" id="radio3">
                                <label for="radio31">Lost</label>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <form action="#">
                        <div class="file-field">
                            <div class="btn btn-primary btn-sm">
                                <input type="file" multiple></input>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Description files">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <center><div class="btn btn-primary btn-lg"><span>Save & Share</span></center>
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
                    <a class="btn btn-warning" href="login.html">Logout</a>
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

        today = dd + '/' + mm + '/' + yyyy;
        document.getElementById('Date').value = today;
    </script>

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
    <script src="view/js/sb-admin.min.js"></script>
    <script src="view/js/mdb.min.js"></script>
    <script src="view/js/mdb.js"></script>
    <!-- Custom scripts for this page-->
    <script src="view/js/sb-admin-datatables.min.js"></script>
    <script src=view/js/sb-admin-charts.min.js"></script>
</div>
</body>

</html>
