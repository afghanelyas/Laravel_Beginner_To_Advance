@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <textarea type="text" name="{{$name}}" id="{{$name}}" class="border border-gray-400 p-2 mt-3 w-full"
        required>{{ $slot ?? old($name)}}</textarea>
    <x-form.error name="{{$name}}" />
</x-form.field>