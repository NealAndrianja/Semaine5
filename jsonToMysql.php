<?php
$servername = "localhost";
$username = "neal";
$password = "nealmac4179";
$dbname = "car_data";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$jsonString = file_get_contents("test.json");

$jsonData = json_decode($jsonString, true);

foreach ($jsonData as $data) {
    $sql = "INSERT INTO cars (marque, modele, moteur, energie, transmission) VALUES ('" . $data["marque"] . "', '" . $data["modele"] . "', '" . $data["moteur"] . "', '" . $data["energie"] . "', '" . $data["transmission"] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "\n" . mysqli_error($conn);
    }
}
