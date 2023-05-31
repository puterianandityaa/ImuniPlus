<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Imuniplus</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>

    <!-- navbar -->
    @include('user.navbar')


    <!--Carousel(?)-->
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life healtier with</span>
                <h1 class="display-4">Vaccine</h1>
                <a href="{{ url('reservation') }}">
                    <button class="btn btn-primary" id="form-login-open">Let's Vaccinate</button>
                </a>
            </div>
        </div>
    </div>


    <!-- .page-section -->

    <div class="page-section pb-0" id="about-us-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to ImuniPlus</h1>
                    <p class="text-grey mb-4 text-justify">Selamat datang di ImuniPlus, tempat terpercaya untuk
                        memenuhi kebutuhan imunisasi Anda dan keluarga. Kami adalah sebuah platform online yang
                        berkomitmen untuk meningkatkan kesehatan dan kebugaran melalui program imunisasi yang efektif
                        dan aman.

                        ImuniPlus didirikan dengan visi untuk menjembatani kesenjangan dalam pelayanan imunisasi. Kami
                        percaya bahwa setiap individu berhak mendapatkan perlindungan imunitas yang optimal untuk
                        menjaga kesehatan mereka. Dengan teknologi canggih dan tenaga medis yang berpengalaman, kami
                        berupaya memberikan solusi yang mudah diakses dan berkualitas tinggi.</p>
                    <a href="about.html" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/bg-doctor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.vaccine')

    @include('user.contact')

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
