@extends('layouts.frontend.app')

@section('title','Services')

@push('css')
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/project.jpg); background-position: center; background-size: cover">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Tamara Services</li>
                </ul>
                <h2>TAMARA SERVICES</h2>
            </div>
        </div>
    </section><br><br>

    <section class="">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-sub-title-box">
                    <p class="section-sub-title">Our Services</p>
                    <div class="section-title-shape-1">
                        <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                    </div>
                </div>
                <h2 class="section-title__title">Tamara Consulting Services</h2><br>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/services/facilitation.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <h3 class="blog-one__title"><a href="{{ url('facilitation-service') }}">Facilitation and Licensing Services</a></h3>
                            <p class="blog-one__text">Tamara Consulting assists international companies to navigate their way through the
                                local system to achieve smooth business conduct.</p>
                            <div class="blog-one__read-more">
                                <a href="{{ url('facilitation-service') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/services/claims.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <h3 class="blog-one__title"><a href="{{ url('claims-service') }}">Claims and Dispute Resolution Services</a></h3>
                            <p class="blog-one__text">Tamara Consulting House staff are highly experienced professionals in claims and dispute resolution with the ability to assist clients in selecting</p>
                            <div class="blog-one__read-more">
                                <a href="{{ url('claims-service') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->

                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('assets/frontend/images/services/procurement.jpg') }}" alt="">
                        </div>
                        <div class="blog-one__content">
                            <h3 class="blog-one__title"><a href="{{ url('project-service') }}">Project Management Support Services</a></h3>
                            <p class="blog-one__text">Tamara Consulting provides technical and managerial expertise in Projects
                                Management to assist EPC companies to execute projects on schedule, </p>
                            <div class="blog-one__read-more">
                                <a href="{{ url('project-service') }}">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section><br>

@endsection

@push('js')

@endpush
