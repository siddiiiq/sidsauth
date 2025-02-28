<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: home.php"); // ✅ Redirects to home.php
            exit();
        } else {
            echo "<script>
                    alert('Invalid password! Try again.');
                    window.location.href='login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('No user found! Please register.');
                window.location.href='register.php';
              </script>";
    }
}

$conn->close();
?>
