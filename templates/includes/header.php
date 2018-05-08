<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jumbotron Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.9.1/basic/ckeditor.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand brand" href="index.php">TravelBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION["is_looged_in"])) : ?>
            <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
            <li class="nav-item">
              <form method='post' action='logout.php'>
                <input type='submit' class="btn btn-link" name="logout" value='Logout'>
              </form>
            </li>
          <?php else : ?>
            <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php displayMessage() ?>
    </div>
    
