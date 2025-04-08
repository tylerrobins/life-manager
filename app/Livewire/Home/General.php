<?php

namespace App\Livewire\Home;

use Livewire\Component;

class General extends Component
{
    public function render()
    {
        return view('livewire.home.general')->extends('layouts.app');
    }
}
