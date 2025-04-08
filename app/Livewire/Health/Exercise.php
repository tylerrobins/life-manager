<?php

namespace App\Livewire\Health;

use Livewire\Component;

class Exercise extends Component
{
    public function render()
    {
        return view('livewire.health.exercise')->extends('layouts.app');
    }
}
