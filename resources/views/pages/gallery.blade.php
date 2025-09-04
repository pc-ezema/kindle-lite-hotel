@extends('layouts.frontend', ['title' => 'About Us'])

@push('styles')

@endpush

@section('page-content')
<!-- Page Banner Start -->
@includeIf('layouts.breadcrumb', ['image' => url('assets/img/banner/page-banner-2.jpg'), 'title' => 'Gallery', 'subtitle' => 'Gallery'])
<!-- Page Banner End -->
<!-- Company Offers Start -->
<div class="offers__area section-padding" style="padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="offers__area-title">
                    <h2>Our Gallery</h2>
                    <p>Discover the beauty of our spaces, from cozy rooms to breathtaking views.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area Start -->
<div class="gallery__area pb-0 overflow-hidden" style="padding-bottom: 30px !important;">
    <div class="container p-0">
        <div class="row">
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{url('assets/img/features/gallery-1.jpg')}}"><img class="img__full" src="{{url('assets/img/features/gallery-1.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{url('assets/img/features/gallery-2.jpg')}}"><img class="img__full" src="{{url('assets/img/features/gallery-2.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3 sm-mb-10">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{url('assets/img/features/gallery-3.jpg')}}"><img class="img__full" src="{{url('assets/img/features/gallery-3.jpg')}}" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="gallery__area-item">
                    <a class="img-popup" href="{{url('assets/img/features/gallery-4.jpg')}}"><img class="img__full" src="{{url('assets/img/features/gallery-4.jpg')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->
@endsection