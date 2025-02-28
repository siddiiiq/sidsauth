<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registration successful! Please login.');
                window.location.href='login.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
