<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Search results</title>
</head>
<body>
    
    <nav>
        <div class="wrapper">
            <!--<a href="index.php"><img src="img/imdb-logo.png" alt="logo"></a>-->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="aboutus.php">About Us</a></li>
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

    <h2 style="margin-top:50px; margin-bottom: 20px; font-family: Lato; margin-left: 2%;">Search results:</h2>

    <?php
        include_once 'includes/dbh.inc.php';

        if(isset($_SESSION["useruid"])){

        } else {
            header('location: login.php');
        }

        if(isset($_POST['submit-search'])){
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM movies WHERE moviesTitle LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);

            if($queryResult > 0){
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <a href="#" style = "margin-left: 2%; text-decoration: none; color: black; font-size: 20px; font-family: Lato">
                    <img src=" <?php echo $row['moviesImage']; ?> " alt="image" width = 4%> <?php
                    echo $row['moviesTitle'];
                    echo " ";
                    echo $row['moviesYear'];
                    echo " ";
                    echo $row['moviesGenre'];
                    ?> </a>
                    <hr style="margin-left: 2%;"> <?php
                    }
            } else {
                echo "There are no movies that match your search!";
            }
        }

    ?>

