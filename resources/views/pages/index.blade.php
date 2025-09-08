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
            <div class="col-xl-12">
                <div class="deluxe__area-title">
                    <span class="subtitle__one">Deluxe and Luxury</span>
                    <h2>Our Luxury Rooms</h2>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="deluxe__area-btn">
                    <ul>
                        <li class="active" data-filter="*">All Rooms</li>
                        @php
                            // Get unique room types dynamically
                            $roomTypes = $rooms->pluck('type')->unique();
                        @endphp

                        @foreach($roomTypes as $type)
                            @php
                                // Convert type into a safe class name
                                $filterClass = strtolower(str_replace(' ', '-', $type));
                            @endphp
                            <li data-filter=".{{ $filterClass }}">{{ $type }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="row deluxe__area-active">
            @forelse($rooms as $room)
                @php
                    // Same class conversion for filtering
                    $filterClass = strtolower(str_replace(' ', '-', $room->type));
                @endphp

                <div class="col-xl-4 col-lg-6 mb-30 {{ $filterClass }}">
                    <div class="deluxe__area-item">
                        <div class="deluxe__area-item-image">
                            <img class="img__full" src="{{ $room->image }}" alt="{{ $room->type }}">
                        </div>
                        <div class="deluxe__area-item-content">
                            <h6><a href="#"><span>₦{{ number_format($room->price, 0) }}</span> / Night</a></h6>
                            <h4><a href="#">{{ $room->type }}</a></h4>
                            <a class="simple-btn" href="{{route('bookingSystem')}}"><i class="fas fa-chevron-right"></i> Booking Now</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="text-muted">No rooms available at the moment. Please check back later.</p>
                </div>
            @endforelse
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
@includeIf('layouts.facilities')
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
    /*========== Nice Select ==========*/
	$('select').niceSelect();	
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