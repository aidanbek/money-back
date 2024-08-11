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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('clean_title');
            $table->string('code')->nullable();
            $table->foreignId('measure_unit_id');
            $table->foreignId('brand_id')->nullable();
            $table->text('comment')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->unique(['measure_unit_id', 'brand_id', 'clean_title', 'code']);

            $table->foreign('measure_unit_id')
                ->references('id')
                ->on('measure_units')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->restrictOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
