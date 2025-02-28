@extends('layouts.layout2')

@php
    $title = 'Blog Details';
    $subtitle = 'Blog Details';
@endphp


@section('content')
    <x-subheader />

    <x-subsidebar />
    <!-- tmp service section -->
    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-left-area border-bottom">
                        <div class="thumbnail-top">
                            <img src="{{ Storage::url($blog->image ?? 'assets/images/blog/details/01.png') }}"
                                alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-details-discription">
                            <div class="category-area">
                                {{ $blog->author_name ?? $blog->author }} / {{ $blog->category ?? 'Uncategorized' }}
                            </div>
                            <h3 class="title split-collab">{{ $blog->title }}/h3>
                                <p class="disc">
                                    {{ $blog->content }}
                                </p>
                        </div>
                        <div class="quote-area-blog-details">
                            <i class="fa-sharp fa-regular fa-quote-left fa-lg"></i>
                            <p class="disc">
                                {{ $blog->quote }}
                            </p>
                            <span class="author">{{ $blog->quote_author ?? 'Unknown' }}</span>
                        </div>
                        <div class="blog-details-discription">
                            <p class="disc">
                                {{ $blog->meta_description }}
                            </p>
                        </div>
                    </div>
                    <div class="blog-details-bottom-area mt--40">
                        <div class="tag-socila-area-blgo-details">
                            <div class="left-tag">
                                <span>Tag:</span>
                                <div class="tag-wrapper">
                                    @if ($blog->tags)
                                        @foreach (json_decode($blog->tags, true) as $tag)
                                            <div class="signle-wrapper">{{ $tag }}</div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="author-comment-area">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/blog/details/04.jpg') }}" alt="Corporate_Business">
                            </div>
                            <div class="main-information-of-autonr">
                                <h6 class="name">{{ $blog->author_name ?? $blog->author }}</h6>
                                <p class="disc">
                                    {{ $blog->meta_description }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 pl--50 pl_md--10 pl_sm--10 mt_md--50 mt_sm--50">
                    <div class="side-bar-details-page">
                        <!-- single bar -->
                        <div class="signle-side-bar search-area">
                            <div class="body">
                                <div class="search-area">
                                    <input type="text" placeholder="Entry Key">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single bar end -->
                        <!-- single bar -->
                        <div class="signle-side-bar category-area">
                            <div class="header">
                                <h3 class="title">Category List</h3>
                            </div>
                            <div class="body">
                                <!-- single category -->
                                @if ($blog->categories->isNotEmpty())
                                    @foreach ($blog->categories as $category)
                                        <a href="#" class="single-category" style="cursor: default;">
                                            <p>{{ $category->name }}</p>
                                        </a>
                                    @endforeach
                                @else
                                    <p>No categories available.</p>
                                @endif
                                <!-- single category end -->
                            </div>
                        </div>
                        <!-- single bar -->
                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title animated fadeIn">Need any help?</h3>
                                <p class="disc">
                                    We are here to help our customer any time. You can call on 24/7 To Answer Your Question.
                                </p>
                                <a href="Tel:1234567890">+(012)3456789</a>
                            </div>
                        </div>
                        <!-- single bar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer />

    <!-- tmp service section end -->
@endsection
