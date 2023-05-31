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
                            <label for="">Nama Vaksin</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan nama vaksin">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Deskripsi</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan deskripsi">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Umur Minimal</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan umur minimal penerima vaksin">
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
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    @include('admin.script')

    <!-- endinject -->
</body>

</html>
