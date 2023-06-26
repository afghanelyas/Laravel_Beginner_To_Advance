@extends('components.layout')

@section('content')

<x-setting :heading="'Edit Post: ' . $post->title ">
    <form Method="POST" action="/admin/posts/{{ $post->id }}" class="  max-w-full " enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <x-form.input name="title" :value="old('title', $post->title)" />
        <x-form.input name="slug" :value="old('slug', $post->slug)" />
        <x-form.textarea name="excerpt"> {{ old('excerpt', $post->excerpt)}} </x-form.textarea>
        <x-form.textarea name="body"> {{ old('body', $post->body)}} </x-form.textarea>

        <x-form.field>
            <x-form.label name="Category" />
            <select name="category" id="category_id" class="border mb-3 border-gray-400 p-2 w-full" required>
                @foreach (\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}"
                    {{ old('category_id' , $post->category_id) == $category->id ? 'selected' : '' }}>
                    {{ ucwords($category->name) }}
                </option>
                @endforeach
            </select>
            <x-form.error name="category" />
        </x-form.field>
        <x-form.button>Update</x-form.button>

    </form>
</x-setting>

@endsection