@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <input 
            name="{{$name}}" 
            value="{{old($name)}}" 
            id="{{$name}}"
            class="border border-gray-400 p-2 w-full" 
            required
            {{$attributes}}
            >
    <x-form.error name="{{$name}}" />
</x-form.field>