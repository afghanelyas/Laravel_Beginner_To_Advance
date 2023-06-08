@extends('components.layout')

@section('content')
<article class="bg-white border border-gray-200 mb-10 p-5 text-lg max-w-sm m-auto shadow-md leading-loose ">
    <form Method="POST" action="/admin/posts" class="max-w-sm m-auto">
        @csrf
        <h1 class="text-xl font-bold mb-10">Create New Post</h1>
        <div class="mb-5">
            <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Title

            </label>
            <input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full" required>
            @error('title')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-5">
            <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Excerpt

            </label>
            <textarea type="text" name="excerpt" id="excerpt" class="border border-gray-400 p-2 w-full" required></textarea>
            @error('excerpt')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        
        </div>

        <div class="mb-5">
            <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Body

            </label>
            <textarea type="text" name="body" id="body" class="border border-gray-400 p-2 w-full" required></textarea>
            @error('body')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Category

            </label>
            <select name="category_id" id="category_id" class="border mb-5 border-gray-400 p-2 w-full" required>
                @php
                $categories = App\Models\Category::all();
                @endphp
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                @endforeach

            </select>
            @error('category_id')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

<x-submit-button>Publish</x-submit-button>

    </form>

</article>

@endsection