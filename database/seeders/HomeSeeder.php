<?php

namespace Database\Seeders;

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
        $home = Home::factory()->create();
        User::factory(2)->create(['home_id' => $home->id]);
        $home->users()->create([
            'name' => 'Tyler',
            'email' => 'tylerkingsley@gmail.com',
            'password' => Hash::make('password'),
            'profile_picture' => 'profile_pictures/yXfCGJj8Xk6wlNTmG2VEjVRPkrPiL6GoAqx9KXzT.jpg'
        ]);
    }
}
