<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class AddTransaction extends Component
{
    public function render()
    {
        return view('livewire.finance.add-transaction')->extends('layouts.app');
    }
}
