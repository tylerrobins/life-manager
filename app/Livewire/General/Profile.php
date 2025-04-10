<?php

namespace App\Livewire\General;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $profile_picture;
    public $home_name;
    public $user_count;
    public $users;

    public $latestWeight;
    public $latestHeight;

    public function mount()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->profile_picture = $user->profile_picture;
        $this->home_name = $user->home->name ?? null;
        $this->users = $user->home->users;
        $this->user_count = $this->users->count();
        $this->latestHeight = $user->latestHeight?->height ? $user->latestHeight->height . ' cm' : '';
        $this->latestWeight = $user->latestWeight?->weight ? $user->latestWeight->weight . ' kg' : '';
    }

    public function update()
    {
        // ADD VALIDATION FOR FILE UPLOAD - ENSURE IT'S AN IMAGE

        /** @var \App\Models\User $user */
        $user = Auth::user();

        if ($this->profile_picture instanceof TemporaryUploadedFile) {
            $path = $this->profile_picture->store('profile_pictures');
            $user->profile_picture = $path;
            $this->profile_picture = $path;
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->home->name = $this->home_name;
        $user->home->save();
        $user->save();
    }

    public function render(): View
    {

        return view('livewire.general.profile')->extends('layouts.app');
    }
}
