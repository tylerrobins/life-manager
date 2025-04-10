<?php

namespace Database\Seeders;

use App\Models\Health\Height;
use App\Models\Health\Weight;
use App\Models\Home;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->basicTesting();
    }

    public function basicTesting(): void
    {
        $home = Home::factory()->create();
        User::factory(2)->create(['home_id' => $home->id]);
        $test_user = $home->users()->create([
            'name' => 'Tyler',
            'email' => 'tylerkingsley@gmail.com',
            'password' => Hash::make('password'),
            'profile_picture' => 'profile_pictures/yXfCGJj8Xk6wlNTmG2VEjVRPkrPiL6GoAqx9KXzT.jpg'
        ]);
        Weight::factory(3)->create(['user_id' => $test_user->id]);
        Height::factory()->create(['user_id' => $test_user->id]);
    }
}
