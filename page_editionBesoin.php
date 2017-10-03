<?php?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Créer un besoin</title>

        <!-- Bootstrap -->
        <link href="assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- fontAwesome -->
        <link href="assests/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!--CSS -->
        <link rel="stylesheet" href="assests/css/style.css">
    </head>
    <body>
<?php include 'include/header.php';
/*echo $param['message']*/?>

<?php?>

<form>

<div class="form-group">
  <input type="email" class="form-control" id="date" placeholder="Date">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="client" placeholder="Client">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="contactn" placeholder="Contact name">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="title" placeholder="Title">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="desc" placeholder="Full description">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="3key" placeholder="3 main key success factor">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="duration" placeholder="Duration (months)">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="start" placeholder="Start at the latest">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="location" placeholder="Location">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="rate" placeholder="Rate (€ HT)">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="descfile" placeholder="Description file">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="consultants" placeholder="Consultants name">
</div>
<div class="form-group">
  <input type="text" class="form-control" id="save" placeholder="Save & Share">
</div>
<button type="submit" class="btn btn2">Submit</button>

</form>

</body>

<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
<script src="./assets/bootstrap/js/jquery.min.js"></script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>

</html>
