@extends('components.layout')

@section('content')

    <!-- create a register form -->
<main class="max-w-lg m-auto  bg-gray-100 border border-gray-200 rounded-xl p-6 mt-10 ">
<h1 class="text-center font-bold text-xl mb-6 ">Register!</h1>
    <form method="POST" action="/register" class="max-w-xl m-auto">
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input 
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>

            <input 
                type="text"
                class="border border-gray-400 p-2 w-full"
                name="username"
                id="username"
                value="{{ old('username') }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>

            <input 
                type="email"
                class="border border-gray-400 p-2 w-full"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>

            <input 
                type="password"
                class="border border-gray-400 p-2 w-full"
                name="password"
                id="password"
                required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <!-- submit button -->
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 mt-4 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                    Submit
                </button>

            
        </div>
    </form>
    @if($errors->any())
        <div class="mb-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    
    @endif
</main>
@endsection