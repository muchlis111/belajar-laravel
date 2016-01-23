<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
<<<<<<< HEAD
            $table->string('alamat');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('jenis_kamar');
            $table->string('user_id');
=======
            $table->string('alamt');
>>>>>>> eb3f04ce6038f16465136d3aeb56c3e6ebbd1646
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
        Schema::drop('tasks');
    }
}
