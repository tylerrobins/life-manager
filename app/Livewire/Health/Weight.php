<?php

namespace App\Livewire\Health;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Weight extends Component
{
    public $latestWeight;

    public function mount() {}

    public function render()
    {
        $weights = Auth::user()->weights()->latest()->paginate(10);
        return view('livewire.health.weight', ['weights' => $weights])->extends('layouts.app');
    }

    public function update()
    {
        $this->validate([
            'latestWeight' => ['required']
        ]);
        Auth::user()->weights()->create([
            'weight' => $this->latestWeight,
        ]);
    }
}
