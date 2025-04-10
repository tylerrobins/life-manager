<div x-data="{ open: false }" @mouseleave="open = false" class="relative">
   <div @mouseover="open = true" {{ $attributes(['class' => 'cursor-pointer appearance-none']) }}>
      {{ $slot }}
   </div>
   <div x-show="open" @click.outeside="open = false"
      {{ $content->attributes->class(['focus:outline-hidden absolute z-10 -mt-2 origin-top-right justify-center rounded-md shadow-lg ring-1 ring-black/5']) }}
      role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
      x-transition.duration.300ms>
      {{ $content }}
   </div>
</div>
