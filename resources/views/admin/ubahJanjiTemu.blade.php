<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.css')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @inlcude('admin.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container" align="center" style="padding-top: 100px;">
                    <form action="">
                        <div style="padding: 15px;">
                            <label for="">Nama</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan nama pendaftar" value="Udin Saprudin">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Alamat</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan alamat pendaftar" value="Jalan Jalan">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Nomor Telepon</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan alamat pendaftar" value="+6281209891725">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Email</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan alamat pendaftar" value="abc@gmail.com">
                        </div>
                        <div style="padding: 15px;">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- endinject -->
</body>

</html>
