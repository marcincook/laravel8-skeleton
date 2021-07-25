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

                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="login-card-description">You must verify your email address, please check your email for a verification link.</p>



                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <button type="submit" class="btn btn-primary w-100 mb-4" >{{__('Resend verification email')}}</button>

                        </form>

                        <x-auth-links/>
                    </div>
                </div>

                <div class="col-md-2"></div>

            </div>
        </div>


@endsection
