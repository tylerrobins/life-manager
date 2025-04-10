<form wire:submit.prevent="update">
   <div class="mb-4 flex">
      <h1 class="flex-1 pl-2 pt-1 text-xl font-bold">{{ $heading }}</h1>
      <div class="space-x-2">
         <x-button variant="blue" class="px-4">Save</x-button>
         <x-button variant="white">Cancel</x-button>
      </div>
   </div>
   {{ $slot }}
</form>
