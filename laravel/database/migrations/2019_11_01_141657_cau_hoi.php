<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CauHoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CauHoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noi_dung');
            $table->unsignedInteger('linh_vuc_id');
            $table->string('phuong_an_a');
            $table->string('phuong_an_b');
            $table->string('phuong_an_c');
            $table->string('phuong_an_d');
            $table->string('dap_an');

            $table->foreign('linh_vuc_id')->references('id')->on('LinhVuc');
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
        Schema::dropIfExists('CauHoi');
    }
}
