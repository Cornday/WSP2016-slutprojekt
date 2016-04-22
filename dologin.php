<?php
/**
 * Created by PhpStorm.
 * User: jakob
 * Date: 2016-04-26
 * Time: 12:44
 */
    require_once("files/details.php");
if(isset($_POST["InputEmail1"])&&isset($_POST["InputPassword"])) {

    $inputemail = $_POST["InputEmail1"];
    $inputpassword = $_POST["InputPassword"];

    $dbh=new PDO($dsn,$username,$password);

