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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('clean_title')->unique();
            $table->decimal('current_balance', 12, 2);
            $table->decimal('initial_balance', 12, 2);
            $table->foreignId('bank_id')->nullable();
            $table->unsignedTinyInteger('type');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('bank_id')
                ->on('banks')
                ->references('id')
                ->restrictOnUpdate()
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
