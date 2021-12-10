<?php
session_start();
include 'connection.php';

global $con;
if (isset($_SESSION['id']) && isset($_SESSION['name'])){


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Magazin</title>
    <style>
        .log{
            background: #555;
            padding: 10px 15px ;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;
            text-decoration: none;
        }
    </style>

</head>

<body style="background: #1690A7;">

<h1>Hello, <?php echo $_SESSION['name']; ?> </h1>

<a class="log" href="logout.php">Logout</a>
<br><br><br><br><br>
<td  style="vertical-align: top; width: 125px ">
    <div style="width: 120px; background-color: #169098; padding: 4px; border: solid #000000 1px">
        <b>Categorie</b> <br>
        <?php
        $sql = "SELECT * FROM categorie order by name ASC";
        $resursa = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($resursa))
        {

            echo '<a href="cart2.php?id_categorie='.$row['id'].'" style="color:#000">'.$row['name'].'</a><br>';
        }
        ?>
    </div>
</td>





</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}