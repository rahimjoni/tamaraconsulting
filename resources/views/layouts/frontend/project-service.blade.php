@extends('layouts.frontend.app')

@section('title','Project Service')

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
                    <li>Project Management Support Services</li>
                </ul>
                <h2>Project Management Support Services</h2>
            </div>
        </div>
    </section><BR><BR>

    <section class="">
        <div class="container">
            <div class="row">
                <p class="section-sub-title">Project Management Support Services</p>
                <div class="service-details__right">
                    <div class="service-details__content">
                        <p class="service-details__text-1">
                            Tamara Consulting provides technical and managerial expertise in Projects
                            Management to assist EPC companies to execute projects on schedule, with quality
                            and within budget. Our executives will work hands-on-hands with EPC companies
                            during detailed design and engineering acting as advisors to review and avoid
                            unnecessary change orders.<br><br>
                            Also, we draw upon our experience to provide our clients with project management
                            support involving mapping of project processes, the monitoring of progress, continuous
                            risk analysis, project control and scheduling. Participating at early stage of project by
                            providing proper guidance and advice to EPC companies will ensure smooth project
                            execution and completion on time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
@endsection

@push('js')

@endpush
