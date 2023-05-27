@extends('components.layout')

@section('content')
    <article class="bg-white border border-gray-200 mb-5 p-5 text-lg shadow-md leading-loose ">

        <h1 class="text-2xl underline">
            {{ $post->title }}
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->name }}" class="underline"> {{ $post->author->name }} in </a> <a href="/categories/{{ $post->category->slug }}" class="underline">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>

        <a href="/" class="underline" >Go Back</a>
        
    </article>

@endsection 