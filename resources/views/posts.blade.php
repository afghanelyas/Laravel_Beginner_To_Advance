@extends('components.layout')

@section('content')
    
    @foreach ($posts as $post)

        <!-- // create a categroy form -->
        

        <article class="bg-white border border-gray-200 mb-5 p-5 text-lg shadow-md leading-loose ">
            <h2 class="text-2xl underline">
                <a href="/posts/{{ $post->slug }}">{!! $post->title !!}</a>
            </h2>

            <p>
            By <a class="underline" href="/authors/{{ $post->author->username }}"> {{ $post->author->name }} in </a> <a class="underline" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
@endsection 