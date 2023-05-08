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
        Schema::table('tickets', function (Blueprint $table) {

            if(Schema::hasColumn('tickets', 'device')) {
                $table->dropColumn('device');
            }

            if(Schema::hasColumn('tickets', 'device_id')) {
                $table->dropColumn('device_id');
            }

            if(Schema::hasColumn('tickets', 'device_model')) {
                $table->dropColumn('device_model');
            }

            if(Schema::hasColumn('tickets', 'device_model_id')) {
                $table->dropColumn('device_model_id');
            }
        });


        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('device_id')->after('client_id');
            $table->foreign('device_id')->references('id')->on('devices')->onDelete('cascade');
            $table->unsignedBigInteger('device_model_id')->after('device_id');
            $table->foreign('device_model_id')->references('id')->on('device_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['device_model_id']);
            $table->dropColumn('device_model_id');
            $table->dropForeign(['device_id']);
            $table->renameColumn('device_id', 'device');
        });
    }
};
