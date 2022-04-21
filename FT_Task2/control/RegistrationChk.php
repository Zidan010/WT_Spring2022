<?php
include ("../model/model.php");
$error="";
$fname="";
$lname="";
$age="";
$salary="";
$address="";



if(isset($_POST["Submit"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $pass=$_POST["pass"];
    if(empty($fname) || empty($lname) || empty($age) || empty($email) || empty($address) || empty($pass))
{
    echo "Please insert all data correctly";
}
    $dbobj = new db();
    $conobj=$dbobj->opencon();
    $dbobj->insertRow($fname,$lname,$age,$email,$address,$pass,"person",$conobj);
    $dbobj ->closecon($conobj);
        
    

}

?>