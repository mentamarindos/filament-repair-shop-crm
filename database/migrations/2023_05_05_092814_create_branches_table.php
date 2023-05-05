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
        Schema::create('branches', function (Blueprint $table) {
            $table->id(); // ID de la sucursal
            $table->string('name'); // Nombre de la sucursal
            $table->string('address'); // Dirección de la sucursal
            $table->unsignedBigInteger('company_id'); // Clave foránea para relacionar con la empresa
            $table->foreign('company_id')->references('id')->on('companies'); // Establece la relación
            $table->timestamps(); // Fecha de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
