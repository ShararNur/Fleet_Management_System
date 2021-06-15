<?php
session_start();
if(!isset($_SESSION['username'])){
    header('http://localhost/fleet_management_system/login.html');
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>Dashboard | Fleet Management System</title>

</head>
<body class="form-control">
    <div class="container">

    
        <!-- <h1>Welcome <?php echo $_SESSION['username']; ?> </h1> -->
    </div>

    <div>
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
                                <a class="nav-link active" aria-current="page" href="#"><img src="./img/speedometer.PNG" alt="" width="30" height="30">Dashboard</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="./img/car.PNG" alt="" width="30" height="30">Vehicles</a>
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
                                    <li>
                                        <a class="dropdown-item" href="All_Work_Order.php">All Work Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="Add_Work_Order.php">Add Work Orders</a>
                                    </li>
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

    <br>
    <br>

    <div class="container">
        <div class="table-responsive">
            <h2>Mechanic List</h2>
            <br />
            <table class="table table-bordered table-striped" id="mechanic_list">
                <tr>
                    <th>S.No.</th>
                    <th>Workshop Name</th>
                    <th>Mechanic Name</th>
                    <th>Mechanic Number</th>
                    <th>Mechanic Email</th>
                </tr>

                <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM MECHANIC_LIST";
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
                                <td>".$result['serial']."</td>
                                <td>".$result['workshop_name']."</td>
                                <td>".$result['mechanic_name']."</td>
                                <td>".$result['mechanic_email']."</td>
                                <td>".$result['mechanic_number']."</td>
                                
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

    <br>
    <br>

    <div class="container">
        <div class="table-responsive">
            <h2>Work Order List</h2>
            <br />
            <table class="table table-bordered table-striped" id="work_order_list">
                <tr>
                    <th>Vehicle Id</th>
                    <th>Date</th>
                    <th>Work Order Title</th>
                    <th>Issue Description</th>
                    <th>Assigned To</th>
                    <th>Deadline</th>
                    <th>Total Cost</th>
                    <th>Status</th>

                </tr>

                <?php
                    include("connection.php");
                    error_reporting(0);
                    $query= "SELECT * FROM WORK_ORDER_LIST";
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
                                <td>".$result['vehicle_id']."</td>
                                <td>".$result['date']."</td>
                                <td>".$result['work_order_title']."</td>
                                <td>".$result['issue_description']."</td>
                                <td>".$result['assigned_to']."</td>
                                <td>".$result['deadline']."</td>
                                <td>".$result['total_cost']."</td>
                                <td>".$result['status']."</td>
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

    <br>
    <br>
    <footer style="padding: 20px; margin-top: 10px; color: #ffffff; background-color: #053D4F; text-align: center; border-top: #e8491d 3px solid; left:0;bottom: 0;width: 100%;text-align: center;">
        <p>Fleet Management System, Copyright &copy; Mechanic Koi</p>
    </footer>
</body>
</html>

