@php
   $headers = ['Date' => 'created_at', 'Weight' => 'weight'];
@endphp

<div>
   <x-app.update-form>
      <x-slot:heading>Weight</x-slot:heading>
      <div class="flex space-x-5">
         <div class="flex-1 rounded-xl bg-white">
            <x-table :headers="$headers" :rows="$weights" class="" />
         </div>

         <div>
            <div class="rounded-xl bg-white p-6">
               <x-sub-header divider>Capture</x-sub-header>
               <x-forms.input name="lastestWeight" label="Update Weight"></x-forms.input>
            </div>
         </div>
      </div>
   </x-app.update-form>
</div>
