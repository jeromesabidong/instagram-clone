@props([
    'name', 
    'label' => '',
    'placeholder' => '',
    'required' => false,
    'mask' => false,
])

@php
$id = Str::kebab($name);
$defaultInputClasses = implode(' ', [
    'flex-grow', 
    'w-full',
    'bg-slate-800', 
    'border', 'border-gray-700', 'rounded',
    'px-3', 'py-2', 
    'text-xs'
]);
$value = old($name);
@endphp

<div class="flex flex-col items-start">
    @if ($label)
        <label class="text-xs text-gray-300" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input class="{{ $defaultInputClasses }}" type="{{ $mask ? 'password' : 'text' }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ $value }}" {{ $required ? 'required' : ''}}>
    @error($name)
        <p class="text-xs text-red-400">{{ $message }}</p>
    @enderror
</div>