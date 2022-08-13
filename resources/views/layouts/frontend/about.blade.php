@extends('layouts.frontend.app')

@section('title','About Us')

@push('css')
    <style>

    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/about.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>About Us</li>
                </ul>
                <h2>About Us</h2>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="">
                        <div class="section-title text-left">

                        </div><br><br>

                        <h3 style="color: #99774C">Our Experience</h3>
                        <p class="about-three__text" style="text-align: justify">
                            Tamara Consulting has established itself as a reliable consulting firm specialized on
                            providing consultation services for EPC companies on project claim and dispute
                            resolutions, project management support, and facilitation services to international
                            companies planning to operate in Saudi Arabia. <br>
                            It has a network of knowledgeable and highly experienced professionals who are well
                            familiar with the local industries, governing law and regulation. Our aim is to share our
                            passion and experience to empower international and local companies and ultimately
                            help them to expand and succeed.
                        </p>
                        <br>
                        <h3 style="color: #99774C">Why Us?</h3>
                        <p class="about-three__text" style="text-align: justify">
                            Tamara Consulting built its credibility on well experienced consultants who worked
                            many years on the oil and gas industries. We know how to add value to companies in
                            order to maximize profits and minimize cost. We carefully choose our clients to ensure
                            we give them the required time and proper advice they deserve.
                        </p>
                        <h3 style="color: #99774C">About Us</h3><br>
                        <h3 style="color: #99774C">Experience You Can Count On</h3>
                        <p class="about-three__text" style="text-align: justify">
                            Tamara Consulting is a group of well experienced executives, each has more than 30
                            years of working experience in the oil and gas industry. The group of executives will
                            share their passion and knowledge by helping local and international companies to
                            flourish and succeed in Saudi Arabia. <br>
                            Tamara Consulting provides the following consultation and facilitation services in the
                            areas of:
                        </p>
                        <br>
                        <div class="col-xl-12">
                            <ul class="list-unstyled service-details__benefits-points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Business Facilitation and Licensing Services.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Project Claim and Dispute Resolution</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                    <div class="text">
                                        <p>Project Management Support Services</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p class="about-three__text" style="text-align: justify">
                            Our process is designed to work with clients aiming to create value added services to
                            their companies. Our executives have hands-on experience and well familiar with
                            industrial projects from initial basic design throughout engineering, procurement,
                            construction until commissioning. Also, we provide project claim and dispute resolution
                            services by reviewing project life cycle and provide advice to mitigate potential claims
                            and disputes. In addition,we provide consultation and facilitation services to local and
                            international companies to support and expand their business into Saudi Arabia. This
                            include providing market information, developing feasibility studies and collaborating to
                            establish the business locally. <br>
                            Our executives are the fabric of our company. Our reputation is built on providing
                            services with a high level of technical competence and attention to details. We
                            continually partner with specialized international firms and with highly experienced staff
                            to provide quality work
                        </p><br>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__img-box">
            <div class="cta-one__img">
                <img class="img-fluid" src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our help?</p>
                    <h3 class="cta-one__title">WE HELP COMPANY SOLVING THEIR PROBLEM SMARTLY</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href=""{{ url('contact-us') }} class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i> Reach Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
@endsection

@push('js')

@endpush
