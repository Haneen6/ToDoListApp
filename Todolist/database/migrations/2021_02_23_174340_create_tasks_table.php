<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('content');
            $table->integer('user_id');
            $table->string('task_dat')->default(Carbon::now()->toDateString());
            $table->integer('the_day')->default(1); //// today = 1 & tomorrow = 0
            $table->integer('status')->default(1);  //// ongoing = 1 & completed = 0
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
        Schema::dropIfExists('tasks');
    }
}
