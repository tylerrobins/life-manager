<?php

namespace App\Livewire\Health;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Weight extends Component
{
    use WithPagination;

    public $latestWeight;

    public function mount()
    {
        $this->latestWeight = '123';
    }

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

        $this->reset(['latestWeight']);
        $this->resetPage();
    }
}
