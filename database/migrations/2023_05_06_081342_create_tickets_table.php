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
            $table->timestamps();
        });


        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->string('device');
            $table->text('description');
            $table->enum('status', ['Pending', 'In repair', 'Waiting for parts', 'In diagnosis process', 'Finished', 'Cancelled'])->default('Pending');
            $table->timestamps();
        
            $table->foreign('client_id')->references('id')->on('clients');
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
