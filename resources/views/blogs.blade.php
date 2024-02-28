@extends('layouts.app')

@section('title', 'Blogs')

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
                            <h2 class="bradcaump-title">Our Blogs</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Blogs</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Our Blog Area -->
    <section class="htc__blog__area htc__blog--2 pt--130 pb--130 bg__white">
        <div class="container">
            <div class="section__title text-center">
                <h2 class="title__line">Our <span class="text--theme">Blog</span></h2>
            </div>
            <div class="row htc__blog__wrap mt--40 mt-sm--30">
                @foreach(\App\Models\Blog::all() as $blog)
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
