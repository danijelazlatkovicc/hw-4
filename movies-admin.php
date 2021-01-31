<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
</head>
<body style = "margin-top: 50px; margin-right: 15%;">
    
    <nav>
        <div class="wrapper">
            <!--<a href="index.php"><img src="img/imdb-logo.png" alt="logo"></a>-->
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="movies-admin.php">Movies</a></li>
                <li><a href="#">About Us</a></li>
                <?php
                    if(isset($_SESSION["useruid"])){
                        echo "<li><a href='watchlist.php'>Watchlist</a></li>";
                        echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                ?>
                <li style="float:right; margin-top:12px; margin-right: 20px">
                    <form action="search.php" method="post">
                        <input class="search-box" type="text" name="search" placeholder="Search">
                        <button class="search-btn" type="submit" name="submit-search">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

<?php
    include_once 'includes/dbh.inc.php';

    if(isset($_SESSION["useruid"])){

    } else {
        header('location: login.php');
    }
?>

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
    <div class='btn'>
        <form action='movies-add.php' method = 'get'>
            <button class='btn1' type='submit' name='add'>Add movie</button>
        </form>
        <form action='movies-update.php' >
            <button class='btn2' type='submit' name='update'>Update movie</button>
        </form>
        <form action='movies-delete.php' >
            <button class='btn3' type='submit' name='delete'>Delete movie</button>
        </form>
    </div>
    
        
    <?php 
    include_once 'footer.php';
?>
