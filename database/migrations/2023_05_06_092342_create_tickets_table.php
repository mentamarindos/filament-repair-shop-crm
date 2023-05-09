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
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('device_model_id')->after('device_id');

            // $table->string('device');
            $table->text('description');
            $table->unsignedBigInteger('ticket_status_id')->default(1); // Asume que el estado 'Pending' tiene el ID 1
            $table->string('severity')->default('Low');
            $table->mediumText('images')->nullable();
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->foreign('device_model_id')->references('id')->on('device_models')->onDelete('cascade');

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('ticket_status_id')->references('id')->on('ticket_statuses');
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
