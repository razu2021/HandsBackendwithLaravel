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
        Schema::create('volunteer_management_teams', function (Blueprint $table) {
            $table->bigIncrements('HEvent_id');
            $table->string('heading',100)->nullable();
            $table->string('title',100)->nullable();
            $table->text('caption')->nullable();
            $table->string('subtitle',200)->nullable();
            $table->text('info')->nullable();
            $table->string('button',50)->nullable();
            $table->string('button_url',50)->nullable();
            $table->string('image',50)->nullable();
            $table->string('bgimage',50)->nullable();
            $table->integer('creator')->nullable();
            $table->integer('editor')->nullable();
            $table->string('slug',50)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('volunteer_management_teams', function (Blueprint $table){
            //
            $table->dropSoftDeletes();
        });
    }
};
