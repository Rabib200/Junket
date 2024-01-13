<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="{{ asset('login') }}/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="{{ asset('login') }}/css/util.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('login') }}/css/main.css" />
    <link
      href="{{ asset('login') }}/css/font-awesome/css/all.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login100"
        style="background-image: url('{{ asset('login') }}/images/image-18.jpg')"
      >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
          <form class="login100-form validate-form" action="{{ url('admin/login/owner') }}" method="post">
            @csrf
            <span class="login100-form-title p-b-49"> Login </span>
           @if (Session::has('message'))
           <div class="alert alert-danger" role="alert">
           {{ Session::get('message') }}
          </div>
           @endif
            <div class="wrap-input100">
              <input
                class="input100"
                type="email"
                name="email"
                placeholder="Email:"
              />
            </div>
            <div class="wrap-input100 m-t-5">
              <input
                class="input100"
                type="password"
                name="password"
                placeholder="Password:"
              />
            </div>
            <div class="text-right p-t-8 p-b-31">
              <a href="#"> Forgot password? </a>
            </div>

            <div class="container-login100-form-btn">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit">Login</button>
              </div>
            </div>
            <div class="flex-col-c p-t-30">
              <span class="txt1 p-b-17">Don't you have an account?</span>
              <a href="#" class="txt2 login100-form-anchor"> Sign Up Now! </a>
            </div>
            <div>
              <span>Find us on</span>
            </div>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter-square"></i>
            <i class="fab fa-blogger"></i>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-instagram"></i>
            <a href="" class="login100-form-anchor" style="margin-left: 140px"
              >www.junket.com</a
            >
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
