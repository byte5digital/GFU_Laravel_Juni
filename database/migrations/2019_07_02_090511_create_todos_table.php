<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->unsignedBigInteger('user_created_id');
            $table->unsignedBigInteger('user_assigned_id')->nullable();
            $table->unsignedBigInteger('project_id');
            $table->foreign('user_created_id')->references('id')->on('users');
            $table->foreign('user_assigned_id')->references('id')->on('users');
            $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('todos');
    }
}
