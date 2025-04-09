@props(['name', 'label', 'type' => 'text'])

@php
   $hasError = $errors->has($name);
   $defaults = [
       'wire:model.lazy' => $name,
       'id' => $name,
       'name' => $name,
       'type' => $type,
       'value' => old($name),
       'class' => implode(' ', [
           'block w-full appearance-none rounded-md border px-3 py-2 transition duration-150 ease-in-out focus:outline-none sm:text-sm sm:leading-5 mt-1 rounded-md ',
           $hasError
               ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red'
               : 'border-gray-300  placeholder-gray-400  focus:border-blue-300 focus:ring-blue',
       ]),
   ];
@endphp

<div>
   @isset($label)
      <label for="{{ $name }}" class="block text-sm font-medium leading-5 text-gray-700">
         {{ $label }}
      </label>
   @endisset

   <input {{ $attributes($defaults) }} />

   @error($name)
      <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
   @enderror
</div>
