@props(['variant' => 'white'])

@php
   $classes = 'cursor-pointer rounded-lg border px-3 py-1.5 shadow-md';
   if ($variant === 'white') {
       $classes .= ' border-neutral-200 bg-white text-black hover:border-neutral-100 hover:bg-neutral-100';
   } elseif ($variant === 'blue') {
       $classes .= ' border-blue-700 bg-blue-700 text-white hover:border-blue-900 hover:bg-blue-900';
   }
@endphp

<button {{ $attributes(['class' => $classes]) }}>{{ $slot }}</button>
