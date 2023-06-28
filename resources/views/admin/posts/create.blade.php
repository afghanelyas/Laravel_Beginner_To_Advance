@extends('components.layout')

@section('content')

<x-setting heading="Publish new post">
     <form Method="POST" action="/admin/posts" class=" m-auto p-5 " enctype="multipart/form-data">
        @csrf
        <x-form.input name="title" />
        <x-form.input name="slug" />
        <x-form.textarea name="excerpt" />
        <x-form.textarea name="body" />


        <x-form.field>
            <x-form.label name="Category" />
            <select name="category_id" id="category_id" class="border mb-3 border-gray-400 p-2 w-full" required>
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
</x-setting>

@endsection