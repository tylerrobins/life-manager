<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        return view('livewire.finance.transactions')->extends('layouts.app');
    }
}
