<html>
    <head>
        <title>All Vehicle | Fleet Management System</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>    
    </head>
    <body class="form-control">
        <div>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #053D4F">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">
      <img src="./img/Mechanic_koi.PNG" alt="" width="80" height="60">
    </a>
  </div>
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="dashboard.php"><img src="./img/speedometer.PNG" alt="" width="30" height="30">Dashboard</a>
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
        </div>

        <div class="container">
            <div class="table-responsive">
                <h2>Vehicle List</h2>
                <br />
                <table class="table table-bordered table-striped" id="vehicle_list">
                    <tr>
                        <th>Vehicle Id</th>
                        <th>Brand & Model</th>
                        <th>Color</th>
                        <th>License No.</th>
                        <th>Owner's Name</th>
                        <th>Owner's Number</th>
                        <th>Owner's Email</th>
                    </tr>
    

<?php
    include("connection.php");
    error_reporting(0);
    $query= "SELECT * FROM VEHICLE_LIST";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    

    //echo $result['vehicleid']." ".$result['brand_Model']." ".$result['license']." ".$result['Color']." ".$result['Owner_name']." ".$result['email']." ".$result['mobile'];
    //echo $total;

    if($total!=0)         
    {
        //$result = mysqli_fetch_assoc($data);
        while($result = mysqli_fetch_assoc($data))
        {
            echo "
            <tr>
                <td>".$result['vehicleid']."</td>
                <td>".$result['brand_Model']."</td>
                <td>".$result['color']."</td>
                <td>".$result['license']."</td>
                <td>".$result['owner_name']."</td>
                <td>".$result['email']."</td>
                <td>".$result['mobile']."</td>
            </tr>
            ";
        }
        
        //echo "Table has records";
    }
    else{
        echo "No records found";
    }
?>

                </table>
            </div> 
        </div>       
    </body>
    <footer style="padding: 20px; margin-top: 60px; color: #ffffff; background-color: #053D4F; text-align: center; border-top: #e8491d 3px solid; position: fixed; left:0;bottom: 0;width: 100%;text-align: center;">
        <p>Fleet Management System, Copyright &copy; Mechanic Koi</p>
    </footer>
</html>
