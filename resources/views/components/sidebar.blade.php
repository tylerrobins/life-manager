@php
   $finance = [
       'Add' => '/finance/add_transaction',
       'Transactions' => '/finance/transactions',
       'Budget' => '/finance/budget',
       'Accounts' => '/finance/accounts',
   ];
   $home = [
       'General' => '/home/general',
       'Tasks' => '/home/tasks',
       'Records' => '/home/records',
   ];
   $health = [
       'Exercise' => '/health/exercise',
       'Food' => '/health/food',
       'Metrics' => '/health/metrics',
   ];
@endphp

<nav class="z-20 flex w-[250px] flex-col bg-white px-4 pt-3 shadow-lg">
   <div class="flex-1">
      <x-sidebar-item name="Home" icon="home" :items="$home" />
      <x-sidebar-item name="Health" icon="health" :items="$health" />
      <x-sidebar-item name="Finance" icon="finance" :items="$finance" />
   </div>
   <form method="POST" action="{{ route('logout') }}" class="border-t pb-3 pt-2">
      @csrf
      <button
         class="w-full cursor-pointer rounded-lg py-2 text-base hover:text-lg hover:font-bold hover:text-blue-600 hover:underline">Logout</button>
   </form>
</nav>
