<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tournaments', function (Blueprint $table) {
            $table->increments('tournaments_id');
            $table->string('clube_name');
            $table->binary('clube_pic');
            $table->date('post_date');
            $table->string('tournaments_title');
            $table->date('match_start_date');
            $table->string('motto_line');
            $table->longText('description');
            $table->binary('post_pic');
            $table->integer('tournaments_code');
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
        Schema::dropIfExists('tbl_tournaments');
    }
}
