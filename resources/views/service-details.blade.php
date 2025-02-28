@extends('layouts.layout2')

@php
    $bodyClass = 'service-details';
    $title = $service->title ?? 'Service Details';
    $subtitle = 'Service Details';
@endphp

@section('content')
    <x-subheader />

    <x-subsidebar />

    <div class="tmp-service-section tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tmp-large-service-detials">
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" width="850"
                            height="450">
                    </div>

                    <div class="single-service-details-component mt--40">
                        <h2 class="title split-collab">{{ $service->title }}</h2>
                        <p class="disc mb--20">
                            {{ $service->description }}
                        </p>

                        <div class="row">
                            @if (!empty($service->features))
                                @foreach (array_chunk($service->features, 1) as $featureChunk)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="check-service-wrapper">
                                            @foreach ($featureChunk as $feature)
                                                <div class="single-check">
                                                    <i class="fa-light fa-circle-check"></i>
                                                    <p>{{ $feature['feature'] ?? '' }}</p> <!-- Access the 'feature' key -->
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <!-- Display Page Content -->
                        <div class="service-page-content mt--40">
                            {!! $service->page_content !!}
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 pl--50 pl_md--15 pl_sm--10 mt_md--50 mt_sm--50">
                    <div class="side-bar-details-page">
                        <div class="signle-side-bar category-area">
                            <div class="header">
                                <h3 class="title animated fadeIn">Category List</h3>
                            </div>
                            <div class="body">
                                @if ($service->categories->isNotEmpty())
                                    @foreach ($service->categories as $category)
                                        <a href="#" class="single-category" style="cursor: default;">
                                            <p>{{ $category->name }}</p>
                                        </a>
                                    @endforeach
                                @else
                                    <p>No categories available.</p>
                                @endif
                            </div>
                        </div>

                        <div class="signle-side-bar call-to-action">
                            <div class="easy-call-to-action">
                                <div class="icon-center-call">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <h3 class="title">Need any help?</h3>
                                <p class="disc">
                                    We are here to help our customers anytime. You can call 24/7 for support.
                                </p>
                                <a href="tel:+0123456789">+(012) 3456789</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>

    <x-footer />
@endsection
