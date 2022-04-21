<?php

include ("../control/RegistrationChk.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="../JS/RJS.js"></script>

</head>
<body>
<form  action="" method="POST"  onsubmit="return formcheck()">
<p id="message"></p>
    <table>
        <tr>Registration Form</tr>
        <tr><td>First name: <input type="text" name="fname" id="fname"></td></tr>
        <tr><td>Last name: <input type="text" name="lname" id="lname"></td></tr>
        <tr><td>Age: <input type="number" name="age" id="age" ></td></tr>
        <tr><td>Email: <input type="text" name="email" id="email"></td></tr>
        <tr><td>Address: <input type="text" name="address" id="address"></td></tr>
        <tr><td>Password: <input type="password" name="pass" id="pass"></td></tr>

        <tr>
            <td><button name="Submit" type="submit">Submit</button></td>
            <td><button type="reset">Reset</button></td>
            </tr>
    </table>
</form>
</body>
</html>