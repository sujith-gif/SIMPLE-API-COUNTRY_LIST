<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $agreed_terms = isset($_POST['agree']) ? 1 : 0; 

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (name, email, password, gender, country, agreed_terms) 
            VALUES ('$name', '$email', '$hashed_password', '$gender', '$country', $agreed_terms)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>