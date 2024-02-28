@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
         style="background: rgba(0, 0, 0, 0) url('{{ asset('assets/images/bg/6.jpg') }}') no-repeat scroll center center / cover ;"
         data--black__overlay="6">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">About Us</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">About Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start About Area -->
    <section class="htc__about__area about--2 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="htc__about__thumb__inner">
                        <div class="htc__about__thumb">
                            <img src="{{ asset('assets/images/about/4.webp') }}" alt="about images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12 smmt--30 xsmt--30">
                    <div class="htc__about__content">
                        <div class="htc__about__inner">
                            <h4 class="">WELCOME TO<span class="text--theme"> {{ config('app.name') }}</span></h4>
                            <div class="about__details mt-0">
                                <p>Welcome to {{ config('app.name') }}, where we bring ancient Egypt to life through
                                    the
                                    immersive power of virtual reality. Our passion for history and technology drives us
                                    to create captivating experiences that allow users to explore the wonders of
                                    Egyptian antiquities from the comfort of their own homes.</p>
                                <p>At {{ config('app.name') }}, we are dedicated to preserving and showcasing the rich
                                    cultural heritage of Egypt in a way that is both educational and entertaining.
                                    Through meticulous research and attention to detail, we meticulously recreate
                                    ancient artifacts within Unreal Engine VR, providing users with an unparalleled
                                    level of realism and interactivity.</p>

                                <p>Join us on a journey through the sands of time as we unlock the mysteries of Egypt's
                                    past and celebrate its enduring legacy. Experience history like never before
                                    with {{ config('app.name') }}.</p>
                            </div>
                            <div class="about__btn">
                                <a class="htc__btn btn__theme" href="{{ route('gallery') }}">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->
@endsection
