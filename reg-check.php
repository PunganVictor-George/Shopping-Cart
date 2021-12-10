<?php
session_start();
include 'connection.php';

global $con;

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $email = validate($_POST['email']);

    $user_data = 'username='. $uname. '&email='. $email;


    if (empty($uname)) {
        header("Location: registration.php?error=Username is required&$user_data");
        exit();
    }else if(empty($pass)){
        header("Location: registration.php?error=Password is required&$user_data");
        exit();
    }
    else if(empty($re_pass)){
        header("Location: registration.php?error=Re Password is required&$user_data");
        exit();
    }

    else if(empty($email)){
        header("Location: registration.php?error=Email is required&$user_data");
        exit();
    }

    else if($pass !== $re_pass){
        header("Location: registration.php?error=The confirmation password  does not match&$user_data");
        exit();
    }

    else{

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE username='$uname' ";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
            exit();
        }else {
            $sql2 = "INSERT INTO users(username, password, email) VALUES('$uname', '$pass', '$email')";
            $result2 = mysqli_query($con, $sql2);
            if ($result2) {
                header("Location: registration.php?success=Your account has been created successfully");
                exit();
            }else {
                header("Location: registration.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }

}else{
    header("Location: registration.php?error=no getting data POST");
    exit();
}