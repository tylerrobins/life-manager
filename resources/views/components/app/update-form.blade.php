<form wire:submit.prevent="update">
   <div class="mb-4 flex">
      <x-header>{{ $heading }}</x-header>
      <div class="space-x-2">
         <x-button variant="blue" class="px-4">Save</x-button>
         <x-button variant="white">Cancel</x-button>
      </div>
   </div>
   {{ $slot }}
</form>
