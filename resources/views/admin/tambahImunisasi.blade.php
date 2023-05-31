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
                            <label for="">Nama LaKes</label>
                            <select name="" id="" style="color:black;width: 200px;">
                                <option>-- Select --</option>
                                <option value="RS Siloam">a</option>
                                <option value="RS Mitra Keluarga">b</option>
                                <option value="RS Permata Keluarga">c</option>
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Nama Vaksin</label>
                            <select name="" id="" style="color:black;width: 200px;">
                                <option>-- Select --</option>
                                <option value="BCG">a</option>
                                <option value="Polio 1">b</option>
                                <option value="Polio 2">c</option>
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Stok Vaksin</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan stok vaksin">
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
