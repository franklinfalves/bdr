<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 200px; height: 200px; padding: 0.5em; }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#draggable" ).draggable();
    } );
  </script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Franklin Alves</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/bdr/questao4/index.php/action/read">View Task List</a></li>
      <li><a href="http://localhost/bdr/questao4/index.php/action/cad">Add New Task</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <h1>Task List</h1>
  <div class="row">
      <div class="col-sm-2" style="background-color:#c3c3c3;">Title</div>
      <div class="col-sm-2" style="background-color:#c3c3c3;">Description</div>
      <div class="col-sm-2" style="background-color:#c3c3c3;">Priority</div>
      <div class="col-sm-1" style="background-color:#c3c3c3">action</div>
      <div class="col-sm-1" style="background-color:#c3c3c3">action</div>
    </div>
  <?php foreach ($wData as $key => $value) {?>
    <div class="row">
      <div class="col-sm-2" style="background-color:lavender;"><?php echo $value->title; ?></div>
      <div class="col-sm-2" style="background-color:lavenderblush;"><?php echo $value->description;?></div>
      <div class="col-sm-2" style="background-color:lavender;"><?php echo $value->priority; ?></div>
      <div class="col-sm-1" style="background-color:#c3c3c3"><a href="http://localhost/bdr/questao4/index.php/action/get/<?php echo $value->id; ?>">Update</a></div>
      <div class="col-sm-1" style="background-color:#c3c3c3"><a href="http://localhost/bdr/questao4/index.php/action/delete/<?php echo $value->id; ?>">Delete</a></div>
    </div>
  <?php } ?>
</div>
<div id="draggable" class="ui-widget-content">
  <p>Notes <br>
  (Arraste para o Local de preferência)</p>
  <textarea></textarea>
</div>
</body>
</html>