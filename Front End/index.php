<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="app.css">
    <title>Restaurant</title>
</head>

<body>
    <section class="section1">
        <nav class="navBar">
            <img class="logo" src="media/logo.png" alt="">
            <div class="navOptions">
                <a href="#home" class="option">HOME</a>
                <a href="#about" class="option">ABOUT</a>
                <a href="#menu" class="option">MENU</a>
                <a href="#team" class="option">TEAM</a>
                <a href="#book" class="option">BOOK!</a>
                <a href="#blog" class="option">BLOG</a>
            </div>
            <div class="side-buttons">
                <img class="butt" src="media/crown-symbol.png" alt="">
                <img class="butt" src="media/crown-symbol.png" alt="">
                <img class="butt" src="media/crown-symbol.png" alt="">
            </div>
        </nav>

        <div class="funnel">
            <img src="media/crown-symbol.png" alt="" class="png">
            <h2 class="h2">We're Open</h2>
            <h1 class="h1">Best Burger</h1>
            <h3 class="h3">You Will Love It</h3>
            <a href="#book" class="order" >Book Now</a>

        </div>
    </section>

    <section class="section2">
        <h1 class="slogan" id="blog">WELCOME TO ROYATE</h1>
        <div class="cards">
            <div class="card">
                <img src="media/post-thumb-1.jpg" alt="" class="img1">
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, impedit
                    ducimus vitae voluptatibus asperiores animi recusandae iure itaque tempora sed nostrum quod in
                    deserunt vero molestiae sit odio hic!</p>
                <a href="#/" class="read-more">Read More</a>

            </div>
            <div class="card">
                <img src="media/post-thumb-2.jpg" alt="" class="img1">
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, impedit
                    ducimus vitae voluptatibus asperiores animi recusandae iure itaque tempora sed nostrum quod in
                    deserunt vero molestiae sit odio hic!</p>
                <a href="#/" class="read-more">Read More</a>

            </div>
            <div class="card">
                <img src="media/post-thumb-3.jpg" alt="" class="img1">
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, impedit
                    ducimus vitae voluptatibus asperiores animi recusandae iure itaque tempora sed nostrum quod in
                    deserunt vero molestiae sit odio hic!</p>
                <a href="#/" class="read-more">Read More</a>

            </div>
        </div>
    </section>

    <scetion class="section3">
        <h1 class="h1" >OUR FOOD MENU</h1>
        <div class="menu" id="menu">
            <div class="col">

                <h2 class="menu-type">MAIN COURSE:</h2>
                <div class="text">
                    <p class="p1">Mega Burger -----------> 200DH</p>
                    <p class="p1">Mega Burger -----------> 200DH</p>
                </div>

                <h2 class="menu-type">DRINKS:</h2>
                <div class="text">
                    <p class="p1">Mega Burger -----------> 200DH</p>
                    <p class="p1">Mega Burger -----------> 200DH</p>
                </div>

            </div>
            <div class="col">
                <h2 class="menu-type">SALADS:</h2>
                <div class="text">
                    <p class="p1">Mega Burger -----------> 200DH</p>
                    <p class="p1">Mega Burger -----------> 200DH</p>
                </div>

                <h2 class="menu-type">DESSERTS:</h2>
                <div class="text">
                    <p class="p1">Mega Burger -----------> 200DH</p>
                    <p class="p1">Mega Burger -----------> 200DH</p>
                </div>

            </div>
        </div>
    </scetion>


    <section class="section4" id="team">
        <h1 class="slogan">OUR TALENTED CHEFS</h1>
        <div class="cards">
            <div class="card">
                <img src="media/our-chef-1.jpg" alt="" class="img1">

            </div>
            <div class="card">
                <img src="media/our-chef-2.jpg" alt="" class="img1">


            </div>
            <div class="card">
                <img src="media/our-chef-3.jpg" alt="" class="img1">


            </div>
        </div>
    </section>

    <section class="section5">
        <img src="media/book-a-table.jpg" alt="" class="booking-img">
        <div class="booking" id="book">
            <p class="h1">BOOK A TABLE</p>
            <div class="booking-infos">

                <form action="index1.php" class="form" method="POST">
                    <div class="col">
                        <select name="people" id="People" class="fields" placeholder="People">
                            <option value="0">People</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">4</option>
                            <option value="4">4</option>
                        </select>
                
                        <input type="text" id="name" name="name" placeholder="Name" class="fields">
                        <input type="number" id="phone" name="phone" placeholder="Phone" class="fields">
                    </div>
                    <div class="col">
                        <input type="date" id="date" name="date" placeholder="Date" class="fields">
                        <input type="time" id="time" name="time" placeholder="Time" class="fields">
                        <input type="email" id="email" name="email" placeholder="Email" class="fields">
                        
                    </div>
                    <div>
                        <input type="submit" value="Book Now" class="book-btn"
                        >
                    </div>
                </form>
                </div>
            

        </div>
    </section>


    <footer class="footer" id="about">
        <img src="media/crown-symbol.png" alt="" class="logo">
        <section class="container">
            <div class="div">
                <h2 class="title">ABOUT US</h2>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae architecto veniam velit
                    eos illum fuga ea quo ipsam pariatur deleniti tempora iusto, perferendis voluptas, illo, nesciunt
                    quia minus esse odit.</p>
            </div>

            <div class="div">
                <h2 class="title">GET NEW OFFERS</h2>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae architecto veniam velit
                    eos illum fuga ea quo ipsam pariatur deleniti tempora iusto, perferendis voluptas, illo, nesciunt
                    quia minus esse odit.</p>
            </div>

            <div class="div">
                <h2 class="title">CONTACT US</h2>
                <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae architecto veniam velit
                    eos illum fuga ea quo ipsam pariatur deleniti tempora iusto, perferendis voluptas, illo, nesciunt
                    quia minus esse odit.</p>
            </div>

        </section>
        <p class="rights">©2022 Created by AMENSAR - TAHIR - GUILMI</p>
    </footer>
</body>

</html>