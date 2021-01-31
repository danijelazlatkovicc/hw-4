<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Delete movie</title>
</head>
<body>
    
    <nav>
        <div class="wrapper">
            <!--<a href="index.php"><img src="img/imdb-logo.png" alt="logo"></a>-->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="movies-admin.php">Movies</a></li>
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
            </ul>
        </div>
    </nav>
    
     <div class="wrapper">
        
    <section class="movies-form">
        <h2>Delete movie</h2>
        <div class="movies-form-form">      
            <form class="textbox" action="includes/movies-delete.inc.php" method="post">
                <input type="text" name="title" placeholder="Movie Title">
                <button type="submit" name="submit">Delete Movie</button>
            </form>
        </div>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>You need to fill in all fields!</p>";
            }

            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Oops... Something went wrong. Try again.</p>";
            }
           
            else if($_GET["error"] == "none"){
                echo "<p>You deleted a movie succesfully!</p>";
            }
        }
    ?>
    </section>

     
<?php 
    include_once 'footer.php';
?>
