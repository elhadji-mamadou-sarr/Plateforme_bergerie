<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login and Registration Form | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <link rel="stylesheet" href="{{ asset('storage/css/accueil.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>


    <div class="body">
        <header>
            <nav class="navbar">
                <span class="hamburger-btn material-symbols-rounded">menu</span>
                <a href="#" class="logo">
                    <img src="{{ asset('storage/kharBi.jpg') }}" alt="logo">
                    <h2>Khar-bi</h2>
                </a>
                <ul class="links">
                    <span class="close-btn material-symbols-rounded">close</span>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
                <button class="login-btn">Se connecter</button>
            </nav>
        </header>
        <div class="blur-bg-overlay"></div>
        <div class="form-popup">
            <span class="close-btn material-symbols-rounded">close</span>
            <div class="form-box login">
                <div class="form-details">
                    <h2>Welcome Back</h2>
                    <p>Please log in using your personal information to stay connected with us.</p>
                </div>

                <div class="form-content">

                    @include('auth.login')

                    <div class="bottom-link">
                        Don't have an account?
                        <a href="#" id="signup-link">Signup</a>
                    </div>
                </div>
            </div>
            <div class="form-box signup">
                <div class="form-details">
                    <h2>Create Account</h2>
                    <p>To become a part of our community, please sign up using your personal information.</p>
                </div>
                <div class="form-content">

                    @include('auth.register')

                    <div class="bottom-link">
                        Already have an account?
                        <a href="#" id="login-link">Login</a>
                    </div>

                </div>
            </div>
        </div>


    </div>
<!--
    <section class="shop-section">
        <div class="shop-images">
            @foreach ($moutons as $mouton)
                <div class="shop-link">
                    <h3>{{ $mouton->nom_mouton }} &amp; </h3>
                    <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">
                    <a href="{{ route('detail.mouton', $mouton) }}">Details</a>
                </div>
            @endforeach
        </div>
    </section>
-->


    <section class="products sectionn" id="products">


        <div class="swiper product-slider">

              <div class="swiper-wrapper">
                @foreach ($moutons as $mouton)

                    <div class="swiper-slide box">
                        <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">
                       <h3>{{ $mouton->nom_mouton }}</h3>
                       <div class="price">prix: {{ $mouton->prix }} f</div>
                       <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                       </div>
                       <a href="#" class="btn">ajouter à la panier</a>
                    </div>

                @endforeach

              </div>

        </div>

        <div class="swiper product-slider">

              <div class="swiper-wrapper">
                @foreach ($moutons as $mouton)

                    <div class="swiper-slide box">
                        <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">
                       <h3>{{ $mouton->nom_mouton }}</h3>
                       <div class="price">prix: {{ $mouton->prix }} f</div>
                       <div class="stars">
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                       </div>
                       <a href="#" class="btn">ajouter à la panier</a>
                    </div>

                @endforeach

              </div>

        </div>



  </section>







    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <i class="fab fa-slack"></i>
              <span class="logo_name">Kharb-bi</span>
            </div>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Company</li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Get started</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Services</li>
              <li><a href="#">App design</a></li>
              <li><a href="#">Web design</a></li>
              <li><a href="#">Logo design</a></li>
              <li><a href="#">Banner design</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Account</li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">My account</a></li>
              <li><a href="#">Prefrences</a></li>
              <li><a href="#">Purchase</a></li>
            </ul>
            <ul class="box">
              <li class="link_name">Courses</li>
              <li><a href="#">HTML & CSS</a></li>
              <li><a href="#">JavaScript</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Photoshop</a></li>
            </ul>
            <ul class="box input-box">
              <li class="link_name">Subscribe</li>
              <li><input type="text" placeholder="Enter your email"></li>
              <li><input type="button" value="Subscribe"></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">CodingLab.</a>All rights reserved</span>
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & condition</a>
            </span>
          </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


</body>
</html>



<style>

    /* Importing Google font - Open Sans */
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        .body {
            height: 100vh;
            width: 100%;
            background: url("/storage//gt.png") center/cover no-repeat;
            background-size: cover;
        }

        header {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 10;
            padding: 0 10px;
        }

        .navbar {
            display: flex;
            padding: 22px 0;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: space-between;
        }

        .navbar .hamburger-btn {
            display: none;
            color: #fff;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .navbar .logo {
            gap: 10px;
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .navbar .logo img {
            width: 40px;
            border-radius: 50%;
        }

        .navbar .logo h2 {
            color: #fff;
            font-weight: 600;
            font-size: 1.7rem;
        }

        .navbar .links {
            display: flex;
            gap: 35px;
            list-style: none;
            align-items: center;
        }

        .navbar .close-btn {
            position: absolute;
            right: 20px;
            top: 20px;
            display: none;
            color: #000;
            cursor: pointer;
        }

        .navbar .links a {
            color: #fff;
            font-size: 1.1rem;
            font-weight: 500;
            text-decoration: none;
            transition: 0.1s ease;
        }

        .navbar .links a:hover {
            color: #19e8ff;
        }

        .navbar .login-btn {
            border: none;
            outline: none;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);/*#fff;*/
            color: white/*#275360*/;
            font-size: 1rem;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 3px;
            cursor: pointer;
            transition: 0.15s ease;
        }

        .navbar .login-btn:hover {
            background: #ddd;
        }

        .form-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 10;
            width: 100%;
            opacity: 0;
            pointer-events: none;
            max-width: 720px;
            background: #fff;
            border: 2px solid #fff;
            transform: translate(-50%, -70%);
        }

        .show-popup .form-popup {
            opacity: 1;
            pointer-events: auto;
            transform: translate(-50%, -50%);
            transition: transform 0.3s ease, opacity 0.1s;
        }

        .form-popup .close-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            color: #878484;
            cursor: pointer;
        }

        .blur-bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            height: 100%;
            width: 100%;
            opacity: 0;
            pointer-events: none;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            transition: 0.1s ease;
        }

        .show-popup .blur-bg-overlay {
            opacity: 1;
            pointer-events: auto;
        }

        .form-popup .form-box {
            display: flex;
        }

        .form-box .form-details {
            width: 100%;
            color: #fff;
            max-width: 330px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login .form-details {
            padding: 0 40px;
            background: url("/storage//Bei.png") center/cover no-repeat;
            background-position: center;
            background-size: cover;
        }

        .signup .form-details {
            padding: 0 20px;
            background: url("/storage//ladoum.png") center/cover no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box .form-content {
            width: 100%;
            padding: 35px;
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 29px;
        }

        form .input-field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 20px;
        }

        .input-field input {
            height: 100%;
            width: 100%;
            background: none;
            outline: none;
            font-size: 0.95rem;
            padding: 0 15px;
            border: 1px solid #717171;
            border-radius: 3px;
        }

        .input-field input:focus {
            border: 1px solid #00bcd4;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #4a4646;
            pointer-events: none;
            transition: 0.2s ease;
        }

        .input-field input:is(:focus, :valid) {
            padding: 16px 15px 0;
        }

        .input-field input:is(:focus, :valid)~label {
            transform: translateY(-120%);
            color: #00bcd4;
            font-size: 0.75rem;
        }

        .form-box a {
            color: #00bcd4;
            text-decoration: none;
        }

        .form-box a:hover {
            text-decoration: underline;
        }

        form :where(.forgot-pass-link, .policy-text) {
            display: inline-flex;
            margin-top: 13px;
            font-size: 0.95rem;
        }

        form button {
            width: 100%;
            color: #fff;
            border: none;
            outline: none;
            padding: 14px 0;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 3px;
            cursor: pointer;
            margin: 25px 0;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);/*#00bcd4*/;
            transition: 0.2s ease;
        }

        form button:hover {
            background: linear-gradient(135deg, #9b59b6, #71b7e6);/*#0097a7*/;
        }

        .form-content .bottom-link {
            text-align: center;
        }

        .form-popup .signup,
        .form-popup.show-signup .login {
            display: none;
        }

        .form-popup.show-signup .signup {
            display: flex;
        }

        .signup .policy-text {
            display: flex;
            margin-top: 14px;
            align-items: center;
        }

        .signup .policy-text input {
            width: 14px;
            height: 14px;
            margin-right: 7px;
        }

        @media (max-width: 950px) {
            .navbar :is(.hamburger-btn, .close-btn) {
                display: block;
            }

            .navbar {
                padding: 15px 0;
            }

            .navbar .logo img {
                display: none;
            }

            .navbar .logo h2 {
                font-size: 1.4rem;
            }

            .navbar .links {
                position: fixed;
                top: 0;
                z-index: 10;
                left: -100%;
                display: block;
                height: 100vh;
                width: 100%;
                padding-top: 60px;
                text-align: center;
                background: #fff;
                transition: 0.2s ease;
            }

            .navbar .links.show-menu {
                left: 0;
            }

            .navbar .links a {
                display: inline-flex;
                margin: 20px 0;
                font-size: 1.2rem;
                color: #000;
            }

            .navbar .links a:hover {
                color: #00BCD4;
            }

            .navbar .login-btn {
                font-size: 0.9rem;
                padding: 7px 10px;
            }
        }

        @media (max-width: 760px) {
            .form-popup {
                width: 95%;
            }

            .form-box .form-details {
                display: none;
            }

            .form-box .form-content {
                padding: 30px 20px;
            }
    }

    /**********MAIN********/

    /**********MAIN********/


    /*section des image **/


        :root{
                --orange:#ff7800;
                --black: #130f40;
                --light-color: #666;
                --box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
                --border:.2rem solid rgba(0, 0, 0, .1);
                --outline:.1rem solid rgba(0, 0, 0, .1);
                --outline-hover:.2rem solid var(--black);
            }

            html{
                scroll-behavior: smooth;
                scroll-padding-top: 7rem;
            }

            .btn{
                margin-top: 1rem;
                margin-bottom: 2rem;
                display: inline-block;
                padding: .4rem 2rem;
                font-size: 1.5rem;
                border-radius: .5rem;
                border: 1px solid var(--black);
                color: var(--black);
                cursor: pointer;
                background: none;
            }

            .btn:hover{
                background:  linear-gradient(135deg, #71b7e6, #9b59b6);
                color: white;
            }


            section{
                padding: 2rem 9%;
                font-size: 62.5%;
            }


            .products .product-slider{
                padding: 1rem;
            }

            .products .product-slider:first-child{
                margin-bottom: 1rem;
            }

            .products .product-slider .box{
                background: #fff;
                border-radius: .5rem;
                text-align: center;
                padding-bottom: 2rem 2rem ;
                outline-offset: -1rem;
                outline: var(--outline);
                box-shadow: var(--box-shadow);
                transition:  .2s linear;
            }

            .products .product-slider .box a{
                text-decoration: none
            }

            .products .product-slider .box:hover{
                outline-offset: 0rem;
            }

            .products .product-slider .box img{
                height: 15rem;
            }

            .products .product-slider .box h3{
                font-size: 2.5rem;
                color: var(--black);
            }

            .products .product-slider .box .price{
                font-size: 2rem;
                color: var(--light-color);
                padding: .5rem 0;
            }

            .products .product-slider .box .price{
                font-size: 1.5rem;
                color: var(--light-color);
                padding: .5rem 0;
            }




            @media(max-width:991px){

                html{
                    font-size: 55%;
                }
                .header{
                    padding: 2rem;
                }

                section{
                    padding: 2rem ;
                }

                .chemise {
                    display: block;
                }

            }

            @media(max-width:768px){

                #menu-btn{
                    display: inline-block;
                }

                .header .seach-form {
                    width: 90%;
                }

                .header .navbar{
                    position: absolute;
                    top: 110%; right:-110%;
                    width: 30rem;
                    box-shadow: var(--box-shadow);
                    border-radius: .5rem;
                    background: #fff;
                }

                .header .navbar.active{
                    right: 2rem;
                    transition: .4s linear;
                }

                .header .navbar a{
                    font-size: 2rem;
                    margin: 2rem 2.5rem;
                    display: block;
                }

                .footer .box-container{
                    display: block;
                }


            }

            @media(max-width:450px){

                html{
                    font-size: 50%;
                }

                .heading{
                    font-size: 50%;
                }

                .footer{
                    text-align: center;
                }


        }


    /*section des image **/



    /*------------------Footer-----------------------*/

        footer{
        background: linear-gradient(135deg, #71b7e6, #9b59b6);/*#140B5C*/;
        width: 100%;
        bottom: 0;
        left: 0;
        }
        footer::before{
        content: '';
        position: absolute;
        left: 0;
        top: 100px;
        height: 1px;
        width: 100%;
        background: #AFAFB6;
        }
        footer .content{
        max-width: 1250px;
        margin: auto;
        padding: 30px 40px 40px 40px;
        }
        footer .content .top{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 50px;
        }
        .content .top .logo-details{
        color: #fff;
        font-size: 30px;
        }
        .content .top .media-icons{
        display: flex;
        }
        .content .top .media-icons a{
        height: 40px;
        width: 40px;
        margin: 0 8px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        color: #fff;
        font-size: 17px;
        text-decoration: none;
        transition: all 0.4s ease;
        }
        .top .media-icons a:nth-child(1){
        background: #4267B2;
        }
        .top .media-icons a:nth-child(1):hover{
        color: #4267B2;
        background: #fff;
        }
        .top .media-icons a:nth-child(2){
        background: #1DA1F2;
        }
        .top .media-icons a:nth-child(2):hover{
        color: #1DA1F2;
        background: #fff;
        }
        .top .media-icons a:nth-child(3){
        background: #E1306C;
        }
        .top .media-icons a:nth-child(3):hover{
        color: #E1306C;
        background: #fff;
        }
        .top .media-icons a:nth-child(4){
        background: #0077B5;
        }
        .top .media-icons a:nth-child(4):hover{
        color: #0077B5;
        background: #fff;
        }
        .top .media-icons a:nth-child(5){
        background: #FF0000;
        }
        .top .media-icons a:nth-child(5):hover{
        color: #FF0000;
        background: #fff;
        }
        footer .content .link-boxes{
        width: 100%;
        display: flex;
        justify-content: space-between;
        }
        footer .content .link-boxes .box{
        width: calc(100% / 5 - 10px);
        }
        .content .link-boxes .box .link_name{
        color: #fff;
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 10px;
        position: relative;
        }
        .link-boxes .box .link_name::before{
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 2px;
        width: 35px;
        background: #fff;
        }
        .content .link-boxes .box li{
        margin: 6px 0;
        list-style: none;
        }
        .content .link-boxes .box li a{
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        text-decoration: none;
        opacity: 0.8;
        transition: all 0.4s ease
        }
        .content .link-boxes .box li a:hover{
        opacity: 1;
        text-decoration: underline;
        }
        .content .link-boxes .input-box{
        margin-right: 55px;
        }
        .link-boxes .input-box input{
        height: 40px;
        width: calc(100% + 55px);
        outline: none;
        border: 2px solid #AFAFB6;
        background: #140B5C;
        border-radius: 4px;
        padding: 0 15px;
        font-size: 15px;
        color: #fff;
        margin-top: 5px;
        }
        .link-boxes .input-box input::placeholder{
        color: #AFAFB6;
        font-size: 16px;
        }
        .link-boxes .input-box input[type="button"]{
        background: #fff;
        color: #140B5C;
        border: none;
        font-size: 18px;
        font-weight: 500;
        margin: 4px 0;
        opacity: 0.8;
        cursor: pointer;
        transition: all 0.4s ease;
        }
        .input-box input[type="button"]:hover{
        opacity: 1;
        }
        footer .bottom-details{
        width: 100%;
        background: #0F0844;
        }
        footer .bottom-details .bottom_text{
        max-width: 1250px;
        margin: auto;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
        }
        .bottom-details .bottom_text span,
        .bottom-details .bottom_text a{
        font-size: 14px;
        font-weight: 300;
        color: #fff;
        opacity: 0.8;
        text-decoration: none;
        }
        .bottom-details .bottom_text a:hover{
        opacity: 1;
        text-decoration: underline;
        }
        .bottom-details .bottom_text a{
        margin-right: 10px;
        }
        @media (max-width: 900px) {
        footer .content .link-boxes{
            flex-wrap: wrap;
        }
        footer .content .link-boxes .input-box{
            width: 40%;
            margin-top: 10px;
        }
        }
        @media (max-width: 700px){
        footer{
            position: relative;
        }
        .content .top .logo-details{
            font-size: 26px;
        }
        .content .top .media-icons a{
            height: 35px;
            width: 35px;
            font-size: 14px;
            line-height: 35px;
        }
        footer .content .link-boxes .box{
            width: calc(100% / 3 - 10px);
        }
        footer .content .link-boxes .input-box{
            width: 60%;
        }
        .bottom-details .bottom_text span,
        .bottom-details .bottom_text a{
            font-size: 12px;
        }
        }
        @media (max-width: 520px){
        footer::before{
            top: 145px;
        }
        footer .content .top{
            flex-direction: column;
        }
        .content .top .media-icons{
            margin-top: 16px;
        }
        footer .content .link-boxes .box{
            width: calc(100% / 2 - 10px);
        }
        footer .content .link-boxes .input-box{
            width: 100%;
        }
        }
    /*------------------Footer-----------------------*/


</style>



<script>
    const navbarMenu = document.querySelector(".navbar .links");
    const hamburgerBtn = document.querySelector(".hamburger-btn");
    const hideMenuBtn = navbarMenu.querySelector(".close-btn");
    const showPopupBtn = document.querySelector(".login-btn");
    const formPopup = document.querySelector(".form-popup");
    const hidePopupBtn = formPopup.querySelector(".close-btn");
    const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");

    // Show mobile menu
    hamburgerBtn.addEventListener("click", () => {
        navbarMenu.classList.toggle("show-menu");
    });

    // Hide mobile menu
    hideMenuBtn.addEventListener("click", () =>  hamburgerBtn.click());

    // Show login popup
    showPopupBtn.addEventListener("click", () => {
        document.body.classList.toggle("show-popup");
    });

    // Hide login popup
    hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

    // Show or hide signup form
    signupLoginLink.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
        });
    });

    /*******Swiper pour les images **************/


        var swiper = new Swiper(".product-slider", {
            loop:true,
            spaceBetween: 20,
            autoplay: {
                delay: 7500,
                disbleOnInteraction: false,
            },
            breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1020: {
                slidesPerView: 3,
            },
            },
        });

        var swiper = new Swiper(".review-slider", {
            loop:true,
            spaceBetween: 20,
            autoplay: {
                delay: 7500,
                disbleOnInteraction: false,
            },
            breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1020: {
                slidesPerView: 3,
            },
            },
        });


    /*******Swiper pour les images **************/
</script>
