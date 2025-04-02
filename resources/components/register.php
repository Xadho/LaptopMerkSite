<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="../../backend/registerController.php" method="post">
    <label for="username"></label>
    <input type="text" id="username" name="username" placeholder="Username"><br><br>
    <label for="password"></label>
    <input type="password" id="password" name="password" placeholder="Password"><br><br>
    <label for="email"></label>
    <input type="text" id="email" name="email" placeholder="Email"><br><br>
    <input type="submit" value="Register">
    <p>Already have an account? <a href="login.php">Log in here</a>.</p>
    </form>
</body>
</html>