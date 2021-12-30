<nav class="navbar navbar-expand-xl navbar-up py-3">
    <div class="container-fluid px-3 px-xl-5">
        <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                <li class="nav-up-item menu"><a class="nav-up-link" href="index.html">Berita</a></li>
                <li class="nav-up-item menu"><a class="nav-up-link" href="index.html">Alumni</a></li>
                <li class="nav-up-item menu"><a class="nav-up-link" href="index.html">Pengumuman</a></li>
                <li class="nav-up-item menu"><a class="nav-up-link" href="index.html">FAQ</a></li>
            </ul>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-xl">
    <div class="container-fluid px-3 px-xl-5">
        <!-- Logo START -->
        <a class="navbar-brand" href="/">
            <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
            <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
        </a>
        <!-- Logo END -->

        <!-- Responsive navbar toggler -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-animation">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <!-- Main navbar START -->
        <div class="navbar-collapse w-100 collapse" id="navbarCollapse">      
                <ul class="navbar-nav mx-auto order-0">
                    <li class="nav-item menu"><a class="nav-link" href="/tentang">Tentang Kampus Gratis</a></li>
                    <li class="nav-item menu"><a class="nav-link" href="/pendidikan">Pendidikan</a></li>
                    <li class="nav-item menu"><a class="nav-link" href="/mahasiswa">Mahasiswa</a></li>
                    <li class="nav-item menu"><a class="nav-link" href="/penelitian">Penelitian</a></li>
                    <li class="nav-item menu"><a class="nav-link" href="/pengabdian">Pengabdian</a></li>
                </ul>
            <!-- Nav Main menu END -->

            <!-- Nav Search START -->
            <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                <div class="nav-item w-100">
                    <form class="position-relative">
                        <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                    </form>
                </div>
            </div>
            <!-- Nav Search END -->
        </div>
        <!-- Main navbar END -->

        <!-- Profile START -->
        <div class="dropdown ms-1 ms-lg-0">
            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
            </a>
            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                <!-- Profile info -->
                <li class="px-3">
                    <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <div class="avatar me-3">
                            <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
                        </div>
                        <div>
                            <a class="h6" href="#">Lori Ferguson</a>
                            <p class="small m-0">example@gmail.com</p>
                        </div>
                    </div>
                    <hr>
                </li>
                <!-- Links -->
                <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
                <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                <li> <hr class="dropdown-divider"></li>
                <!-- Dark mode switch START -->
                <li>
                    <div class="modeswitch-wrap" id="darkModeSwitch">
                        <div class="modeswitch-item">
                            <div class="modeswitch-icon"></div>
                        </div>
                        <span>Dark mode</span>
                    </div>
                </li> 
      <!-- Dark mode switch END -->
            </ul>
        </div>
        <!-- Profile START -->
    </div>
</nav>