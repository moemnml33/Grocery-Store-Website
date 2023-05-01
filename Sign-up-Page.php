<?php 
session_start();
//booleans for flow control
$username_taken = false;
$passwords_unmatched = false;
//if sign up clicked
if (isset($_POST['sign_up'])) {
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    //If username exists
    if (file_exists($username . '.xml')) {
        $username_taken = true;
    }
    //If passwords do not match
    elseif ($password !== $confirm_password) {
        $passwords_unmatched = true;
    }
    //If username does not exist and passwords match
    elseif ($username_taken == false && $passwords_unmatched == false) {
        //create xml document with the inputted credentials 
        $xml = new SimpleXMLElement('<user></user>');
        $xml->addChild('username', $username);
        $xml->addChild('email', $email);
        $xml->addChild('password', $password);
        $xml->asXML($username . '.xml');
        //Redirect to login
        header('Location: User-login-page.php');
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="Sign-up-Page.css?v=<?php echo time(); ?>">
    <!-- google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- w3 school links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Sign Up</title>
</head>

<body>
    <section class="header">
        <!-- Main navigation bar -->
        <nav class="main-nav">
            <div class="Home-div">
                <a href="Aisles-page.php" class="home-link">Home</a>
            </div>
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

    <section class="main-content">
        <div class="sign-up-banner-div">Sign Up for the greatest deals!</div>
        <!-- php - username already taken and passwords do not match -->
        <?php 
            if ($username_taken) {
                include 'username-taken.php';
                $username_taken = false;
            }
            if ($passwords_unmatched) {
                include 'passwords-unmatched.php';
                $passwords_unmatched = false;
            }
        ?>
        <!-- *** -->
        <div class="sign-up-div">
            <form action="" id="personal-info-form" method="post">
                <div class="username-div">
                    <label for="username">*username</label>
                    <input type="text" class="username" name="username" id="username" placeholder="no numbers/special characters" required>
                </div> 
                <div class="email-div">
                    <label for="email" id="email-label">*email </label>
                    <input type="text" class="email" name="email" id="email" required>
                </div>
                <div class="password-div">
                    <label for="password" id="password-label">*password:</label>
                    <input type="password" class="password" name="password" id="password" placeholder="******************" required>
                </div>
                <div class="confirm-password-div">
                    <label for="confirm-password" id="confirm-password-label">*confirm password</label>
                    <input type="password" class="confirm-password" name="confirm_password" id="confirm-password" placeholder="******************" required>
                </div>
            </form>
            <div class="buttons-div">
                <button form="personal-info-form" type="submit" class="sign-up-button" value="sign-up" name="sign_up">Create account</button>
                <button form="personal-info-form" type="reset" class="reset-button">Start over</button>
            </div>
        </div>
        
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