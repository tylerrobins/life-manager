<?php

namespace App\Livewire\Finance;

use Livewire\Component;

class Accounts extends Component
{
    public function render()
    {
        return view('livewire.finance.accounts')->extends('layouts.app');
    }
}
