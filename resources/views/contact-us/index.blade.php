@extends('app')

@section('content')

<style>
    .banner-contact {
        height: 500px;
    }
</style>

<div class="main">

    <!--page header section start-->
    <section class="" style="background: url('assets/img/slider-img-4.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header banner-contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center" style="margin-top: 100px">
                            <h1>Contact US</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <!--promo section start-->
    <section class="section section-lg pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="rounded-custom text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="icon icon-md text-secondary">
                                <i class="ti-mobile"></i>
                            </div>
                            <div>
                                <h5 class="h6">Call Us</h5>
                                <p class="text-muted mb-0">(+62) 859 5946 8196</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="rounded-custom text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="icon icon-md text-secondary">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div>
                                <h5 class="h6">Visit Us</h5>
                                <p class="text-muted mb-0">Bekasi, Babelan 17211 </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="rounded-custom text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="icon icon-md text-secondary">
                                <i class="ti-email"></i>
                            </div>
                            <div>
                                <h5 class="h6">Mail Us</h5>
                                <p class="text-muted mb-0">shurekai@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="rounded-custom text-center shadow-sm">
                        <div class="card-body py-5">
                            <div class="icon icon-md text-secondary">
                                <i class="ti-headphone-alt"></i>
                            </div>
                            <div>
                                <h5 class="h6">Live Chat</h5>
                                <p class="text-muted mb-0">Chat with Us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--promo section end-->

    <!--contact us section start-->
    <section class="section section-lg">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form bg-soft rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="#" method="POST" id="contactForm" class="contact-us-form mt-4">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="submit" class="btn btn-secondary" id="btnContactUs">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                        <a href="#" class="btn btn-outline-secondary align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Headquarters</h5>
                        <address>
                            100 Yellow House, Mn <br>
                            Factory, United State, 13420
                        </address>
                        <br>
                        <span>Phone: +1234567890123</span> <br>
                        <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <!--contact map section start-->
    <div class="section py-0">
        <div class="google-map mb-n2 opacity-9 w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.83543450937!2d144.953735315922!3d-37.817323442021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1571030260624!5m2!1sen!2sbd" height="450" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!--contact map section end-->


</div>

@endsection