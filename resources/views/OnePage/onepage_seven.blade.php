@extends('layouts.layout2')

@php
    $bodyClass = 'index-one onepage';
@endphp


@section('content')
    <x-header />
    <x-sidebar />
    <!-- tpm-header-area end -->

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area construction-2" id="home">
        <div class="swiper mySwiper-banner-one-construction">
            <div class="swiper-wrapper">
                @foreach ($banners as $key => $banner)
                    <div class="swiper-slide">
                        <div class="tmp-banner-area bg_image-{{ $key + 1 }} bg_image banner-one-height-control construction-2 tmp-section-gap"
                            style="background-image: url('{{ Storage::url($banner->image) }}');">
                            <div class="shape-image-banner-one">
                                <img src="{{ asset('assets/images/banner/shape/01.png') }}" alt="banner" class="one">
                                <img src="{{ asset('assets/images/banner/shape/02.png') }}" alt="banner" class="two">
                                <img src="{{ asset('assets/images/banner/shape/03.png') }}" alt="banner" class="three">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="banner-one-main-wrapper">
                                            <div class="inner">
                                                <span
                                                    class="sub-title">{{ $banner->subtitle ?? 'Business Consulting Agency' }}</span>
                                                <h1 class="title">{{ $banner->title ?? 'Default Title' }}</h1>
                                                <p class="disc">
                                                    {{ $banner->description ?? 'Default description about the business.' }}
                                                </p>
                                                <div class="button-area-banner-one">
                                                    <a href="{{ $banner->button_link ?? '#' }}" class="tmp-btn btn-primary">
                                                        {{ $banner->button_text ?? 'Learn More' }}
                                                    </a>
                                                    <!-- video icon -->
                                                    @if ($banner->video_link)
                                                        <div class="vedio-icone" data-tmp-cursor="lg"
                                                            data-tmp-cursor-text="Play Video">
                                                            <a class="video-play-button play-video"
                                                                href="{{ $banner->video_link }}">
                                                                <span></span>
                                                                <p class="text">
                                                                    Play Video
                                                                </p>
                                                            </a>
                                                            <div class="video-overlay">
                                                                <a class="video-overlay-close">×</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <!-- video icon -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Next"></div>
            <div class="swiper-button-prev" data-tmp-cursor="lg transparent fw-bold" data-tmp-cursor-text="Prev"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnail-construction">
                        <div class="image-large">
                            <img src="{{ Storage::url($about->image) }}" alt="construction_business">
                        </div>
                        <div class="shape-bottom-left"></div>
                        <div class="work-done">
                            <h3 class="title"><span class="counter">{{ $about->completed_work }}</span>+</h3>
                            <p>Completed Work</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                <span class="subtitle">ABOUT US</span>
                            </div>
                            {{ $about->image }}
                            <h2 class="title split-collab">{{ $about->title }}</h2>
                        </div>

                        <p class="description">{{ $about->description }}</p>

                        <!-- Progress bars -->
                        <div class="single-progress-area progress-stye-one">
                            <div class="progress-top">
                                <p class="name">Consulting Service</p>
                                <span class="parcent">{{ $about->consulting_service }}%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg--primary" role="progressbar"
                                    style="width: {{ $about->consulting_service }}%"
                                    aria-valuenow="{{ $about->consulting_service }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                        <div class="single-progress-area progress-stye-one">
                            <div class="progress-top">
                                <p class="name">Finance Consulting</p>
                                <span class="parcent">{{ $about->finance_consulting }}%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg--primary" role="progressbar"
                                    style="width: {{ $about->finance_consulting }}%"
                                    aria-valuenow="{{ $about->finance_consulting }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tpm About Area End  -->

    <!-- Start Service Area  -->
    <div class="service-area tmp-section-gapBottom" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                alt="Business_Consulting_services">
                            <span>OUR SERVICES</span>
                        </div>
                        <h2 class="title split-collab">Our Provided Services</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="{{ $loop->index * 100 + 150 }}"
                        data-sal="slide-up" data-sal-duration="800">
                        <div class="service-inner financial-service-inner">
                            <div class="icon">
                                <img src="{{ Storage::url($service->icon_image) }}" alt="{{ $service->title }}">
                            </div>
                            <div class="content">
                                <h2 class="title">{{ $service->title }}</h2>
                                <p class="description">
                                    {{ Str::limit($service->description, 100) }}
                                </p>
                                <div class="three--dot">
                                    <div class="dot dot-one"></div>
                                    <div class="dot dot-two"></div>
                                    <div class="dot dot-three"></div>
                                </div>
                            </div>
                            <a href="{{ route('service-details', ['id' => $service->id]) }}" class="over_link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Service Area  -->

    <!-- Start Main Counter up-5 Area  -->
    <div class="tmp-counterup-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                alt="Corporate_service">
                            <span class="subtitle">Trusted</span>
                        </div>
                        <h2 class="title split-collab">Happy customers</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 counter_animation">
                @foreach ($customersCounts as $customerCount)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 counter__anim">
                        <div class="count-box counter-style-4 text-center">
                            <div>
                                <h3 class="title">
                                    <span class="counter">{{ $customerCount->count }}</span>{{ $customerCount->suffix }}
                                </h3>
                            </div>
                            <h5 class="counter-title">{{ $customerCount->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Main Counter up-5 Area  -->

    <!-- Tmp Servisec Processs Area Two Start -->
    <div class="tpm-services-process-area tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                alt="Corporate_service">
                            <span class="subtitle">OUR work process</span>
                        </div>
                        <h2 class="title split-collab">Our Working Process</h2>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                @foreach ($workProcesses as $process)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-services construction">
                            <div class="services-inner">
                                <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                    <a style="cursor: default;">
                                        <img src="{{ Storage::url($process->image) }}" alt="{{ $process->title }}"
                                            width="350" height="350">
                                        <div class="number-bg-round">
                                            <span>{{ $process->step_number }}</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="services-content services-content-style-1 text-center">
                                    <h5 class="title">{{ $process->title }}</h5>
                                    <p class="description">
                                        {{ $process->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Tmp Servisec Processs Area Two End -->

    <!-- tmp product area start -->
    <div class="container-full" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                alt="Business_Consulting_services">
                            <span>OUR PORTFOLIO</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-swiper-area-one">
                        <div class="swiper mySwiper-portfolio-2-cons">
                            <div class="swiper-wrapper">
                                @foreach ($portfolios as $portfolio)
                                    <div class="swiper-slide">
                                        <div class="signle-product-start"
                                            data-tmp-cursor="lg text-secondary transparent fw-bold"
                                            data-tmp-cursor-icon="fa-solid fa-arrow-up-right">
                                            <a href="{{ url('pages/projects-details?id=' . $portfolio->id) }}"
                                                class="thumbnail">
                                                <img src="{{ Storage::url($portfolio->image) }}"
                                                    alt="{{ $portfolio->title }}">
                                            </a>
                                            <div class="inner-content">
                                                <a href="#">
                                                    <h5 class="title">{{ $portfolio->title }}</h5>
                                                </a>
                                                <span class="designation">{{ $portfolio->designation }}</span>
                                                <div class="tag"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold"
                                data-tmp-cursor-text="Next"></div>
                            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold"
                                data-tmp-cursor-text="Prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp product area end -->

    <!-- Tmp FAQ area Start  -->
    <div class="faq-area faq-style-one faq-bg-image bg_image tmp-section-gap mt-dec--180">
        <div class="container pt--180">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"
                                alt="Corporate_service">
                            <span class="subtitle">QUESTION AND ANSWERS</span>
                        </div>
                        <h2 class="title split-collab">Frequency Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6 pr--30">
                    <div class="thumbnail-faq-cons">
                        <img src="{{ asset('assets/images/faq/faq-3.jpg') }}"src="{{ asset('assets/images/faq/faq-3.jpg') }}"
                            alt="Business Consulting FAQ">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $key => $faq)
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading{{ $key }}">
                                        <div class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}"
                                            data-bs-toggle="collapse" role="button"
                                            data-bs-target="#collapse{{ $key }}"
                                            aria-expanded="{{ $key == 0 ? 'true' : 'false' }}"
                                            aria-controls="collapse{{ $key }}">
                                            <div class="accordion-button-left">
                                                <i class="fa-regular fa-question"></i>
                                                <span>{{ $faq->question }}</span>
                                            </div>
                                            <div class="accordion-button-right">
                                                <i class="fa-sharp fa-light fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapse{{ $key }}"
                                        class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                        aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Tmp FAQ area Start  -->

    <!-- Start team area  -->
    <div class="team-area tmp-section-gap bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"
                                alt="Corporate services">
                            <span>OUR EXPERT TEAM</span>
                        </div>
                        <h2 class="section-title split-collab">Meet Our Expert Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                @foreach ($teams as $team)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="single-team">
                            {{-- {{href="{{ route('team-details') }}"}} --}}
                            <a style="cursor: default;"  class="thumbnail">
                                <img src="{{ Storage::url($team->image) }}" alt="{{ $team->name }}">
                            </a>
                            <div class="content">
                                <div class="team-name content-with-bg">
                                    <a class="name-area">
                                        <h6 class="name">{{ $team->name }}</h6>
                                    </a>
                                    <div class="designation">{{ $team->designation }}</div>
                                </div>
                                <div class="share-icon-style-one">
                                    <ul class="social-icons social-icons-with-bg">
                                        @if ($team->facebook)
                                            <li><a href="{{ $team->facebook }}"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                        @endif
                                        @if ($team->linkedin)
                                            <li><a href="{{ $team->linkedin }}"><i
                                                        class="fa-brands fa-linkedin-in"></i></a></li>
                                        @endif
                                        @if ($team->twitter)
                                            <li><a href="{{ $team->twitter }}"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                        @endif
                                    </ul>
                                    <i class="fa-sharp fa-solid fa-share-nodes"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End team area  -->

    <div class="tmp-video-section-start-one tmp-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="large-video-playing grow-thumbnail">
                        <video autoplay="" muted="" loop="" playsinline="" preload="metadata">
                            <source
                                src="{{ asset('assets/images/work/01.mp4') }}"src="{{ asset('assets/images/work/01.mp4') }}"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Testimonial with brand  -->
    <div class="testimonial-with-brand bg-1 bg_image">
        <!-- Start Testimonial Area  -->
        <div class="testimonial-brand-area tmp-section-gapTop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials-button-area">
                            <div class="section-head text-align-left">
                                <div class="section-sub-title">
                                    <img src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"src="{{ asset('assets/images/services/section-custom-menubar.png ') }}"
                                        alt="Corporate_service">
                                    <span class="subtitle">Client’s Testimonials</span>
                                </div>
                                <h2 class="title split-collab">What People Say About <br> Our Company</h2>
                            </div>

                            <div class="button-next-prev">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <!-- Slider main container -->
                        <div class="swiper-style-one tmp-section-gapBottom">
                            <div class="swiper-container-style-two">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">

                                    @foreach ($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="single-card card-horizontal">
                                                <div class="card-inner">
                                                    <div class="content">
                                                        <div class="rating rating-style-three">
                                                            <div class="stars-group">
                                                                <div class="star">
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star"></i>
                                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="description">{{ $testimonial->testimonial }}</p>
                                                        <div class="content content-without-bg">
                                                            <div class="name">{{ $testimonial->name }}</div>
                                                            <div class="designation">{{ $testimonial->designation }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="thumbnail">
                                                        <img src="{{ Storage::url($testimonial->image) }}"
                                                            alt="testimonial">
                                                        <div class="icon icon-quote">
                                                            <i class="fa-duotone fa-quote-left"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- If we need navigation buttons -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonial Area  -->

        <!-- Start Brand Area  -->
        <div class="brand-area tmp-section-gapBottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-inner tmp-section-gapTop">
                            <ul class="brand-list brand-style-1 justify-content-center justify-content-lg-between">
                                @foreach ($brands as $brand)
                                    <li data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <a href="#"><img src="{{ Storage::url($brand->image) }}"
                                                alt="{{ $brand->name }}"></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Brand Area  -->
    </div>
    <!-- End Testimonial with brand  -->

    <!-- Start Contact Area  -->
    <div class="contact-area-three tmp-section-gapTop" id="contact1">
        <div class="bg-shape">
            <img src="{{ asset('assets/images/cta/02.png') }}"src="{{ asset('assets/images/cta/02.png') }}"
                alt="bussiness-contact">
        </div>
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left" data-sal-delay="150"
                            data-sal="slide-up" data-sal-duration="800">
                            <span class="title">Contact Us</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolor magnaaliqua.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three" data-sal-delay="250" data-sal="slide-up"
                            data-sal-duration="800">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Call Us</span>
                                        <a class="contact-here" href="#">+123 34598768</a>
                                    </div>
                                </div>
                            </li>


                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>

                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here" href="#">info@uibundle.com</a>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Address</span>
                                        <a class="contact-here" href="#">25/5 Double Street, Texas Houston USA</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <div class="tmp-tag-list tag-list-one" data-sal-delay="350" data-sal="slide-up"
                            data-sal-duration="800">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Linkedin</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a>
                        </div>

                    </div>

                </div>
                <div class="col-lg-7" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">

                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">GET IN TOUCH</span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolor magnaaliqua.
                            </p>
                        </div>
                        {{-- Success & Error Messages --}}
                        <div id="alert-success" class="alert alert-success d-none"></div>
                        <div id="alert-error" class="alert alert-danger d-none"></div>

                        <div class="contact-form style-two">
                            <form id="contact-form" action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="name" placeholder="Name" type="text"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="phone" placeholder="Phone"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="email" placeholder="Email" type="email"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" placeholder="Website"
                                                name="website">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="How can we help" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-primary" type="submit">Submit
                                                Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- AJAX Script --}}
    <script>
        $(document).ready(function() {
            $("#contact-form").submit(function(event) {
                event.preventDefault();

                let formData = {
                    name: $("#name").val(),
                    phone: $("#phone").val(),
                    email: $("#email").val(),
                    website: $("#website").val(),
                    message: $("#message").val(),
                    _token: "{{ csrf_token() }}",
                };

                $.ajax({
                    type: "POST",
                    url: "{{ route('contact.store') }}",
                    data: formData,
                    success: function(response) {
                        $("#alert-success").removeClass("d-none").text(response.message);
                        $("#alert-error").addClass("d-none");
                        $("#contact-form")[0].reset();
                    },
                    error: function(response) {
                        $("#alert-error").removeClass("d-none").text(response.responseJSON
                            .message);
                        $("#alert-success").addClass("d-none");
                    }
                });
            });
        });
    </script>
    <!-- End Contact Area  -->

    <!-- Join Us One Start -->
    <div class="join-us-one mt--120">
        <div class="container">
            <div class="join-us-one__inner">
                <div class="join-us-one__shape-1">
                    <img src="{{ asset('assets/images/shapes/join-us-one-shape-1.png') }}"src="{{ asset('assets/images/shapes/join-us-one-shape-1.png') }}"
                        alt="">
                </div>
                <div class="join-us-one__shape-2">
                    <img src="{{ asset('assets/images/shapes/join-us-one-shape-2.png') }}"src="{{ asset('assets/images/shapes/join-us-one-shape-2.png') }}"
                        alt="">
                </div>
                <div class="join-us-one__title-box">
                    <h2 class="join-us-one__title">Get Update Subscribe <br> to Newsletter</h2>
                </div>
                <div class="join-us-one__form-box">
                    <form class="join-us-one__contact-form" data-url="MC_FORM_URL" novalidate="novalidate">
                        <div class="contact-form-2">
                            <input type="email" placeholder="Enter Your Email" name="EMAIL" required>
                            <button type="submit" class="tmp-btn btn-primary">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Join Us One End -->

    <!-- Tmp Blog Area Start  -->
    <div class="tmp-blog-area tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            <img src="{{ asset('assets/images/services/section-custom-menubar.png') }}"
                                alt="Corporate_service">
                            <span class="subtitle">LATEST BLOG</span>
                        </div>
                        <h2 class="title split-collab">Latest News & Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">

                @foreach ($blogs as $blog)
                    <div class="col-lg-6 col-md-6 col-sm-12 col1-2" data-sal-delay="150" data-sal="slide-up"
                        data-sal-duration="800">
                        <div class="single-blog">
                            <div class="blog-inner">
                                <div class="thumbnail">
                                    <a href="{{ route('blog-details', ['id' => $blog->id]) }}">
                                        <img src="{{ asset($blog->image ?? 'assets/images/blog/default.png') }}"
                                            alt="{{ $blog->title }}">
                                    </a>

                                    <div class="pmt-blog-meta">
                                        <ul class="all-meta">
                                            <li class="date"><span>{{ $blog->created_at->format('d') }}</span></li>
                                            <li class="month"><span>{{ $blog->created_at->format('M') }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-head">
                                        <span class="name">{{ $blog->author }}</span>
                                        <span class="designation">{{ $blog->category }}</span>
                                    </div>
                                    <div class="blog-body">
                                        <a href="{{ route('blog-details', $blog->id) }}" class="title-area">
                                            <h4 class="title">{{ Str::limit($blog->title, 50) }}</h4>
                                        </a>
                                        <p class="description">
                                            {{ Str::limit($blog->content, 100) }}
                                        </p>
                                    </div>
                                    <a class="btn-read-more" href="{{ route('blog-details', $blog->id) }}">
                                        <span class="read-more-text">Read More</span>
                                        <span class="read-more-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Tmp Blog Area Start  -->

    <x-footer />
@endsection
