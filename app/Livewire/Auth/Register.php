<?php

namespace App\Livewire\Auth;

use App\Models\Home;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $home_name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $password_confirmation = '';

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'home_name' => ['required'],
            'password' => ['required', 'min:8', 'same:password_confirmation'],
        ]);

        $home = Home::create(['name' => $this->home_name,]);
        $user = $home->users()->create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
            'profile_picture' => 'profile_pictures/default.svg',
            'home_id' => $home->id,
        ]);

        event(new Registered($user));

        Auth::login($user, true);

        return redirect()->intended(route('app'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
