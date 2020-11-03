@extends('layout')
@section('content')

<div class="card" id="top-card">
    <img src="{{asset('/images/deniseCover2.jpg')}}" class="card-img" alt="Denise on a Cliff">
    <div class="card-img-overlay d-flex d-md-inline">
        <div class="text-center top-title align-self-end" onClick ="butts()">
            <h1 class="name-title" id="primary-text">Denise Fournier</h1>
            <p id="primary-text" class="top-subtitle">Wanderer | Artist | Empath</p>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-8 col-sm-6 col-6">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body text-center">--}}
{{--                        <h5 class="card-title">Text</h5>--}}
{{--                        <p class="card-text">Text text text text text text text text text text text text text.</p>--}}
{{--                        <p class="card-text">Text text text text text text text text text text text text text.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

    </div>
</div>


<div class="myContainer info-slice" id="resume">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card myCard">

                    <div class="card-header">
                        <div class="d-flex flex-column">
                            <h1 class="card-title font-italic my-card-title">Currently At...</h1>
                            <h1 class="card-title text-center my-card-title align-self-center text-uppercase text-monospace">Liberty Concepts</h1>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <ul class="nav my-tabs card-header-tabs ml-0 tab-text" id = "resume-nav">
                                <li class="nav-item">
                                    <a class="my-tabs-active" href="#smm" id ="smm-link">Social Media Manager</a>
                                </li>
                                <li class="nav-item">
                                    <a class="my-tabs-inactive" href="#om" id ="om-link">Office Manager | EA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="card-body infoCardBullets d-flex flex-column mt-2" id="resume-card">
                    <div class="card-stripe-one p-2">Co-manage client’s business enterprise-size social media accounts and maintain social engagement on Facebook, Instagram, and Twitter</div>
                    <div class="card-stripe-two p-2">Copy editing for web pages and social content</div>
                    <div class="card-stripe-one p-2">Executing client digital reputation management reports</div>
                    <div class="card-stripe-two p-2">Compiling data and performance summary reports for social media campaigns</div>
                    <div class="card-stripe-one p-2">Quality assurance testing of new websites and content migration</div>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card myCard">
                <div class="card-header">
                    <div class="d-flex flex-column">
                        <h1 class="card-title font-italic my-card-title">Educated At...</h1>
                        <h1 class="card-title text-center my-card-title align-self-center text-uppercase text-monospace collegeSubtitle">Massachusetts College of Art & Design</h1>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <ul class="nav my-tabs card-header-tabs ml-0 tab-text">
                            <li class="nav-item">
                                <a class="my-tabs-active not-really-a" >BFA in Film/Video</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body infoCardBullets d-flex flex-column mt-2" id="resume-card">
                    <div class="card-stripe-one p-2">Class of 2015</div>
                    <div class="card-stripe-two p-2">Promoted upcoming screenings both online and in person, designed promotional flyers for advertising around campus and in local businesses</div>
                    <div class="card-stripe-one p-2">Created and diligently followed production schedules</div>
                    <div class="card-stripe-two p-2">Coordinated production shoots and screening events, reserved auditorium/gallery spaces for screenings</div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="myContainer my-gallery travelBackground" id="about">
    <div class="travelBackgroundOverlay">
    <blockquote class="blockquote" id = "travel-title">
        <p class="mb-0 font-italic font-weight-bold">I've always been passionate about travelling to new places -
            seeing different cultures during their daily lives,
            really experiencing cities intimately, and finding the hidden spots off the beaten path.
            I hope to never stop travelling!
        </p>
    </blockquote>
    </div>
</div>
<div class="myContainer my-gallery">
    <section class="gallery-block compact-gallery">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/vienna1.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/vienna1.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Vienna</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/vienna2.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/vienna2.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Vienna</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/vienna3.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/vienna3.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Vienna</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/vienna4.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/vienna4.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Vienna</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/vienna5.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/vienna5.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Vienna</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/budapest1.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/budapest1.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Budapest</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/budapest2.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/budapest2.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Budapest</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/budapest3.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/budapest3.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Budapest</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 item zoom-on-hover">
                    <a class="lightbox" href="{{asset('/images/budapest4.jpg')}}">
                        <img class="img-fluid image" src="{{asset('/images/budapest4.jpg')}}">
                        <span class="description">
                            <span class="description-heading">Budapest</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>
{{--        <div class="row text-center text-lg-left">--}}

{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/vienna1.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/vienna2.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/vienna3.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/vienna4.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/budapest1.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/budapest2.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/budapest3.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-6">--}}
{{--                <img class="img-fluid img-thumbnail" src="{{asset('/images/budapest4.jpg')}}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}

<div class="myContainer my-footer pt-5 pb-5" id= "contact">
    <div class="d-flex flex-column align-content-center justify-content-center text-center">
        <h1 class="display-3 mt-2">Let's Talk!</h1>
        <div class="d-flex align-content-center mb-4">
            <img src="{{asset('/images/mail4.svg')}}" class="img-fluid nav-icons nav-icons-footer mr-4" alt="Email ICon">
            <a href="mailto:me@dmfournier.com" class="footer-link mb-0">Email Me</a>
        </div>
        <div class="d-flex align-content-center mb-4">
            <img src="{{asset('/images/instagram.svg')}}" class="img-fluid nav-icons nav-icons-footer mr-4" alt="Instagram Icon">
            <a href="https://www.instagram.com/denise_morgan/" class="footer-link mb-0">DM Me</a>
        </div>
        <div class="d-flex align-content-end mb-4">
            <img src="{{asset('/images/linkedin.svg')}}" class="img-fluid nav-icons nav-icons-footer mr-4" alt="LinkedIn Icon">
            <a href = "http://www.linkedin.com/in/dmfournier"class="footer-link mb-0">InMail Me</a>
        </div>

    </div>
</div>
@endsection
