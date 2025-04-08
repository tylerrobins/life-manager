<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Tasks extends Component
{
    public function render()
    {
        return view('livewire.home.tasks')->extends('layouts.app');
    }
}
