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
        Schema::create('become_volunteers', function (Blueprint $table) {
            $table->bigIncrements('HEvent_id');
            $table->string('fname',100);
            $table->string('lname',100);
            $table->string('phone',30);
            $table->string('email',200)->uniqid();
            $table->string('nid')->nullable();
            $table->string('riligion',50);
            $table->string('birth_date',50);
            $table->string('gender',50);
            $table->text('address',50);
            $table->text('massage',50);
            $table->string('image',50)->nullable();
            $table->integer('creator')->default(2);
            $table->integer('editor')->default(2);
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
        Schema::create('become_volunteers', function (Blueprint $table){
            //
            $table->dropSoftDeletes();
        });
    }
};
