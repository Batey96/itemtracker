<?php
/**
 * Created by PhpStorm.
 * User: Bate Agnes
 * Date: 7/21/2018
 * Time: 8:06 PM
 */
session_start();
if(isset($_SESSION['uid'])){
    session_destroy();
    header("Location:index.php");
}
else{
    header("Location:index.php");
}