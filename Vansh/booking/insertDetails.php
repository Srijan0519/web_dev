<?php
include_once('db.php');

$flightNo = $_POST['flightNo'];
$pilotDetails = $_POST['pilotDetails'];
$departureTime = $_POST['departureTime'];
$arrivalTime = $_POST['arrivalTime'];
$originPlace = $_POST['originPlace'];
$destination = $_POST['destination'];
$flightProvider = $_POST['flightProvider'];
$cost = $_POST['cost'];
$seatsAvailable = $_POST['seatsAvailable'];
$flightType = $_POST['flightType'];

$query = "INSERT INTO `flightstatus`(`flightNo`, `pilotDetails`, `departureTime`, `arrivalTime`, `originPlace`, `destination`, `flightProvider`, `cost`, `seatsAvailable`, `flightType`) VALUES ('$flightNo', '$pilotDetails', '$departureTime', '$arrivalTime', '$originPlace', '$destination', '$flightProvider', '$cost', '$seatsAvailable', '$flightType')";

$queryProcess = mysqli_query($conn, $query);
?>