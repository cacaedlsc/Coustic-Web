<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cara Coustic</title>
        <link rel="icon" type="image/png" href="img/cara-title.png">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
        <!-- SECTION HEADER -->
        <section id="header">
            <a href="#"><img src="img/cara2.png" alt="" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="new.html">New</a></li>
                    <li><a href="second.html">Second</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="./logout.php" class="btn btn-primary">Log Out</a></li>
                    <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-bag"></i></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <!-- HOME PAGE -->
        <section id="hero">
            <h2>Halo! Selamat datang  <?= htmlspecialchars($_SESSION["username"]); ?>!</h2>
            <p><b>———————</b></p>
            <br>
            <h4>Penawaran Menarik Juni!</h4>
            <h2>Gitar Akustik Terbaik 2024</h2>
            <h1>Diskon Menarik s/d 55%</h1>
            <p>Menyambut bulan penuh gembira bersama Cara Coustic</p>
            <button>Shop Now!</button>
        </section>

        <!-- SECTION FITURE -->
        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6>Online Order</h6>
            </div> 
            <div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6>Affordable</h6>
            </div> 
            <div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6>Discounts</h6>
            </div> 
            </div> 
            <div class="fe-box">
                <img src="img/features/f6.png" alt="">
                <h6>Support</h6>
            </div>
        </section>

        <!-- SECTION PRODUK NEW ARRIVAL -->
        <section id="product1" class="section-p1">
            <h2>New Arrival Guitars!</h2>
            <p>Best Deal on June Fun with Cara Coustic</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/product-guitar-index/2010s Yamaha FG800 Folk Acoustic Guitar Natural.jpg" alt="">
                    <div class="des">
                        <span>Folk Acoustic Guitar Natural</span>
                        <h5>2010s Yamaha FG800</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.879.000 IDR</h4>
                    </div>
                    <a href="./2010s-yamaha-na.html"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/2023 Takamine GC5-NAT Natural Gloss.jpg" alt="">
                    <div class="des">
                        <span>Natural Gloss</span>
                        <h5>2023 Takamine GC5-NAT</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>3.879.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/cordoba c7 sp.jpg" alt="">
                    <div class="des">
                        <span>Classical Guitar Classic</span>
                        <h5>Cordoba C7 SP</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>2.060.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Ibanez IBANEZ AAD100-OPN Advanced Acoustic Dreadnought Akustik___.jpg" alt="">
                    <div class="des">
                        <span>Advanced Acoustic Dreadnought</span>
                        <h5>IBANEZ AAD100-OPN</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>4.000.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Cort 810OP.jpg" alt="">
                    <div class="des">
                        <span>Folk Acoustic Guitar</span>
                        <h5>Cort 810OP</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>2.540.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Taylor 110e Natural.jpg" alt="">
                    <div class="des">
                        <span>Folk Guitar Coustic Natural</span>
                        <h5>Taylor 110e</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>2.330.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Yamaha FG9 M Solid Mahogany.jpg" alt="">
                    <div class="des">
                        <span>Solid Mahogany</span>
                        <h5>Yamaha FG9 M</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.999.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index//Fender CD-60S Left-Handed _ Reverb.jpg" alt="">
                    <div class="des">
                        <span>Left-Handed</span>
                        <h5>Fender CD-60S</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>3.550.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </div>
        </section>

        <!-- SECTION BANNER MENGARAH KE ABOUT US -->
        <section id="banner" class="section-m1">
            <h4>About Cara Coustic</h4>
            <h2>EST. 2018<span> Always OFFER the Best Guitars</span> For Your Satisfication</h2>
            <button class="normal">About Us</button> 
        </section>

        <!-- SECTION PRODUK BEST SCOND -->
        <section id="product1" class="section-p1">
            <h2>THE BEST SECOND Guitars!</h2>
            <p>Best Deal on June Fun with Cara Coustic</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/product-guitar-index/2021 Yamaha FSX820C Natural.jpg" alt="">
                    <div class="des">
                        <span>Folk Acoustic Guitar Natural</span>
                        <h5>2021 Yamaha FSX820C</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>879.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/2024 Takamine JTAKP3DC Natural.jpg" alt="">
                    <div class="des">
                        <span>Natural Gloss</span>
                        <h5>2024 Takamine JTAKP3DC</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.019.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Cort E70-12OP.jpg" alt="">
                    <div class="des">
                        <span>Classical Guitar Classic</span>
                        <h5>Cort E70-12OP</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.060.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Cort L100OMGNS.jpg" alt="">
                    <div class="des">
                        <span>Left-Handed Guitar Classic</span>
                        <h5>Cort L100OMGNS</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>899.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Ibanez AAD100E-OPN.jpg" alt="">
                    <div class="des">
                        <span>Folk Acoustic Guitar</span>
                        <h5>Ibanez AAD100E-OPN</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.540.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Martin 000JR10.jpg" alt="">
                    <div class="des">
                        <span>Folk Guitar Coustic Natural</span>
                        <h5>Martin 000JR10</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.430.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Yamaha APX600-NT.jpg" alt="">
                    <div class="des">
                        <span>Solid Mahogany</span>
                        <h5>Yamaha APX600-NT</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.999.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/product-guitar-index/Yamaha FG820L Natural.jpg" alt="">
                    <div class="des">
                        <span>Natural Left-Handed</span>
                        <h5>Yamaha FG820L</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>1.550.000 IDR</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </div>
            <button class="normal">GET MORE</button>
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