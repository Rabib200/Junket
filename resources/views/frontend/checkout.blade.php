@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Checkout</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cruise Booking Submission Areas -->
<section id="tour_booking_submission" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                @if (!Session::has('message'))
                <div class="alert alert-danger" role="alert">
                    After completing your booking, you must download your invoice
               </div>
                @endif
                @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                  </div>
                  <a href="{{ url('download/invoice/'.$tour->id) }}" class="btn btn-primary mb-5">Download Invoice</a>
                @endif
                <div class="tou_booking_form_Wrapper">
                    <div class="booking_tour_form">
                        <h3 class="heading_theme">Checkout</h3>
                        <div class="tour_booking_form_box">
                            <form action="{{ url('booking/confirm') }}" method="post" id="tour_bookking_form_item">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <span class="form-control bg_input">Group name: {{ $tour->group_name }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <span class="form-control bg_input">Tour location: {{ $tour->location }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="hidden" name="tour_id" value="{{ $tour->id }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control bg_input"
                                                placeholder="Name*" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control bg_input"
                                                placeholder="Email address" value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control bg_input"
                                                placeholder="Mobile number*" value="{{ auth()->user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" name="street" class="form-control bg_input"
                                                placeholder="Street address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="house" class="form-control bg_input"
                                                placeholder="Apartment, Suite, House no (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <span class="form-control bg_input">Total cost: {{ $tour->total_cost }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <span class="form-control bg_input">Booking cost: {{ $tour->booking_cost }}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                           <select class="form-control bg_input" name="payment">
                                            <option selected disabled>Choose a payment method</option>
                                            <option value="1">Card</option>
                                            <option value="2">Bkash</option>
                                            <option value="3">Rocket</option>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="booking_tour_form_submit">
                                        <div class="form-check write_spical_check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                            <label class="form-check-label" for="flexCheckDefaultf1">
                                                <span class="main_spical_check">
                                                    <span>I read and accept all <a href="#">Terms and
                                                            conditios</a></span>
                                                </span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn_theme btn_md mt-4">Confirm Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection
