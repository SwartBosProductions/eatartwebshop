<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     * BOSMA NOTES:
     * Wat is 'shipment_status'? Is dat bv. ingepakt, verzonden, aangekomen?
     * Zo ja, dan kunnen we daar een aparte tabel van maken en hier een FK.
     * Zo ja, dan kunnen we verzenddatum ook als veld toevoegen. En wellicht een DHL-code. Beide nullable/optioneel.
     * :BOSMA NOTES.
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->string('shipment_status')->nullable();
            $table->string('shipment_code')->nullable();
            $table->timestamp('shipment_date')->nullable();
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
