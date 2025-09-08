<!-- Header Area Start -->
<div class="header__sticky">
    <div class="header__area">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="{{route('index')}}"><img src="{{url('assets/img/logo.png')}}" alt=""></a>
                        <div class="responsive-menu"></div>
                    </div>
                </div>
                <div class="header__area-menubar-right">
                    <div class="header__area-menubar-right-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li><a class="{{ (request()->is('/')) ? 'headerActive' : '' }}" href="{{route('index')}}">Home</a></li>
                            <li class=""><a class="{{ (request()->is('about-us')) ? 'headerActive' : '' }}" href="{{route('aboutUs')}}">About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" class="{{ (request()->is('rooms*')) ? 'headerActive' : '' }}">Rooms</a>
                                <ul class="sub-menu">
                                    @forelse($roomTypes as $roomType)
                                    @php
                                    $slug = Str::slug($roomType->type); // e.g., "Luxury Room" → "luxury-room"
                                    @endphp
                                    <li>
                                        <a href="{{ route('room.details', ['type' => $slug]) }}" class="{{ (request()->is('rooms/'.$slug)) ? 'headerActive' : '' }}">
                                            {{ $roomType->type }}
                                        </a>
                                    </li>
                                    @empty
                                    <li><a href="#">No Rooms Available</a></li>
                                    @endforelse
                                </ul>
                            </li>
                            <li class=""><a class="{{ (request()->is('gallery')) ? 'headerActive' : '' }}" href="{{route('gallery')}}">Gallery</a></li>
                            <li class=""><a class="{{ (request()->is('faqs')) ? 'headerActive' : '' }}" href="{{route('faqs')}}">FAQs</a></li>
                            <li class=""><a class="{{ (request()->is('contact-us')) ? 'headerActive' : '' }}" href="{{route('contactUs')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__area-menubar-right-box">
                    <div class="header__area-menubar-right-box-btn">
                        <a class="theme-btn" href="{{route('bookingSystem')}}">Book Now<i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->