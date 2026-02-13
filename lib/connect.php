-- Active: 1756274012092@@127.0.0.1@3306@cars
<?php
    $con=mysqli_connect('localhost','root','','cars');
    if(mysqli_connect_error())
    {
        die('ERROR:Unable to Connect:' .mysqli_connect_error());
        echo "<script>alert('Hi!')</script>";
    }
?>