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
            @include('admin.navbar')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container" align="center" style="padding-top: 100px;">
                    <div class="card">
                        <div class="card-header">
                            Daftar Vaksin
                        </div>
                        <div style="margin-bottom: 10px;" class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-success" href="{{ url('tambah_vaksin') }}">
                                    Tambah Vaksin
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table
                                    class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID Vaksin
                                            </th>
                                            <th>
                                                Nama Vaksin
                                            </th>
                                            <th>
                                                Deskripsi
                                            </th>
                                            <th>
                                                Umur Minimal
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vaksins as $vaksin)
                                        <tr>
                                            <td>
                                                {{ $vaksin->id }}
                                            </td>
                                            <td>
                                                {{ $vaksin->nama_vaksin }}
                                            </td>
                                            <td>
                                                {{ $vaksin->deskripsi_vaksin }}
                                            </td>
                                            <td>
                                                {{ $vaksin->umur_minimal }}
                                            </td>
                                            <td>
                                                <a class="btn btn-xs btn-primary"  href="/ubah_vaksin/{{$vaksin->id}}">
                                                    Ubah
                                                </a>
                                                <a class="btn btn-xs btn-danger"href="/delete_vaksin/{{$vaksin->id}}">
                                                    Hapus
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <script src="../../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
