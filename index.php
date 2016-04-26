<?php
    session_start();
    //anropar header.php
    require("header.php");

    // kollar om Page finns
if (isset($_GET["page"])&&!empty($_GET["page"])){
    $page = $_GET["page"];

    //kollar om variablen som fanns i Page är en fil som finns
    if (file_exists("files/$page.php")){
        // anropa filen om den namnet matchar en fil som finns i mappen /files.
        require ("files/{$page}.php");
    }
    else{
        //om inte filnamnet matchar något skickas användaren till Index utan något Page
        header("Location: index.php");
    }
}
    //om Page inte finns anropas Home.php
else {require("files/Home.php");}
    // Footer.php anropas
    require("footer.php");