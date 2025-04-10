@php
   if ($profile_picture) {
       if (is_string($profile_picture)) {
           $profilePictureUrl = asset('storage/' . $profile_picture);
       } else {
           $profilePictureUrl = $profile_picture->temporaryUrl();
       }
   }
@endphp

<div class="h-full">
   <form wire:submit.prevent="update" class="">
      <div class="mb-5 flex">
         <h1 class="flex-1 pl-2 pt-1 text-xl font-bold">{{ $name }}'s Profile</h1>
         <div class="space-x-2">
            <x-button variant="blue" class="px-4">Save</x-button>
            <x-button variant="white">Cancel</x-button>
         </div>
      </div>
      <div class="flex space-x-5">
         <div class="flex-1">
            <div class="rounded-xl bg-white p-5 pb-6">
               <div class="flex">
                  <div class="flex-1/2 flex flex-col space-y-4 border-r border-neutral-200 pr-3">
                     <h2 class="text-lg font-semibold text-gray-600">Details</h2>
                     <x-forms.input name="name" label="Name" class="bg-neutral-100" />
                     <x-forms.input name="email" label="Email address" class="bg-neutral-100" />
                  </div>
                  <div class="flex-1/2 flex flex-col space-y-4 pl-3">
                     <h2 class="text-lg font-semibold text-gray-600">Home</h2>
                     <div class="flex flex-col space-x-4 sm:space-y-4 xl:flex-row">
                        <x-forms.input name="home_name" label="Name" class="bg-neutral-100" />
                        <div>
                           <label for="userCount"
                              class="block text-sm font-medium leading-5 text-gray-700">Members</label>
                           <div class="mt-1 flex">
                              <x-hover
                                 class="group flex h-full w-14 items-center rounded-md border border-gray-300 bg-neutral-100 px-3 py-1 transition duration-150 ease-in-out hover:border-blue-600 sm:text-sm sm:leading-5">
                                 <p class="group-hover:text-blue-600">
                                    {{ $user_count }}</p>
                                 <img src="{{ asset('icons/information-icon.svg') }}" alt="information icon"
                                    class="mx-2">
                                 <x-slot:content class="right-5 -mt-2 bg-white">
                                    <div class="flex flex-col space-y-3 px-4 py-4">
                                       @foreach ($users as $user)
                                          <p class="border-b border-neutral-200 px-1 pb-1">{{ $user->name }}</p>
                                       @endforeach
                                    </div>
                                 </x-slot:content>
                              </x-hover>
                              <x-button variant="white" class="ml-2 border-neutral-300 px-5">Add</x-button>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>

         <div class="">
            <div class="rounded-xl bg-white p-6">
               <img class="mx-auto w-52 rounded-full" src="{{ $profilePictureUrl }}" />

               <x-forms.input name="profile_picture" type="file" class="mx-auto mt-4 max-w-56 bg-neutral-100" />
            </div>
            <div class="mt-5 rounded-xl bg-white p-6">
               <h3 class="border-b border-neutral-200 pb-2 text-base font-semibold text-gray-600">Metrics</h3>
               <div class="mt-2 flex items-center">
                  <p class="flex-1">Height:</p>
                  <x-display-div>{{ $height }}</x-display-div>
               </div>
               <div class="mt-2 flex items-center">
                  <p class="flex-1">Weight:</p>
                  <x-display-div>{{ $weight }}</x-display-div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <h1>Test</h1>
      </div>
</div>
</form>
</div>
</div>
