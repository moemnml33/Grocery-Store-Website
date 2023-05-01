<?php
//Booleans for flow control
$incorrect_username = false;
$incorrect_password = false;
$forgot_password = false;
//If login button clicked
if (isset($_POST['login'])) {
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $password = $_POST['password']; 
    //If user exists
    if (file_exists($username . '.xml')) {
        $xml = new SimpleXMLElement($username . '.xml', 0, true);
        //If user exists and password is correct
        if ($password == $xml->password) {
            session_start();
            $_SESSION['username'] = $username;
            // if user is admin
            if ($_SESSION['username'] == 'admin') {
                header("Location: Aisles-page.php");
            }
            //redirect to home page if user is not admin
            else header("Location: Aisles-page.php");
        }
    //If user exists and password is not correct
    else $incorrect_password = true;
    }
    //If user does not exist
    else $incorrect_username = true;
}
//If forgot password clicked
if (isset($_POST['forgot_password'])) {
    $forgot_password = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="User-login-Page.css?v=<?php echo time(); ?>">
    <!-- google fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- w3 school links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Login</title>
</head>

<body>
    <section class="main-content">
        <br>
        <div class="login-div">
            <form id="login-form" class="login-form" method="post">
                <div class="username-div">
                    <!-- php - incorrect username/password - forgot password -->
                    <?php 
                        if ($incorrect_username) {
                            include 'incorrect-username.php';
                        }
                        if ($incorrect_password) {
                            include 'incorrect-password.php';
                        }
                        if ($forgot_password) {
                            include 'forgot-password.php';
                        }
                    ?>
                    <!-- *** -->
                    <label for="username" class="username-label" id="username-label">username</label>
                    <input type="text" id="username" class="username" name="username" required>
                </div>
                <div class="password-div">
                    <label for="password" class="password-label" id="password-label">Password </label>
                    <input type="password" class="password" id="password" name="password" required>
                </div>
            </form>
            <div class="sign-in-forget-div">
                <button type="submit" form="login-form" value="Login" name="login" class="sign-in-button">sign in</button>
                <button type="submit" class="forgot-password-button" form="login-form" value="ForgotPassword" name="forgot_password">Forgot my password</button>
            </div>
            <div>
                <p class="sign-up-p">New customer? <a href="Sign-up-Page.php" class="sign-up-link">sign up...</a></p>
            </div>
        </div>
    </section>
</body>

</html>