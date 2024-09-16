<?php
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "admin" && $password == "pass") {
        session_start();
        $_SESSION["user"] = "admin";
        header("Location:index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="max-width: 600px;">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" class="form-control" name="username" id="" placeholder="Username">
                </div>
                <div class="form-field mb-4">
                    <input type="password" class="form-control" name="password" id="" placeholder="Password">
                </div>
                <div class="form-field mb-4">
                    <input type="submit" class="btn btn-primary" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>