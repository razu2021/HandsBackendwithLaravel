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
        Schema::create('our_socials', function (Blueprint $table) {
            $table->bigIncrements('HEvent_id');
            $table->string('facebook',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->text('linkedin')->nullable();
            $table->string('instagram',200)->nullable();
            $table->string('youtube',200)->nullable();
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
        Schema::create('our_socials', function (Blueprint $table) {
            //
            $table->dropSoftDeletes();
        });
    }
};
