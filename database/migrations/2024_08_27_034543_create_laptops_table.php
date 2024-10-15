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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('idinventaris');
            $table->string('nameLaptop');
            $table->string('brand');
            $table->foreignId('id')->constrained('barangcatagories')->onDelete('cascade');
            $table->text('specifications')->nullable();
            $table->date('purchase_date');
            $table->decimal('price', 10, 0);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
