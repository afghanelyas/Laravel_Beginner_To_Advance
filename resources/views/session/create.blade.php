@extends('components.layout')

@section('content')

<!-- create a register form -->
<main class="max-w-lg m-auto  bg-gray-100 border border-gray-200 rounded-xl p-6 mt-10 ">
    <h1 class="text-center font-bold text-xl mb-6 ">Login!</h1>
    <form method="POST" action="/login" class="max-w-xl m-auto">
        @csrf
        <x-form.input name="email" type="email" autocomplete="username" />
        <x-form.input name="password" type="password" autocomplete="new-password" />
        <x-form.button>Log in</x-form.button>
    </form>

</main>
@endsection