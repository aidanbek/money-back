<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operation_products', function (Blueprint $table) {
            $table->id();
            $table->uuid('operation_id');
            $table->foreignId('product_variant_id');
            $table->foreignId('category_id');
            $table->foreignId('project_id')->nullable();
            $table->unsignedMediumInteger('quantity');
            $table->decimal('price_per_unit', 12, 2);
            $table->decimal('price', 12, 2);
            $table->timestamps();

            $table->unique(
                [
                    'operation_id',
                    'product_variant_id',
                    'category_id',
                    'project_id'
                ],
                'operation_products_unique'
            );

            $table->foreign('operation_id')
                ->references('id')
                ->on('operations')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('product_variant_id')
                ->references('id')
                ->on('product_variants')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->restrictOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_products');
    }
};
