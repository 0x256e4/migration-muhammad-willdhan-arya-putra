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
        Schema::create('tb_hacking_activity', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->ipAddress('ip')->unique();
            $table->foreign('ip')->references('ip')->on('tb_tamu');
            $table->string('sistem_operasi');
            $table->date('time');
            $table->string('user_agent');
            $table->string('attack_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_hacking_activity');
    }
};
