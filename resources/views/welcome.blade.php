@extends('layouts.frontend.app')

@section('title','Home')

@push('css')

@endpush

@section('content')
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <section class="main-slider-three clearfix">
        <div class="swiper-container thm-swiper__slider swiper-container-fade swiper-container-initialized swiper-container-horizontal" data-swiper-options="{&quot;slidesPerView&quot;: 1, &quot;loop&quot;: true,
                &quot;effect&quot;: &quot;fade&quot;,
                &quot;pagination&quot;: {
                &quot;el&quot;: &quot;#main-slider-pagination&quot;,
                &quot;type&quot;: &quot;bullets&quot;,
                &quot;clickable&quot;: true
                },
                &quot;navigation&quot;: {
                &quot;nextEl&quot;: &quot;#main-slider__swiper-button-next&quot;,
                &quot;prevEl&quot;: &quot;#main-slider__swiper-button-prev&quot;
                },
                &quot;autoplay&quot;: {
                &quot;delay&quot;: 5000
                }}">
            <div class="swiper-wrapper" style="transition-duration: 0ms;">
                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1519px; transition-duration: 0ms; opacity: 1; transform: translate3d(-1519px, 0px, 0px);">
                    <div class="image-layer-three" style="background-image: url(assets/frontend/images/backgrounds/gasoil.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">Consultation, Project Claims and Facilitation Services</h2>
                                    <p class="main-slider-three__text">Helping Companies To Succeed!</p>
                                    <div class="main-slider-three__btn-box">
                                        <a href="{{ url('about-us') }}" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 1519px; transition-duration: 0ms; opacity: 1; transform: translate3d(-3038px, 0px, 0px);">
                    <div class="image-layer-three" style="background-image: url(assets/frontend/images/backgrounds/CAF-Blog-2019-Apparel-Sourcing-Trends.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">Consultation, Project Claims and Facilitation Services</h2>
                                    <p class="main-slider-three__text">Helping Companies To Succeed!</p>
                                    <div class="main-slider-three__btn-box">
                                        <a href="{{ url('about-us') }}" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 1519px; transition-duration: 0ms; opacity: 0; transform: translate3d(-6076px, 0px, 0px);">
                    <div class="image-layer-three" style="background-image: url(assets/frontend/images/backgrounds/CAF-Blog-2019-Apparel-Sourcing-Trends.jpg);"></div>
                    <!-- /.image-layer -->

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="main-slider-three__content">
                                    <h2 class="main-slider-three__title">Roof installation <br> services in your city</h2>
                                    <p class="main-slider-three__text">We provide a variety of roofing and maintenance services for <br> all type of house makes happy.</p>
                                    <div class="main-slider-three__btn-box">
                                        <a href="about.html" class="thm-btn main-slider-three__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>


            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" id="main-slider-pagination"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-three__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
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

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__img-box">
            <div class="cta-one__img">
                <img src="{{ asset('assets/frontend/images/resources/cta-one-img-1.jpg') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <p class="cta-one__sub-title">Need our services?</p>
                    <h3 class="cta-one__title">WE OPTIMIZE YOUR PROCUREMENT PROCESS</h3>
                </div>
                <div class="cta-one__btn-box">
                    <a href="{{ url('contact-us') }}" class="thm-btn cta-one__btn"> <i class="fa fa-arrow-right"></i>REQUEST ADVICE</a>
                </div>
            </div>
        </div>
    </section><br><br>
    <!--CTA One End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape float-bob-x">
            <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/backgrounds/about-home.png') }}" alt="">
                            </div>
                            <div class="about-one__line">
                                <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-line.png') }}" alt="">
                            </div>

                            <div class="about-one__satisfied">
                                <div class="about-one__satisfied-inner">
                                    <div class="about-one__satisfied-shape">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/shapes/about-one-satisfied-shape-1.png') }}" alt="">
                                    </div>
                                    <div class="about-one__satisfied-content">
                                        <div class="about-one__satisfied-count-box">
                                            <h3 class="odometer odometer-auto-theme" data-count="30">
                                                30
                                            </h3>
                                            <span class="about-one__satisfied-percent"> Years</span>
                                        </div>
                                        <p class="about-one__satisfied-text">Working Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-one__big-text">Tamara Consulting</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">About TAMARA CONSULTING</p>
                                <div class="section-title-shape-1">
                                    <img class="fab-icon-main img-fluid" src="{{ asset('assets/frontend/images/favicons/icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="about-one__text">Tamara Consulting is a group of well experienced executives, each has more than 30
                            years of working experience in the oil and gas industry. The group of executives will
                            share their passion and knowledge by helping local and international companies to
                            flourish and succeed in Saudi Arabia. </p>
                        <br> <p>Tamara Consulting provides the following consultation and facilitation services in the
                            areas of:</p><br>
                        <div class="row">
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
                        </div>
                        <a href="{{ url('/about-us') }}" class="thm-btn about-one__btn"> <i class="fa fa-arrow-right"></i> Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

@endpush
