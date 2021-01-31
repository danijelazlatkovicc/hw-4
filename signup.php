<?php
    include_once 'header.php';
?>
        
    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form">      
            <form class="textbox" action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat password">
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>You need to fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Your username is not valid! Choose another one.</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Your email is not valid! Choose another one.</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Your passwords did not match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Oops... Something went wrong. Try again.</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Username is already taken! Choose another one.</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You signed up succesfully!</p>";
            }
        }
    ?>
    </section>

    
    
<?php 
    include_once 'footer.php';
?>
