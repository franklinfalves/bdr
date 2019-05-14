<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
<div class="container">
  <h1>Add a New task</h1>
  <form action="http://localhost/bdr/questao4/index.php/action/post" name="form" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
    </div>
    <div class="form-group">
      <label for="desc">Description:</label>
      <input type="description" class="form-control" id="description" placeholder="Enter Description" name="description">
    </div>
    <div class="form-group">
      <label for="disabledSelect" class="col-sm-2 control-label"></label>
        <select id="priority" name="priority" class="form-control">
          <option>Choose a Priority</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
