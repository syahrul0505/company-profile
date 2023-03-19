@extends('app')

@section('content')

<style>
    .banner-products {
        height: 500px;
    }
</style>

<div class="main">

    <!--page header section start-->
    <section class="" style="background: url('assets/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header banner-products">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center" style="margin-top: 100px;">
                            <h1>Products</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--products section start-->
    <section class="section section-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center pb-2">
                        <ul class="nav nav-pills custom-pill" role="tablist">
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter="all">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".branding">Branding</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".animation">Animation</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".other">Others</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/protection-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Protection Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/kraft-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Kraft Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation" data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/opp-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">OPP Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding" data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/masking-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Masking Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/floor-marking-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Floor Marking Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item branding " data-ref="mixitup-target">
                            <div class="portfolio-wrapper border border-light rounded bg-soft p-2">
                                <a href="project-details.html" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="assets/img/products/alumunium-tape.jpg" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Alumunium Tape</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--products section end-->

    {{-- <!--cta section start-->
    <section class="section section-sm py-5 bg-soft">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3>Consulting Agency for Your Business</h3>
                        <p class="mb-lg-0 mb-md-0">Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn btn-primary">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta section end--> --}}

</div>

@endsection