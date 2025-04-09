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
      <div x-data="{ open: false }" @mouseleave="open = false">
         <button @mouseover="open = true" class="m-2 flex space-x-2 rounded-xl border-2 border-transparent px-3 py-2">
            <h1>{{ Auth::user()->name }} </h1>
            <img class="h-6 rounded-xl" src="{{ asset(Auth::user()->profile_picture) }}" />
         </button>
         <div x-show="open" @click.outside="open = false"
            class="focus:outline-hidden absolute right-5 z-10 -mt-4 w-40 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600" role="menuitem"
               tabindex="-1" id="user-menu-item-0">Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600" role="menuitem"
               tabindex="-1" id="user-menu-item-1">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
               @csrf
               <button class="block px-4 py-2 text-sm text-gray-700 hover:text-blue-600">Sign Out</button>
            </form>
         </div>
      </div>
   @endauth
</section>
