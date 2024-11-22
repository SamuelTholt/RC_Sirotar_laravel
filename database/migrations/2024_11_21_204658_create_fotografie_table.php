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
        Schema::create('fotografie', function (Blueprint $table) {
            $table->id();
            $table->string('nadpis')->nullable();
            $table->string('text')->nullable();

            $table->string('nazov_suboru');
            $table->string('cesta_k_suboru');

            $table->unsignedBigInteger('priradena_sekcia_id');

            $table->foreign('priradena_sekcia_id')->references('id')->on('sekcie')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotografie');
    }
};
