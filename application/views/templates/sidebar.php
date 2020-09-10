<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kintek</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>


    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin_home') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('about') ?>">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>About</span></a>
        </>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('visi') ?>">
            <i class="fas fa-fw fa-server"></i>
            <span>Visi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('portfolio') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Portfolio</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('contact') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Contact</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->