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
        Schema::create('student_roles', function (Blueprint $table) {
            $table->bigIncrements('Role_id');
            $table->string('role',100)->nullable();
            $table->string('registration',100)->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('student_id');
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
        Schema::dropIfExists('student_roles');
    }
};
