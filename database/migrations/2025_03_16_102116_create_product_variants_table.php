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
            $table->unsignedBigInteger('product_id');  
            $table->string('variant_slug')->unique(); 
            $table->string('name'); 
            $table->string('value'); 
            $table->decimal('price', 10, 2);  
            $table->decimal('discount_price', 10, 2)->nullable(); 
            $table->integer('stock')->default(0); 
            $table->string('SKU')->unique();  
            $table->string('weight')->nullable();  
            $table->string('dimensions')->nullable(); 
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
