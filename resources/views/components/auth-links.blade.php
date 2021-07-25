
@if (Route::has('login') && ! request()->routeIs('login')  )
    <div> {{__('Already have an account?')}} <a href="{{ route('login') }}" >{{__('Login here')}}</a> </div>
@endif

@if (Route::has('password.request') && ! request()->routeIs('password.request'))
    <div> {{ __('Forgot your password?') }} <a href="{{ route('password.request') }}" >{{ __('Reset here') }}</a> </div>
@endif

@if (Route::has('register') && ! request()->routeIs('register') )
    <div> {{__('Don\'t have an account?')}} <a href="{{ route('register') }}" >{{__('Register here')}}</a> </div>
@endif

<nav class="mt-5">
    @if (Route::has('terms-of-use'))
        <a class="text-secondary small" href="{{ route('terms-of-use') }}">{{__('Terms of use')}}</a>
    @endif

    @if (Route::has('privacy-policy'))
        <a class="text-secondary small" href="{{ route('privacy-policy') }}">{{__('Privacy policy')}}</a>
    @endif
</nav>

