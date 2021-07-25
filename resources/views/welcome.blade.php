@extends('layouts.public')

@section('content')


    <div class="pt-3 mb-3">
        <div class=" bg-light rounded-3 p-5">
            <h1 class="display-5 fw-normal">{{ config('app.name', 'App name') }}</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>


        <div class="row align-items-md-stretch">
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>Change the background</h2>
                    <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                    <button class="btn btn-outline-light" type="button">Example button</button>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>Add borders</h2>
                    <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                    <button class="btn btn-outline-secondary" type="button">Example button</button>
                </div>
            </div>
        </div>

    <section>
        @for($i=1; $i <= 5; $i++)
            <div class=" p-3 bg-light mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet atque autem consectetur cupiditate enim ex fugit harum hic id impedit minima odio, pariatur perferendis provident
                quam quia quod unde! Aperiam, aspernatur aut distinctio dolor expedita fugit illo laudantium neque optio quia quod, repellat saepe sapiente sint tempore. Beatae est facere impedit, in nam natus quasi
                sequi tempore totam voluptatibus?
            </div>
        @endfor
    </section>

@endsection
