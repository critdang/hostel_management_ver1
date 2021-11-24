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
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <div class="header__navbar-list">
                        <a href="" class="header__navbar-logo logo">
                            CASA 3
                        </a>
                    </div>
                    <ul class="header__navbar-list-menu">
                        <li class=" header__navbar-item index-page">
                            <a href="" class=" header__navbar-link" >HOME</a>
                        </li>
                        <li class="header__navbar-item">
                            <a href="activities.html" class="header__navbar-link">ACTIVITIES</a>
                        </li>
                        <li class="header__navbar-item">
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
                            <li class=" header__navbar-mobile-item index-page">
                                <a href="" class=" header__navbar-mobile-link" >HOME</a>
                            </li>
                            <li class="header__navbar-mobile-item">
                                <a href="activities.html" class="header__navbar-mobile-link">ACTIVITIES</a>
                            </li>
                            <li class="header__navbar-mobile-item">
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
        <!-- slider -->
        <div class="slider">
            <div class="grid">
                <div class="slidershow-container">
                    <div class="slide__item fade">
                        <img src="./assets/img/img1.jpg" alt="">
                        <div class="text">Caption Text</div>
                    </div>
                    <div class="slide__item fade">
                        <img src="./assets/img/img1.jpg" alt="">
                        <div class="text">Caption Text</div>
                    </div>
                    <div class="slide__item fade">
                        <img src="./assets/img/img1.jpg" alt="">
                        <div class="text">Caption Text</div>
                    </div>
                    <div class="slide__item fade">
                        <img src="./assets/img/img1.jpg" alt="">
                        <div class="text">Caption Text</div>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">
                        &#10094;
                    </a>
                    <a class="next" onclick="plusSlides(1)">
                        &#10095;
                    </a>
                    <br>
                    <!-- The dots/circles -->
                    <div class="slide__dots">
                        <span class="slide__dot" onclick="currentSlide(1)"></span>
                        <span class="slide__dot" onclick="currentSlide(2)"></span>
                        <span class="slide__dot" onclick="currentSlide(3)"></span>
                        <span class="slide__dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- about -->
        <div class="about">
            <div class="grid wide">
                <div class="row">
                    <div class="about__container col c-12 l-12 m-12">
                        <div class="about__container-item">
                            <h1 class="about__title">
                                About our casa
                            </h1>
                        </div>
                        <div class="about__container-item">
                            <p class="about_desc grid__text">
                                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                            </p>
                        </div>
                        <div class="about__container-item">
                            <div class="about__submit">
                                <a href="about.html" class="about__submit--btn btn btn--normal">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- components about -->
            <div class="about__component">
                <div class="grid wide">
                    <div class="about__component-desc row">
                        <!-- <div class=" "> -->
                            <div class="grid__column-5 col c-12 m-12 l-6">
                                <div class="about__component-item ">
                                    <div class="about__component-image ">
                                        <img src="https://static.wixstatic.com/media/94e66f_e94638f277634467a7be81e5cf236e65~mv2.jpg/v1/fill/w_450,h_475,al_c,q_80,usm_0.66_1.00_0.01/94e66f_e94638f277634467a7be81e5cf236e65~mv2.webp" alt="" class="about__component-image1">
                                        <img src="https://static.wixstatic.com/media/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.jpeg/v1/fill/w_454,h_450,al_c,q_80,usm_0.66_1.00_0.01/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.webp" alt="" class="about__component-image2">
                                    </div>
                                </div>
                            </div>
                            <div class="grid__column-5 col c-12 m-12 l-6 ">
                                <div class="about__component-item ">
                                    <div class="about__component-desc--num">
                                        <h1>01</h1>
                                    </div>
                                    <div class="about__component-desc--title">
                                        <p>
                                            Share A Room
                                        </p>
                                    </div>
                                    <div class="about__component-desc--detail">
                                        <p>
                                            I'm a paragraph. Click here to add your own text and edit me. It’s easy.
                                            Just click “Edit Text” or double click me to add your own content and make changes to the font.
                                            Feel free to drag and drop me anywhere you like on your page.
                                            I’m a great place for you to tell a story and let your users know a little more about you
                                        </p>
                                    </div>
                                    <div class="about__component-desc--btn">
                                        <a href="dorm.html" class="about__component-desc--btn btn btn--normal">
                                            BOOK A ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="about__component-desc "> -->
                            <div class="grid__column-5 col c-12 m-12 l-6">
                                <div class="about__component-item about__component-image ">
                                    <img src="https://static.wixstatic.com/media/94e66f_e94638f277634467a7be81e5cf236e65~mv2.jpg/v1/fill/w_450,h_475,al_c,q_80,usm_0.66_1.00_0.01/94e66f_e94638f277634467a7be81e5cf236e65~mv2.webp" alt="">
                                    <img src="https://static.wixstatic.com/media/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.jpeg/v1/fill/w_454,h_450,al_c,q_80,usm_0.66_1.00_0.01/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.webp" alt="" class="about__component-image2">

                                </div>
                            </div>
                            <div class="grid__column-5 col c-12 m-12 l-6 ">
                                <div class="about__component-desc about__component-item">
                                    <div class="about__component-desc--num">
                                        <h1>02</h1>
                                    </div>
                                    <div class="about__component-desc--title">
                                        <p>
                                            Share A Room
                                        </p>
                                    </div>
                                    <div class="about__component-desc--detail">
                                        <p>
                                            I'm a paragraph. Click here to add your own text and edit me. It’s easy.
                                            Just click “Edit Text” or double click me to add your own content and make changes to the font.
                                            Feel free to drag and drop me anywhere you like on your page.
                                            I’m a great place for you to tell a story and let your users know a little more about you
                                        </p>
                                    </div>
                                    <div class="about__component-desc--btn">
                                        <a href="dorm.html" class="about__component-desc--btn btn btn--normal">
                                            BOOK A ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="about__component-desc"> -->
                            <div class="grid__column-5 col c-12 m-12 l-6">
                                <div class="about__component-item about__component-image">
                                    <img src="https://static.wixstatic.com/media/94e66f_e94638f277634467a7be81e5cf236e65~mv2.jpg/v1/fill/w_450,h_475,al_c,q_80,usm_0.66_1.00_0.01/94e66f_e94638f277634467a7be81e5cf236e65~mv2.webp" alt="">
                                    <img src="https://static.wixstatic.com/media/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.jpeg/v1/fill/w_454,h_450,al_c,q_80,usm_0.66_1.00_0.01/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.webp" alt="" class="about__component-image2">

                                </div>
                            </div>
                            <div class="grid__column-5 col c-12 m-12 l-6">
                                <div class="about__component-desc about__component-item">
                                    <div class="about__component-desc--num">
                                        <h1>03</h1>
                                    </div>
                                    <div class="about__component-desc--title">
                                        <p>
                                            Share A Room
                                        </p>
                                    </div>
                                    <div class="about__component-desc--detail">
                                        <p>
                                            I'm a paragraph. Click here to add your own text and edit me. It’s easy.
                                            Just click “Edit Text” or double click me to add your own content and make changes to the font.
                                            Feel free to drag and drop me anywhere you like on your page.
                                            I’m a great place for you to tell a story and let your users know a little more about you
                                        </p>
                                    </div>
                                    <div class="about__component-desc--btn">
                                        <a href="dorm.html" class="about__component-desc--btn btn btn--normal">
                                            BOOK A ROOM
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="grid">
                    <div class="about__container">
                        <div class="about__container-item">
                            <h1 class="about__title">
                                FACILITIES
                            </h1>
                        </div>
                        <div class="about__container-item">
                            <p class="about_desc grid__text">
                                I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your
                                users know a little more about you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <!-- <div class="row"> -->
                        <div class="facility-list row">
                            <div class="facility__item col c-12 m-4 l-4">
                                <a href="" class="facility__item--img">
                                    <img src="https://static.wixstatic.com/media/84770f_615b07bf2c2e4035b8d04e934c350595~mv2_d_3500_2338_s_2.jpeg/v1/fit/w_599,h_604,q_90/84770f_615b07bf2c2e4035b8d04e934c350595~mv2_d_3500_2338_s_2.webp)" alt="">
                                </a>
                                <div class="facility__content">
                                    <h1>Free Wifi</h1>
                                    <p>lorem </p>
                                </div>
                            </div>
                            <div class="facility__item col c-12 m-4 l-4">
                                <a href="" class="facility__item--img">
                                    <img src="https://static.wixstatic.com/media/c68ff7b87c084d20b01e349e515cfb6a.jpeg/v1/fit/w_599,h_604,q_90/c68ff7b87c084d20b01e349e515cfb6a.webp)" alt="">
                                </a>
                                <div class="facility__content">
                                    <h1>Free Wifi</h1>
                                    <p>lorem </p>
                                </div>
                            </div>
                            <div class="facility__item col c-12 m-4 l-4">
                                <a href="" class="facility__item--img">
                                    <img src="https://static.wixstatic.com/media/449ea3f729b54ff39329332fb1d5f00b.jpg/v1/fit/w_599,h_604,q_90/449ea3f729b54ff39329332fb1d5f00b.webp)" alt="">
                                </a>
                                <div class="facility__content">
                                    <h1>Free Wifi</h1>
                                    <p>lorem </p>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                
            </div>
        </div>
    </div>
    
            <!-- about facilities -->
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
    <script src="./js/slider.js"></script>
    <script type="text/javascript">
        // window.addEventListener("scroll",function(){
            window.addEventListener("scroll",function() { 
            var navbar = document.querySelector("header");
            var sticky = navbar.offsetTop;
            var a = window.pageYOffset;
            navbar.classList.toggle("sticky",window.scrollY>0)
                // if (window.pageYOffset >= sticky) {
                //     navbar.classList.add("sticky")
                // } else {
                //     navbar.classList.remove("sticky");
                // }
        })
    </script>
</body>

</html>