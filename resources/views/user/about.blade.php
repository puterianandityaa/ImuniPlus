<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>Imuniplus</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    @include('user.navbar')

    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">About Us</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <!--About-->
    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp">
                    <h1 class="text-center mb-3">Welcome to Your ImuniPlus</h1>
                    <div class="text-lg text-justify">
                        <p>Selamat datang di ImuniPlus, tempat terpercaya untuk memenuhi kebutuhan imunisasi Anda dan
                            keluarga. Kami adalah sebuah platform online yang berkomitmen untuk meningkatkan kesehatan
                            dan kebugaran melalui program imunisasi yang efektif dan aman.</p>
                        <p>ImuniPlus didirikan dengan visi untuk menjembatani kesenjangan dalam pelayanan imunisasi.
                            Kami percaya bahwa setiap individu berhak mendapatkan perlindungan imunitas yang optimal
                            untuk menjaga kesehatan mereka. Dengan teknologi canggih dan tenaga medis yang
                            berpengalaman, kami berupaya memberikan solusi yang mudah diakses dan berkualitas tinggi.
                        </p>
                        <p>Kami menawarkan beragam jenis vaksin, mulai dari imunisasi bayi hingga vaksin dewasa, yang
                            dirancang untuk melindungi Anda dari penyakit serius dan melawan penyebaran penyakit
                            menular. Dalam mengembangkan jadwal imunisasi, kami mengacu pada pedoman dari organisasi
                            kesehatan terkemuka dan berkolaborasi dengan tenaga medis yang terlatih untuk memastikan
                            setiap langkah yang kami ambil sesuai dengan standar internasional.</p>
                        <p>Kami memahami betapa pentingnya kenyamanan dan keamanan bagi pasien kami. Oleh karena itu,
                            ImuniPlus menyediakan fasilitas imunisasi yang bersih dan steril, serta tim medis yang
                            berdedikasi untuk memberikan perawatan terbaik kepada Anda. Kami juga memastikan bahwa
                            proses pendaftaran dan pemberian vaksin berjalan lancar, dengan pilihan waktu yang fleksibel
                            dan penanganan yang ramah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--vaksin-->
    <div class="page-section" id="vaksin-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Our Vaccine</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                <div class="item">
                    <div class="card-vaksin">
                        <div class="header">
                            <img src="../assets/img/vaccine/vaksin_hepatitisA.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Hepatitis A</p>
                            <span class="text-sm text-grey">Vaksin untuk mencegah virus Hepatitis A yang menginfeksi
                                organ hati
                                (liver)</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-vaksin">
                        <div class="header">
                            <img src="../assets/img/vaccine/vaksin_hepatitisB.jpeg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Hepatitis B</p>
                            <span class="text-sm text-grey">Jenis vaksin hepatitis B dianjurkan diberikan sesaat setelah
                                bayi
                                lahir.</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-vaksin">
                        <div class="header">
                            <img src="../assets/img/vaccine/vaksin_BCG.jpeg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">BCG</p>
                            <span class="text-sm text-grey">Vaksin untuk mencegah tuberkulosis atau umum dikenal
                                TBC.</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-vaksin">
                        <div class="header">
                            <img src="../assets/img/vaccine/vaksin_HiB.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">HiB</p>
                            <span class="text-sm text-grey">Vaksin untuk mencegah penyakit meningitis dan
                                pneumonia.</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-vaksin">
                        <div class="header">
                            <img src="../assets/img/vaccine/vaksin_rotavirus.jpg" alt="">
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">Rotavirus</p>
                            <span class="text-sm text-grey">Vaksin untuk mencegah diare dan gangguan pencernaan pada
                                anak.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
