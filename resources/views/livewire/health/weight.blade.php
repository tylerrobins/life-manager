@php
   $headers = ['Date' => 'created_at', 'Weight' => 'weight'];
@endphp

<div>
   <x-header>Weight</x-header>
   <div class="flex space-x-5">
      <div class="flex-1 rounded-xl bg-white p-6">
         <x-sub-header divider class="max-w-56">History</x-sub-header>
         <div class="flex">
            <x-table :headers="$headers" :rows="$weights" class="flex-1/2" />
            <div class="flex-1/2">
               graphs
            </div>
         </div>
      </div>

      <div>
         <div class="rounded-xl bg-white p-6">
            <x-sub-header divider>Capture</x-sub-header>
            <x-forms.input name="lastestWeight" label="Update Weight"></x-forms.input>
         </div>
      </div>
   </div>
</div>
