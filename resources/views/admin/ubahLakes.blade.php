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
                    <form action="/update_lakes/{{$lakes->id}}">
                        <div style="padding: 15px;">
                            <label for="">Nama</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan nama layanan kesehatan" value="{{$lakes->nama_lakes}}">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Alamat</label>
                            <input type="text" style="color:black" name="address"
                                placeholder="Tuliskan alamat layanan kesehatan" value="{{$lakes->alamat}}">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Jadwal</label>
                            <input type="text" style="color:black" name="schedule"
                                placeholder="(Senin,09.00-12.00)" value="{{$lakes->jadwal}}">
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
