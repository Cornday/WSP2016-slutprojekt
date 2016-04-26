<?php
session_start();

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

    $dbh=new PDO($dsn,$username,$password);}

    $result = $dbh->prepare("SELECT * FROM users WHERE email = :mail AND password = :pass");
    $result->bindParam(':mail', $inputemail);
    $result->bindParam(':pass', $inputpassword);
    $result->execute();

if(!$result)
{
    print_r($dbh->errorInfo());
}
else
{
    //OM vi får ett resultat kollar vi om användaren finns
    if ($result->rowCount()==0)
    {
        //användaren finns inte
        echo"User does not exist";
        $_SESSION["message"]="The Email or password is incorrect";
        header("Location: index.php?page=login");
    }
    else
    {
        //användaren finns

        $userinfo=$result->fetch(PDO::FETCH_ASSOC);

        $usernombre=$userinfo["username"];

        $_SESSION["email"]=$inputemail;
        $_SESSION["username"]=$usernombre;
        header("Location: index.php");
    }
}

