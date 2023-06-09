<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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


    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
            <div class="container text-center wow fadeInUp">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reservation</li>
                    </ol>
                </nav>
                <h1 class="font-weight-normal">Reservation</h1>
            </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->



    <div class="page-section">
        <div class="container ">
            <h1 class="text-center wow fadeInUp">Your Reservation</h1>
            <div class="row mt-5">
                <div class="col-12">
                    <table class="table table-bordered reservation-table wow fadeInUp">
                        <thead>
                            <tr>
                                <th>Nama Anak</th>
                                <th>Vaksin</th>
                                <th>Layanan Kesehatan</th>
                                <th>Tanggal Imunisasi</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($janjiTemus as $data)
                            <tr>
                                <td>{{ $data->nama_anak }}</td>
                                <td>{{ $data->nama_vaksin }}</td>
                                <td>{{ $data->nama_lakes }}</td>
                                <td>{{ $data->tanggal_imunisasi }}</td>
                                <td class="text-center"><button class="btn btn-danger"><i
                                            class="uil uil-trash-alt"></i></button></td>
                                <td class="text-center"><button class="btn btn-secondary"><i
                                            class="uil uil-edit-alt"></i></button></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center wow fadeInUp">Make a Reservation</h1>

            <form class="reservation-form" action="{{url ('upload_pendaftar')}}">
                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <label for="reservation-kid-name">Nama Anak</label>
                        <input type="text" class="form-control" placeholder="Nama Anak" name="kid_name"id="reservation-kid-name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <label for="reservation-kid-old">Umur Anak (Bulan)</label>
                        <input type="text" class="form-control" placeholder="Umur Anak (bulan)" name="kid_age"
                            id="reservation-kid-old">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <label for="reservation-birth-kid">Tanggal Lahir Anak</label>
                        <input type="date" class="form-control" id="reservation-birth-kid" name="kid_birth">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="reservation-vaccine">Pilihan Vaksin</label>
                        <select name="vaccine" id="reservation-vaccine" class="custom-select">
                            @foreach ($vaksins as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_vaksin }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="reservation-hospital">Layanan Kesehatan</label>
                        <select name="hospital" id="reservation-hospital" class="custom-select">
                            @foreach ($lakess as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_lakes }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <label for="reservation-date">Tanggal Imunisasi</label>
                        <select name="date" id="reservation-date" class="custom-select">
                            @foreach ($lakess as $data)
                                <option value="{{ $data->id }}">{{ $data->jadwal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 align-item-center text-center">
                        <button type="submit" class="btn btn-primary bg-primary mt-3 wow zoomIn ">Reservation</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <br><br><br><br>


    <!--Footer-->
    @include('user.footer')

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/google-maps.js"></script>

    <script src="../assets/js/theme.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>
