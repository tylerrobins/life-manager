<?php

namespace App\Livewire\General;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $profile_picture;
    public $home_name;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->profile_picture = $user->profile_picture;
        $this->home_name = $user->home->name ?? null;
    }

    public function update() {}

    public function render()
    {
        return view('livewire.general.profile')->extends('layouts.app');
    }
}
