<?php

class db{

function opencon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";


    $conn = new mysqli($servername,$username,$password,$dbname);
 
 if($conn->connect_error)
 {
 echo "couldn't connect".$conn->connect_error;
 }
 return $conn;

}

function insertRow($fname,$lname,$age,$email,$address,$pass,$tablename,$conn)
{
    
    $sql="INSERT INTO $tablename  (fname, lname, age, email, address,pass) values ('$fname', '$lname', $age, '$email', '$address','$pass')";

    if($conn->query($sql)===TRUE)
    {
        header("location: viewdata.php");
    }
    else
    {
        echo "couldn't insert data".$conn->error;
    }
}

function fetchRow($conn,$tablename)
{    
    $sqlstr="SELECT * FROM $tablename ";
    $results=$conn->query($sqlstr);
    return $results;
    
}

function searchRow($tablename,$conn,$fname)
{
    $sql="SELECT * FROM $tablename WHERE fname='$fname'";
     $result=$conn->query($sql);
     return $result;
}
function updateRow($fname,$lname,$age,$email,$address,$pass,$tablename,$conn){
    $sql="UPDATE $tablename SET fname='$fname',lname='$lname',age=$age,email='$email', address='$address',pass='$pass' WHERE fname='$fname'";
    
if($conn->query($sql)===TRUE)
{
    echo "data updated";
}
else
{
    echo "couldn't update data".$conn->error;
}    
}

function closecon($conn)
{
    $conn->close();
}

}

?>