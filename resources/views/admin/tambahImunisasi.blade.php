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
                    <form action="{{ url('upload_imunisasi') }}">
                        <div style="padding: 15px;">
                            <label for="">Nama Layanan Kesehatan</label>
                            <select name="lakes" id="" style="color:black;width: 200px;">
                                <option>-- Select --</option>
                                @foreach($lakess as $lakes)
                                <option value="{{ $lakes->id }}">{{ $lakes->nama_lakes }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Nama Vaksin</label>
                            <select name="vaksin" id="" style="color:black;width: 200px;">
                                <option>-- Select --</option>
                                @foreach($vaksins as $vaksin)
                                <option value="{{ $vaksin->id }}">{{ $vaksin->nama_vaksin }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="padding: 15px;">
                            <label for="stok">Stok Vaksin</label>
                            <input type="text" style="color:black" name="stok" placeholder="Tuliskan stok vaksin">
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
