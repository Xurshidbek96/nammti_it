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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('group_edu')->nullable();
            $table->string('img')->nullable()->default('user.png');
            $table->integer('group_id')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('direction')->nullable();
            $table->integer('pay1')->nullable()->default(0);
            $table->integer('pay2')->nullable()->default(0);
            $table->integer('pay3')->nullable()->default(0);
            $table->integer('pay4')->nullable()->default(0);
            $table->integer('pay5')->nullable()->default(0);
            $table->integer('pay6')->nullable()->default(0);
            $table->integer('status_course')->nullable()->default(0);
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
        Schema::dropIfExists('students');
    }
};
