<?php
session_start();
session_destroy();

header('location:http://localhost/fleet_management_system/login.html');

?>