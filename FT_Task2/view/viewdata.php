<?php
    include("../control/ViewControlData.php");
?>
<html>
<!DOCTYPE html>
<head>
</head>

<body>
    
    <form action="" method="post">
        
        
        
        <br/>
        <button type="submit" name="seedata">Registered User</button>
    </form>
    <br />
    
    <form action="" method="post">
        <input type="text" name="searchtext" id="searchtextid">
        <button type="submit" name="search">Search</button>
    </form>

    <form action="" method="post">
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <input type="text" name="age" value="<?php echo $age;?>">
        <input type="text" name="email" value="<?php echo $email;?>">
        <input type="text" name="address" value="<?php echo $address;?>">
        <input type="text" name="pass" value="<?php echo $pass;?>">

        <input type="submit" name="update" value="Update Info">
        </form>

</body>

</html>