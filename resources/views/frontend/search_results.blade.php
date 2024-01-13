

@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Blogs</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Search</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news_main_arae" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Tour Plans </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                @foreach ($tourplans as $tourplan)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_four_card">
                            <div class="news_four_card_img">
                                <a href="{{ url('tours/details/'.$tourplan->id) }}">
                                    <img src="{{ asset('assets/uploads/runningTours/'.$tourplan->image) }}" style="height: 240px; width: 460px" alt="img">
                                </a>
                            </div>
                            <div class="new_four_card_lists">
                                <ul>
                                    <li>Created by- {{ $tourplan->group_name }} <i class="fas fa-circle"></i></li>
                                </ul>
                            </div>
                            <div class="news_four_card_conrent">
                                <div class="new_four_card_lists">
                                    <ul>
                                        <li>Date: {{ $tourplan->created_at }} <i class="fas fa-circle"></i></li>
                                    </ul>
                                </div>
                                <h3><a href="news-details.html"> {{ $tourplan->location }}</a></h3>
                                    <p>{{ $tourplan->short_description }}</p>
                                <a href="{{ url('tours/details/'.$tourplan->id) }}">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Upcoming Plans regarding </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row">
                @foreach ($upcomingTourplans as $upcomingTourplan)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_four_card">
                            <div class="news_four_card_img">
                                <a href="{{ url('upcomming/tours/details/'.$upcomingTourplan->id) }}">
                                    <img src="{{ asset('assets/uploads/upcommingTours/'.$upcomingTourplan->image) }}" style="height: 240px; width: 460px" alt="img">
                                </a>
                            </div>
                            <div class="new_four_card_lists">
                                <ul>
                                    <li>Created by- {{ $upcomingTourplan->group_name }} <i class="fas fa-circle"></i></li>
                                </ul>
                            </div>
                            <div class="news_four_card_conrent">
                                <div class="new_four_card_lists">
                                    <ul>
                                        <li>Date: {{ $upcomingTourplan->created_at }} <i class="fas fa-circle"></i></li>
                                    </ul>
                                </div>
                                <h3><a href="news-details.html"> {{ $upcomingTourplan->location }}</a></h3>
                                    <p>{{ $upcomingTourplan->short_description }}</p>
                                <a href="{{ url('upcomming/tours/details/'.$upcomingTourplan->id) }}">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
    </section>
            {{-- <div class="col-lg-12">
                <div class="pagination_area">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection



