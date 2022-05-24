<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobPosition;
use App\Models\JobUserRelation;
use App\Models\User;
use Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /** Seed 100 dummy users */
        User::factory(100)->create();

        /** Seed 50 dummy job positions ( these are types of jobs ) */
        JobPosition::factory(100)->create(); 

        /** Assign 50 user positions to the 50 jobs, then allocate */
        $job_positions = JobPosition::latest()->take(50)->get();

        /** Assign 50 bosses and 50 employees with theirrelationship to the 50 positions */
        $users = User::latest()->take(100)->get();
        $bosses = array_slice($users->toArray(), 0, 50);
        $employees = array_slice($users->toArray(), 49, 50);

        foreach($job_positions as $idx => $job_position){  

            /** additional job user relation */
            $job_user_relation = new JobUserRelation([
                'job_position_id' => $job_positions[$idx]['id'],
                'boss_user_id' => $bosses[$idx]['id'],
                'employee_user_id' => $employees[$idx]['id']
            ]);                
            $job_user_relation->save();

            $users[$idx+49]->job_user_relation_id = $job_user_relation->id;
            $users[$idx+49]->save();     
        }
 
        /** some hairy seeding of new job data :- P */
        for($i = 0; $i <= 3; $i++) $this->generate_some_job_swapping($users, $bosses, $employees, $i); 

    }


    /** Now that we have some users with jobs, we will fire/hire and swith positions to generate the job history data */
    public function generate_some_job_swapping($users, $bosses, $employees, $factor){

        $job_positions = JobPosition::latest()->take(50)->get();        
        $i = $factor;
        foreach($job_positions as $idx => $job_position){

            /** add some different records by skipping afer every 3 allocations */
            $i++;
            if ($i == ($factor + $factor)) {
                $i = $factor;
                continue;
            }

            if (!isset($job_positions[$idx+$i]) || !isset($job_positions[$idx+$i])) continue;
 
            /** additional job user relation */ 
            $job_data = [
                'job_position_id' => $job_positions[$idx+$i]['id'],
                'boss_user_id' => $bosses[$idx+$i]['id'],
                'employee_user_id' => $employees[$idx]['id']
            ]; 
            $job_user_relation = new JobUserRelation($job_data);                

            $job_user_relation->save();

            $users[$idx+49]->job_user_relation_id = $job_user_relation->id;
            $users[$idx+49]->save();   
        }
    }
}
