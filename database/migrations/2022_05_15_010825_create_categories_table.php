<?php

use App\Models\Event\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->reference('id')->on('events');
            $table->string('name');
            $table->timestamps();
        });

        Category::create(['event_id' => 1, 'name' => 'Adulto']);
        Category::create(['event_id' => 1, 'name' => 'Kids']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
