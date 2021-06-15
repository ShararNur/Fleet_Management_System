<?php
    include("connection.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Vehicle | Fleet Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>

<body class="form-control">
  <header>
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
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/car.PNG" alt="" width="30" height="30">Vehicles</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="All_Vehicle.php">All Vehicles</a></li>
                  <li><a class="dropdown-item" href="AddVehicle.php">Add Vehicles</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/mechanic.svg" alt="" width="30" height="30">Mechanics</a>
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
            <a class="nav-link" style="color:#FFFFFF8C !important; text-decoration:none; margin-top:-25px;" href="./php/logout.php">LOGOUT</a>
          </li>
          </div>
        </div>
    </nav>
  </header>
  <div>
        <form action="#" method="POST">
          <legend style="padding-left: 100px"><b>Add Vehicles</b></legend>
          <div class="container" style="width: 900px; margin: auto;">
          <div class="row mb-4">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Vehicle Id</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="id" name="id" placeholder="Enter Vehicle ID" aria-describedby="edefault input example" required>
          </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Vehicle Brand & Model</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand & Model" aria-describedby="default input example" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Color</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="color" name="color" placeholder="Enter Color" aria-describedby="default input example" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">License Plate Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="license" name="license" placeholder="Enter License Plate Number" aria-describedby="default input example" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Owner's Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name"  name="name" placeholder="Enter Name" aria-describedby="default input example" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Owner's Email Address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" aria-describedby="emailHelp" required>
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleInputText" class="col-sm-2 col-form-label">Owner's Mobile Number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Mobile Number" aria-describedby="default input example" required>
            </div>
          </div>
          <div style="padding-left: 450px;">
          <button type="submit" style="background-color:#053D4F !important"; class="btn btn-primary" name="submit">Submit</button>
          </div>
        </div>
        </form>
        </div>
  </div> 
  <footer style="padding: 20px; margin-top: 20px; color: #ffffff; background-color: #053D4F; text-align: center; border-top: #e8491d 3px solid; left:0;bottom: 0;width: 100%;text-align: center;">
          <p>Fleet Management System, Copyright &copy; Mechanic Koi</p>
  </footer>
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $brand = $_POST['brand'];
        $color = $_POST['color'];
        $license = $_POST['license'];        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if($id!="" && $brand!="" && $license!="" && $color!="" && $name!="" && $email!="" && $phone!="")
        {
            $query="INSERT INTO VEHICLE_LIST VALUES('$id','$brand','$color','$license','$name','$email','$phone')";
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