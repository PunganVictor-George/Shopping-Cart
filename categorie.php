<?php
session_start();
include 'connection.php';
global $con;
function mysqli_datum($result)
{
    if ($result->num_rows == 0)
        return 0;
    $result->data_seek(0);
    $row=$result->fetch_row();
    return $row[0];
}

$id_categorie = $_GET['id_categorie'];


$sqlNumeCateg ="SELECT name FROM categorie WHERE id='$id_categorie'";

$resursaNumeCateg = mysqli_query($con,$sqlNumeCateg);
//if ($resursaNumeCateg) echo 'merge resursa';
$numeCateg = mysqli_datum($resursaNumeCateg);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorie</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
<body style="background: #1690A7">
<td style="vertical-align: top">

    <h1>Categorie: <?php echo $numeCateg; ?></h1>

    <a class="log" href="magazin.php">Inapoi la Magazin</a>
<!--    <a class="log" style="margin-left:750px " href="cart.php">Cart</a>-->

    <?php
        global $con;
        $query1 = "SELECT * FROM product WHERE categorie='$numeCateg'";
        $result = mysqli_query($con, $query1);

            while ($row = mysqli_fetch_array($result)) {

                ?>
                <br><br><br><br>

                <div class="col-md-3" style="padding-left: 125px">



                        <div class="container">
                            <a href="produs.php?Nume=<?php echo $row['name'] ?>  ">
                            <img alt="imagine" src="images/<?php echo $row["image"]; ?>" style="max-width: 155%" height="30%">

                            </a>

                            <h5 class="text-info" style="color: #000"><?php echo $row["name"]; ?></h5>
                            <h5 class="text-info" style="color: #000"><?php echo $row["categorie"]; ?></h5>
                            <h5 class="text-info" style="color: #000"><?php echo $row["descriere"]; ?></h5>
                            <h5 class="text-danger"><?php echo $row["price"]; ?>$</h5>
                            <input type="text" name="quantity" class="form-control" value="1" style="width: 130px">

                            <form method="POST" action="cart.php?action=add&&code=<?php echo $row["code"]; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="hidden" name="hidden_code" value="<?php echo $row["code"]; ?>">
                            <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                   value="Add to Cart">
                            </form>

                        </div>

                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <?php
            }

        ?>

</td>


</body>
</html>
