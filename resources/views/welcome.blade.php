<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item {
            height: 500px;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        .sticky {
            position: sticky;
            top: 0;
            z-index: 1000; /* Make sure it stays on top of other elements */
            background-color: white; /* Add background to prevent transparency */
           
        }
    </style>
</head>
<body>

   <div class="container">
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Marketplace Katering</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Akun
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                            <li><a class="dropdown-item" href="{{ route('show-login') }}">Login</a></li>
                        @endguest
                        @auth
                             <li><a class="dropdown-item" href="{{ route('profil') }}">Profil</a></li>
                             <li>
                                <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
                                    @csrf
                                </form>
                                <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                             </li>

                            
                        @endauth
                        
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="landingCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#landingCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#landingCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#landingCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/catering_1.jpg') }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to MyCompany</h5>
                    <p>Your trusted partner in success.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/catering_1.jpg') }}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Innovative Solutions</h5>
                    <p>We deliver cutting-edge technology for your needs.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/catering_1.jpg') }}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Grow with Us</h5>
                    <p>Let's achieve new heights together.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#landingCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#landingCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   </div>

    <!-- Product Offerings -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <h2 class="fw-bold">Our Products</h2>
                <p>Check out our latest offerings</p>
            </div>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/images/paket.jpg') }}" class="card-img-top" style="height: 250px" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This product is designed to meet all your expectations and deliver exceptional performance.</p>
                            <p class="card-text"><strong>Price: $99.99</strong></p> <!-- Added price -->
                            <p class="text-end">

                                <a href="#" class="btn btn-primary">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card">
                     <img src="{{ asset('assets/images/paket.jpg') }}" class="card-img-top" style="height: 250px" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This product is designed to meet all your expectations and deliver exceptional performance.</p>
                            <p class="card-text"><strong>Price: $99.99</strong></p> <!-- Added price -->
                            <p class="text-end">

                                <a href="#" class="btn btn-primary">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>

                 <div class="col-md-4">
                    <div class="card">
                       <img src="{{ asset('assets/images/paket.jpg') }}" class="card-img-top" style="height: 250px" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">This product is designed to meet all your expectations and deliver exceptional performance.</p>
                            <p class="card-text"><strong>Price: $99.99</strong></p> <!-- Added price -->
                            <p class="text-end">

                                <a href="#" class="btn btn-primary">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>

              
            </div>
        </div>
    </section>

    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">MyCompany</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">About</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Services</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow Us</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Facebook</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Twitter</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">Instagram</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark text-decoration-none">LinkedIn</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-white">
            © 2024 MyCompany
        </div>
        <!-- Copyright -->
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
