<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_user_relation', function (Blueprint $table) {
            $table->id();  
            $table->foreignId('job_position_id') 
                  ->nullable()
                  ->constrained('job_position')
                  ->onUpdate('cascade')
                  ->onDelete('cascade'); 
 
            $table->foreignId('boss_user_id') 
                  ->nullable()
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');      

            $table->foreignId('employee_user_id') 
                  ->nullable()
                  ->constrained('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');      

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_user_relation');
    }
};
