<?php
// Establish database connection
$servername ='localhost';
$username ='root';
$password ='';
$dbname ='user';


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// Process signup form data

    $user = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passSword = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $confirm_password = $_POST["confirm_password"];
    if ($password !== $confirm_password) {
        header("Location: signup_pass.html");
        exit();
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$passSword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: signin_success.html");
        exit();
    } else {
        header("Location: signup_error.html");
        exit();
        
    }


$conn->close();
?>
