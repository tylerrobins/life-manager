<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Records extends Component
{
    public function render()
    {
        return view('livewire.home.records')->extends('layouts.app');
    }
}
