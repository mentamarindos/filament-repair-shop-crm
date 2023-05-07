<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('device');
            $table->text('description');
            $table->unsignedInteger('status_id')->default(1); // Asume que el estado 'Pending' tiene el ID 1
            $table->timestamps();
        
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('status_id')->references('id')->on('ticket_statuses');
        });
        
    }

    /**
     * Reverse the migrations. 
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
