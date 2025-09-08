@extends('layouts.frontend', ['title' => 'Contact Us'])

@push('styles')

@endpush

@section('page-content')
<!-- Banner Area Start -->
@includeIf('layouts.breadcrumb', ['image' => url('assets/img/banner/page-banner-10.jpg'),'title' => 'Booking System', 'subtitle' => 'Booking System'])
<!-- Banner Area End -->
<!-- Booking System Area Start -->
<div class="contact__area section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__area-form">
                    <h3 class="mb-35">Book Room</h3>
                    <form id="bookNowForm">
                        <div id="successMessage" class="alert mt-3 d-none"></div>
                        @csrf
                        <div class="row">

                            <!-- Room Type -->
                            <div class="col-sm-6 mb-30">
                                <label for="roomId">Room Type</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-bed"></i>
                                    <select name="roomId" id="roomId" required style="display: block !important;">
                                        <option value="">Select Room</option>
                                        @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">
                                            {{ $room->type }} - ₦{{ number_format($room->price, 2) }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <small id="roomIdError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Full Name -->
                            <div class="col-sm-6 mb-30">
                                <label for="name">Full Name</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" id="name" placeholder="Full Name" required="required">
                                    <small id="nameError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-sm-6 mb-30">
                                <label for="phoneNumber">Phone Number</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required="required">
                                    <small id="phoneNumberError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-sm-6 mb-30">
                                <label for="email">Email Address</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" id="email" placeholder="Email Address" required="required">
                                    <small id="emailError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Check In -->
                            <div class="col-sm-6 mb-30">
                                <label for="checkIn">Check In</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-calendar-check"></i>
                                    <input type="date" name="checkIn" id="checkIn" required="required">
                                    <small id="checkInError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Check Out -->
                            <div class="col-sm-6 mb-30">
                                <label for="checkOut">Check Out</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-calendar-times"></i>
                                    <input type="date" name="checkOut" id="checkOut" required="required">
                                    <small id="checkOutError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Adults -->
                            <div class="col-sm-6 mb-30">
                                <label for="adult">No of Adults</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-users"></i>
                                    <input type="number" name="adult" id="adult" placeholder="Adults" min="1" required="required">
                                    <small id="adultError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Children -->
                            <div class="col-sm-6 mb-30">
                                <label for="child">No of Children</label>
                                <div class="contact__area-form-item">
                                    <i class="fas fa-child"></i>
                                    <input type="number" name="child" id="child" placeholder="Children" min="0">
                                    <small id="childError" class="text-danger error-message"></small>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-sm-12" style="margin-bottom: 50px; text-align: center;">
                                <button type="submit" id="submitContactBtn" class="theme-btn">
                                    Book Now <i class="fas fa-long-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking System Area End -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#bookNowForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            var submitBtn = $('#submitContactBtn');

            submitBtn.prop('disabled', true).html(`
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="margin-right: 5px;"></span> Booking...
            `);

            $('.error-message').text('');
            $('#successMessage').addClass('d-none').removeClass('alert-danger alert-success').text('');

            $.ajax({
                url: "{{ route('bookNow') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        $('#successMessage').removeClass('d-none alert-danger')
                            .addClass('alert-success')
                            .text(response.message);
                        $('#bookNowForm')[0].reset();
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        // Handle validation errors
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#' + key + 'Error').text(value[0]);
                        });
                    } else {
                        // Handle other errors
                        $('#successMessage').removeClass('d-none alert-success')
                            .addClass('alert-danger')
                            .text('Something went wrong. Please try again.');
                    }
                },
                complete: function() {
                    submitBtn.prop('disabled', false).html('Book Now <i class="fas fa-long-arrow-right"></i>');
                }
            });
        });
    });
</script>
@endpush