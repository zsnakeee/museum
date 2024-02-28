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
                            <h2 class="bradcaump-title">Blog show</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
                                <span class="brd-separetor"><i class="fa fa-angle-right"></i></span>
                                <span class="breadcrumb-item active">Blog show</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start List View -->
    <section class="htc__blog__details ptb--130 bg__white">
        <div class="container">
            <div class="row blog__details__wrap">
                <!-- Start Event Left SideBar -->
                <div class="col-lg-8 col-12">
                    <div class="htc__blog__dtl__inner">
                        <h2>{{ $blog->title }}</h2>
                        <ul class="event__post__date">
                            <li><i class="fa fa-clock-o"></i>{{ $blog->published_at->format('d M, Y') }}</li>
                        </ul>
                        <div class="blog__btl__thumb">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="htc__blog__details">
                            {!! nl2br($blog->content) !!}
                        </div>
                        <div class="blg__meta">
                            <ul class="blog__like">
                                <li><a href="javascript:void(0)"><i class="fa fa-thumbs-o-up"></i>0</a></li>
                            </ul>
                            <div class="social__share">
                                <span>Share now:</span>
                                <ul class="social__icon">
                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Event Left SideBar -->
                <!-- Start Blog Right Sidebar -->
                <div class="col-lg-4 col-12 smmt--30 xsmt--40">
                    <div class="htc__right__sidebar">
                        <!-- Start Blog POst -->
                        <div class="blog__repost section__separator">
                            <h2 class="title__line-4">Recent Post</h2>
                            <div class="bolg__post__inner">
                                @forelse(\App\Models\Blog::where('id', '!=', $blog->id)->limit('3')->get() as $recent_blogs)
                                    <div class="single__post">
                                        <div class="post__thumb">
                                            <a href="{{ route('blog.show', ['slug' => $recent_blogs->slug]) }}">
                                                <img src="{{ asset('storage/' . $recent_blogs->image) }}"
                                                     alt="recent post">
                                            </a>
                                        </div>
                                        <div class="post__details">
                                            <h4>
                                                <a href="{{ route('blog.show', ['slug' => $recent_blogs->slug]) }}">
                                                    {{ Str::limit($recent_blogs->content, 50) }}
                                                </a>
                                            </h4>
                                            <span class="post__date">
                                                {{ $recent_blogs->published_at->format('d M, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                @empty
                                    <p>No recent blogs</p>
                                @endforelse
                            </div>
                        </div>
                        <!-- End Blog POst -->
                    </div>
                </div>
                <!-- End Blog Right Sidebar -->
            </div>
        </div>
    </section>
    <!-- End List View -->
@endsection
