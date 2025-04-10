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
       'Weight' => '/health/weight',
   ];
@endphp

<nav class="z-20 flex w-[250px] flex-col bg-white px-4 pt-3 shadow-lg">
   <div class="flex-1">
      <x-sidebar-item name="Home" icon="home" :items="$home" />
      <x-sidebar-item name="Health" icon="health" :items="$health" />
      <x-sidebar-item name="Finance" icon="finance" :items="$finance" />
   </div>
</nav>
