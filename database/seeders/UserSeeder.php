<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::query()->create([
        //     "username" => "ranil",
        //     "email" => "ranil.kamalov4553@mail.ru",
        //     "password" => Hash::make("ranil"),
        //     "role" => "admin"
        // ]);

        User::query()->create([
            "username" => "kamalov",
            "email" => "kamalov4553@mail.ru",
            "password" => Hash::make("kamalov")
        ]);
    }
}
