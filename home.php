<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNTUA LMS Homepage</title>
    <style>
        /* Navigation Bar Styles */
        .navbar {
            background-color: #343a40;
            padding: 0.8rem 1rem;
        }
        .navbar-brand img {
            height: 30px;
        }
        .navbar-nav .nav-link {
            color: white;
            margin-right: 1rem;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .btn-primary {
            padding: 0.4rem 0.8rem;
        }

        /* Carousel Styles */
        .carousel {
            position: relative;
        }
        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel-item {
            display: none;
            position: relative;
            transition: opacity 0.6s ease-in-out;
        }
        .carousel-item.active {
            display: block;
            opacity: 1;
        }
        .carousel-caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            text-align: center;
        }
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: white;
            font-size: 30px;
        }
        .carousel-indicators li {
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            cursor: pointer;
        }
        .carousel-indicators .active {
            background-color: #007bff;
        }

        /* Features Section Styles */
        .bg-dark {
            background-color: #343a40;
        }
        .text-white {
            color: white;
        }
        .feature-box {
            border: 1px solid #555;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .feature-box i {
            color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo">
                JNTUA CEA LMS
            </a>
            <button class="navbar-toggler" type="button" onclick="toggleNav()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url ?>?page=lms">LMS Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url ?>?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-2" href="<?php echo base_url ?>admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel Section -->
    <div id="mainCarousel" class="carousel">
        <ol class="carousel-indicators">
            <li onclick="showSlide(0)" class="active"></li>
            <li onclick="showSlide(1)"></li>
            <li onclick="showSlide(2)"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="uploads/carousel/img1.jpeg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption">
                    <h1>Welcome to JNTUA LMS</h1>
                    <p>Streamline your leave management process</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/carousel/img2.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption">
                    <h1>Efficient Leave Management</h1>
                    <p>Track and manage employee leaves with ease</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/carousel/img3.jpg" class="d-block w-100" alt="Image 3">
                <div class="carousel-caption">
                    <h1>Smart Solutions</h1>
                    <p>Modern tools for the modern workforce</p>
                </div>
            </div>
        </div>
        <span class="carousel-control-prev" onclick="prevSlide()">‹</span>
        <span class="carousel-control-next" onclick="nextSlide()">›</span>
    </div>

    <!-- Features Section -->
    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="feature-box text-center p-4">
                        <i class="fas fa-calendar-check fa-3x mb-3"></i>
                        <h3>Easy Leave Application</h3>
                        <p>Submit and track leave applications </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="feature-box text-center p-4">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h3>Real-time Tracking</h3>
                        <p>Monitor leave balances and status in real-time</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-box text-center p-4">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h3>Team Management</h3>
                        <p>Efficiently manage your team's leave schedule</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentSlide = 0;
        const items = document.querySelectorAll('.carousel-item');
        const indicators = document.querySelectorAll('.carousel-indicators li');

        function showSlide(index) {
            items[currentSlide].classList.remove('active');
            indicators[currentSlide].classList.remove('active');
            currentSlide = index;
            items[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide((currentSlide + 1) % items.length);
        }

        function prevSlide() {
            showSlide((currentSlide - 1 + items.length) % items.length);
        }

        setInterval(nextSlide, 3000);

        // Navigation handling
        function handleNavigation() {
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.getAttribute('href').startsWith('#')) {
                        e.preventDefault();
                        const targetId = this.getAttribute('href').substring(1);
                        if (targetId === 'lms') {
                            window.location.href = '<?php echo base_url ?>?page=lms';
                        }
                    }
                });
            });
        }

        // Initialize navigation
        handleNavigation();
    </script>
</body>
</html>
