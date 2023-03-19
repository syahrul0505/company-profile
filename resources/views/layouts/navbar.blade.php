<header class="header position-relative z-9">
    <nav class="navbar navbar-expand-lg navbar-light navbar-theme-white fixed-top headroom">
        <div class="container position-relative">
            <a class="navbar-brand mr-lg-3" href="#">
                <img class="navbar-brand-dark" src="assets/img/logo-white.png" alt="menuimage">
                <img class="navbar-brand-light" src="assets/img/logo-color.png" alt="menuimage">
            </a>
            <div class="navbar-collapse collapse" id="navbar-default-primary">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img src="assets/img/logo-color.png" alt="menuimage">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <i class="fas fa-times" data-toggle="collapse" role="button"
                               data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                               aria-expanded="false" aria-label="Toggle navigation"></i>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover ml-auto hover-navbar">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <span class="nav-link-inner-text">Home</span>
                            <i class="fas fa-angle-down nav-link-arrow ml-1"></i>
                        </a>
                        <ul class="sub-menu dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Home Page 01</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Home Page 02</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Home Page 03</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Home Page 04</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Home Page 05</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Home Page 06</a></li>
                            <li><a class="dropdown-item" href="index-7.html">Home Page 07</a></li>
                            <li><a class="dropdown-item" href="index-8.html">Home Page 08 <span class="badge badge-danger ml-2">New</span></a></li>
                            <li><a class="dropdown-item" href="index-9.html">Home Page 09 <span class="badge badge-danger ml-2">New</span></a></li>
                            <li><a class="dropdown-item" href="index-10.html">Home Page 10 <span class="badge badge-danger ml-2">New</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-default-primary" aria-controls="navbar-default-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</header>