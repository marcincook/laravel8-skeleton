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

                        <h5 class="card-title mb-3">{{__('Register a new account')}}</h5>



                        <form method="POST" action="{{ route('register') }}" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="visually-hidden">{{__('Name')}}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{__('Name')}}">
                                @error('name')
                                <span class="invalid-feedback" role="alert"> {{ $message }}  </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="visually-hidden">{{__('Email')}}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{__('Email')}}">
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

                            <button type="submit" class="btn btn-primary w-100 mb-4" >{{__('Register')}}</button>

                        </form>

                        <x-auth-links/>
                    </div>
                </div>

                <div class="col-md-2"></div>

            </div>
        </div>


@endsection
