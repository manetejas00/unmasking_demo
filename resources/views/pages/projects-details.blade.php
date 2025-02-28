@extends('layouts.layout2')

@php
    $title = 'Project Details';
    $subtitle = 'Project Details';
@endphp

@section('content')
<x-subheader />
<x-sidebar />

<div class="projects-details-area mt-dec-pd tmp-section-gap rts_jump_counter__animation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="projects-details-inner">
                    <div class="thumbnail grow position-relative">
                        <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"width="1275"
                        height="635">
                    </div>
                    <div class="clients-projects-details">
                        <div class="clients-details-inner">
                            <h3 class="title text-center">{{ $portfolio->title }}</h3>
                            <div class="single-projects-details">

                                <div class="info">
                                    <div class="icon">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="subtitle">Clients:</h4>
                                        <h5 class="category">{{ $portfolio->client ?? 'N/A' }}</h5>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="icon">
                                        <i class="fa-sharp fa-light fa-layer-group"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="subtitle">Category:</h4>
                                        <h5 class="category">{{ $portfolio->category ?? 'N/A' }}</h5>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="icon">
                                        <i class="fa-light fa-calendar-days"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="subtitle">Date:</h4>
                                        <h5 class="category">{{ $portfolio->date ?? 'N/A' }}</h5>
                                    </div>
                                </div>

                                <div class="info">
                                    <div class="icon">
                                        <i class="fa-regular fa-map-location"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="subtitle">Address:</h4>
                                        <h5 class="category">{{ $portfolio->address ?? 'N/A' }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="projects-details-wrapper">
                            <h3 class="title">Project Description</h3>
                            <p class="description">{{ $portfolio->page_content ?? 'No description available.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
