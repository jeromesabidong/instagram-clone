@props(['text'])

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

<a {{ $attributes(['class' => $defaultClassses]) }}>{{ $text }}</a>