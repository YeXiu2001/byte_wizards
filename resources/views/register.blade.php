@extends('nobootstrap')
@section('title', 'Login')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />

<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Sign in Form -->
          <form action="{{ route('login') }}" method="POST" class="sign-in-form">
          @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" /> <!-- Add name attribute -->
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" /> <!-- Add name attribute -->
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
          <!-- Sign in form end -->

          <!-- Register Form Start -->
          <form action="{{ route('register') }}" method="POST" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="name" name="name" placeholder="Full Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
          <!-- register form end -->
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Press the signup button below, and be one of us!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{ asset('img/log.svg') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Press the signin button below, we're waiting for you!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{ asset('img/register.svg') }}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

    <script src="{{ asset('js/forlogin.js') }}"></script>

    <!-- <script>
      // JavaScript to toggle between forms
      document.getElementById('sign-up-btn').addEventListener('click', function() {
          document.querySelector('.sign-up-form').style.display = 'block';
          document.querySelector('.sign-in-form').style.display = 'none';
      });

      document.getElementById('sign-in-btn').addEventListener('click', function() {
          document.querySelector('.sign-up-form').style.display = 'none';
          document.querySelector('.sign-in-form').style.display = 'block';
      });
    </script> -->
</html>
