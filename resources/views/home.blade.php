@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Start Slider Area -->
    <div class="slider__container">
        <!-- Start Single Slide -->
        <div class="slide slider3__full--screen" data--black__overlay="4">
            <div id="ytplayer" class="player"
                 data-property="{
{{--                 videoURL:'https://www.youtube.com/watch?v=PfjrjmO3vjg',--}}
                 containment:'self',
                 startAt:14,
                 mute:true,
                 autoPlay:true,
                 loop:true,
                 opacity:1,
                 coverImage:'{{ asset('assets/images/bg/8.jpg') }}'}">
            </div>
            <div class="container">
                <div class="slider__content__3">
                    <h1>{{ __('Hello to') }} <br>{{ config('app.name') }}</h1>
                    <p>{{ __('Explore ancient Egypt with our Virtual Egyptian Antiquities experience, powered by Unreal Engine
                        VR. Realistic and interactive statues take you on a fun and educational journey through history.
                        Start your adventure from home now!') }}</p>
                    <span class="scrolldown mt-5"><img src="{{ asset('assets/images/icons/mouse.png') }}" alt=""></span>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    <!-- Start Slider Area -->

    <!-- Start About Area -->
    <section class="htc__mshistory__area pt--120 pb--120 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    <div class="about-content-3 text-center">
                        <h2 class="title">{{ __('About our') }} <span>VR</span> {{ __('Project') }}</h2>
                        <p>{{ __('Our project aims to create an immersive virtual reality (VR) experience centered around
                            exploring Egyptian antiquities, specifically ancient statues, within the Unreal Engine
                            environment. Users will have the opportunity to delve into the rich history and artistry of
                            Egyptian civilization from the comfort of their own home through their VR headset.') }}</p>

                        <canvas></canvas>

{{--                        <img--}}
{{--                            src="{{ asset('assets/images/about/5.webp') }}"--}}
{{--                            alt="about images"--}}
{{--                            class="mt-5 d-block m-auto">--}}
                        <a class="htc__btn btn__theme" href="{{ route('gallery') }}">{{ __('Explore More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start PortFolio Area -->
    <section class="htc__portfolio__container portfolio--2 pt--130 pb--130 bg__gray">
        <div class="portfolio__area portfolio__activation--2">
            <div class="container">
                <div class="section__title text-center">
                    <h2 class="title__line">{{ __('Our') }} <span class="text--theme">{{ __('Gallery') }}</span></h2>
                </div>

                <div class="row portfolio__wrap portfolio__active--2 mt--70 mt-sm--60">
                    @foreach(\App\Models\Gallery::limit(6)->orderBy('sort')->get() as $gallery)
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

    <!-- Start Our Blog Area -->
    <section class="htc__blog__area htc__blog--2 pt--130 pb--130 bg__white">
        <div class="container">
            <div class="section__title text-center">
                <h2 class="title__line">{{ __('Our') }} <span class="text--theme">{{ __('Blog') }}</span></h2>
            </div>
            <div class="row htc__blog__wrap mt--40 mt-sm--30">
                @foreach(\App\Models\Blog::limit(4)->get() as $blog)
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-12 mt--30">
                        <div class="blog">
                            <div class="blog__inner">
                                <div class="blog__thumb" style="height: 250px; overflow: hidden">
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="blog images">
                                    </a>
                                    <div class="blog__hover__inner">
                                        <div class="blog__hover__action">
                                            <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__details">
                                    <div class="blog__date">
                                        <i class="fa fa-clock-o"></i>{{ $blog->published_at->format('d M, Y') }}
                                    </div>
                                    <h2><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h2>
                                    <p>{{ Str::limit($blog->content, 200)  }}</p>
                                    <div class="blog__btn--2">
                                        <a class="read__more__btn" href="{{ route('blog.show', ['slug' => $blog->slug]) }}">read more......</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i>0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Blog Area -->


@endsection

@push('js')
    <script>
        // import * as THREE from 'three';
        // import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        // import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        //
        // const controls = new OrbitControls( camera, renderer.domElement );
        // const loader = new GLTFLoader();
    </script>
@endpush
