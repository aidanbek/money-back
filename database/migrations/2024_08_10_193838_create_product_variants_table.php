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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('brand_id')->nullable();
            $table->foreignId('measure_unit_id');
            $table->string('code')->nullable();
            $table->text('comment')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['product_id', 'measure_unit_id', 'brand_id']);

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('measure_unit_id')
                ->references('id')
                ->on('measure_units')
                ->restrictOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
