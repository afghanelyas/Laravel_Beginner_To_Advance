@extends('components.layout')

@section('content')
<article class="bg-white border border-gray-200 mb-5 p-5 text-lg shadow-md leading-loose ">

    <h1 class="text-2xl underline">
        {{ $post->title }}
    </h1>

    <p>
        <a href="/?author={{ $post->author->username }}" class="underline"> {{ $post->author->name }} </a>
    </p>

    <div>
        {!! $post->body !!}
    </div>

    <a href="/" class="underline">Go Back</a>

</article>


@foreach ($post->comments as $comment)
<x-post-comment :comment="$comment" />
@endforeach


@endsection