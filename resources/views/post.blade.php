@extends('components.layout')

@section('content')
    <article>

        <h1>
            {{ $post->title }}
        </h1>

        <p>
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            
        </p>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go Back</a>
        
    </article>

@endsection 