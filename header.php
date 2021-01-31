<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Homepage</title>
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

    <div class="wrapper">
