<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> -->

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="{{ asset('assets/login/assets/css/styles.css') }}">
      <title>Animated login form - Bedimcode</title>
   </head>
   <body>

    @include('sweetalert::alert')
      <div class="login">
         <img src="{{ asset('assets/login/assets/img/abstrack.gif')}}" alt="login image" class="login__img">

         <form action="{{ route('actionLogin') }}" class="login__form" method="POST">
            @csrf
            <h1 class="login__title">Login</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input name="email" type="email" required class="login__input" id="login-email" placeholder=" ">
                     <label for="login-email" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input name="password" type="password" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input" id="login-check">
                  <label for="login-check" class="login__check-label">Remember me</label>
               </div>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>

            <p class="login__register">
               Don't have an account? <a href="#">Register</a>
            </p>
         </form>
      </div>
      <!--=============== MAIN JS ===============-->
      <script src="{{ asset('assets/login/assets/js/main.js') }}"></script>
   </body>
</html>