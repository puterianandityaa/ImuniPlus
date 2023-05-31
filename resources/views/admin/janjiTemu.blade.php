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
                <div class="container" align="center" style="padding-top: 100px;">
                    <div class="card">
                        <div class="card-header">
                            Daftar Janji Temu
                        </div>
                        <div style="margin-bottom: 10px;" class="row">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table
                                    class=" table table-bordered table-striped table-hover datatable datatable-Lesson">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID User
                                            </th>
                                            <th>
                                                Nama
                                            </th>
                                            <th>
                                                Alamat
                                            </th>
                                            <th>
                                                Nomor Telepon
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                Udin Saprudin
                                            </td>
                                            <td>
                                                Jalan Jalan
                                            </td>
                                            <td>
                                                +6281209891725
                                            </td>
                                            <td>
                                                abc@gmail.com
                                            </td>
                                            <td>
                                                <a class="btn btn-xs btn-primary" href="{{ url('tambah_janji_temu') }}">
                                                    Ubah
                                                </a>
                                                <form
                                                    action=""
                                                    method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger"
                                                        value="Hapus">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                Didin Padidin
                                            </td>
                                            <td>
                                                Jalan Kemana Yak
                                            </td>
                                            <td>
                                                +6285312345678
                                            </td>
                                            <td>
                                                cba@gmail.com
                                            </td>
                                            <td>
                                                <a class="btn btn-xs btn-primary" href="{{ url('ubah_janji_temu') }}">
                                                    Ubah
                                                </a>
                                                <form
                                                    action=""
                                                    method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger"
                                                        value="Hapus">
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                Encep Surecep
                                            </td>
                                            <td>
                                                Jalan Di Tempat
                                            </td>
                                            <td>
                                                +6289843218765
                                            </td>
                                            <td>
                                                cab@gmail.com
                                            </td>
                                            <td>
                                                <a class="btn btn-xs btn-primary" href="ubah_janjitemu.html">
                                                    Ubah
                                                </a>
                                                <form
                                                    action=""
                                                    method="POST" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger"
                                                        value="Hapus">
                                                </form>
                                            </td>
                                        </tr>
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
    @include('admin.script')
    <!-- endinject -->
</body>

</html>
