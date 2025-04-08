<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class Budget extends Component
{
    public function render()
    {
        return view('livewire.finance.budget')->extends('layouts.app');
    }
}
