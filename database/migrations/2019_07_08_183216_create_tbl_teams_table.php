<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('even_code');
            $table->string('team_name');
            $table->string('team_reg');
            $table->string('email');
            $table->string('password');
            $table->string('team_captain');
            $table->string('team_players');
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
        Schema::dropIfExists('tbl_teams');
    }
}
