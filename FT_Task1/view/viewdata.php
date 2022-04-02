<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    
    <form action="" method="post">
        <?php
            include("../control/ViewControlData.php");
        ?>
        <br/>
        <button type="submit" name="seedata">User information</button>
    </form>
    <br />
    
    <form action="" method="post">
        <input type="text" name="searchtext" id="searchtextid">
        <button type="submit" name="search">Search for Update</button>
    </form>
</body>

</html>