<?php 
session_start();
//logout if log out button clicked 
if (isset($_POST['logout'])) {
    include 'logout.php';
}  
//If add to cat button is clicked, perform add to cart action
if (isset($_POST['add_to_cart'])) {
    include 'add-to-cart.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <!-- change css file name -->
    <link rel="stylesheet" href="Products-Pages-Css.css?v=<?php echo time(); ?>">
    <!-- google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- w3 school links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>My Product</title>
</head>

<body>
    <!----------------->
    <section class="header">
        <!-- Main navigation bar -->
        <nav class="main-nav">
            <div class="Home-div">
                <a href="Aisles-page.php" class="home-link">Home</a>
            </div>
            <!-- php - logout button -->
            <?php 
                if (isset($_SESSION['username'])) {
                    include 'logout-button.php';
                }
            ?>
            <!-- *** -->
            <a href="Aisles-page.php" class="cart-link" id="cart-link">
                <button class="cart-button-main-nav"> &#128722; </button>
            </a> 
            <a href="User-login-Page.php" class="login-link" id="login-link"> 
                <button class="user-button"> <i class="fa fa-user"></i></button>
            </a>
        </nav>
        <!-- Search Bar -->
        <div class="search-bar-div">
            <form action="#search" class="search-form">
                <input type="text" placeholder="Search... " class="search-bar">
                <button><i id="search-button" class="fa fa-search"></i></button>
            </form>
        </div>
        <hr class="grey-hr">
        <a href="Aisles-page.php" class="back-link">&#x3c; Back to fruit aile</a>
    </section>
    <!-- Product section  -->
    <section class="product-section">
        <div class="product-description">
            <img class="product-img"
                src="https://images.unsplash.com/photo-1587132137056-bfbf0166836e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1480&q=80"
                alt="">
            <div class="product-info-div">
                <!---->
                <p class="product-name" id="product-name">BANANA</p>
                <p class="product-price" id="product-price-un">0.62 &#36;/u</p>
                <p class="product-price" id="product-price-lb">0.79 &#36;/lb</p>
                <form action="" id="add-to-cart-form" class="add-to-cart-form" method="post">
                    <div class="form-div">
                        <div>
                            <label for="qty" class="qty-label" id="qty-label">quantity:</label>
                            <select name="qty" id="qty-select" required>
                                <option value="0" selected>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>      
                        </div>
                        <div class="qty-type-div">
                            <label for="qty_type_select" class="qty-type-label">By:</label>
                            <select id="qty-type-select" name="qty_type_select" required>   
                                <option value="units">UN.</option>
                                <option value="pounds">LB.</option>
                            </select>
                        </div>
                        <div class="price" id="price" name="price">PRICE: 0.00$</div>
                        <!-- values to manipulate in php -->
                        <input type="hidden" name="price_un" value="0.62">
                        <input type="hidden" name="price_lb" value="0.79">
                        <input type="hidden" name="product_name" value="Banana">
                        <input type="hidden" name="product_img" value="https://images.unsplash.com/photo-1587132137056-bfbf0166836e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1480&q=80">
                    </div>
                    <button id="add-to-cart-button" class="add-to-cart-button" type="submit" form="add-to-cart-form" name="add_to_cart"> ADD TO CART </button>
                </form>
            </div>
        </div>
    </section>
    <!----------------------->
    <section class="prod-description-section">
        <button id="prod-description-button" class="prod-description-button">  Product description...</button>
        <div class="prod-description-div" id="prod-description-div">
            Soft, sweet and delicious, the banana is a popular choice for breakfast, snacks or any time of the day. The vibrant yellow peel provides natural protection while storing, and is a great indicator of when the fruit is ready to eat!
          <br> Item number:1.
        </div>
    </section>
    <br>
    <!----------------------->
    <section class="footer">
        <footer class="footer-nav">
            <a href="#about" class="about-link">About</a>
            <a href="#socials" class="socials-link">socials</a>
            <a href="#contact-us" class="contact-link">contact us</a>
        </footer>
    </section>
    <!--JS-->
    <script type="text/javascript" src="Products-Pages.js"></script>  
</body>

</html>