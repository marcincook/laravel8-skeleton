<a href="{{url('/')}}" class="logo">
    <div {{ $attributes->merge(['class' => 'mb-5 d-flex align-items-center']) }}>
        <div class="text-primary fs-2 me-1">
            <x-app-logo-icon/>
        </div>
        <div class="text-secondary fs-2 pt-1">
            {{ config('app.name', 'App name') }}
        </div>
    </div>
</a>

