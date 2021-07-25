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

                        <h5 class="card-title mb-3">{{__('Sign into your account')}}</h5>

                        <form method="POST" action="{{ route('login') }}" class="mb-3">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="visually-hidden ">{{__('Email')}}</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{__('Email')}}">
                                @error('email')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="visually-hidden ">{{__('Password')}}</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{__('Password')}}">
                                @error('password')
                                <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mb-4" >{{__('Login')}}</button>
                        </form>

                        <x-auth-links/>


                    </div>
                </div>

                <div class="col-md-2"></div>

            </div>
        </div>


@endsection
