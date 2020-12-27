<?php
include_once('db.php');

$flightNo = $_POST['flightNo'];

$query = "DELETE FROM `flightstatus` WHERE `flightNo` = `$flightNo`";

$queryProcess = mysqli_query($conn, $query);
?>