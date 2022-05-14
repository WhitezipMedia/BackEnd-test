<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobPosition extends Model
{
    use HasFactory;

    protected $table = 'job_position';

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function getJobs() {
        return DB::table('job_position')
            ->select('job_position.id', 'job_position.name')
            ->get();
    }

    public function getUserJobPosition() {
        return DB::table('job_position')
            ->join('users', 'job_position.id', '=', 'users.job_position_id')
            ->select('users.*', 'job_position.name as job_name')
            ->get();
    }

}
