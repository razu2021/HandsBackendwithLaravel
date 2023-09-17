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
        Schema::create('contact_massages', function (Blueprint $table) {
            $table->bigIncrements('HEvent_id');
            $table->string('name',100)->nullable();
            $table->string('phone',30)->nullable();
            $table->string('email',200)->uniqid();
            $table->text('massage')->nullable();
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
        Schema::create('contact_massages', function (Blueprint $table){
            //
            $table->dropSoftDeletes();
        });
    }
};
