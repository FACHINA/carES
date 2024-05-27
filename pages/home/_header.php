<nav class="navbar navbar-expand-lg py-0"  style="position: unset !important;">
    <a class="navbar-brand" href="#">
        <img class="d-none d-lg-block" src="../../assets/media/logo-title.png" height="62" alt="" srcset="">
        <img class="d-block d-lg-none" src="../../assets/media/logo.png" height="62" alt="" srcset="">
    </a>

    <div class="me-0 m-auto d-flex d-lg-none align-items-center">
        <button class="btn me-2 btn-primary text-uppercase fw-bold text-truncate" type="submit">
            <div class="-mb-px">Faire un don</div>
        </button>
        <button class="btn border-0 text-dark bg-transparent">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </button>
        <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="../../assets/media/logo-title.png" height="62" alt="" srcset="">
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 fw-semibold">
                <li class="nav-item dropdown crs-dropdown">
                    <a  class="nav-link dropdown-toggle-" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"  aria-expanded="false">
                        DECOUVRIR CaRes
                    </a>
                    <ul class="crs-dropdown-menu dropdown-menu rounded-0 z-n1 border-0 border-bottom">
                        <?php include("_mega_menu.php"); ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A VENIR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ACTUALITES</a>
                </li>

                <li class="nav-item invisible">
                    <a class="nav-link" href="#">XXXXXXX</a>
                </li>

            </ul>
            <div>
                <button class="btn btn-primary text-uppercase fw-bold" type="submit">
                    <div class="-mb-px">Faire un don</div>
                </button>
                <button class="btn border-0 text-dark bg-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>