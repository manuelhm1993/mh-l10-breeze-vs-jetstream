@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $clases = 'bg-blue-100 border-blue-500 text-blue-700';
            break;
        case 'danger':
            $clases = 'bg-red-100 border-red-500 text-red-700';
            break;
        default:
            $clases = 'bg-gray-100 border-gray-500 text-gray-700';
            break;
    }
@endphp

{{-- Cualquier atributo que no se rescate en props queda almacenado en el array attributes --}}
<article class="{{ $clases }} border-l-4 p-4" role="alert" {{ $attributes }}>
    <h2 class="font-bold">{{ $title }}</h2>
    {{ $slot }}
</article>
