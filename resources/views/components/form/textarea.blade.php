@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <textarea 
            class="border border-gray-400 p-2 mt-3 w-full"
            name="{{$name}}"
            id="{{$name}}"
            required
            {{$attributes}}
            > {{ $slot ?? old($name) }} </textarea>
    <x-form.error name="{{$name}}" />
</x-form.field>