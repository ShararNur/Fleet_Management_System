<?php
    session_start();
    header('location:http://localhost/fleet_management_system/login.html');

    $con = mysqli_connect("localhost","root","");

    mysqli_select_db($con, 'fms');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from login where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Exists";
    }
    else{
        $reg = "insert into login(name , password) values ('$name' , '$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successfull";
    }

?>