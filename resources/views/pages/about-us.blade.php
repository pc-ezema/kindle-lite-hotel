@extends('layouts.frontend', ['title' => 'About Us'])

@push('styles')

@endpush

@section('page-content')
<!-- Page Banner Start -->
@includeIf('layouts.breadcrumb', ['image' => url('assets/img/banner/page-banner-1.jpg'), 'title' => 'About Us', 'subtitle' => 'About Us'])
<!-- Page Banner End -->
<!-- Company Offers Start -->
<div class="place__area section-padding mt-35" style="padding-bottom: 0 !important;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="place__area-image">
                    <div class="row">
                        <div class="col-6">
                            <div class="place__area-image-one">
                                <img src="{{url('assets/img/hotel/hotel-6.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="place__area-image-two">
                                <img src="{{url('assets/img/hotel/hotel-7.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 lg-mt-30">
                <div class="place__area-title">
                    <span class="subtitle__one">Welcome To {{config('app.name')}}</span>
                    <h2>Relax in our Resort</h2>
                    <p>We welcome you to the best luxury hotel. It offers the highest level of comfort and relaxation. 
                        Large selection of rooms and apartments for every taste and for every need. Qualified staff, delicious dinners, bar, drinks, relaxation area and parking. 
                        A five-star hotel with history, atmosphere and a warm welcome.</p>
                    <p>
                        At {{config('app.name')}}, we prioritize your comfort and satisfaction, and our dedicated team is always available to assist you with any requests or inquiries. Experience the warmth of hospitality and the convenience of modern amenities at our hotel. We look forward to welcoming you soon!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Company Offers End -->
<div class="call__area section-padding">
    <div class="container">
        <div class="row align-items-center call__area-bg" data-background="{{url('assets/img/bg/call.jpg')}}" style="background-image: url(&quot;assets/img/bg/call.jpg&quot;);">
            <div class="col-xl-8">
                <div class="call__area-bg-left">
                    <h2>Need any Contact with Us</h2>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="call__area-bg-right">
                    <div class="call__area-bg-right-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="call__area-bg-right-content">
                        <span><a href="tel:{{config('app.phone')}}">{{config('app.phone')}}</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area Start -->
<div class="testimonial__area pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="booking__two-title mb-5">
                    <h2>Testimonials</h2>
                </div>
                <div class="testimonial__area-bg">
                    <div class="swiper testimonial__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__area-item">
                                    <div class="testimonial__area-item-content">
                                        <h4>Chinonso Okeke</h4>
                                        <span>Business Executive</span>
                                        <p>My stay was absolutely seamless. The staff were attentive, the room was spotless, and the atmosphere made me feel both relaxed and productive. This is now my preferred hotel whenever I’m in town.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__area-item">
                                    <div class="testimonial__area-item-content">
                                        <h4>Adesuwa Adebayo</h4>
                                        <span>Event Planner</span>
                                        <p>The hospitality was second to none. From the warm welcome at the reception to the elegant dining experience, everything exceeded my expectations. I highly recommend this hotel for both leisure and business travelers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__area-item">
                                    <div class="testimonial__area-item-content">
                                        <h4>Ifeanyi Nwosu</h4>
                                        <span>Tech Entrepreneur</span>
                                        <p>What impressed me most was the attention to detail. The facilities are world-class, the environment is serene, and the service is always top-notch. Truly a home away from home.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__area-item-dots">
                        <div class="pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Area End -->
<!-- Hotel Statistics Start -->
<div class="statistics__area section-padding">
    <div class="container">
        <div class="row text-center">
            <!-- Stat Item -->
            <div class="col-6 col-md-3 mb-4">
                <div class="booking__two-title mb-5">
                    <h2>Our Statistics</h2>
                </div>
            </div>
            <!-- Stat Item -->
            <div class="col-6 col-md-2 mb-4">
                <div class="stat__box">
                    <h2>
                        <span class="counter">20</span><span class="suffix">+</span>
                    </h2>
                    <p>Luxury Rooms</p>
                </div>
            </div>
            <!-- Stat Item -->
            <div class="col-6 col-md-2 mb-4">
                <div class="stat__box">
                    <h2>
                        <span class="counter">1</span><span class="suffix">K+</span>
                    </h2>
                    <p>Happy Guests</p>
                </div>
            </div>
            <!-- Stat Item -->
            <div class="col-6 col-md-2 mb-4">
                <div class="stat__box">
                    <h2>
                        <span class="counter">10</span><span class="suffix">+</span>
                    </h2>
                    <p>Events Hosted</p>
                </div>
            </div>
            <!-- Stat Item -->
            <div class="col-6 col-md-3 mb-4">
                <div class="stat__box">
                    <h2>
                        <span class="counter">5</span><span class="suffix">+</span>
                    </h2>
                    <p>Years of Excellence</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hotel Statistics End -->
@endsection
@push('scripts')
<script>
    var testimonialSwiper = new Swiper(".testimonial__slider", {
        loop: true, // enables continuous loop
        autoplay: {
            delay: 4000, // 4 seconds per slide
            disableOnInteraction: false, // keeps autoplay after user interaction
        },
        pagination: {
            el: ".pagination",
            clickable: true,
        },
        speed: 800, // smooth transition
    });
</script>
@endpush