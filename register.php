<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nationality = $_POST['nationality'];
    $national_id = $_POST['national_id'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, nationality, national_id, email, password) VALUES ('$name', '$nationality', '$national_id', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
