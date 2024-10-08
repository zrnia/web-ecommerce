<!-- resources/views/components/nav-link.blade.php -->

@props(['href', 'active' => false])

@php
    $classes = $active
        ? 'text-indigo-600 font-semibold'
        : 'text-gray-700 hover:text-indigo-600';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
