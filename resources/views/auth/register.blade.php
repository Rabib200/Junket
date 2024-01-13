{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
               <label>Phone</label>

                <x-input class="block mt-1 w-full" type="phone" name="phone" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>REGISTRATION</title>
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
          <form class="login100-form validate-form" action="{{ route('register') }}" method="post">
            @csrf
            <span class="login100-form-title p-b-49"> Registration </span>
            <div class="wrap-input100">
                <input
                  class="input100"
                  type="text"
                  name="name" :value="old('name')" required autofocus
                  placeholder="Username:"
                />
              </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="email"
                name="email" :value="old('email')" required
                placeholder="Email:"
              />
            </div>
            <div class="wrap-input100" style="margin-top: 5px">
              <input
                class="input100"
                type="phone"
                name="phone" required
                placeholder="Phone:"
              />
            </div>
            <div class="wrap-input100 m-t-5">
              <input
                class="input100"
                type="password"
                name="password"
                :value="__('Password')"
                placeholder="Password:"
              />
            </div>
            <div class="wrap-input100 m-t-5">
              <input
                class="input100"
                type="password"
                name="password_confirmation" required
                placeholder="Confirm Password:"
              />
            </div>
            <div class="container-login100-form-btn" style="margin-top: 10px">
              <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn" type="submit">Sign Up</button>
              </div>
            </div>
            <div style="margin-top: 10px">
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

    <div id="dropDownSelect1"></div>
    <script src="js/main.js"></script>
  </body>
</html>

