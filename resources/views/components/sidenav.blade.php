<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
    <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">Kelola Data Pegawai</span>
    </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ ($active == 'home') ? 'active' : ' ' }}" href="/home">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-book-bookmark text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Home</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($active == 'pegawai') ? 'active' : ' ' }}" href="/pegawai">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Pegawai</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($active == 'jabatan') ? 'active' : ' ' }}" href="/jabatan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Jabatan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($active == 'pendidikan') ? 'active' : ' ' }}" href="/pendidikan">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Pendidikan</span>
        </a>
    </li>
    </ul>
</div>

</aside>