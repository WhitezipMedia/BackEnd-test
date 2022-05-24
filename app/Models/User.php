<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Sanctum\HasApiTokens;
use Log;

use App\Models\JobPosition;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    
    /**
     * @return HasOne
     * @description get the job position associated with the user
     */
    public function job_relation(): HasOne
    {
        return $this->hasOne(JobUserRelation::class, 'id', 'job_user_relation_id'); 
    }
 

    /**
     * @return HasMany
     * @description get the full job position history for the associated with the user
     */
    public function job_history()
    {
        return $this->hasMany(JobUserRelation::class, 'employee_user_id'); 
    }    

}
