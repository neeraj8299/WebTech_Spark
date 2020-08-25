<?php

    $con=mysqli_connect("localhost","root","","webtech_spark") or die(mysqli_error($con));
    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $message=$_POST['msg'];
    $query="INSERT INTO `contact us`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$email','$name','$phone','$message')";
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    echo "Submitted Successfully";
?>