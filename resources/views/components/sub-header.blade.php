@props(['divider' => false])

@php
   $classes = 'text-lg font-semibold text-gray-600';
   if ($divider) {
       $classes .= ' border-b border-neutral-200 pb-2 mb-2';
   }
@endphp

<h2 {{ $attributes(['class' => $classes]) }}>{{ $slot }}</h2>
