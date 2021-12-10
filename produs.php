
<?php
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

$nume_prod = $_GET['name'];
$sqlNumeProd ="SELECT * FROM product WHERE name='$nume_prod'";
$resursaNumeProd = mysqli_query($con,$sqlNumeProd);
//if ($resursaNumeCateg) echo 'merge resursa';
$numeProd = mysqli_datum($resursaNumeProd);
echo $numeProd;

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

</body>
</html>
