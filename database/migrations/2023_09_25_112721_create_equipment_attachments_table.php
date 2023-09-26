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
        Schema::create('equipment_attachments', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('lease_equipment_id');
            $table->foreignUuid('attachment_id');
            $table->text('images');
            $table->float('default_price', 15, 2);
            $table->bigInteger('units')->default(0);
            $table->foreignId('attahment_condition_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_attachments');
    }
};
