<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>authors</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/library.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Library</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li ><a href="authors.php">Authors</a></li>
                    <li><a href="books.php">Books</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    </div>

</header>
  <body>
<?php

 $conexion=mysqli_connect("localhost","root","root","library") or
die("problems with the connexion");



mysqli_query($conexion,"delete from book where author = $_REQUEST[id_author_delete]")
or die("problems".mysqli_error($conexion)); 
mysqli_query($conexion,"delete from author where id =  $_REQUEST[id_author_delete]")
or die("problems".mysqli_error($conexion)); 

mysqli_close($conexion);

?>

<div class = "img-insert-success-div">
<img   id = "img-insert-success" src="../img/check.jpeg" alt="check" width="10%" height="70% " class="img-round" />

</div>
<div class = "success-label">
<h2>Author deleted </h2>
</div>




    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>