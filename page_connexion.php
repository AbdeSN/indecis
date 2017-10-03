<?php?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portail d'authentification</title>

    <!-- Bootstrap -->
    <link href="assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- fontAwesome -->
    <link href="assests/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php include 'include/header.php';
echo $param['message']?>

<div class="container bandeau-connexion">

    <h1 class="bandeau-connexion-h1">Connexion</h1>

    <div class="formulaire">
        <form action="" method="post">
            <p class="form"><input type="text" name="login" placeholder="Login" ></p><br>
            <p class="form"><input type="password" name="mdp" placeholder="Mot de passe"></p><br>
            <input class="btn btn-warning col-md-12" type="submit" name="connexion" value="Connexion"/>
        </form>


    </div>
</div>

<?php include("include/footer.php");?>
</body>
</html>