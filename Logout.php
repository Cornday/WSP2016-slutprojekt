<?php
/**
 * Created by PhpStorm.
 * User: jakob
 * Date: 2016-04-29
 * Time: 12:46
 */
session_start();

session_destroy();
session_unset();

header("Location: index.php");
?>