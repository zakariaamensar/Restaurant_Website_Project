
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">
    <title>Royate | Login</title>
    <link rel="icon" href="media/favicon.ico">
</head>
<body>
    <div>
   <div class="box">
    <div class="container">
        <div class="top">
            <header>Login</header>
        </div>
        <form action="login_php.php" method ="POST">
        <div >
            <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        </div>
        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="" name="username">
            <i class='bx bx-user' ></i>
        </div>
        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name ="pass">
            <i class='bx bx-lock-alt'></i>
        </div>
        <div class="input-field">
            <input type="submit" class="submit" value="Login" id="" name="submit">
        </div>
        </form>
        
    </div>
</div>  


</body>
</html>