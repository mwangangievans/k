<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="hover.css" type="text/css" /> -->
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Judy-K Salon</title>
</head>
<body>
<header>

<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="{{ URL::to('/') }}">
    <img src="{{url('/images/logo.png')}}" />

        </img>Judy-K Salon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="fa fa-bars"></span>
</button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
           
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/Services') }}">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/Products') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/Contact') }}">Contact Us</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                                <a style="color:blue;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        
        </ul>
       
    </div>
</nav>
</header>
<main class="py-4">
            @yield('content')
        </main>

<footer>
        <div class="container">
            <div class="row">
                <div class="footer-col footer-about col-sm">
                    <h5 class="footer-headding">Judy-K Salon</h5>
                    <p class="footer-para">Judy-K  Hair Salon is located in the beautiful South End of Meru. Our team of professional, talented, and continuously educated stylists are committed to working with each and every client to achieve the look that is best suited
                        for them.
                        <br /><br />We strive for the highest quality of service, while maintaining a fun, friendly, non-pretentious environment.<br /> <br />Stop in and see us today, or make an appoinment!</p>
                </div>
                <div class="footer-col col-sm">
                    <h5 class="footer-headding">Location</h5>
                    <p class="footer-para">667A Imenti Street <br /> Meru , MA 02118<br /><br /> P: 617.236.4449 <br /> E: judysalon@meru.com</p>

                    <h5 class="footer-headding">Hours</h5>
                    <p class="footer-para">Monday 12-8 | Tuesday 12-8 | Wednesday 10-8 Thursday 10-8 | Friday 10-8 | Saturday 9-6 Sunday 10-6</p>

                </div>
                <div class="footer-col col-sm">
                    <h5 class="footer-headding">Follow Us</h5>
                    <a class="footer_social hvr-pop" href="#"><i class="fab fa-facebook-square"></i></a>
                    <a class="footer_social hvr-pop" href="#"><i class="fab fa-twitter-square"></i></a>
                    <a class="footer_social hvr-pop" href="#"> <i class="fab fa-instagram"></i><br /></a><br /><br />
                    <img class="footer-img" src="images/footr-logo.png" alt="footrIcon">
                    <span id="footer-brand">Judy-K Salon</span>
                </div>
            </div>
        </div>


    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>