@extends('layouts.public')

@section('content')



    <div class="card my-3">
            <div class="row g-0">

                <div class="col-md-5">
                    <img src="{{asset('img/login.jpg')}}" alt="login" class="fill-img img-fluid rounded-start">
                </div>

                <div class="col-md-5 bg-white">
                    <div class="card-body p-5">

                        <x-auth-logo/>

                        <x-errors-list/>

                        <h5 class="card-title mb-3">{{__('Reset password')}}</h5>

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="mb-3">
                                <label for="email" class="visually-hidden">{{__('Email')}}</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $request->email }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="visually-hidden">{{__('Password')}}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{__('Password')}}">
                                @error('password')
                                <span class="invalid-feedback" role="alert"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password-confirm" class="visually-hidden">{{__('Password')}}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Confirm password')}}">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-4">{{__('Update')}}</button>
                        </form>


                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot-password-link">{{ __('Forgot your password?') }}</a>
                        @endif

                        @if (Route::has('register'))
                            <p class="card-text">
                                {{__('Don\'t have an account?')}}
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">{{__('Register here')}}</a>
                            </p>
                        @endif

                        <nav class="login-card-footer-nav">
                            @if (Route::has('terms-of-use'))
                                <a href="{{ route('terms-of-use') }}">{{__('Terms of use')}}</a>
                            @endif

                            @if (Route::has('privacy-policy'))
                                <a href="{{ route('privacy-policy') }}">{{__('Privacy policy')}}</a>
                            @endif
                        </nav>
                    </div>
                </div>

                <div class="col-md-2"></div>

            </div>
        </div>


@endsection

