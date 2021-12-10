<!DOCTYPE html>
<html lang="">
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="reg-check.php" method="POST">
    <h2>SIGN UP</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label for="email">Email</label>
    <?php if (isset($_GET['email'])) { ?>
        <input type="email"
               name="email"
               id="email"
               placeholder="Email"
               value="<?php echo $_GET['email']; ?>"><br>
    <?php }else{ ?>
        <input type="email"
               name="email"
               id="email"
               placeholder="Email"><br>
    <?php }?>

    <label for="username">Username</label>
    <?php if (isset($_GET['uname'])) { ?>
        <input type="text"
               name="username"
               placeholder="UserName"
               id="username"
               value="<?php echo $_GET['uname']; ?>"><br>
    <?php }else{ ?>
        <input type="text"
               name="username"
               id="username"
               placeholder="UserName"><br>
    <?php }?>


    <label for="password">Password</label>
    <input type="password"
           name="password"
           id="password"
           placeholder="Password"><br>

    <label for="re_password">Re Password</label>
    <input type="password"
           name="re_password"
           id="re_password"
           placeholder="Re_Password"><br>


    <button type="submit">Sign Up</button>
    <a href="index.php" class="ca">Already have an account?</a>
</form>
</body>
</html>
