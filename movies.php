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

<br>
<h2 style="font-family: Lato; margin-left: 2%;">All time best movies</h2>
<br><br>

<?php
    $sql = "SELECT * FROM movies;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            //echo $row['moviesImage'];
            //echo " "; ?>
            
            <a href="moviepage.php" style = "margin-left: 2%; text-decoration: none; color: black; font-size: 20px; font-family: Lato">
            <img src=" <?php echo $row['moviesImage']; ?> " alt="image" width = 4%> <?php
            echo $row['moviesTitle'];
            echo " ";
            echo $row['moviesYear'];
            echo " ";
            echo $row['moviesGenre'];
            ?> </a>
            <hr style="margin-left: 2%;">
            <?php
        }
    }
?>

<?php 
    include_once 'footer.php';
?>
