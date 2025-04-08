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
         <button @mouseover="open = true"
            class="m-2 flex space-x-2 rounded-xl border-2 border-transparent px-3 py-2 hover:border-blue-600 hover:font-bold hover:text-blue-600">
            <h1>{{ Auth::user()->name }} </h1>
            <img class="h-6 rounded-xl" src="{{ asset(Auth::user()->profile_picture) }}" />
         </button>
         <div x-show="open" @click.outside="open = false">Contents...</div>
      </div>
   @endauth
</section>
