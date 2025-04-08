<?php

namespace App\Livewire\Health;

use Livewire\Component;

class Metrics extends Component
{
    public function render()
    {
        return view('livewire.health.metrics')->extends('layouts.app');
    }
}
