<?php
// Establish database connection (replace with your credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process signin form data

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user data from the database based on the provided username
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Redirect the user to index.html with the username as a parameter
            session_start();
             $_SESSION["username"] = $username; 
            header("Location: index_after_signin.php?username=" . urlencode($username));
            exit(); // Make sure to exit to prevent further code execution
        } else {

            header("Location: signin_wrongpass.html");
        }
    } else {
        header("Location: signin_usernotfound.html");
    }


$conn->close();
?>
