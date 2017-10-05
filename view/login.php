<?php

$servername = 'localhost';
$username = 'root';
$dbname = 'indecis';
$password = '';
$message = '';

$bdd = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['log']))
{
    if(!(($_POST['mail']) && isset($_POST['password'])) =='')
    {
        $mail = addslashes(htmlspecialchars(htmlentities(trim($_POST['mail']))));

        var_dump($mail);
        $password = $_POST['password'];
        var_dump($password);
        if(preg_match("^[a-z0-9._-]+@+g+f+i+.+f+r^",$mail))
        {
            $req_mail = mysqli_query($bdd,"SELECT mail, password FROM users WHERE mail ='$mail'");
            $row = mysqli_fetch_row($req_mail);

            if($mail == $row[0])
            {
                if($password == $row[1])
                {
                    session_start();
                    $_SESSION['mail'] = $row['mail'];
                    header("Location: __. DIR ___ListBesoins");

                }
                else
                {
                    $message = "mot de passe faux !";
                }
            }
            else
            {
                $message = "mail faux!!!!";
            }
        }
        else
        {
            $message =  "mail externe";
        }
    }
    else
    {
        $message =  "Veuillez remplir tous les champs !";
    }
}
else
{

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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/font-awesome/css/mdb.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/mdb.css" rel="stylesheet">
</head>

<body class="bg-dark">
<br>
<center><img src="assets/images/big_logo.png" width="200" height="120"></center>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div style="height: 2rem" class="card-header"><?php echo $message; ?></div>
        <div class="card-body">
            <form method="post">
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" name="mail" id="defaultForm-email" class="form-control">
                    <label for="defaultForm-email">Your email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" name="password" id="defaultForm-pass" class="form-control">
                    <label for="defaultForm-pass">Your password</label>
                </div>
                <div class="form-group text-center">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember Password</label>
                    </div>
                </div>
                <div class="text-center">
                    <input class="btn btn-primary btn-block btn-lg" type="submit" name="log" value="Login">
                    <a class="btn btn-primary" href="FormBesoin">Form</a>-->
                    <a class="btn btn-primary" href="ListeBesoins">List</a>-->
                </div>
            </form>
            <br>
            <div class="text-center">
                <a class="d-block small" data-toggle="modal" data-target="#Modal">Forgot Password?</a>
            </div>
            <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Reset your password ?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Write your GFI email address, we will process your request.
                            <input type="email" id="resetPassword" placeholder="example@gfi.fr">
                        </div>


                        <div class="modal-footer">
                            <button class="btn btn-grey" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-warning" href="Index">
                                reset password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper-->
<!--<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>Copyright © 1D6 Team</small>
        </div>
    </div>
</footer>-->
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
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
</body>

</html>
