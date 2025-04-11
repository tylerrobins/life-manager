@php
   $headers = ['Date' => 'created_at', 'Weight' => 'weight'];
@endphp

<div>
   <x-header class="mb-4">Weight</x-header>
   <div class="flex space-x-5">
      <div class="flex-1 rounded-xl bg-white p-6">
         <x-sub-header divider class="max-w-56">History</x-sub-header>
         <div class="flex">
            <x-table :headers="$headers" :rows="$weights" class="flex-1/2" />
            <div class="flex-1/2">
               graphs
            </div>
         </div>
         <div class="mt-3">
            {{ $weights->links() }}
         </div>
      </div>

      <div>
         <form wire:submit.prevent="update" class="rounded-xl bg-white p-6">
            <x-sub-header divider class="mb-5">Weigh In</x-sub-header>
            <x-forms.input name="latestWeight" class="min-w-56"></x-forms.input>
            <div class="mt-4">
               <x-button variant="blue" class="w-full">Log</x-button>
            </div>
         </form>
      </div>
   </div>
</div>
