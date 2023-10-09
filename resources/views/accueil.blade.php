<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login and Registration Form | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('storage/css/accueil.css') }}">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>


    <div class="body">
        <header>
            <nav class="navbar">
                <span class="hamburger-btn material-symbols-rounded">menu</span>
                <a href="#" class="logo">
                    <img src="{{ asset('storage/logo.jpeg') }}" alt="logo">
                    <h2>Khar-bi</h2>
                </a>
                <ul class="links">
                    <span class="close-btn material-symbols-rounded">close</span>
                    <li><a href="#">Home</a></li>
                    <li><a href="#moutons">Moutons</a></li>
                    <li><a href="#apropos">A propos</a></li>
                    <li><a href="#races">Races</a></li>
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

                    @include('auth.ajouter_eleveur')

                    <div class="bottom-link">
                        Already have an account?
                        <a href="#" id="login-link">Login</a>
                    </div>

                </div>
            </div>
        </div>

        @if (session('success'))
        <div class="custom-modal" sty>
            <div class="succes succes-animation icon-top ">
                <i class="fa fa-check"></i>
            </div>
            <div class="succes border-bottom"></div>
            <div class="content">
                <p class="message-type">{{ session('success') }}</p>
            </div>
        </div>
        @endif



        <div style="text-align: center;" class="position-absolute top-50 start-50 translate-middle">
            <h1 style="color: white; padding-bottom: 30px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); font-size: 50px; ">
              Bienvenue sur <span style="color: #fff; font-weight: bold;">Khar-bi</span> <br>
               Votre destination pour
              <span style="font-style: italic; color: #71b7e6;">acheter et vendre des moutons en ligne</span>
            </h1>

            <a href="" class="decouvert" style="padding-left: 100px; padding-right: 100px; ">Découvrir</a>
          </div>




    </div>

    <section class="products sectionn" id="moutons" >

        <h1 class="titre text-center m-4" >Nos Moutons</h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">
                @foreach ($moutons as $mouton)

                    <div class="swiper-slide box">
                        <a href="{{ route('detail.mouton', $mouton) }}">
                        <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">
                        </a>
                        <h4>{{ $mouton->nom_mouton }}</h4>
                        <div class="price">prix: {{ $mouton->prix }} f</div>

                        <a href="{{ route('detail.mouton', $mouton) }}" class="btn">Acheter</a>
                    </div>

                @endforeach

            </div>

      </div>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">
                @foreach ($moutons as $mouton)

                    <div class="swiper-slide box">
                        <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">

                        <h4>{{ $mouton->nom_mouton }}</h4>
                        <div class="price">prix: {{ $mouton->prix }} f</div>

                       <a href="{{ route('detail.mouton', $mouton) }}" class="btn">Acheter</a>
                    </div>

                @endforeach
            </div>

        </div>

        <div class="m-4" style="text-align: center">
            <a href="" class="decouvert" style="margin-top: 50px;">Voir plus</a>
        </div>


    </section>

    <section class="desc" id="apropos" style="height: 800px; margin-bottom: 7%;">

        <img src="{{ asset('storage/apropos.png') }}" alt="" height="500px">

        <div class="ps d-block" style="height: 500px">
            <div class="t" style="padding-bottom: 40px;">
                <h1 class="titre">A propos de nous</h1>
            </div>
            <span style="font-size: 20px; margin-top:10%">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eligendi iusto mollitia repellendus ex laboriosam perferendis
                unde praesentium, ratione tempore, assumenda repellat. Ad voluptates, excepturi
                officia dolorum praesentium quo rem!
                officia dolorum praesentium quo rem!
            </span>
            <div class="v" style="margin-top: 8%">
                <a href="" class="decouvert" style="margin-top: 50px;">Voir plus</a>
            </div>

        </div>

    </section>


    <section class="sur" id="races" style="height: 900px;">

        <h1 class="titre text-center">Nos Races</h1>
        <div class="card-list">
                <a href="#" class="card-item">
                    <img src="{{ asset('storage/Bei.png') }}" alt="Card Image">
                    <span class="developer">Ladoum</span>
                    <div style="font-size: 20px; color: #515050;" >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Pariatur reiciendis dolor soluta ad omnis neque quisquam. Quod, autem repel</div>
                    <div class="arrow">
                        <i class="fas fa-arrow-right card-icon"></i>
                    </div>
                </a>
                <a href="#" class="card-item">
                    <img src="{{ asset('storage/gt.png') }}" alt="Card Image">
                    <span class="designer">Touwaber</span>
                    <div style="font-size: 20px; color: #515050;" >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Pariatur reiciendis dolor soluta ad omnis neque quisquam. Quod, autem repel</div>
                    <div class="arrow">
                        <i class="fas fa-arrow-right card-icon"></i>
                    </div>
                </a>
                <a href="#" class="card-item">
                    <img src="{{ asset('storage/apropos.png') }}" alt="Card Image">
                    <span class="editor">Balibali</span>
                    <div style="font-size: 20px; color: #515050;" >Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Pariatur reiciendis dolor soluta ad omnis neque quisquam. Quod, autem repel</div>
                    <div class="arrow">
                        <i class="fas fa-arrow-right card-icon"></i>
                    </div>
                </a>
            </div>

    </section>


    <section id="contact">

        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Surkhet, NP12</div>
                        <div class="text-two">Birendranagar 06</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+0098 9893 5647</div>
                        <div class="text-two">+0096 3434 5678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">codinglab@gmail.com</div>
                        <div class="text-two">info.codinglab@gmail.com</div>
                    </div>
                </div>

              <div class="right-side">
                <div class="topic-text">Send us a message</div>
                <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
                <form action="#">
                        <div class="input-box">
                        <input type="text" placeholder="Enter your name">
                        </div>
                        <div class="input-box">
                        <input type="text" placeholder="Enter your email">
                        </div>
                        <div class="input-box message-box">
                        <textarea name="message" id="" placeholder="Entrer votre message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="button">
                        <input type="button" value="Send Now" >
                        </div>
                </form>
            </div>

            </div>
        </div>

    </section>



    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
                <img src="{{ asset('storage/logo.jpeg') }}" alt="" width="50px" style="border-radius: 50%;">
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

    .decouvert{
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 35px;
        padding-right: 35px;
        text-decoration: none;
        font-weight: bold;
        color: white;
        font-size: 20px;
        border-radius: 10px;
    }

    .titre{
        color: black;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .sur{
        background: linear-gradient(to top, #d1d1d1, transparent);
    }

    .desc{
        display: flex;
        align-items: center;
        gap: 8%;
        background: #eee;
        height: 900px;
    }


    @media(max-width:991px){

        .desc{
            display: block;
        }
    }


    .card-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        max-width: 1250px;
        margin: 10px auto;
        padding: 40px;
        gap: 50px;
    }

    .card-list .card-item {
        background: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
        list-style: none;
        cursor: pointer;
        text-decoration: none;
        border: 2px solid transparent;
        transition: border 0.5s ease;
    }

    .card-list .card-item:hover {
        border: 2px solid #00000056;
    }

    .card-list .card-item img {
        width: 100%;
        aspect-ratio: 16/9;
        border-radius: 8px;
        object-fit: cover;
    }

    .card-list span {
        display: inline-block;
        background: #F7DFF5;
        margin-top: 32px;
        padding: 8px 15px;
        font-size: 0.75rem;
        border-radius: 50px;
        font-weight: 600;
    }

    .card-list .developer {
        background-color: #F7DFF5;
        color: #B22485;
    }

    .card-list .designer {
        background-color: #d1e8ff;
        color: #2968a8;
    }

    .card-list .editor {
        background-color: #d6f8d6;
        color: #205c20;
    }

    .card-item h3 {
        color: #000;
        font-size: 1.438rem;
        margin-top: 28px;
        font-weight: 600;
    }

    .card-item .arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        transform: rotate(-35deg);
        height: 40px;
        width: 40px;
        color: #000;
        border: 1px solid #000;
        border-radius: 50%;
        margin-top: 40px;
        transition: 0.2s ease;
    }

    .card-list .card-item:hover .arrow  {
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        color: #fff;
        border: none;
    }

    @media (max-width: 1200px) {
        .card-list .card-item {
            padding: 15px;
        }
    }

    @media screen and (max-width: 980px) {
        .card-list {
            margin: 0 auto;
        }
    }


    #contact{
        background: linear-gradient(to top, #d1d1d1, transparent);
        padding: 150px;
    }

    .container{
        width: 85%;
        background: #fff;
        border-radius: 6px;
        padding: 20px 60px 30px 40px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }
        .container .content{
        display: flex;
        align-items: center;
        justify-content: space-between;
        }
        .container .content .left-side{
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
        }
        .content .left-side::before{
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
        }
        .content .left-side .details{
        margin: 14px;
        text-align: center;
        }
        .content .left-side .details i{
        font-size: 30px;
        color:  #71b7e6;
        margin-bottom: 10px;
        }
        .content .left-side .details .topic{
        font-size: 18px;
        font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
        font-size: 14px;
        color: #afafb6;
        }
        .container .content .right-side{
        width: 75%;
        margin-left: 75px;
        }
        .content .right-side .topic-text{
        font-size: 23px;
        font-weight: 600;
        color: #71b7e6;
        }
        .right-side .input-box{
        height: 50px;
        width: 100%;
        margin: 12px 0;
        }
        .right-side .input-box input,
        .right-side .input-box textarea{
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
        }
        .right-side .message-box{
        min-height: 110px;
        }
        .right-side .input-box textarea{
        padding-top: 6px;
        }
        .right-side .button{
        display: inline-block;
        margin-top: 12px;
        }
        .right-side .button input[type="button"]{
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        cursor: pointer;
        transition: all 0.3s ease;
        }
        .button input[type="button"]:hover{
        background: #5029bc;
        }

        @media (max-width: 950px) {
        .container{
            width: 90%;
            padding: 30px 40px 40px 35px ;
        }
        .container .content .right-side{
        width: 75%;
        margin-left: 55px;
        }
        }
        @media (max-width: 820px) {
        .container{
            margin: 40px 0;
            height: 100%;
        }
        .container .content{
            flex-direction: column-reverse;
        }
        .container .content .left-side{
        width: 100%;
        flex-direction: row;
        margin-top: 40px;
        justify-content: center;
        flex-wrap: wrap;
        }
        .container .content .left-side::before{
        display: none;
        }
        .container .content .right-side{
        width: 100%;
        margin-left: 0;
        }
        }


        /***********************************
        Message de succes *****************/


        .succes {
            background-color: #4BB543;
        }

        .succes-animation {
            animation: succes-pulse 2s infinite;
        }


        .custom-modal {
            position: relative;
            width: 350px;
            min-height: 100px;
            background-color: #fff;
            border-radius: 30px;
            margin: 40px 10px;
        }

        .custom-modal .content {
            padding-top: 10px;
            width: 100%;
            text-align: center;
        }

        .custom-modal .content .type {
            font-size: 18px;
            color: #999;
        }

        .custom-modal .content .message-type {
            font-size: 24px;
            color: #000;
        }

        .custom-modal .border-bottom {
            position: absolute;
            width: 300px;
            height: 20px;
            border-radius: 0 0 30px 30px;
            bottom: -20px;
            margin: 0 25px;
        }

        .custom-modal .icon-top {
            position: absolute;
            width: 100px;
            height: 50px;
            border-radius: 50%;
            top: -30px;
            margin: 0 125px;
            font-size: 30px;
            color: #fff;
            line-height: 100px;
            text-align: center;
        }

        @keyframes succes-pulse {
            0% {
                box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
            }

            50% {
                box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .4);
            }

            100% {
                box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
            }
        }

        @keyframes danger-pulse {
            0% {
                box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
            }

            50% {
                box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .4);
            }

            100% {
                box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
            }
        }



        @media only screen and (max-width: 800px) {
            .page-wrapper {
                flex-direction: column;
            }
        }



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
