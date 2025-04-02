<?php 

require_once 'conn.php';

$username = $_POST['username'];
if (empty($username)) {
    die("Username is required.");
}
$password = $_POST['password'];
if (empty($password)) {
    die("Password is required.");
}
$email = $_POST['email'];
if (empty($email)) {
    die("Email is required.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}


$query = "INSERT INTO users (username, password, email,) VALUES (:username, :password, :email)";
$something = $conn->prepare($query);
$something->execute([
    'username' => $username,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'email' => $email,
]);
if ($something->rowCount() > 0) {
    echo "User registered successfully.";
} else {
    echo "Error registering user.";
}
header("Location: Laptops.php");


?>