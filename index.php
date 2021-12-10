<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">


    <title>Login</title>
</head>
<body>



    <form action="authenticate.php" method="post">
        <h2>Login</h2>

        <?php if (isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" id="username" >

        <label for="password">Password </label>
        <input type="password" name="password" placeholder="Password" id="password" >

        <a href="registration.php">Nou utilizator</a>
        <button type="submit" value="Login">Login</button>


    </form>




</body>
</html>