<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id();
            $table->string("nazov_role");
        });

        DB::table('role')->insert([
            ['id' => 1, 'nazov_role' => 'Hlavný admin'],
            ['id' => 2, 'nazov_role' => 'Admin'],
            ['id' => 3, 'nazov_role' => 'Guest'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
