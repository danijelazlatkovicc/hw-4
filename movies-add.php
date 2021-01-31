<?php
    include_once 'header.php';
?>
        
    <section class="movies-form">
        <h2>Add movie</h2>
        <div class="movies-form-form">      
            <form class="textbox" action="includes/movies-add.inc.php" method="post">
                <input type="text" name="title" placeholder="Movie Title">
                <input type="text" name="description" placeholder="Description">
                <input type="text" name="genre" placeholder="Genre">
                <input type="text" name="screenwriter" placeholder="Screen Writer">
                <input type="text" name="director" placeholder="Director">
                <input type="text" name="production" placeholder="Production">
                <input type="text" name="actors" placeholder="Actors">
                <input type="text" name="year" placeholder="Year">
                <input type="text" name="image" placeholder="Image link">
                <input type="text" name="duration" placeholder="Duration">
                <button type="submit" name="submit">Add Movie</button>
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
                echo "<p>You added a movie succesfully!</p>";
            }
        }
    ?>

    </section>

    
    
<?php 
    include_once 'footer.php';
?>
