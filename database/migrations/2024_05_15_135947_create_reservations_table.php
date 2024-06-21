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
        Schema::create('reservations', function (Blueprint $table) {
            $table->foreignId('id_client')->constrained('clients')->onDelete('cascade');
            $table->foreignId('id_voiture')->constrained('voitures')->onDelete('cascade');
            $table->timestamps();
            $table->primary(['id_client', 'id_voiture']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
