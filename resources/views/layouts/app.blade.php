@extends('layouts.base')

@section('body')
   <div class="flex min-h-screen flex-col bg-neutral-100">
      <x-navbar />
      <div class="flex flex-1">
         <x-sidebar />
         <div class="container p-5 pb-12">
            @yield('content')
            @isset($slot)
               {{ $slot }}
            @endisset
         </div>
      </div>
   </div>
@endsection
