<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Models\JobPosition;

use App\Models\Relation;

class JobPositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carpenterJob = JobPosition::create([
            'name' => 'carpenter'
        ]);

        $doctorJob = JobPosition::create([
            'name' => 'doctor'
        ]);

        $fisherJob = JobPosition::create([
            'name' => 'fisher'
        ]);

        $gardenerJob = JobPosition::create([
            'name' => 'gardener'
        ]);

        $pilotJob = JobPosition::create([
            'name' => 'pilot'
        ]);

        $employee1 = User::create([
            'name' => 'Joe',
            'last_name' => 'Makhachev',
            'email' => 'makhachev@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $pilotJob->id
        ]);

        $employee2 = User::create([
            'name' => 'Rose',
            'last_name' => 'Rogan',
            'email' => 'rrogan@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $gardenerJob->id
        ]);

        $employee3 = User::create([
            'name' => 'Megan',
            'last_name' => 'Namanunez',
            'email' => 'mnamanunez@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $fisherJob->id
        ]);

        $employee4 = User::create([
            'name' => 'Connor',
            'last_name' => 'Nuggets',
            'email' => 'cnuggets@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $doctorJob->id
        ]);

        $employee5 = User::create([
            'name' => 'Paco',
            'last_name' => 'Philliam',
            'email' => 'pphilliam@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $carpenterJob->id
        ]);

        $employee6 = User::create([
            'name' => 'Sarah',
            'last_name' => 'Tier',
            'email' => 'stier@mail.com',
            'password' => Hash::make('password'),
            'type' => 'employee',
            'job_position_id' => $carpenterJob->id
        ]);

        $boss1 = User::create([
            'name' => 'Paul',
            'last_name' => 'Curry',
            'email' => 'pcurry@mail.com',
            'password' => Hash::make('password'),
            'type' => 'boss',
            'job_position_id' => $pilotJob->id
        ]);

        $boss2 = User::create([
            'name' => 'Manuela',
            'last_name' => 'Towels',
            'email' => 'mtowels@mail.com',
            'password' => Hash::make('password'),
            'type' => 'boss',
            'job_position_id' => $doctorJob->id
        ]);

        $boss3 = User::create([
            'name' => 'Carl',
            'last_name' => 'Hewlett',
            'email' => 'chewlett@mail.com',
            'password' => Hash::make('password'),
            'type' => 'boss',
            'job_position_id' => $fisherJob->id
        ]);

        $relation1 = Relation::create([
            'employee_id' => $employee1->id,
            'boss_id' => $boss1->id
        ]);

        $relation2 = Relation::create([
            'employee_id' => $employee2->id,
            'boss_id' => $boss1->id
        ]);

        $relation3 = Relation::create([
            'employee_id' => $employee3->id,
            'boss_id' => $boss1->id
        ]);

        $relation4 = Relation::create([
            'employee_id' => $employee4->id,
            'boss_id' => $boss2->id
        ]);

        $relation5 = Relation::create([
            'employee_id' => $employee5->id,
            'boss_id' => $boss2->id
        ]);

        $relation6 = Relation::create([
            'employee_id' => $employee6->id,
            'boss_id' => $boss3->id
        ]);

    }
}
