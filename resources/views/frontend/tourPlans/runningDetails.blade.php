@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Running Plan Details</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Running Plan Details</li>
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
                        <img src="{{ asset('assets/uploads/runningTours/'.$plan->image) }}" style="height: 800px; width: 1400px" alt="img">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="news_details_content_area news_details_content_tops">
                                <div class="news_details_four_heading">
                                    <div class="new_four_card_lists">
                                        <ul>
                                            <li>Date: {{ $plan->created_at }} <i class="fas fa-circle"></i></li>
                                            <li>Created by- {{ $plan->group_name }} <i class="fas fa-circle"></i></li>
                                        </ul>
                                    </div>
                                    <h2>{{ $plan->location }}</h2>
                                </div>

                                <p>{{ $plan->short_description }}</p>
                                <p>{{ $plan->long_description }}</p>
                                <h3>Cost Description</h3>
                                <p>{{ $plan->cost_description }}</p>
                                <h3>Total Cost</h3>
                                <h5>{{ $plan->total_cost }}</h5>
                                <h3>Capacity</h3>
                                <h5>{{ $plan->capacity }}</h5>
                                <h3>Booking Cost</h3>
                                <h5>{{ $plan->booking_cost }}</h5>
                                <a href="{{ url('book/plan/'.$plan->id) }}" class="mt-3 btn btn-success">Book Now</a>
                                <div class="section_heading_center">
                                    <h2>Comments</h2>
                                </div>
                                <div class="comment_area">
                                    <h3>{{ $count }} Comments</h3>
                                    @foreach ($comments as $comment)
                                    <div class="comment_area_boxed">
                                        <div class="comment_text">
                                            <div class="comment_author_name">
                                                <h4>{{ $comment->user->name }}</h4>
                                            </div>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <h3>Leave a comment</h3>
                                <div class="contact_form">
                                    <form action="{{ url('running/tour/comment/create') }}" method="post">
                                        @csrf
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                                                <textarea class="form-control bg_input" rows="5" name="comment"
                                                    placeholder="Write your comment here..."></textarea>
                                            </div>
                                        </div>
                                        <div class="mt-3 col-lg-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn_theme btn_md">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

