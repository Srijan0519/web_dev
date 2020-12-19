<?php
include_once('db.php');

$query = "SELECT * FROM `flightstatus`";

$result = mysqli_query($conn, $query);
$output = [];
while ($row = mysqli_fetch_array($result)){
    $id = $row['flightNo'];
    $pilotDetails = $row['pilotDetails'];
    $destination = $row['destination'];
    array_push(
        $output,
        [
            "flightNo" => $id,
            "pilot Details" => $pilotDetails,
            "destination" => $destination
        ]

        );
        
}
print_r($output);


?>