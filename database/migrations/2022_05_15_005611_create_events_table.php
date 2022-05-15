<?php

use App\Models\Event\Event;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_type_id')->references('id')->on('event_types');
            $table->string('name', 100);
            $table->timestamps();
        });

        Event::create(['event_type_id' => 1,'name' => 'LIVE! Run 1']);
        Event::create(['event_type_id' => 1,'name' => 'LIVE! Run 2']);
        Event::create(['event_type_id' => 1,'name' => 'LIVE! Run 3']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
