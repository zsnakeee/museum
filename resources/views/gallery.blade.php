@extends('layouts.app')

@section('title', 'Gallery')

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
                            <h2 class="bradcaump-title">Gallery</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Gallery</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start PortFolio Area -->
    <section class="htc__portfolio__container portfolio--2 pt--130 pb--130 bg__gray">
        <div class="portfolio__area portfolio__activation--2">
            <div class="container">
                <div class="section__title text-center">
                    <h2 class="title__line">Our <span class="text--theme">Gallery</span></h2>
                </div>

                <div class="row portfolio__wrap portfolio__active--2 mt--70 mt-sm--60">
                    @foreach(\App\Models\Gallery::all() as $gallery)
                        <!-- Start Single Images -->
                        <div class="col-lg-4 col-md-6 col-12 pro__item cat--1 cat--3"
                             style="height: 450px; overflow: hidden">
                            <a href="{{ asset('storage/' . $gallery->image) }}" class="portfolio-4"
                               data-lightbox="photos" data-title="{{ $gallery->title }}">
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="portfolio images">
                                <div class="portfolio-hover">
                                    <h2 class="title">{{ $gallery->title }}</h2>
                                </div>
                            </a>
                        </div>
                        <!-- End Single Images -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End PortFolio Area -->
@endsection
