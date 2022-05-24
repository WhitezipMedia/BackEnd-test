<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class JobPosition extends Model
{
    use HasFactory;

    protected $table = 'job_position';


    protected $fillable = ['position_id'];


    /**
     * @return BelongsTo
     * @description Get the user that occupies the job position
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'position_id');
    }

}
