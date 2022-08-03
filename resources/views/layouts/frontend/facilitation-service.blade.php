@extends('layouts.frontend.app')

@section('title','Facilitation Service')

@push('css')
    <style>
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }
        .sliderTest {
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: auto;
        }
        .sliderTest .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .sliderTest .slide {
            height: 100px;
            width: 250px;
            margin-top: 25px;
        }
    </style>
@endpush

@section('content')
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/frontend/images/backgrounds/pipe.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Facilitation and Licensing Services</li>
                </ul>
                <h2>Facilitation and Licensing Services</h2>
            </div>
        </div>
    </section><BR><BR>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">Facilitation and Licensing Services</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1">
                            Tamara Consulting assists international companies to navigate their way through the
                            local system to achieve smooth business conduct. At every step, we facilitate our
                            clients’ success, by providing them with the industry market information and tools they
                            need to establish and run their business efficiently. We offer advice, friendly support and
                            identifies business opportunities to investors. <br><br>
                            Get in touch with us today, to find out for yourself how we can help you in your business
                            venture.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
@endsection

@push('js')

@endpush
