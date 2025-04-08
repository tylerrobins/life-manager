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
      <div class="m-2 flex space-x-2 px-3 py-2">
         <x-logo class="w-4" />
         <h1>USER</h1>
      </div>
   @endauth
</section>
