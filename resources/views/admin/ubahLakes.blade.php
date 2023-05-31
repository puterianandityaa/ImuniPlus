<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container" align="center" style="padding-top: 100px;">
                    <form action="">
                        <div style="padding: 15px;">
                            <label for="">Nama</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan nama layanan kesehatan" value="RS Mitra Keluarga">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Alamat</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan alamat layanan kesehatan" value="Jalan Apa Yah">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Jadwal</label>
                            <select name="" id="" style="color:black;width: 200px;">
                                <option>-- Select --</option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                                <option value="c">c</option>
                            </select>
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
