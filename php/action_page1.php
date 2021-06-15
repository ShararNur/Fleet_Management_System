<?php
    $Id = $_POST['ID'];
    $Date_order = $_POST['Date_order'];
    $Work_order = $_POST['Work_order'];
    $Issue = $_POST['Issue'];
    $Assigned = $_POST['Assigned'];
    $Deadline = $_POST['Deadline'];
    $Cost = $_POST['Cost'];
    if (!empty($ID) || !empty($Date_order) || !empty($Work_order) || !empty($Issue) || !empty($Assigned) || !empty($Deadline) || !empty($Cost)) {
     $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "mechanic_koi";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT ID From order Where ID = ? Limit 1";
         $INSERT = "INSERT Into order (ID, Date_order , Work_order, Issue, Assigned, Deadline, Cost) values(?, ?, ?, ?, ?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $ID);
         $stmt->execute();
         $stmt->bind_result($ID);
         $stmt->store_result();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("ssssii", $ID, $Date_order, $Work_order, $Issue, $Assigned, $Deadline, $Cost);
          $stmt->execute();
          echo "New record inserted sucessfully";
         } else {
          echo "Someone already register using this ID";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    ?>