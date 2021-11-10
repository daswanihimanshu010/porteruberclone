@php 
    $editing = isset($unit);
@endphp

<div class="flex flex-wrap -mx-4 -mb-4 md:mb-0">
    <x-inputs.text name="name" space="mb:w-full" :label="__('crud.inputs.name')" value="{{ old('name', ($editing ? $unit->name : '')) }}"></x-inputs.text>
</div>