<?php
    include_once 'header.php';
    
    if(isset($_SESSION["useruid"])){
        echo "Dobrodosli.";
    } else {
        header('location: login.php');
    }
    
    
?>
    <h2 style="font-family: Lato; margin-top: 50px; margin-left:43%">Our top 8 picks this year!</h2>
       
       <section class="presentation">
            <div class="products">
                <div class="product1" id="pr">
                    <a href="#"><img src="img/godfather.jpg" alt=""></a>
                    <br>
                    <p id="name">The Godfather (1972)</p>
                    <p>Duration: 2h 55min</p>
                </div>
                <div class="product2" id="pr">
                    <a href="#"><img src="img/greenmile.jpg" alt=""></a>
                    <br>
                    <p id="name">The Green Mile (1999)</p>
                    <p>Duration: 3h 9min</p>
                </div>
                <div class="product3" id="pr">
                <a href="#"><img src="img/shawshank.jpg" alt=""></a>
                    <br>
                    <p id="name">The Shawshank Redemption (1994)</p>
                    <p>Duration: 2h 22min</p>
                </div>
                <div class="product4" id="pr">
                <a href="#"><img src="img/darkknight.jpg" alt=""></a>
                    <br>
                    <p id="name">The Dark Knight (2008)</p>
                    <p>Duration: 2h 32min</p>
                </div>
                <div class="product5" id="pr">
                <a href="#"><img src="img/angrymen.jpg" alt=""></a>
                    <br>
                    <p id="name">12 Angry Men (1957)</p>
                    <p>Duration: 1h 36min</p>
                </div>
                <div class="product6" id="pr">
                <a href="#"><img src="img/pulpfiction.jpg" alt=""></a>
                    <br>
                    <p id="name">Pulp Fiction (1994)</p>
                    <p>Duration: 2h 34min</p>
                </div>
                <div class="product7" id="pr">
                <a href="#"><img src="img/schindler.jpg" alt=""></a>
                    <br>
                    <p id="name">Schindler's List (1993)</p>
                    <p>Duration: 3h 15min</p>
                </div>
                <div class="product8" id="pr">
                <a href="#"><img src="img/inception.jpg" alt=""></a>
                    <br>
                    <p id="name">Inception (2010)</p>
                    <p>Duration: 2h 28min</p>
                </div>
            </div>
        </section>
    
    
    
    
<?php 
    include_once 'footer.php';
?>
