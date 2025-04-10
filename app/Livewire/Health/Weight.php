<?php

namespace App\Livewire\Health;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Weight extends Component
{
    public $weights;

    public function mount()
    {
        $user = Auth::user();
        $this->weights = $user->weights;
    }

    public function render()
    {

        return view('livewire.health.weight')->extends('layouts.app');
    }
}
