<?php
session_start();
if(session_destroy())
header("location: ../View/Transporter_Login.php");
?>