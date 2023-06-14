@extends('components.layout')

@section('content')

<x-flash />
<div class="mb-40">
@foreach ($posts as $post)
<article class="bg-white border mt-10 border-gray-200  p-5 text-lg shadow-md leading-loose ">
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
</div>

@if($posts->count())
<div class="mb-5">
    {{ $posts->links() }}
</div>
@else
<p class="text-center">No posts yet. Please check back later.</p>
@endif

@endsection