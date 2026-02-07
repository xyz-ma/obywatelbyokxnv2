<?php
session_start();

$users = array(
    "okxn" => "okxn123",
    // Info o autorze itd.
); 

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid auth key.";
    }
}
?>

