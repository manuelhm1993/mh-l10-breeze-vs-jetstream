<article {{ $attributes->merge(['class' => "$clases border-l-4 p-4", 'role' =>"alert"]) }}>
    <h2 class="font-bold">{{ $title }}</h2>
    {{ $slot }}
</article>
