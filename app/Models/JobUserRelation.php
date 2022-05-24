<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\JobPosition;
use App\Models\User;

class JobUserRelation extends Model
{
    use HasFactory;

    protected $table = 'job_user_relation';
 
    /**
     * Get the Boss associated with the user's job position.
     */
    public function job_position()
    {
        return $this->belongsTo(JobPosition::class, 'job_position_id');
    } 


    /**
     * Get the Boss associated with the user's job position.
     */
    public function boss() 
    {
        return $this->belongsTo(User::class, 'boss_user_id' );
    }


    /**
     * Get the User (Employee) associated with the job position.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'employee_user_id');
    } 
 
 

}
