@props(['name', 'link', 'items' => [], 'icon'])

@php
   $link = $link ?? null;
   $btnClasses = 'flex w-full items-baseline rounded-lg py-2 text-left text-xl font-bold hover:bg-blue-300';
   $btnClasses .= !empty($icon) ? ' px-5' : ' pl-12 pr-5';
   $aClasses = 'py-1 pl-12 hover:underline hover:font-bold hover:text-blue-600 cursor-pointer';
   $imgClasses = 'mr-3 h-4';
@endphp

@if ($link)
   <div class="w-full">
      <a href="{{ $link }}" {{ $attributes(['class' => $btnClasses]) }}>
         @isset($icon)
            <img class="{{ $imgClasses }}" src="{{ Vite::asset('resources/imgs/' . $icon . '.svg') }}" />
         @endisset
         {{ $name }}</a>
   </div>
@else
   <div x-data="{ open: false }" class="w-full">
      <button @click="open = ! open" :class="{ 'border border-blue-800': open }"
         {{ $attributes(['class' => $btnClasses]) }}>
         @isset($icon)
            <img class="{{ $imgClasses }}" src="{{ Vite::asset('resources/imgs/' . $icon . '.svg') }}" />
         @endisset
         {{ $name }}
      </button>
      <div x-show="open" @click.outside="open = false" class="flex flex-col py-2">
         @foreach ($items as $key => $value)
            <a href="{{ $value }}" class="{{ $aClasses }}">{{ $key }}</a>
         @endforeach
      </div>
   </div>
@endif
