<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login and Registration Form | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('storage/css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/cardSlide.css') }}">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="boy">
        <header>
            <nav class="navbar">
                <span class="hamburger-btn material-symbols-rounded">menu</span>
                <a href="#" class="logo">
                    <img src="{{ asset('storage/logo.jpeg') }}" alt="logo">
                    <h2>Khar-bi</h2>
                </a>
                <ul class="links">
                    <span class="close-btn material-symbols-rounded">close</span>
                    <li><a href="{{ route('accueil') }}">Home</a></li>
                    <li><a href="#moutons">Moutons</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </nav>
        </header>



        <div class="galerie" style="margin-top: 50%; margin: 10%">
            <h1 class="titre-2">Galerie des Moutons</h1>
            <div class="row">
                @foreach ($moutons as $mouton)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <a href="{{ asset('storage/' . $mouton->image) }}" data-toggle="modal" data-target="#imageModal{{ $mouton->id }}">
                                <img src="{{ asset('storage/' . $mouton->image) }}" class="card-img-top" >
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="imageModal{{ $mouton->id_mouton }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="carousel{{ $mouton->id_mouton }}" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('storage/' . $mouton->image) }}" class="d-block w-100" alt="Image 1">
                                            </div>
                                            <!-- Ajoutez ici d'autres images du même mouton, si nécessaire -->
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel{{ $mouton->id_mouton }}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Précédent</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel{{ $mouton->id_mouton }}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Suivant</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



        <div class="containeur swiper" style="padding-bottom: 10%">
            <div class="slide-container">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ($moutons as $mouton)
                        <div class="card swiper-slide">
                            <div class="image-box">
                                <img src="{{ asset('storage/' . $mouton->image) }}" alt="" />
                            </div>
                            <div class="profile-details">
                                <!--<img src="images/profile/profile1.jpg" alt="" />-->
                                <div class="name-job">
                                    <h3 class="name">David Cardlos</h3>
                                    <h4 class="job">Full Stack Developer</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>

        </div>



          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
          <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>



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

.categories-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .category {
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .category a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

    .desc{
        display: flex;
    }
    @media(max-width:991px){

         .desc{
                display: block;
            }
    }

    .decouvrir{
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        font-weight: bold;
        color: white;
        padding: 10px;
        border: white;
        text-decoration: none;
        border-radius: 6px;
        padding-right: 10%;
        padding-left: 10%;
    }
    .decouvrir:hover{
        background: linear-gradient(135deg, #9b59b6, #71b7e6);
    }

    .titre-1{
        color: white;
        text-align: center;
        padding: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }


    .titre-2{
        color: black;
        text-align: center;
        padding: 10px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }


</style>



<script>

var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1000: {
        slidesPerView: 4,
      },
    },
  });

</script>
