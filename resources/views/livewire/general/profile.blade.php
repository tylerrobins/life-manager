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
         <h1 class="flex-1 pl-2 text-xl font-bold">{{ $name }}'s Profile</h1>
         <button>Save</button>
         <button>Cancel</button>
      </div>
      <div class="flex space-x-5">
         <div class="flex-1">
            <div class="rounded-xl bg-white p-5 pb-6">
               <div class="flex space-x-5">
                  <div class="flex-1/2 flex flex-col space-y-4">
                     <h2 class="text-lg font-semibold text-gray-600">Details</h2>
                     <x-forms.input name="name" label="Name" class="bg-neutral-100" />
                     <x-forms.input name="email" label="Email address" class="bg-neutral-100" />
                  </div>
                  <div class="flex-1/2 flex flex-col space-y-4">
                     <h2 class="text-lg font-semibold text-gray-600">Home</h2>
                     <x-forms.input name="home_name" label="Name" class="bg-neutral-100" />
                  </div>
               </div>
            </div>
         </div>
         <div class="">
            <div class="rounded-xl bg-white p-5">
               <img class="mx-auto w-52 rounded-full" src="{{ $profilePictureUrl }}" />

               <x-forms.input name="profile_picture" type="file" class="mt-4 max-w-60" />
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
