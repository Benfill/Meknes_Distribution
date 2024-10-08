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
        Schema::create('tarifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('marque')->nullable();
            $table->string('modele');
            $table->string('designation');
            $table->string('composition_remise');
            $table->string('taux_subvention')->nullable();
            $table->string('plafond_subvention')->nullable();
            $table->string('cout_revient')->nullable();
            $table->enum('is_deleted', ['no', 'yes'])->default('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarifs');
    }
};
