<?php

use App\Models\Event\Modality;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->reference('id')->on('categories');
            $table->string('name');
            $table->integer('allowed_age_start')->nullable();
            $table->integer('allowed_age_end')->nullable();
            $table->timestamps();
        });

        Modality::create(['category_id' => 1, 'name' => '5Km']);
        Modality::create(['category_id' => 1, 'name' => '10Km']);
        Modality::create(['category_id' => 1, 'name' => '21Km']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalities');
    }
}
