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


    <title>Signup</title>
</head>

<body>

    <section class="container">
        <form action="majestic_signUp.php" class="form" method="post">
            <div class="rows">
                <img src="media/logo.png" alt="" class="logo">
            </div>
            <div class="rows">
                <label for="username" class="label">Full Name</label>
            </div>
            <div class="rows">
                <input type="text" id="username" name="username" placeholder="full name" class="field" required>
            </div>

            <div class="rows">
                <label for="phone" class="label">Phone Number</label>
            </div>
            <div class="rows">
                <input type="tel" id="phone" name="phone" placeholder="phone number" class="field" required>
            </div>
            <div class="rows">
                <label for="email" class="label">Email</label>
            </div>
            <div class="rows">
                <input type="email" id="email" name="email" placeholder="email" class="field" required>
            </div>
            <div class="rows">
                <label for="password" class="label">Password</label>
            </div>
            <div class="rows">
                <input type="password" id="password" name="password" placeholder="password" class="field" required>
            </div>
            <div class="status">
                <?php if (isset($_SESSION["state"])) { ?>
                    <p><?php echo $_SESSION['state'] ?></p>
                    <?php 
                    }
                    session_unset();
                    session_destroy()?>
                    
            </div>
            <div class="rows">
                <input type="submit" value="Sign Up" class="button" name="submit">
            </div>
            <p class="signup">You have already an account? <a href="majestic_LOGIN.php"
                class="signuptext">LOG IN</a></p>


        </form>
        

    </section>

</body>

</html>