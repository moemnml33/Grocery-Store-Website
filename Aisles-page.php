<?php 
session_start();
//If logged in, display logout button 
if (isset($_POST['logout'])) {
    include 'logout.php';
}    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="Aisles-page.css?v=<?php echo time(); ?>">
    <!-- google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- w3 school links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>My Aisle</title>
</head>

<body>
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
    </section>
    <!-- php - Welcome back user -->
    <?php 
    if (isset($_SESSION['username'])) { 
        include 'welcome-back.php';
    }
    ?>
    <!-- *** -->
    <section class="main-content">
        <!-- fruit section -->
        <section class="aile-section">
            <div class="aile-description">
                <p class="aile-header">fruits</p>
            </div>
            <div class="aile">
                <!--Product 1-->
                <div class="product-description">
                    <a href="Banana-page.php" class="product-link">
                        <img class="product-img"
                            src="https://images.unsplash.com/photo-1587132137056-bfbf0166836e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1480&q=80"
                            alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">BANANA</a></p>
                        <p class="product-price">0.62 &#36;/u</p>
                        <p class="product-price">0.79 &#36;/lb</p>
                    </div>
                </div>
                <!--Product 2-->
                <div class="product-description">
                    <a href="Banana-page.php">
                        <img class="product-img"
                            src="https://images.freeimages.com/images/large-previews/178/apple-i-1322292.jpg" alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">APPLE</a></p>
                        <p class="product-price">0.86 &#36;/u</p>
                        <p class="product-price">2.29 &#36;/lb</p>
                    </div>
                </div>
                <!--Product 3-->
                <div class="product-description">
                    <a href="Banana-page.php" class="product-link">
                        <img class="product-img" src="https://thumbs.dreamstime.com/b/strawberry-basket-6991758.jpg"
                            alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">strawberry</a></p>
                        <p class="product-price">5.99 &#36;/lb</p>
                    </div>
                </div>
                <!--Product 4-->
                <div class="product-description">
                    <a href="Banana-page.php">
                        <img class="product-img"
                            src="https://images.unsplash.com/photo-1528821154947-1aa3d1b74941?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80"
                            alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">cherry</a></p>
                        <p class="product-price">4.99 &#36;/1.1lb</p>
                    </div>
                </div>
                <!--Product 5-->
                <div class="product-description">
                    <a href="Banana-page.php" class="product-link">
                        <img class="product-img"
                            src="https://img2.cgtrader.com/items/1971182/0ce63be7a3/large/avocado-3d-model-max-bip-obj-mtl-fbx-mdl.jpg"
                            alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">avocado</a></p>
                        <p class="product-price">0.99 &#36;/u</p>
                    </div>
                </div>
                <!--Product 6-->
                <div class="product-description">
                    <a href="Banana-page.php">
                        <img class="product-img"
                            src="https://images.freeimages.com/images/large-previews/88b/peach-1459224.jpg" alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">peach</a></p>
                        <p class="product-price">1.76 &#36;/u</p>
                        <p class="product-price">3.99 &#36;/lb</p>
                    </div>
                </div>
                <!--Product 7-->
                <div class="product-description">
                    <a href="Banana-page.php" class="product-link">
                        <img class="product-img"
                            src="https://images.unsplash.com/photo-1582281298055-e25b84a30b0b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8d2F0ZXJtZWxvbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=60"
                            alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">watermelon</a></p>
                        <p class="product-price">7.99 &#36;/u</p>
                    </div>
                </div>
                <!--Product 8-->
                <div class="product-description">
                    <a href="Banana-page.php">
                        <img class="product-img"
                            src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX2722375.jpg" alt="">
                    </a>
                    <div class="product-info-div">
                        <p class="product-name"><a id="page-link" href="Banana-page.php">pineapple</a></p>
                        <p class="product-price">5.99 &#36;/u</p>
                    </div>
                </div>
            </div>  
        </section>
        <br>
        <hr class="grey-hr">
    </section>
    <section class="footer">
        <footer class="footer-nav">
            <a href="#about" class="about-link">About</a>
            <a href="#socials" class="socials-link">socials</a>
            <a href="#contact-us" class="contact-link">contact us</a>
        </footer>
    </section>
</body>

</html>