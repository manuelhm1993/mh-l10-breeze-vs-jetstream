@props(['title'])

<article class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
    <h2 class="font-bold">{{ $title }}</h2>
    {{ $slot }}
</article>
