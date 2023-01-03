<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">

    <title>login</title>
</head>

<body>

    <section class="container">
        <form action="majestic_LOGIN.php " class="form" method="post">
            <div class="rows">
                <img src="media/logo.png" alt="" class="logo">
            </div>
            <div class="rows">
                <label for="username" class="label">Username</label>
            </div>
            <div class="rows">
                <input type="text" id="email" name="username" placeholder="username" class="field" required>
            </div>
            <div class="rows">
                <label for="password" class="label">Password</label>
            </div>
            <div class="rows">
                <input type="password" id="password" name="password" placeholder="password" class="field" required>
            </div>
            <div class="rows">
                <input type="submit" name="submit" class="button" value="LOG IN"></input>
            </div>
            <div class="rows">
                <?php if(isset($_SESSION['state'])){?>

                    <p class="status"><?php echo $_SESSION['state']?></p>
                <?php }
                ;
                session_unset();
                session_destroy();
                ?>
            </div>
        </form>
        <p class="slogan">Let's enjoy the <b>BEST</b> burger in the city!</p>
        <p class="signup">Don't have an account? <a href="majestic_signUp.php"
                class="signuptext">Sign Up</a></p>
    </section>

</body>

</html>