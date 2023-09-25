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
        Schema::create('lease_equipment', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('user_id');
            $table->string('name');
            $table->foreignId('manufacturer_id');
            $table->foreignId('category_id');
            $table->foreignId('sub_category_id');
            $table->foreignId('industry_id');
            $table->integer('year');
            $table->text('images');
            $table->string('location');
            $table->float('default_price', 15, 2);
            $table->foreignId('pricing_type_id');
            $table->integer('min_lease_period');
            $table->foreignId('equipment_status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lease_equipment');
    }
};
