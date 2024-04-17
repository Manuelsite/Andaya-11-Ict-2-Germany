<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $datetime = date("Y-m-d H:i:s");

$sql = "INSERT INTO username (email, password, datetime) VALUES ('$email', '$password', '$datetime')";

        if ($conn->query($sql) === TRUE) {
            header("Location: home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Register
    if(isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $datetime = date("Y-m-d H:i:s");

        $sql = "INSERT INTO users (name, email, password, datetime) VALUES ('$name', '$email', '$password', '$datetime')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>