@section('title', 'Create a new account')

<div>
   <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <a href="{{ route('home') }}">
         <x-logo class="mx-auto h-16 w-auto text-indigo-600" />
      </a>

      <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-gray-900">
         Create a new account
      </h2>

      <p class="max-w mt-2 text-center text-sm leading-5 text-gray-600">
         Or
         <a href="{{ route('login') }}"
            class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none">
            sign in to your account
         </a>
      </p>
   </div>

   <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
         <form wire:submit.prevent="register">
            <div class="flex flex-col space-y-6">
               <x-forms.input name="name" label="Name" class="shadow-md" />
               <x-forms.input name="home_name" label="Home" class="shadow-md" />
               <x-forms.input name="email" label="Email Address" type="email" class="shadow-md" />
               <x-forms.input name="password" label="Password" class="shadow-md" type="password" />
               <x-forms.input name="password_confirmation" label="Confirm Password" class="shadow-md" type="password" />
            </div>

            <div class="mt-6">
               <span class="block w-full rounded-md shadow-sm">
                  <button type="submit"
                     class="focus:ring-indigo flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:border-indigo-700 focus:outline-none active:bg-indigo-700">
                     Register
                  </button>
               </span>
            </div>
         </form>
      </div>
   </div>
</div>
