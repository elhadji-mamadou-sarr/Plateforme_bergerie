<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('storage/css/base.css') }}">
	<title>@yield('title')</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Khar-bi</span>
		</a>

        @if (Auth::user()->profils()->where('name', "Administrateur")->exists())

            <ul class="side-menu top">
                <li >
                    <a href="{{ route('admin.administrateur.index') }}">
                        <i class='bx bxs-group'></i>
                        <span class="text">Eleveurs</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('eleveur.mouton.index') }}">
                        <i class='bx bxs-dashboar'>
                            <img src="{{ asset('storage/mouton.png') }}" style="width: 45px;">
                        </i>
                        <span class="text">Moutons</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-shopping-bag-alt' ></i>
                        <span class="text">My Store</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-message-dots' ></i>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-group' ></i>
                        <span class="text">Membres</span>
                    </a>
                </li>
            </ul>

        @elseif(!Auth::user()->profils()->where('name', "Administrateur")->exists())

            <ul class="side-menu top">
                <li class="active">
                    <a href="{{ route('eleveur.mouton.index') }}">
                        <i class='bx bxs-dashboar'>
                            <img src="{{ asset('storage/mouton.png') }}" style="width: 45px;">
                        </i>
                        <span class="text">Moutons</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-shopping-bag-alt' ></i>
                        <span class="text">My Store</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bxs-message-dots' ></i>
                        <span class="text">Message</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class='bx bxs-group' ></i>
                        <span class="text">Membres</span>
                    </a>
                </li>
            </ul>

        @endif


		<ul class="side-menu">
			<li>
				<a href="#">
				<!--	<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span> -->
				</a>
			</li>
		</ul>


        <div class="side-menu">

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button
                @click.prevent="$root.submit();" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                    {{ __('Se deconnecter') }}
                </button>
            </form>

        </div>
	</section>

	<!-- SIDEBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a>
            <a href="{{ route('profile.show') }}" class="profile">
                {{ Auth::user()->personne->nom }}
                <img src="{{ asset('storage/' . Auth::user()->personne->photo) }}">
            </a>
        </nav>

            <button onclick="window.history.back()" style="margin-left: 10%; margin-top: 2%;">
                <i class='bx bx-chevron-left' ></i>Retour
            </button>

    </section>



    <div class="container mt-4">



        <div class="main">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" >
                    <ul class="my-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="">
                    @yield('content')
                </div>
        </div>

    </div>




</body>
</html>





<script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    allSideMenu.forEach(item=> {
        const li = item.parentElement;

        item.addEventListener('click', function () {
            allSideMenu.forEach(i=> {
                i.parentElement.classList.remove('active');
            })
            li.classList.add('active');
        })
    });




    // TOGGLE SIDEBAR
    const menuBar = document.querySelector('#content nav .bx.bx-menu');
    const sidebar = document.getElementById('sidebar');

    menuBar.addEventListener('click', function () {
        sidebar.classList.toggle('hide');
    })







    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
    const searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click', function (e) {
        if(window.innerWidth < 576) {
            e.preventDefault();
            searchForm.classList.toggle('show');
            if(searchForm.classList.contains('show')) {
                searchButtonIcon.classList.replace('bx-search', 'bx-x');
            } else {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
            }
        }
    })





    if(window.innerWidth < 768) {
        sidebar.classList.add('hide');
    } else if(window.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }


    window.addEventListener('resize', function () {
        if(this.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
    })



    const switchMode = document.getElementById('switch-mode');

    switchMode.addEventListener('change', function () {
        if(this.checked) {
            document.body.classList.add('dark');
        } else {
            document.body.classList.remove('dark');
        }
    })

</script>
