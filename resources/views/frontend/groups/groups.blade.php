@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Tour Groups</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Tour Groups</li>
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
                    @foreach ($groups as $group)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="news_four_card">
                            <div class="news_four_card_img">
                                <a href="news-details.html">
                                    <img src="{{ asset('assets/uploads/groups/'.$group->image) }}" style="height: 240px; width: 460px" alt="img">
                                </a>
                            </div>
                            <div class="new_four_card_lists">
                                <ul>
                                    <li>Owner name- {{ $group->owner_name }} <i class="fas fa-circle"></i></li>
                                </ul>
                            </div>
                            <div class="news_four_card_conrent">
                                <h3><a href="news-details.html"> {{ $group->group_name }}</a></h3>
                                <a href="">Read details...</a>
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
