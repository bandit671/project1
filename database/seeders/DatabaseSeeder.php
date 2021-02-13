<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Bandit Bunkamjon";
        $user->username = "admin";
        $user->email = "61143222@g.cmru.ac.th";
        $user->password = Hash::make("1234");
        $user->save();    }
}
