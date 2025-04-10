@props(['user'])

<section class="z-30 flex min-h-[40px] bg-white shadow">
   <div class="flex-1">
   </div>
   @guest
      <div class="m-2 flex space-x-6 px-5 py-2 text-lg">
         <a href="/login" class="hover:font-bold hover:text-blue-600 hover:underline">Login</a>
         <a href="/register" class="hover:font-bold hover:text-blue-600 hover:underline">Register</a>
      </div>
   @endguest
   @auth
      <x-hover class="m-2 flex space-x-2 rounded-xl px-3 py-3">
         <h1>{{ $user->name }}</h1>
         <img src="{{ asset($user->profile_picture) }}" alt="profile picture" class="h-6 rounded-xl">

         <x-slot:content class="right-5 -mt-4 w-40 bg-white py-1">
            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600"
               role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600" role="menuitem"
               tabindex="-1" id="user-menu-item-1">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600">Sign Out</button>
            </form>
         </x-slot:content>
      </x-hover>
   @endauth
</section>
