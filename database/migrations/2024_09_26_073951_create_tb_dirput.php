<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDirput extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dirput', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_banding')->unique()->nullable();
            $table->string('j_perkara')->nullable();
            $table->date('tgl_putus')->nullable();
            $table->string('putusan')->nullable();
            $table->timestamp('created_at')->nullable();
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
        //
    }
}
