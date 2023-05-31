<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/home') }}">Imuni<span class="text-primary">Plus</a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/home') }}">I<span class="text-primary">P</a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('janji_temu') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Janji Temu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('vaksin') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-needle"></i>
                </span>
                <span class="menu-title">Vaksin</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('lakes') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-hospital-building"></i>
                </span>
                <span class="menu-title">Layanan Kesehatan</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('imunisasi') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-hospital"></i>
                </span>
                <span class="menu-title">Imunisasi</span>
            </a>
        </li>
    </ul>
</nav>