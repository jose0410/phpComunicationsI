<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>books</title>

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
                    <li><a href="authors.php">Authors</a></li>
                    <li class="active"><a href="books.php">Books</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    </div>

</header>

<body>
  <div class = "add_book_form_div">
      <form action="insertSuccess.php" method="post">

          <div class="form-group">
              <label >Id Author</label>
              <input type="number" class="form-control"  name="authorId" placeholder="Type the id Author">
          </div>
          <div class="form-group">
              <label >Name Book</label>
              <input type="text" class="form-control"  name="authorName" placeholder="Type the name">
          </div>
         
          <div class="form-group">
              <label >Description</label>
              <input type="text" class="form-control"  name="authorBooks" placeholder="Enter a little review">
          </div>
          <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Gender
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Policial</a></li>
                <li><a href="#">Romantica</a></li>
                <li><a href="#">Aventura</a></li>
                <li><a href="#">Terror</a></li>
                <li><a href="#">Ficcion</a></li>
                <li><a href="#">Investigacion</a></li>
                <li><a href="#">Biografica</a></li>
                <li><a href="#">Infantil</a></li>
                <li><a href="#">Erotica</a></li>
                <li><a href="#">Enciclopedia</a></li>
                <li><a href="#">Politica</a></li>
                <li><a href="#">Economia</a></li>
                <li><a href="#">Sociedad</a></li>
                <li><a href="#">Deportes</a></li>
              </ul>
          </div>

          <button type="submit" class="btn btn-default add_book_button" value="addBook">Add Book</button>
      </form>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
</body>
</html>
