<header class="header-area">
    <!-- Search Form -->
    <div class="search-form d-flex align-items-center">
        <div class="container">
            <form action="index.html" method="get">
                <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                <button type="submit"><i class="icon_search"></i></button>
            </form>
        </div>
    </div>

    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                        <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                    </div>
                </div>

                <div class="col-6">
                    <div class="top-header-content">
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="robertoNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="../img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <?php include_once 'frontend/menu.php'; ?>

                </nav>
            </div>
        </div>
    </div>
</header>