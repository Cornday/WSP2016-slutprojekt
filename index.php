<?php

    require("header.php");

if (isset($_GET["page"])&&!empty($_GET["page"])){
    $page = $_GET["page"];
    if (file_exists("files/$page.php")){
        require ("files/{$page}.php");
    }
    else{
        header("Location: index.php");
    }
}
else {require("files/Home.php");}

    require("footer.php");