@extends('layouts.app')
@section('content')
    <section class="contact section-padding">
        <div class="container">

            <div class="row mb-90">
                <div class="col-md-6 mb-30 offset-md-1 mx-auto mt-5">
                    <h1 class="text-center">Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-12 form-group mt-4">
                                <input id="email" type="email" placeholder="Your Email"
                                    class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mt-4">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" placeholder="Your Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mt-2">
                                <input class="" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <div class="col-md-12 mt-4">
                                <button type="submit" class="butn-dark2">
                                    <span>Login</span>
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn-link text ml-4" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
