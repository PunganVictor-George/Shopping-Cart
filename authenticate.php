<?php
session_start();

include 'connection.php';

global $con;


if ( isset($_POST['username'], $_POST['password']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("Location: index.php?error=Username is required");
        exit();
    }else if (empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        // hashing the password
        //$pass = md5($pass);

        $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass' ";

        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass){
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                header("Location: magazin.php");
                exit();
            }else {
                header("Location: index.php?error=Incorrect Username or Password");
                exit();
            }
        } else{
            header("Location: index.php?error=Incorrect Username or Password");
            exit();
        }
    }

}else{
    header("Location:index.php");
    exit();
}

