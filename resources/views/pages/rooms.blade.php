@extends('layouts.frontend', ['title' => ucfirst($room->type)])

@push('styles')

@endpush

@section('page-content')
<!-- Banner Area Start -->
@includeIf('layouts.breadcrumb', [
'image' => $room->image,
'title' => ucfirst($room->type),
'subtitle' => 'Our ' . ucfirst($room->type)
])
<!-- Banner Area End -->
<!-- Room Details Start -->
<div class="room__details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="room__details-right">
                    <div class="room__details-right-content">
                        <div class="row mt-35 mb-35">
                            <div class="col-12">
                                <img class="img__full" src="{{ $room->image }}" alt="{{ $room->type }}">
                            </div>
                        </div>
                        <h3 class="mb-3">{{ ucfirst($room->type) }}</h3>
                        <p class="mb-25">{{ $room->description }}</p>
                        <p><strong>Price:</strong> ₦{{ number_format($room->price, 2) }} / Night</p>
                        <a href="{{ route('bookingSystem') }}" class="theme-btn">Book Now</a>
                    </div>
                    <div class="room__details-right-list">
                        <h3>Amenities</h3>
                        <div class="row mt-35">
                            <div class="col-md-4 col-sm-6 mb-35">
                                <div class="room__details-right-list-item">
                                    <div class="room__details-right-list-item-icon">
                                        <i class="fa-solid fa-broom"></i>
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Room Cleaning</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 sm-mb-35">
                                <div class="room__details-right-list-item">
                                    <div class="room__details-right-list-item-icon">
                                        <i class="fa-solid fa-car"></i>
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Car Parking</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 sm-mb-35">
                                <div class="room__details-right-list-item">
                                    <div class="room__details-right-list-item-icon">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Smart Key</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 md-mb-35">
                                <div class="room__details-right-list-item">
                                    <div class="room__details-right-list-item-icon">
                                        <i class="fa-solid fa-wifi"></i>
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Home Wifi</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 sm-mb-35">
                                <div class="room__details-right-list-item">
                                    <div class="room__details-right-list-item-icon">
                                        <i class="fa-solid fa-utensils"></i>
                                    </div>
                                    <div class="room__details-right-list-item-title">
                                        <h6>Breakfast</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room Details End -->
@endsection