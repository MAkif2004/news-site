@extends('layout')


@section('content')

    <body>
        <div class="nieuws flex flex-col items-center">
            <header>
                <div class="body text-3xl w-5/5 mt-5 border-solid font-bold text-center">
                    {!! $post->title !!}
                </div>
            </header>

            <div class="body text-3xl w-3/5 center mt-5 border-solid text-center">
                {!! $post->description !!}
            </div>
        </div>
    </body>
@endsection