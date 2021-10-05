<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('background_id')->constrained();
            $table->string('name');
        });

        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('department_id')->constrained();
            $table->string('name');
        });

        Schema::create('primary_skils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
        });

        Schema::create('secondary_skils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('primary_skil_id')->constrained();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backgrounds');
        Schema::dropIfExists('careers');
        Schema::dropIfExists('departments');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('primary_skils');
        Schema::dropIfExists('secondary_skils');
    }
}
