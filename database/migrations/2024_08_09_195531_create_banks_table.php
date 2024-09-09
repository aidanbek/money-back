<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Banks\Models\Bank;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_url');
        });

        $banks = [
            [
                'name' => 'Freedom',
                'icon_url' => asset('banks/freedom.png'),
            ],
            [
                'name' => 'Halyk',
                'icon_url' => asset('banks/halyk.png'),
            ],
            [
                'name' => 'Homecredit',
                'icon_url' => asset('banks/homecredit.jpg'),
            ],
            [
                'name' => 'Jusan',
                'icon_url' => asset('banks/jusan.png'),
            ],
            [
                'name' => 'Kaspi',
                'icon_url' => asset('banks/kaspi.png'),
            ],
            [
                'name' => 'Simply',
                'icon_url' => asset('banks/simply.png'),
            ],
            [
                'name' => 'Forte',
                'icon_url' => asset('banks/forte.png'),
            ],
            [
                'name' => 'Bereke',
                'icon_url' => asset('banks/bereke.png'),
            ],
            [
                'name' => 'Eurassian',
                'icon_url' => asset('banks/eurassian.png'),
            ],
            [
                'name' => 'RBK',
                'icon_url' => asset('banks/rbk.png'),
            ],
        ];

        Bank::insert($banks);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
