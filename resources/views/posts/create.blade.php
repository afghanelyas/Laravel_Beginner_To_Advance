@extends('components.layout')

@section('content')
<article class="bg-white border border-gray-200 mb-10 p-5 text-lg max-w-lg m-auto shadow-md leading-loose ">
    <form Method="POST" action="/admin/posts" class=" m-auto " enctype="multipart/form-data">
        @csrf
        <h1 class="text-xl font-bold mb-10">Create New Post</h1>
        <x-form.input name="title" />
        <x-form.input name="slug" />
        <x-form.input name="thumbnail" type="file" />
        <x-form.textarea name="excerpt" />
        <x-form.textarea name="body" />


        <x-form.field>
            <x-form.label name="Category" />
            <select name="category" id="category_id" class="border mb-5 border-gray-400 p-2 w-full" required>
                @foreach (\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}" {{ (old('category') == $category->id) ? 'selected' : '' }}>
                    {{ ucwords($category->name) }}
                </option>
                @endforeach
            </select>
            <x-form.error name="category" />
        </x-form.field>
        <x-form.button>Publish</x-form.button>

    </form>

</article>

@endsection