<!DOCTYPE html>
<html lang="">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.css">

    <meta charset="UTF-8">
    <title>FiGy Book</title>

</head>
<body>



<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#">Brand</a>-->

            <a href="index.php"><img src="bilder/figy%20logo%20vit.png"
                                     alt="Figy logo" style="background-color: #222222;"></a>
        </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"><b>Home</b><span class="sr-only">(current)</span></a></li>
                <li><a href="index.php?page=mywall">My Wall</a></li>
                <li><a href="index.php?page=folks">People on FiGy Book</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
<?php
if(isset($_SESSION['email'])&&isset($_SESSION["username"])) {
    $user = $_SESSION["username"];

    echo"
    <li><a href = 'Logout.php' >Logout $user</a></li>";
}
else
{
    echo"
    <li><a href = 'index.php?page=login'> log in </a></li>
    <li><a href = 'index.php?page=signup'> Sign up </a></li>";
}
?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">