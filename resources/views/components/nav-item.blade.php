@props(['active'])

@php
    $classes = ($active ?? false)
    ?'bg-gray-300 text-gray-700'
    :'hover:bg-gray-700 hover:text-gray-100'
@endphp
<a {{ $attributes->class(['block flex items-center space-x-2 font-semibold text-lg py-2.5 px-4 rounded transition duration:50 ease-in-out'])->merge(['class' => $classes ]) }} >
    {{ $slot }}
</a>
