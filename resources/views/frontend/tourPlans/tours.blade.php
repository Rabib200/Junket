@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Tour Plans</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Tour Plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- Tour Search Areas -->
 <section id="explore_area" class="section_padding">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Trendings</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($runningplans as $plan)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_four_card">
                            <div class="news_four_card_img">
                                <a href="{{ url('tours/details/'.$plan->id) }}">
                                    <img src="{{ asset('assets/uploads/runningTours/'.$plan->image) }}" style="height: 240px; width: 460px" alt="img">
                                </a>
                            </div>
                            <div class="new_four_card_lists">
                                <ul>
                                    <li>Created by- {{ $plan->group_name }} <i class="fas fa-circle"></i></li>
                                </ul>
                            </div>
                            <div class="news_four_card_conrent">
                                <div class="new_four_card_lists">
                                    <ul>
                                        <li>{{ $plan->created_at }} <i class="fas fa-circle"></i></li>
                                    </ul>
                                </div>
                                <h3><a href="{{ url('tours/details/'.$plan->id) }}"> {{ $plan->location }}</a></h3>
                                    <p>{{ $plan->short_description }}</p>
                                <a href="{{ url('tours/details/'.$plan->id) }}">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Populars</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="theme_common_box_two img_hover">
                            <div class="theme_two_box_img">
                                <a href="tour-details.html"><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"></a>
                                <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                            </div>
                            <div class="theme_two_box_content">
                                <h4><a href="tour-details.html">Kantua hotel, Thailand</a></h4>
                                <p><span class="review_rating">4.8/5 Excellent</span> <span
                                        class="review_count">(1214
                                        reviewes)</span></p>
                                <h3>$99.00 <span>Price starts from</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<!-- Cta Area -->
@endsection
