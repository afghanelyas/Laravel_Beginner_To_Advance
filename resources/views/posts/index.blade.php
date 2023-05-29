@extends('components.layout')

@section('content')
    
    @foreach ($posts as $post)
        <article class="bg-white border border-gray-200 mb-5 p-5 text-lg shadow-md leading-loose ">
            <h2 class="text-2xl underline">
                <a href="/posts/{{ $post->slug }}">{!! $post->title !!}</a>
            </h2>

            <p>
                <a href="/?author={{ $post->author->username }}" class="underline"> {{ $post->author->name }} </a>
            </p>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
@endsection 