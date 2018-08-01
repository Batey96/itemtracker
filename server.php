<?php
/**
 * Created by PhpStorm.
 * User: Bate Agnes
 * Date: 7/19/2018
 * Time: 12:45 PM
 */
session_start();
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$_SESSION['uid'] = $uid;
header("Location:report.php");
require_once("db.php");
if(isset($_POST['sign_submit']))
{
    $fname = mysqli_real_escape_string($con,$_POST['sign_fname']);
    $lname = mysqli_real_escape_string($con,$_POST['sign_lname']);
    $agency_name = mysqli_real_escape_string($con,$_POST['sign_agency_name']);
    $tel = mysqli_real_escape_string($con,$_POST['sign_tel']);
    $town = mysqli_real_escape_string($con,$_POST['sign_reg']);
    $sign_pass1= mysqli_real_escape_string($con,$_POST['sign_pass1']);
    $sign_pass2 = mysqli_real_escape_string($con,$_POST['sign_pass2']);
    if($sign_pass1!==$sign_pass2){
        echo"<script>alert('passwords do not match make sure you entered same passwords')</script>";
    }

$sub_query_check = "Select agency_name from agent_pending WHERE agency_name=$agency_name";
$sub_query_insert = "INSERT INTO agent_pending(Fname,Lname,Telephone,agency_name,region) VALUES ('$fname','$lname','$tel','$agency_name','$town')";
$result = mysqli_real_query($con,$sub_query_check);
 if($result)   {
     echo"An  Agent already exists with such name";
 }
    else{
        $result1=mysqli_real_query($con,$sub_query_insert);
        if($result1){
            echo"<script>alert('Thanks we will get back to you in 5 working days..')</script>";
        }
    }




}