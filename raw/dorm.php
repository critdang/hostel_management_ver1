<?php
    include_once('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel</title>
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/grid_raw.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid wide">
                <!-- <button class="open-button" onclick="openForm()">Chat</button>
                <div class="mini_chat" id="chatForm">
                    <form action="" class= "chat__container">
                        <h1>Chat</h1>
                        <label for="msg"><b>Message</b></label>
                        <textarea placeholder="Type Message" name="msg" required></textarea>

                        <button type="submit" class="btn">Send</button>
                        <button type="button" class="btn" onclick="closeForm()">Close</button>
                    </form>
                </div> -->
                <nav class="header__navbar">
                    <div class="header__navbar-list">
                        <a href="" class="header__navbar-logo logo">
                            CASA 3
                        </a>
                    </div>
                    <ul class="header__navbar-list-menu">
                        <li class=" header__navbar-item ">
                            <a href="index.html" class=" header__navbar-link" >HOME</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="activities.html" class="header__navbar-link">ACTIVITIES</a>
                        </li>
                        <li class="header__navbar-item index-page">
                            <a href="dorm.html" class="header__navbar-link">DORM & ROOMS</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="location.html" class="header__navbar-link">LOCATION</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="about.html" class="header__navbar-link">ABOUT</a>
                        </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook-f"></i>
                                
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-instagram"></i>
                                </a>
                            </li>
                    </ul>
                    
                    <!-- kéo navbar vào -->
                    <input type="checkbox" id="check">
                    <label for="header__nav-mobile-input" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label>
                    <!-- label để check vào label nhưng affect toi input. Checkbox hiện overlay -->
                    <!-- <label for="header__nav-mobile-input">Check 1</label> -->
                    <input type="checkbox" hidden name="" class="header__nav-input" id="header__nav-mobile-input">

                    <!-- phủ màn hình. Click ngoài overlay để thoát -->
                    <label for="header__nav-mobile-input" class="header__nav-overlay"></label>


                    <!-- navbar mobile -->
                    <nav class="header__navbar-mobile">
                        <label for="header__nav-mobile-input" class="header__navbar-mobile-close">
                            <i class="fas fa-times"></i>
                        </label>
                        <ul class="header__navbar-mobile-list menu">
                            <li class=" header__navbar-mobile-item ">
                                <a href="index.html" class="active header__navbar-mobile-link" >HOME</a>
                            </li>
                            <li class="header__navbar-mobile-item">
                                <a href="activities.html" class="header__navbar-mobile-link">ACTIVITIES</a>
                            </li>
                            <li class="header__navbar-mobile-item index-page">
                                <a href="dorm.html" class="header__navbar-mobile-link">DORM & ROOMS</a>
                            </li>
                            <li class="header__navbar-mobile-item">
                                <a href="location.html" class="header__navbar-mobile-link">LOCATION</a>
                            </li>
                            <li class="header__navbar-mobile-item">
                                <a href="about.html" class="header__navbar-mobile-link">ABOUT</a>
                            </li>
                            <li class="header__navbar-mobile-item">
                                <a href="" class="header__navbar-mobile-link">
                                    <i class="header__navbar-icon fab fa-facebook-f"></i>
                                    <i class="header__navbar-icon fab fa-instagram"></i>
                                </a>
                            </li>
                            <!-- <li class="header__navbar-mobile-item">
                                <a href="" class="header__navbar-mobile-link">
                                    <i class="header__navbar-icon fab fa-instagram"></i>
                                </a>
                            </li> -->
                            <li class="header__navbar-mobile-item">
                                <button type="submit" class="header__navbar-book--btn ">
                                    Book
                                </button>
                            </li>
                        </ul>
                        <!-- <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook-f"></i>
                                
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-instagram"></i>
                                </a>
                            </li> -->
                        </ul>
                        
                    </nav>
                    <!-- navbar mobile -->

                    <!-- <ul class="header__navbar-list">
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook-f"></i>
                            
                            </a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="header__navbar-item">
                            <button type="submit" class="header__navbar-book--btn ">
                                Book
                            </button>
                        </li>
                    </ul>  -->
                </nav>
            </div>
        </header>
        <!-- activity -->
        
        
            <!-- /activities container -->
            <!-- Footer -->
            <footer class="footer">
                <div class="grid wide">
                    <!-- grid__row2 value -->
                    <div class="footer__container row">
                        <div class="grid__column_3-4 footer__conatiner col c-12 m-6 l-3">
                            <div class="footer-list">
                                <a href="" class="footer__logo header__navbar-logo logo">
                                    CASA 3
                                </a>
                            </div>
                        </div>

                        <div class="grid__column_3-4 col c-12 m-6 l-3">
                            <div class="footer-list">
                                <p class="footer__item">
                                    500 Terry Francois Street
                                    <br>
                                    San Francisco, CA 94158
                                    <br>
                                    info@mysite.com
                                </p>
                            </div>
                        </div>
                        <div class="grid__column_3-4 col c-12 m-6 l-3">
                            <ul class="footer-list">
                                <a class="footer__item">
                                        Tel: 123-456-7890
                                </a>
                                <br>
                                <a class="footer__item">
                                        Fax: 123-456-7890
                                </a>
                            </ul>
                        </div>
                        <div class="grid__column_3-4 col c-12 m-6 l-3">
                            <div class="footer-list">
                                <div class="footer-item ">
                                    <a href="" class="footer-item__link">
                                        <i class="header__navbar-icon fab fa-facebook-f"></i>
                                    </a>
                                    <a href="" class="footer-item__link">
                                        <i class="header__navbar-icon fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="footer__bottom row">
                    <div class="grid_text col c-12 m-12 l-12">
                        <div class="footer__text">
                            © 2023 by CASA 3. Proudly created with Crit Dang
                        </div>
                    </div>
                </div>
            </footer>
    <script type="text/javascript">
        // window.addEventListener("scroll",function(){
            window.addEventListener("scroll",function() { 
            var navbar = document.querySelector("header");
            var sticky = navbar.offsetTop;
            var a = window.pageYOffset;
            console.log(a);
            console.log(sticky);
            navbar.classList.toggle("sticky",window.scrollY>0)
                // if (window.pageYOffset >= sticky) {
                //     navbar.classList.add("sticky")
                // } else {
                //     navbar.classList.remove("sticky");
                // }
        })
    </script>
    <script type="text/javascript" src="app.js"></script>
</body>
</html>