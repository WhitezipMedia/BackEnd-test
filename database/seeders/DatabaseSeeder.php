<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* $user = User::where('email', 'ximojack@hotmail.com')->first();

        if (!$user)
        {

            User::create([

                'name' => 'Joaquin',

                'last_name' => 'Joaquin',

                'email' => 'ximojack@hotmail.com',

                'password' => Hash::make('1234567L'),

                'type' => 'boss'

            ]);

        } */

        $this->call(JobPositionTableSeeder::class);
    }
}
