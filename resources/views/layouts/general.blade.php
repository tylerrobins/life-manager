@extends('layouts.base')

@section('body')
   <div class="relative flex min-h-screen flex-col selection:bg-indigo-500 selection:text-white">
      @yield('content')

      @isset($slot)
         {{ $slot }}
      @endisset
   </div>
@endsection
