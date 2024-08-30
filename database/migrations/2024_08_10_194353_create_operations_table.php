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
        Schema::create('operations', function (Blueprint $table) {
            $table->uuid('id')->index();
            $table->foreignId('account_id');
            $table->foreignId('payee_id');
            $table->unsignedTinyInteger('type');
            $table->unsignedBigInteger('sort_order')->default(0);
            $table->decimal('total', 16, 2);
            $table->boolean('online');
            $table->string('check_url')->nullable();
            $table->timestamp('happened_at');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('account_id')
                ->references('id')
                ->on('accounts')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreign('payee_id')
                ->references('id')
                ->on('payees')
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->text('comment')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
