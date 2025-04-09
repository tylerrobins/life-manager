@section('title', 'Sign in to your account')

<div>
   <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <a href="{{ route('home') }}">
         <x-logo class="mx-auto h-16 w-auto text-indigo-600" />
      </a>

      <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-gray-900">
         Sign in to your account
      </h2>
      @if (Route::has('register'))
         <p class="max-w mt-2 text-center text-sm leading-5 text-gray-600">
            Or
            <a href="{{ route('register') }}"
               class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none">
               create a new account
            </a>
         </p>
      @endif
   </div>

   <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white px-4 py-8 shadow sm:rounded-lg sm:px-10">
         <form wire:submit.prevent="authenticate">
            <div class="flex flex-col space-y-6">
               <x-forms.input name="email" type="email" label="Email Address" class="shadow-md" />
               <x-forms.input name="password" type="password" label="Password" class="shadow-md" />
            </div>

            <div class="mt-6 flex items-center justify-between">
               <div class="flex items-center">
                  <input wire:model.lazy="remember" id="remember" type="checkbox"
                     class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                  <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
                     Remember
                  </label>
               </div>

               <div class="text-sm leading-5">
                  <a href="{{ route('password.request') }}"
                     class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none">
                     Forgot your password?
                  </a>
               </div>
            </div>

            <div class="mt-6">
               <span class="block w-full rounded-md shadow-sm">
                  <button type="submit"
                     class="focus:ring-indigo flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:border-indigo-700 focus:outline-none active:bg-indigo-700">
                     Sign in
                  </button>
               </span>
            </div>
         </form>
      </div>
   </div>
</div>
