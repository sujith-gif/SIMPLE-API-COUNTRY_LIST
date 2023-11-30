<?php

$servername = "localhost";
$username = "sujith";
$password = "1234";
$dbname = "sujith";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['countryName']) && !empty($_POST['countryName'])) {
        $countryName = $_POST['countryName'];

        // Check if the country already exists
        $check_sql = "SELECT * FROM countries WHERE country_name = '$countryName'";
        $check_result = $conn->query($check_sql);

        if ($check_result && $check_result->num_rows > 0) {
            echo "Country already exists in the database!";
        } else {
            $insert_sql = "INSERT INTO countries (country_name) VALUES ('$countryName')";

            if ($conn->query($insert_sql) === TRUE) {
                echo "Country added successfully!";
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }
        }
    }
}

$countries = [];

$sql = "SELECT * FROM countries";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $countries[] = $row['country_name'];
        }
    } else {
        echo "No countries found in the database.";
    }
} else {
    echo "Error retrieving countries: " . $conn->error;
}


?>

