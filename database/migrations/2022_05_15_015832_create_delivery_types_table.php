<?php

use App\Models\Event\DeliveryType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_types', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['entrega-domiciliar', 'retirada-evento', 'retirada-loja']);
            $table->timestamps();
        });

        DeliveryType::create(['name' => 'entrega-domiciliar']);
        DeliveryType::create(['name' => 'retirada-evento']);
        DeliveryType::create(['name' => 'retirada-loja']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivery_types');
    }
}
