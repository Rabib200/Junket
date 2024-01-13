@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Upcomming Tour Plans</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Upcomming Tour Plans</li>
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
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($upcommingPlans as $plan)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_four_card">
                            <div class="news_four_card_img">
                                <a href="{{ url('upcomming/tours/details/'.$plan->id) }}">
                                    <img src="{{ asset('assets/uploads/upcommingTours/'.$plan->image) }}" style="height: 240px; width: 460px" alt="img">
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
                                <h3><a href="{{ url('upcomming/tours/details/'.$plan->id) }}"> {{ $plan->location }}</a></h3>
                                    <p>{{ $plan->short_description }}</p>
                                <a href="{{ url('upcomming/tours/details/'.$plan->id) }}">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Cta Area -->
@endsection
