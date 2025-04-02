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


$query = "INSERT INTO users (username, email, password,) VALUES (:username, :email, :password,)";
$something = $conn->prepare($query);
$something->execute([
    'username' => $username,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_DEFAULT),
]);
if ($something->rowCount() > 0) {
    echo "User registered successfully.";
} else {
    echo "Error registering user.";
}
header("Location: Laptops.php");


?>