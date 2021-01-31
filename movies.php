<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';

    if(isset($_SESSION["useruid"])){

    } else {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body style = "margin-top: 50px; margin-right: 15%;">

</html>