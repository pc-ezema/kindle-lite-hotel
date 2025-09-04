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
                            <li class="menu-item-has-children"><a href="#">Room</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Room Style</a></li>
                                    <li><a href="#">Room Modern</a></li>
                                    <li><a href="#">Room List</a></li>
                                    <li><a href="#">Room Details</a></li>
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
                        <a class="theme-btn" href="">Book Now<i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->