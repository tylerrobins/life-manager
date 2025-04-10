<?php

namespace App\Livewire\Health;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Weight extends Component
{
    public $weights;
    public $latestWeight;

    public function mount()
    {
        $user = Auth::user();
        $this->weights = $user->weights;
        $this->latestWeight = $user->latestWeight->weight ?? null;
    }

    public function render()
    {

        return view('livewire.health.weight')->extends('layouts.app');
    }
}
