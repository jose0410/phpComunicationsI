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
                    <li class="active"><a href="authors.php">Authors</a></li>
                    <li><a href="books.php">Books</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    </div>

</header>
<body>

<div class = "add_author_form_div">
    <form>
        <div class="form-group">
            <label for="authorName">Name</label>
            <input type="text" class="form-control" id="authorName" placeholder="Type the name">
        </div>
        <div class="form-group">
            <label for="authorDate">Birth Date</label>
            <input type="date" class="form-control" id="authorDate" placeholder="Type the birth day">
        </div>
        <div class="form-group">
            <label for="authorBooksWritten">Books Written</label>
            <input type="number" class="form-control" id="authorBooksWritten" placeholder="Enter the number of books the author have written">
        </div>
        <div class="form-group">
            <label for="authorAge">Age</label>
            <input type="number" class="form-control" id="authorAge" placeholder="Enter the age">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>