@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <input 
            name="{{$name}}"
            id="{{$name}}"
            class="border border-gray-400 p-2 mt-3 w-full rounded" 
            required
            {{$attributes(['value' => old($name)])  }}>
    <x-form.error name="{{$name}}" />
</x-form.field>