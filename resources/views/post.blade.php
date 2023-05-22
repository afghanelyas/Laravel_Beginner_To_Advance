@extends('components.layout')

@section('content')
    <article>

        <p>
            <a href="#">
                {{ $post->category->name }}
            </a>
        </p>

        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>
@endsection 