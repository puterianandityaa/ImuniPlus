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
                                                Nama Anak
                                            </th>
                                            <th>
                                                Nama Lakes
                                            </th>
                                            <th>
                                                Nama Vaksin
                                            </th>
                                            <th>
                                                Umur Anak
                                            </th>
                                            <th>
                                                Tanggal Imunisasi
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
                                        @foreach ($janjiTemus as $janjiTemu)
                                        <tr>
                                            <td>
                                                {{ $janjiTemu->id }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->nama_anak }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->nama_lakes }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->nama_vaksin }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->umur_anak }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->tanggal_imunisasi }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->address }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->phone }}
                                            </td>
                                            <td>
                                                {{ $janjiTemu->email }}
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
