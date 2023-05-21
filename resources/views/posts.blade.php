@extends('components.layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h2>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
@endsection 