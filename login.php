<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My First PHP Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>
    <h2>Login Page</h2>
    <a href="index.php">Click here to go back</a><br><br>
    <form action="checklogin.php" method="POST">
        Enter Username: <input type="text" name="username" required="required"> <br>
        Enter Password: <input type="password" name="password" required="required"> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
