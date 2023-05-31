<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="../../index.html">Imuni<span class="text-primary">Plus</a>
                <a class="sidebar-brand brand-logo-mini" href="../../index.html">I<span class="text-primary">P</a>
            </div>
            <ul class="nav">
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="janjitemu.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-file-document-box"></i>
                        </span>
                        <span class="menu-title">Janji Temu</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="vaksin.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-needle"></i>
                        </span>
                        <span class="menu-title">Vaksin</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="lakes.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-hospital-building"></i>
                        </span>
                        <span class="menu-title">Layanan Kesehatan</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="imunisasi.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-hospital"></i>
                        </span>
                        <span class="menu-title">Imunisasi</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand" href="#">Imuni<span class="text-primary">Plus</span></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Admin</p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container" align="center" style="padding-top: 100px;">
                    <form action="">
                        <div style="padding: 15px;">
                            <label for="">Nama Vaksin</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan nama vaksin" value="BCG">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Deskripsi</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan deskripsi" value="Sekian...">
                        </div>
                        <div style="padding: 15px;">
                            <label for="">Umur Minimal</label>
                            <input type="text" style="color:black" name="name"
                                placeholder="Tuliskan umur minimal penerima vaksin" value="10">
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
