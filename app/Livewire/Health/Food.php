<?php

namespace App\Livewire\Health;

use Livewire\Component;

class Food extends Component
{
    public function render()
    {
        return view('livewire.health.food')->extends('layouts.app');
    }
}
