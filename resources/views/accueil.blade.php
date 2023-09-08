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

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                    <a href="{{ route('detail.mouton', $mouton) }}">
                      <img src="{{ asset('storage/' .$mouton->image) }}" alt="card">
                    </a>
                     <h4>{{ $mouton->nom_mouton }}</h4>
                     <div class="price">prix: {{ $mouton->prix }} f</div>

                     <a href="#" class="btn">Acheter</a>
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

                       <a href="#" class="btn">Acheter</a>
                    </div>

                @endforeach

              </div>

        </div>



    </section>

    <section class="desc">
            <div class="description">
                <h3>Descriptio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eligendi iusto mollitia repellendus ex laboriosam perferendis
                     unde praesentium, ratione tempore, assumenda repellat. Ad voluptates, excepturi
                     officia dolorum praesentium quo rem!</p>
            </div>

            <div class="nous">
                <h3>A propos de nous</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eligendi iusto mollitia repellendus ex laboriosam perferendis
                     unde praesentium, ratione tempore, assumenda repellat. Ad voluptates, excepturi
                     officia dolorum praesentium quo rem!</p>
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

    .desc{
        display: flex;
    }
    @media(max-width:991px){

         .desc{
                display: block;
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
