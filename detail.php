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
                            <a href="index.html" class="active header__navbar-link" >HOME</a>
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
                        <!-- icon fb, instagram -->
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
                         <!-- /icon fb, instagram -->
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
        <div class="about">
            <div class="about__desc">
                <div class="grid wide">
                    <div class="row">
                        <div class="about__container col c-12 m-12 l-12">
                            <div class="about__container">
                                <div class="about__container-item">
                                    <h1 class="about__title">
                                        activities
                                    </h1>
                                </div>
                                <div class="about__container-item">
                                    <p class="about_desc grid__text">
                                        I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="detail__container">
                    <div class="grid wide">
                        <div class="detail-nav">
                            <div class="detail-nave--back short">
                                <a href="dorm.html" class="fas fa-arrow-left"></a>
                            </div>
                            <h1>
                                Junior Suite
                                
                            </h1>
                        </div>
                        <div class="row">
                            
                            <div class="detail__item-slider col c-12 m-9 l-9">
                                <div class="detail__item--slider--img">
                                    <img src="https://static.wixstatic.com/media/fde015_de93aa6357c14c439e80f661e7a71e67.jpg/v1/fill/w_649,h_408,q_85,usm_0.66_1.00_0.01/fde015_de93aa6357c14c439e80f661e7a71e67.jpg" alt="">
                                    <div class="row">
                                        <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                            <h1>Properties:</h1>
                                        </div>
                                        <div class="long-line detail__item-desc col c-12 m-9 l-5">
                                        <p>
                                        Accommodates: 2
                                        </p>
                                        <p>Beds: 2 Double(s)</p>
                                        </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-4">
                                        <p>
                                            Size: 260 sq ft
                                        </p>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                        <h1>More Info:</h1>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-9">
                                        <p>
                                            Affordable luxury. Our Junior Suites are the perfect option if you’re looking for a little extra luxury. With an open 400 square foot floor plan, the Junior Suites offer the extra space you need to spread out and enjoy the breathtaking views of the city skyline.
                                        </p>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                        <h1>Amenities:</h1>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-5">
                                        <img src="./assets/img/mini-bar.svg" alt="">
                                        <img src="./assets/img/air-conditioner.svg" alt="">
                                        <img src="./assets/img/locker.svg" alt="">
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-4">
                                        <img src="./assets/img/screen.svg" alt="">
                                        <img src="./assets/img/wifi-line.svg" alt="">
                                    </div>
                                    <div class="long-line detail__item-desc--term col c-12 m-9 l-3">
                                        <h1>Term</h1>
                                    </div>
                                    <div class="long-line detail__item-desc--term col c-12 m-9 l-9">
                                        <a href="">Read Our Policies</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="detail__item-book col c-12 m-3 l-3">
                                <div class="detail__item-book--title">
                                    <p>From</p>
                                    <h1>$250</h1>
                                    <p>Per Night</p>
                                </div>
                                <div class="detail__book--value">
                                        <div class="detail__book-item">
                                            <label for = "checkin-date">Check In Date: </label>
                                            <input type="date" id="checkout" name="checkout">
                                        </div>
        
                                        <div class="detail__book-item">
                                            <label for = "checkout-date">Check Out Date: </label>
                                            <input type="date" id="checkout" name="checkout">
                                        </div>
        
                                        <div class="detail__book-item">
                                            <label for = "adult">Adults: </label>
                                            <input type = "number" min = "1" value = "1" id = "adult">
                                        </div>
        
                                        <div class="detail__book-item">
                                            <label for = "children">Children: </label>
                                            <input type = "number" min = "1" value = "1" id = "children">
                                        </div>
                                        <div class="detail__book-item">
                                            <label for = "rooms">Rooms: </label>
                                            <input type = "number" min = "1" value = "1" id = "rooms">
                                        </div>
                                        <div class = "detail__book-item">
                                            <input type = "submit" class = "btn-primary" value = "Search">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                    <div class="grid2">
                        
                    </div>
                </div>
            </div>
        </div>
        
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