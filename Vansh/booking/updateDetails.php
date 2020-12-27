<?php
include_once('db.php');


$pilotDetails = $_POST['pilotDetails'];
$departureTime = $_POST['departureTime'];
$arrivalTime = $_POST['arrivalTime'];
$cost = $_POST['cost'];
$seatsAvailable = $_POST['seatsAvailable'];


$query = "UPDATE `flightstatus` SET `pilotDetails`= '$pilotDetails',`departureTime`= '$departureTime',`arrivalTime`= '$arrivalTime',`cost`='$cost',`seatsAvailable`='$seatsAvailable' WHERE `flightNo` = 'als5090'";

$queryProcess = mysqli_query($conn, $query);
?>