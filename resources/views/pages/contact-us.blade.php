@extends('layouts.frontend', ['title' => 'Contact Us'])

@push('styles')

@endpush

@section('page-content')
<!-- Banner Area Start -->
@includeIf('layouts.breadcrumb', ['image' => url('assets/img/banner/page-banner-9.jpg'),'title' => 'Contact Us', 'subtitle' => 'Contact Us'])
<!-- Banner Area End -->
<!-- Contact Area Start -->
<div class="contact__area section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 lg-mb-30">
                <div class="contact__area-title">
                    <h3 class="mb-25">Get In Touch</h3>
                    <p>We’d love to hear from you! Whether you’re planning your stay, hosting an event, or simply have a question, our team is here to assist you.</p>
                </div>
                <div class="contact__area-info">
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Emergency Help</span>
                            <h6><a href="tel:{{config('app.phone')}}">{{config('app.phone')}}</a></h6>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Quick Email</span>
                            <h6><a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a></h6>
                        </div>
                    </div>
                    <div class="contact__area-info-item">
                        <div class="contact__area-info-item-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact__area-info-item-content">
                            <span>Office Address</span>
                            <h6><a href="#">{{config('app.address')}}</a></h6>
                        </div>
                    </div>
                </div>
                <div class="contact__area-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-tiktok"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="contact__area-form">
                    <h3 class="mb-35">Send Massage</h3>
                    <form id="contactForm" action="#">
                        <div id="successMessage" class="alert d-none"></div>

                        <div class="row">
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" id="name" placeholder="Full Name" required="required">
                                    <small id="nameError" class="text-danger error-message"></small>
                                </div>
                            </div>
                            <div class="col-sm-6 sm-mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-envelope-open"></i>
                                    <input type="email" name="email" id="email" placeholder="Email Address" required="required">
                                    <small id="emailError" class="text-danger error-message"></small>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="fas fa-phone-alt"></i>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone" required="required">
                                    <small id="phoneError" class="text-danger error-message"></small>
                                </div>
                            </div>
                            <div class="col-sm-6 sm-mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-address-book"></i>
                                    <input type="text" name="subject" id="subject" placeholder="Subject" required="required">
                                    <small id="subjectError" class="text-danger error-message"></small>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-30">
                                <div class="contact__area-form-item">
                                    <i class="far fa-comments"></i>
                                    <textarea name="message" id="message" placeholder="Type your comments...."></textarea>
                                    <small id="messageError" class="text-danger error-message"></small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact__area-form-item">
                                    <button id="submitContactBtn" class="theme-btn" type="submit">
                                        Submit Now <i class="fas fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact__area-map section-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254245.29266810403!2d6.971985049350483!3d5.327592784978207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10428b1e164dfe79%3A0xa1728a87328211d8!2sNgor-Okpala%2C%20Imo!5e0!3m2!1sen!2sng!4v1756985328117!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {

            e.preventDefault();

            var formData = new FormData(this);
            var submitBtn = $('#submitContactBtn');

            submitBtn.prop('disabled', true).html(`
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="margin-right: 5px;"></span> Sending...
            `);

            $('.error-message').text('');
            $('#successMessage')
                .addClass('d-none')
                .removeClass('alert-danger alert-success')
                .text('');

            $.ajax({
                url: "{{ route('submitContact') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        $('#successMessage')
                            .removeClass('d-none alert-danger')
                            .addClass('alert-success')
                            .text(response.message);

                        $('#contactForm')[0].reset();
                        // grecaptcha.reset(); // Reset CAPTCHA
                    } else if (response.errors) {
                        $.each(response.errors, function(key, value) {
                            $('#' + key + 'Error').text(value[0]);
                        });
                    }
                },
                error: function(xhr) {
                    $('#successMessage')
                        .removeClass('d-none alert-success')
                        .addClass('alert-danger')
                        .text('Something went wrong. Please try again.');
                },
                complete: function() {
                    submitBtn.prop('disabled', false).html('Send Message');
                }
            });
        });
    });
</script>
@endpush