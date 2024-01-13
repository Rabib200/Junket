<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/navber.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/meanmenu.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css" />
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
   
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>

  <body>
    <div class="preloader">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="lds-spinner"></div>
        </div>
      </div>
    </div>
    <header class="main_header_arae">
      <div class="topbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
              <ul class="topbar-list">
                <li>
                  <a href="#!"><i class="fab fa-facebook"></i></a>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#!"><span>+8801734544744</span></a>
                </li>
                <li>
                  <a href="#!"><span>contact@Junket.com</span></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6">
              <ul class="topbar-others-options">
                @guest
                    @if(Route::has('login'))
                        <li><a href="{{ url('user/login') }}">Login</a></li>
                        <li><a href="{{ url('register') }}">Sign up</a></li>
                    @endif
                    @else
                        <li> <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-area">
        <div class="main-responsive-nav">
          <div class="container">
            <div class="main-responsive-menu">
              <div class="logo">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('frontend') }}/img/logo.png" alt="logo" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="main-navbar">
            <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('frontend') }}/img/logo_black.png" alt="logo" />
                </a>
                <div
                  class="collapse navbar-collapse mean-menu"
                  id="navbarSupportedContent"
                >
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="{{ url('/') }}" class="nav-link active"> Home </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url("tour/groups") }}" class="nav-link"> Groups </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"
                        >Tour Plans <i class="fas fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url("tour/plans") }}" class="nav-link">Running Plans</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("upcomming/tour/plans") }}" class="nav-link">Upcomming Plans</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('blogs') }}" class="nav-link">Blogs </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('feed') }}" class="nav-link">Feed</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link"> About Us </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Contact </a>
                    </li>
                    <li class="nav-item">
                    <div class="mx-auto pull-right" >
            <div class="search" style="float: right;
    margin-top: -2rem;
    margin-top: 8px;

            ">
                <form action="{{ url("/search") }}" method="post">
    @csrf
    <input type="text" name="search_query" id="search_query" placeholder="Search by location...">
    <button type="submit">Search</button>
</form>
            
</div>
                    </li>
                  </ul>
                  <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                      <a href="#" class="search-box">
                        <i class="bi bi-search"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <div class="others-option-for-responsive">
            <div class="container">
              <div class="dot-menu">
                <div class="inner">
                  <div class="circle circle-one"></div>
                  <div class="circle circle-two"></div>
                  <div class="circle circle-three"></div>
                </div>
              </div>
              <div class="container">
                <div class="option-inner">
                  <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                      <a href="#" class="search-box"
                        ><i class="fas fa-search"></i
                      ></a>
                    </div>
                    <div class="option-item">
                      <a href="contact.html" class="btn btn_navber"
                        >Get free quote</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>
@yield('content')
<footer id="footer_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Need any help?</h5>
          </div>
          <div class="footer_first_area">
            <div class="footer_inquery_area">
              <h5>Call 24/7 for any help</h5>
              <h3><a href="tel:+00-123-456-789">+8801734544744</a></h3>
            </div>
            <div class="footer_inquery_area">
              <h5>Mail to our support team</h5>
              <h3>
                <a href="mailto:support@domain.com">support@Junket.com</a>
              </h3>
            </div>
            <div class="footer_inquery_area">
              <h5>Follow us on</h5>
              <ul class="soical_icon_footer">
                <li>
                  <a href="#!"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Company</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li><a href="faqs.html">Complain</a></li>
              <li><a href="terms-service.html">Help</a></li>
              <li><a href="tour-guides.html">Group Managers</a></li>
              <li><a href="news.html">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Support</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="dashboard.html">Account</a></li>
              <li><a href="faq.html">Faq</a></li>
              <li><a href="testimonials.html">Legal</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="top-destinations.html"> Affiliate Program</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Top Destinations</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="room-details.html">Cox'sBazar</a></li>
              <li><a href="hotel-details.html">Sreemangal</a></li>
              <li><a href="hotel-booking.html">Sylhet</a></li>
              <li><a href="tour-search.html">Sundarbans</a></li>
              <li><a href="tour-booking.html">Rangamati</a></li>
              <li><a href="tour-guides.html">Chittagong</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="co-lg-6 col-md-6 col-sm-12 col-12">
          <div class="copyright_left">
            <p>Copyright © 2022 All Rights Reserved</p>
          </div>
        </div>
        <div class="co-lg-6 col-md-6 col-sm-12 col-12"></div>
      </div>
    </div>
  </div>
  <div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
  </div>

  <script src="{{ asset('frontend') }}/js/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('frontend') }}/js/bootstrap.bundle.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.meanmenu.js"></script>
  <script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('frontend') }}/js/custom.js"></script>
  <script>
    $(function() {
        $("#search_query").autocomplete({
            source: "{{ url('search/autocomplete') }}", // The route to fetch autocomplete suggestions
            minLength: 2, // Minimum number of characters to trigger autocomplete
            select: function(event, ui) {
                // Set the selected value in the input field
                $("#search_query").val(ui.item.value);
                // You can also redirect to the search page if needed
            }
        });
    });
</script>
</body>
</html>
