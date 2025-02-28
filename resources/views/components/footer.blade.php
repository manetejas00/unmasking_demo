<footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-area subscribe-style-1">
                    <div class="subscribe-inner">
                        <div class="title">Subscribe to Newsletter</div>
                        <form action="#" class="newsletter-form-1 mt--40">
                            <input type="email" placeholder="Your Email" required>
                            <button type="submit" class="tmp-btn btn-primary">
                                Subscribe Now <i class="fa-sharp fa-regular fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-main footer-style-one">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer-wrapper border-right mr--20">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ Storage::url($footerData->logo ?? 'assets/images/logo/logo-02.svg') }}"
                                    alt="logo">
                            </a>
                        </div>
                        <p class="description">
                            {{ $footerData->description ?? 'Default footer description.' }}
                        </p>
                        <div class="day-time">
                            <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                            <div class="content">
                                <div class="day">{{ $footerData->working_days ?? 'Monday - Friday' }}:</div>
                                <div class="time">{{ $footerData->working_hours ?? '9:00 AM – 8:00 PM' }}</div>
                            </div>
                        </div>
                        @foreach ($footerData->social_links ?? [] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="social-link">
                                <i class="{{ $link['icon'] ?? 'fa-brands fa-facebook' }} fa-{{ strtolower($link['name'] ?? 'facebook') }}"></i>
                                {{ $link['name'] }}
                            </a>
                        </li>
                    @endforeach

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                        <h5 class="ft-title">Quick Links</h5>
                        <ul class="ft-link">
                            @foreach ($footerData->quick_links ?? [] as $link)
                                <li><a href="{{ $link['url'] }}">{{ $link['name'] ?? 'Default Link' }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-wrapper">
                        <h5 class="ft-title">Official Info:</h5>
                        <ul class="ft-link">
                            <li class="ft-location">{{ $footerData->official_info['address'] ?? 'Default Address' }}
                            </li>
                            <li>
                                <div class="single-contact">
                                    <div class="icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                                    <div class="content">
                                        <span>Email:</span>
                                        <a
                                            href="mailto:{{ $footerData->official_info['email'] ?? 'info@example.com' }}">{{ $footerData->official_info['email'] ?? 'info@example.com' }}</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-contact">
                                    <div class="icon"><i class="fa-light fa-phone"></i></div>
                                    <div class="content">
                                        <span>Phone:</span>
                                        <a
                                            href="tel:{{ $footerData->official_info['phone'] ?? '+1234567890' }}">{{ $footerData->official_info['phone'] ?? '+1234567890' }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright-area-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-wrapper">
                    <p>© Copyright 2024. {{ $footerData->copyright_text ?? 'All Rights Reserved.' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .social-link {
        color: white; /* Default white text */
    }

    .social-link:hover {
        color: red; /* Change to red on hover */
    }

    .social-icons {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 10px;
    }

    .social-icons li {
        display: inline-block;
    }
</style>
