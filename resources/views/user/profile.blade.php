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

<body class="profile-body">
    <!--navbar-->
    @include('user.navbar')

    <!--Section profile-->
    <div class="profile container bg-white" id="profile-section">
        <div class="row ">
            <div class="col-md-3 ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                        class="rounded-circle mt-100" style="width:150px"><span
                        class="font-weight-bold profile-name">Soeharto</span>
                    <span class="">Email</span><span> </span>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <form action="{{ url('upload_profile') }}" method="POST" enctype="multipart/form-data">
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Nama Lengkap</label>
                                <input type="text" placeholder="Nama Lengkap" name="namaprofile">
                            </div>
                            <div class="col-md-12"><label class="labels">No. HP</label>
                                <input type="text" placeholder="No. HP" name="nohp">
                            </div>
                            <div class="col-md-12"><label class="labels">Alamat</label>
                                <input type="text" placeholder="Alamat" name="alamat">
                            </div>
                            <div class="col-md-12"><label class="labels">NIK</label>
                                <input type="text" placeholder="NIK" name="nik">
                            </div>
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label>
                                <input type="text" placeholder="Laki-laki/Perempuan" name="jeniskelamin">
                            </div>
                            <div class="col-md-12"><label class="labels">Umur</label>
                                <input type="text" placeholder="Umur anda" name="umur">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button type="submit" class="btn btn-primary profile-button">Save Profile</button>
                        </div>

                    </form>


                </div>
            </div>

        </div>
    </div>

    <!--Footer-->
    @include('user.footer')
    
    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
