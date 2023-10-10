<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup_username = $_POST['username'];
    $signup_password = $_POST['password'];

    // Check if the user already exists
    $check_user_query = "SELECT * FROM users WHERE username='$signup_username'";
    $result = $conn->query($check_user_query);

    if ($result->num_rows > 0) {
        echo"<script>alert('User already exists. Please choose a different username.')</script>";
        header("Location: create_account.html");
    } else {
        // Create a new user
        $signup_query = "INSERT INTO users (username, password) VALUES ('$signup_username', '$signup_password')";

        if ($conn->query($signup_query) === TRUE) {
            echo"<script>alert('Acount created ')</script>";
            header("Location: login.html");
    
        } else {
            echo "Error: " . $signup_query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>