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
        Schema::create('equipment_leases', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('user_id');
            $table->foreignUuid('lease_equipment_id');
            $$table->json('attachment_ids');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('site_location');
            $table->date('start_at');
            $table->date('end_at');
            $table->float('rate', 15, 2);
            $table->foreignId('pricing_type_id');
            $table->foreignId('lease_status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_leases');
    }
};
