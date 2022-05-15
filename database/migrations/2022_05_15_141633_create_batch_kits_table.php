<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_kits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('batch_id')->references('id')->on('batches');
            $table->foreignId('kit_id')->references('id')->on('kits');
            $table->tinyInteger('is_additional')->default(0);
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
        Schema::dropIfExists('batch_kits');
    }
}
