@extends('components.layout')

@section('content')
<article class="bg-white border border-gray-200 mb-10 p-5 text-lg shadow-md leading-loose ">

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

<!-- create design form for comment -->

@auth
<form action="/posts/{{ $post->slug }}/comments" method="POST" class="border  border-gray-200 p-6  rounded-xl">
    @csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
        <h2 class="ml-4">Want to participate?</h2>
    </header>

    <div class="mt-6">
        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5"
            placeholder="Quick, thing of something to say!" required></textarea>
    </div>

    <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
        <button type="submit"
            class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
    </div>

</form>
@else
<p class="font-semibold">
    <a href="/login" class="underline">Login</a> to leave a comment
</p>
@endauth


<!-- foreach the comments -->
@foreach ($post->comment as $comment)
<x-post-comment :comment="$comment" />
@endforeach

@endsection


when i submit the form i logout and nothing happen