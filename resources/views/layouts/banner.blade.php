<!-- Banner Area Start -->
<div class="banner__area" data-background="{{url('assets/img/banner-1.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="banner__area-title">
                    <h1 class="fadeInUp animated" data-animation="fadeInUp" data-delay="0.5s" style="animation-delay: 0.5s;">
                        Stay in Style, <span>Relax in Luxury</span>
                    </h1>
                    <div class="banner__two-content-button fadeInUp animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s; display: flex; justify-content: center; margin-top: 1rem;">
                        <a class="theme-btn" href="{{route('bookingSystem')}}">Book Now</a>
                    </div>
                    <div class="banner__area-title-video">
                        <div class="video__play">
                            <a class="video-popup" href=""><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="#">
                <div class="check__area">
                    <div class="check__area-item">
                        <p>Check In<input id="date" type="date"></p>
                    </div>
                    <div class="check__area-item">
                        <p>Check Out<input id="date2" type="date"></p>
                    </div>
                    <div class="check__area-item">
                        <div class="check__area-item-room">
                            <p>Room</p>
                            <select name="select">
                                <option value="">-- Select Room --</option>
                                @foreach($rooms as $room)
                                <option value="{{$room->type}}">{{$room->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="check__area-item button">
                        <a href="{{route('bookingSystem')}}" class="theme-btn" type="submit">Search</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Banner Area End -->