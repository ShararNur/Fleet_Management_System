<?php
    session_start();
    

    $con = mysqli_connect("localhost","root","");

    mysqli_select_db($con, 'fms');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from login where name = '$name' && password = '$pass'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:http://localhost/fleet_management_system/dashboard.php');
    }
    else{
        header('location:http://localhost/fleet_management_system/login.html');
    }

?>

    
