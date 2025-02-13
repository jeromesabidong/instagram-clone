@props(['submit' => false])
@php 
    $defaultClassses = implode(' ', [
        'bg-blue',
        'w-full',
        'mt-2',
        'px-12', 'py-2', 
        'text-white', 'text-sm',
        'rounded-lg'
    ]);
@endphp

<button type="{{ $submit ? 'submit' : 'button' }}" {{ $attributes(['class' => $defaultClassses]) }}>{{ $slot }}</button>