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
                            Daftar Imunisasi
                        </div>
                        <div style="margin-bottom: 10px;" class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-success" href="{{ url('tambah_imunisasi') }}">
                                    Tambah Imunisasi
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
                                                ID Imunisasi
                                            </th>
                                            <th>
                                                Nama Layanan Kesehatan
                                            </th>
                                            <th>
                                                Nama Vaksin
                                            </th>
                                            <th>
                                                Stok Vaksin
                                            </th>
                                            <th>
                                                &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($imunisasis as $imunisasi)
                                        <tr>
                                            <td>
                                                {{ $imunisasi->id }}
                                            </td>
                                            <td>
                                                {{ $imunisasi->layanan_kesehatans->nama_lakes }}
                                            </td>
                                            <td>
                                                {{ $imunisasi->vaksins->nama_vaksin }}
                                            </td>
                                            <td>
                                                {{ $imunisasi->stok_vaksin }}
                                            </td>
                                            <td>
                                                <a class="btn btn-xs btn-primary" href="{{ url('ubah_imunisasi') }}">
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
    @include('admin.script')
    <!-- endinject -->
</body>

</html>
