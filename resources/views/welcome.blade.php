@extends('frontend.master')
@section('content')
<div class="search-overlay">
<div class="d-table">
  <div class="d-table-cell">
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-close">
      <span class="search-overlay-close-line"></span>
      <span class="search-overlay-close-line"></span>
    </div>
    <div class="search-overlay-form">
      <form>
        <input
          type="text"
          class="input-search"
          placeholder="Search here..."
        />
        <button type="button"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</div>
</div>
    <section id="home_three_banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_area_three">
              <h3 class="top_banner_three_text">Welcome to Junket</h3>
              <h2>Making Your Travel Choices Easier</h2>
              <h3 class="bottom_banner_three_text">
                Find convinient Tour Plans and Packages
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="choose_destinations_area" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Choose your destinations</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-1.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>London | $13,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>China | $6000</h2>
                    <h3>8 days 7 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-2.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Gangtok | $3,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Gangtok | $3,500</h2>
                    <h3>7 days 6 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-3.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Phuket | $2,500</h2>
                    <h3>7 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Phuket | $2,500</h2>
                    <h3>7 days 7 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-4.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Sydney | $6,000</h2>
                    <h3>4 days 3 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Sydney | $6,000</h2>
                    <h3>4 days 3 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-5.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Gangtok | $3,500</h2>
                    <h3>9 days 8 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Gangtok | $3,500</h2>
                    <h3>9 days 8 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="choose_desti_wrapper">
              <div class="choose_des_inner_wrap">
                <div class="choose_boxed_inner">
                  <img
                    src="{{ asset('frontend') }}/img/destination/home-two-des-6.png"
                    alt="img"
                  />
                  <div class="choose_img_text">
                    <h2>Pattaya | $4,200</h2>
                    <h3>5 days 6 nights</h3>
                  </div>
                </div>
                <div class="flep_choose_box">
                  <div class="flep_choose_box_inner">
                    <div class="rating_outof">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <h5>5 Out of 5</h5>
                    </div>
                    <h2>Pattaya | $4,200</h2>
                    <h3>5 days 6 nights</h3>
                    <p>
                      Cupidatat consectetur ea cillum laborum labore veniam
                      proident consectetur excepteur amet pariatur et laboris
                      sint laborum.
                    </p>
                    <a href="top-destinations-details.html">Tour details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="three_We_area" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="we_offer_area_three">
              <h4 class="three_heading_area">What we offer</h4>
              <h2>Discover all magnificient destinations with us</h2>
              <p>
                Sint est eu sit ipsum enim amet esse sunt incididunt. Occaecat
                aliquip commodo ipsum officia in mollit.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="three_offer_slider owl-theme owl-carousel">
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-1.png" alt="icon" />
                <h3>Adventure Touring</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-2.png" alt="icon" />
                <h3>Wildlife Tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-3.png" alt="icon" />
                <h3>Group tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-4.png" alt="icon" />
                <h3>Family tour</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
              <div class="three_offer_item">
                <img src="{{ asset('frontend') }}/img/icon/offer-1.png" alt="icon" />
                <h3>Honeymoon Destinations</h3>
                <p>
                  Dolore ullamco voluptate duis est volupt exercitation officia
                  ad qui nostrud adipisicing non.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="promotional_tours" class="section_padding_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Trending Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Trending_tour_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Upcoming Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Popular Packages</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel1.png" alt="img"
                  /></a>
                  <p>
                    <i class="fas fa-map-marker-alt"></i>New beach, Thailand
                  </p>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html">Kantua hotel, Thailand</a>
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel2.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4>
                    <a href="hotel-details.html"
                      >Hotel paradise international</a
                    >
                  </h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel3.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel4.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                  <div class="discount_tab">
                    <span>50%</span>
                  </div>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel6.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
              <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="hotel-details.html"
                    ><img src="{{ asset('frontend') }}/img/tab-img/hotel7.png" alt="img"
                  /></a>
                  <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                  <p>
                    <span class="review_rating">4.8/5 Excellent</span>
                    <span class="review_count">(1214 reviewes)</span>
                  </p>
                  <h3>$99.00 <span>Price starts from</span></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="width_offer_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/plan.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>70+ Destinations</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/location.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Suitable and Affordable Packages</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/suport.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Top quality customer support</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
