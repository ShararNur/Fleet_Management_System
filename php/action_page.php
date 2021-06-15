<?php
    $Id = $_POST['ID'];
    $Brand = $_POST['Brand'];
    $Licence = $_POST['Licence'];
    $Color = $_POST['Color'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    if (!empty($ID) || !empty($Brand) || !empty($Licence) || !empty($Color) || !empty($Name) || !empty($Email) || !empty($Phone)) {
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "mechanic_koi";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT Email From vehicle Where Email = ? Limit 1";
         $INSERT = "INSERT Into vehicle (ID, Brand, Licence, Color, Name, Email, Phone) values(?, ?, ?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $Email);
         $stmt->execute();
         $stmt->bind_result($Email);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssii", $ID, $Brand, $Licence, $Color, $Name, $Email, $Phone);
          $stmt->execute();
          echo "New record inserted sucessfully";
         } else {
          echo "Someone already register using this email";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    ?>