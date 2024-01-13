@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Blogs Details</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Blogs Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news_details_main_arae" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="news_detail_wrapper">
                    <div class="news_details_content_area">
                        <img src="{{ asset('assets/uploads/blogs/'.$blog->image) }}" style="height: 800px; width: 1400px" alt="img">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="news_details_content_area news_details_content_tops">
                                <div class="news_details_four_heading">
                                    <div class="new_four_card_lists">
                                        <ul>
                                            <li>Date: {{ $blog->created_at }} <i class="fas fa-circle"></i></li>
                                            <li>Created by-{{ $blog->group_name }} <i class="fas fa-circle"></i></li>
                                        </ul>
                                    </div>
                                    <h2>{{ $blog->heading }}</h2>
                                </div>

                                <p>{{ $blog->short_description }}</p>
                                <p>{{ $blog->long_description }}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
