<?php

include ("../model/model.php");


if(isset($_POST["seedata"]))
{
        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $fetchedData = $dbobj->fetchRow($conobj,"person");

        if( $fetchedData !==false && $fetchedData->num_rows>0)
        {
            echo("<h2><u>Registered Users:</u></h2>");
            echo("<table border='1'>");
            echo("<tr>
            <th>fname</th>
            <th>lname</th>
            <th>age</th>
            <th>email</th>
            <th>address</th>
            <th>pass</th>

            </tr>");
            while($row=$fetchedData->fetch_assoc())
            {
               echo("<tr>");
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo "<td>".$row["pass"]."</td>";

                echo("</tr>");
            } 
            echo("</table>");
        }
else{
    echo("<br/> No user data found. </br>");
}

        $dbobj->closecon($conobj);
}

$search_row = "";
//search
if(isset($_POST["search"]))
{
            $dbobj = new db();
        $conobj = $dbobj->opencon();
        $searchData = $dbobj->searchRow("person",$conobj,$_POST["searchtext"]);
        
if($searchData->num_rows>0)
{   
    echo "<form>";
    echo "<form action='' method='post'>";            
    while($row=$searchData->fetch_assoc())
    {
        $fname=$row["fname"];
        $lname=$row["lname"];
        $age=$row["age"];
        $email=$row["email"];
        $address=$row["address"];
        $pass=$row["pass"];
    }
   
    echo "</form>";
}
else{
    echo("<br/> No such user found. </br>");
}

        $dbobj->closecon($conobj);
}




// save change

if(isset($_POST["update"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $address=$_POST["address"];
   $pass=$_POST["pass"];

        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $dbobj->updateRow($fname, $lname, $age, $email, $address,$pass, "person", $conobj);

        $dbobj->closecon($conobj);
}

?>