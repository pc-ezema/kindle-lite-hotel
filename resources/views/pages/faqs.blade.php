@extends('layouts.frontend', ['title' => 'Contact Us'])

@push('styles')

@endpush

@section('page-content')
<!-- Banner Area Start -->
@includeIf('layouts.breadcrumb', ['image' => url('assets/img/banner/page-banner-10.jpg'),'title' => 'FAQs', 'subtitle' => 'FAQs'])
<!-- Banner Area End -->
<!-- Services Details Start -->
<div class="services__details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services__details-left">
                    <div class="services__details-left-content">
                        <h2 class="mb-30">Frequently Asked Questions</h2>
                        <p class="mb-0">
                            Find quick answers to common questions about {{config('app.name')}}, rooms, and services.
                        </p>
                    </div>

                    <!-- FAQ Section Start -->
                    <div class="room__details-right-faq mt-50">
                        <!-- FAQ Item -->
                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>What time is check-in and check-out?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content active">
                                    <p>Check-in is from 12:00 PM, and check-out is by 12:00 PM. Early check-in or late check-out may be available upon request.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Repeatable FAQ Items -->
                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Is breakfast included in the room rate?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Some packages include breakfast while others do not. Please confirm during booking.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Is Wi-Fi available?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, complimentary high-speed Wi-Fi is available throughout {{config('app.name')}}.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Do you allow pets?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Pets are not allowed, except for service animals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>What payment methods are accepted?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>We accept Visa, MasterCard, bank transfers, and cash payments at the front desk.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Is parking available?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, we provide free and secure on-site parking for guests.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Do you have a swimming pool and gym?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, guests enjoy access to our outdoor swimming pool and fitness center.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Can I cancel or modify my booking?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, depending on our booking policy. Please review your reservation or contact us directly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Do you offer laundry services?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, we provide laundry and dry-cleaning services at an extra cost.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Are rooms family-friendly?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, we offer family rooms and provide extra beds or baby cots on request.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Do you have facilities for meetings and events?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>Yes, we have fully equipped conference halls and event spaces.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>Is smoking allowed?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>All our rooms are non-smoking. Designated smoking areas are available outside.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>How close is {{config('app.name')}} to the city center?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>We are located just [X minutes] from the city center and near major attractions.</p>
                                </div>
                            </div>
                        </div>

                        <div class="room__details-right-faq-item">
                            <div class="room__details-right-faq-item-card">
                                <div class="room__details-right-faq-item-card-header">
                                    <h5>How can I contact {{config('app.name')}} directly?</h5>
                                    <i class="fas fa-long-arrow-up"></i>
                                </div>
                                <div class="room__details-right-faq-item-card-header-content display-none">
                                    <p>You can reach us via phone at {{config('app.phone')}}, email at {{config('app.email')}}, or through our Contact Us page.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Section End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details End -->
@endsection