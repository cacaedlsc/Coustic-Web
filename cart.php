<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Cara Coustic</title>
    <link rel="icon" type="image/png" href="img/cara-title.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- SECTION HEADER -->
    <section id="header">
        <a href="#"><img src="img/cara2.png" alt="" class="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="new.html">New</a></li>
                <li><a href="second.html">Second</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="#"><i class="far fa-shopping-bag"></i></a></li>
                <li><a href="logout.php">Logout</a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="#"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <!-- CART CONTENT -->
    <section id="cart">
        <h2>Your Shopping Cart</h2>

        <div class="cart-items">
            <!-- Example of a cart item -->
            <div class="cart-item">
                <img src="img/product-guitar-index/2010s Yamaha FG800 Folk Acoustic Guitar Natural.jpg" alt="">
                <div class="item-details">
                    <h3>2010s Yamaha FG800 Folk Acoustic Guitar Natural</h3>
                    <p>Price: 1.879.000 IDR</p>
                    <p>Quantity: 1</p>
                    <button class="remove-item">Remove</button>
                </div>
            </div>

            <!-- Example of another cart item -->
            <div class="cart-item">
                <img src="img/product-guitar-index/2023 Takamine GC5-NAT Natural Gloss.jpg" alt="">
                <div class="item-details">
                    <h3>2023 Takamine GC5-NAT Natural Gloss</h3>
                    <p>Price: 3.879.000 IDR</p>
                    <p>Quantity: 1</p>
                    <button class="remove-item">Remove</button>
                </div>
            </div>

            <!-- You can repeat the structure above for each item in the cart -->
        </div>

        <div class="cart-summary">
            <h3>Cart Summary</h3>
            <p>Total Items: <span id="total-items">2</span></p>
            <p>Total Price: <span id="total-price">5.758.000 IDR</span></p>
            <button class="checkout-btn">Proceed to Checkout</button>
        </div>
    </section>

    <!-- SECTION FOOTER -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/cara2.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>Merbabu Raya No. 504, Kota Semarang, Jawa Tengah</p>
            <p><strong>Phone: </strong>(024) 98725 / (024) 25938</p>
            <p><strong>Hours: </strong>08.00 - 20.00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="copyright">
            <p>© 2024, Salsa E - 2201530047</p>
        </div>
    </footer>


    <script src="script.js"></script>
</body>

</html>
