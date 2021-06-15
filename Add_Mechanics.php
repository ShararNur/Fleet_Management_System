<?php
    include("connection.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <title>Add Mechanics | Fleet Management System</title>
</head>

<body class="form-control">
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #053D4F">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./img/Mechanic_koi.PNG" alt="" width="80" height="60">
    </a>
  </div>
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Dashboard.php"><img src="./img/speedometer.PNG" alt="" width="30" height="30">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/car.PNG" alt="" width="30" height="30">Vehicles</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="All_Vehicle.php">All Vehicles</a></li>
            <li><a class="dropdown-item" href="AddVehicle.php">Add Vehicles</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/mechanic.svg" alt="" width="30" height="30">Mechanics</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="All_Mechanics.php">All Mechanics</a></li>
            <li><a class="dropdown-item" href="Add_Mechanics.php">Add Mechanics</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="./img/Tracking.svg" alt="" width="30" height="30">Tracking</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/notepad.svg" alt="" width="30" height="30">Work Orders</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="All_Work_Order.php">All Work Orders</a></li>
            <li><a class="dropdown-item" href="Add_Work_Order.php">Add Work Orders</a></li>
          </ul>
        </li>
      </ul>
      <li class="nav-item">
      <a class="nav-link" style="color:#FFFFFF8C !important; text-decoration:none; margin-top:-25px; " href="./php/logout.php">LOGOUT</a>
    </li>
    </div>
  </div>
</nav>
    </header>

    <div>
<form action="#" method="post">
  <legend style="padding-left: 100px"><b>Add Mechanics</b></legend>
  <div class="container" style="width: 900px; margin: auto;">
  <div class="row mb-4">
    <label for="exampleInputText" class="col-sm-2 col-form-label">S.No</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="serial" name="serial" placeholder="Enter Serial No" aria-describedby="edefault input example" required>
  </div>
</div>
  <div class="row mb-4">
    <label for="exampleInputText" class="col-sm-2 col-form-label">Workshop Name</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="workshop" name="workshop" placeholder="Enter Workshop Name" aria-describedby="edefault input example" required>
  </div>
  </div>
  <div class="row mb-3">
    <label for="exampleInputText" class="col-sm-2 col-form-label">Mechanic Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mechanic" name="mechanic" placeholder="Enter Name" aria-describedby="default input example" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="exampleInputText" class="col-sm-2 col-form-label">Mechanic Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" aria-describedby="emailHelp" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="exampleInputText" class="col-sm-2 col-form-label">Mechanic Contact Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="number" name="number" placeholder="Enter Mobile Number" aria-describedby="default input example" required>
    </div>
  </div>
<div style="padding-left: 450px;">
  <button type="submit" style="background-color:#053D4F !important"; class="btn btn-primary" name="submit">Submit</button>
</div>
</form>
</div>
</div>

  <footer style="padding: 20px; margin-top: 170px; color: #ffffff; background-color: #053D4F; text-align: center; border-top: #e8491d 3px solid;position: fixed; left:0;bottom: 0;width: 100%;text-align: center; ">
        <p>Fleet Management System, Copyright &copy; Mechanic Koi</p>
  </footer>
  
</body>

</html>

<?php
    if(isset($_POST['submit']))
    {
        $serial = $_POST['serial'];
        $workshop = $_POST['workshop'];
        $mechanic = $_POST['mechanic'];
        $email = $_POST['email'];
        $number = $_POST['number'];

             
        if($serial!="" && $workshop!="" && $mechanic!="" && $email!="" && $number!="")
        {
            $query="INSERT INTO MECHANIC_LIST VALUES('$serial','$workshop','$mechanic','$email','$number')";
            $data=mysqli_query($conn,$query);
            if($data){
                
              //echo "Data inserted into Database";
            }
        }

        else{
            echo "Failed to insert Data into Database".mysqli_connect_error();
        }
    }
?>