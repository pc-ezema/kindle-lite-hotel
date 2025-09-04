@extends('layouts.frontend', ['title' => 'Welcome'])

@push('styles')

@endpush

@section('page-content')
<!-- Banner Area Start -->
@includeIf('layouts.banner')
<!-- Banner Area End -->
<!-- Accommodations Area Start -->
<div class="accommodations__area section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 lg-mb-30">
                <div class="accommodations__area-title">
                    <span class="subtitle__one">Accommodations</span>
                    <h2>Welcome Our {{config('app.name')}}</h2>
                    <p>
                        At {{config('app.name')}}, every stay is designed to be an unforgettable experience.
                        Our elegant rooms and suites combine modern comfort with timeless style,
                        offering breathtaking views, premium amenities, and warm hospitality.
                        Whether you’re here for business, leisure, or a family getaway,
                        we provide the perfect balance of relaxation and convenience.
                    </p>
                    <a class="theme-btn" href="{{route('aboutUs')}}">Read More<i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="accommodations__area-right">
                    <div class="accommodations__area-right-image">
                        <img src="{{url('assets/img/hotel/hotel-1.jpg')}}" alt="">
                        <div class="accommodations__area-right-image-two">
                            <img src="{{url('assets/img/hotel/hotel-2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Accommodations Area End -->
<!-- Deluxe Area Start -->
<div class="deluxe__area section-padding">
    <div class="container">
        <div class="row align-items-end mb-60">
            <div class="col-xl-5">
                <div class="deluxe__area-title">
                    <span class="subtitle__one">Deluxe and Luxury</span>
                    <h2>Our Luxury Rooms</h2>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="deluxe__area-btn">
                    <ul>
                        <li class="active" data-filter="*">All Rooms</li>
                        <li data-filter=".luxury">Luxury</li>
                        <li data-filter=".single">Single</li>
                        <li data-filter=".suite">Small Suite</li>
                        <li data-filter=".family">Family</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row deluxe__area-active">
            <div class="col-xl-3 col-lg-4 mb-30 suite">
                <div class="deluxe__area-item">
                    <div class="deluxe__area-item-image">
                        <img class="img__full" src="{{url('assets/img/luxury/luxury-1.jpg')}}" alt="">
                    </div>
                    <div class="deluxe__area-item-content">
                        <h6><a href="#"><span>₦134,000</span> / Night</a></h6>
                        <h4><a href="#">Small Suite</a></h4>
                        <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Booking Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 mb-30 suite">
                <div class="deluxe__area-item deluxe__area-item-hover">
                    <div class="deluxe__area-item-image">
                        <img class="img__full" src="{{url('assets/img/luxury/luxury-2.jpg')}}" alt="">
                    </div>
                    <div class="deluxe__area-item-content">
                        <h6><a href="#"><span>₦199,000</span> / Night</a></h6>
                        <h4><a href="#">Deluxe Room</a></h4>
                        <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Booking Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 mb-30 family">
                <div class="deluxe__area-item">
                    <div class="deluxe__area-item-image">
                        <img class="img__full" src="{{url('assets/img/luxury/luxury-3.jpg')}}" alt="">
                    </div>
                    <div class="deluxe__area-item-content">
                        <h6><a href="#"><span>₦319,000</span> / Night</a></h6>
                        <h4><a href="#">Family Room</a></h4>
                        <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Booking Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 lg-mb-30 single">
                <div class="deluxe__area-item">
                    <div class="deluxe__area-item-image">
                        <img class="img__full" src="{{url('assets/img/luxury/luxury-4.jpg')}}" alt="">
                    </div>
                    <div class="deluxe__area-item-content">
                        <h6><a href="#"><span>₦169,000</span> / Night</a></h6>
                        <h4><a href="#">Single Room</a></h4>
                        <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Booking Now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 luxury">
                <div class="deluxe__area-item">
                    <div class="deluxe__area-item-image">
                        <img class="img__full" src="{{url('assets/img/luxury/luxury-5.jpg')}}" alt="">
                    </div>
                    <div class="deluxe__area-item-content">
                        <h6><a href="#"><span>₦249,000</span> / Night</a></h6>
                        <h4><a href="#">Luxury Room</a></h4>
                        <a class="simple-btn" href="#"><i class="far fa-chevron-right"></i>Booking Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deluxe Area End -->
<!-- Video Area Start -->
<div class="video__area" data-background="{{url('assets/img/video.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-7 col-lg-8">
                <div class="video__area-title">
                    <h2>Experience Comfort, Luxury, and Unforgettable Stays.</h2>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5 col-lg-4">
                <div class="video__area-right">
                    <div class="video__play">
                        <a class="video-popup" href="#"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Area End -->
<!-- Services Area Start -->
<div class="services__area section-padding">
    <div class="container">
        <div class="row">
            <div class="booking__two-title mb-5">
                <h2>Our Facilties</h2>
                <p>Indulge in Luxury: Explore Our Premium Facilities</p>                        
            </div>
            <!-- Room Cleaning -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-broom"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Room Cleaning</a></h5>
                        <p>Daily housekeeping ensures your room stays fresh and spotless.</p>
                    </div>
                </div>
            </div>

            <!-- Free WiFi -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Free Wi-Fi</a></h5>
                        <p>Enjoy complimentary high-speed internet access throughout the hotel.</p>
                    </div>
                </div>
            </div>

            <!-- Pickup & Drop -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-shuttle-van"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Pickup & Drop</a></h5>
                        <p>Convenient airport transfers and shuttle services at your request.</p>
                    </div>
                </div>
            </div>

            <!-- Swimming Pool -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Swimming Pool</a></h5>
                        <p>Relax and refresh in our crystal-clear outdoor swimming pool.</p>
                    </div>
                </div>
            </div>

            <!-- Restaurant & Bar -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Restaurant & Bar</a></h5>
                        <p>Enjoy delicious meals and refreshing drinks at our restaurant & bar.</p>
                    </div>
                </div>
            </div>

            <!-- Parking -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-parking"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Free Parking</a></h5>
                        <p>Secure and complimentary parking space for all guests.</p>
                    </div>
                </div>
            </div>

            <!-- Fitness Center -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Fitness Center</a></h5>
                        <p>Stay fit with modern gym equipment and workout facilities.</p>
                    </div>
                </div>
            </div>

            <!-- Spa & Wellness -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Spa & Wellness</a></h5>
                        <p>Unwind with professional spa treatments and relaxing massages.</p>
                    </div>
                </div>
            </div>

            <!-- Conference Hall -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-5">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Conference Hall</a></h5>
                        <p>Host meetings, workshops, and events in our modern conference halls.</p>
                    </div>
                </div>
            </div>

            <!-- 24/7 Front Desk -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 lg-mb-30">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">24/7 Front Desk</a></h5>
                        <p>Our reception team is available round the clock for your assistance.</p>
                    </div>
                </div>
            </div>

            <!-- Laundry Service -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sm-mb-30">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Laundry Service</a></h5>
                        <p>Fast and reliable laundry & dry-cleaning services available.</p>
                    </div>
                </div>
            </div>

            <!-- Room Service -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="services__area-item">
                    <div class="services__area-item-icon">
                        <i class="fas fa-concierge-bell"></i>
                    </div>
                    <div class="services__area-item-content">
                        <h5><a href="#">Room Service</a></h5>
                        <p>Enjoy meals and refreshments delivered straight to your room.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->
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