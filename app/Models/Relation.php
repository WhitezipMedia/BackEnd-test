<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Relation extends Model
{
    use HasFactory;

    protected $table = 'relation';

    public function getBossEmployeeHistory() {
        return DB::table('relation')
            ->join('users as employees', 'employees.id', '=', 'relation.employee_id')
            ->join('users as bosses', 'bosses.id', '=', 'relation.boss_id')
            ->select(
                'employees.name as employee_name',
                'employees.last_name as employee_last_name',
                'bosses.name as boss_name',
                'bosses.last_name as boss_last_name'
            )
            ->get();
    }

}
