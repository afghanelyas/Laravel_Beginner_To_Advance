@if(session()->has('success'))

<div x-data="{show : true}" x-init="setTimeout(() => show= false , 4000)" x-show="show "
    class=" fixed bg-blue-500 text-white top-24 ml-auto py-2 px-4 text-sm rounded-md  ">
    <p> {{ session('success')}}</p>
</div>
@endif