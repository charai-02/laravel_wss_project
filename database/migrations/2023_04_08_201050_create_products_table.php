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
            $table->string('p_name');
            $table->string('p_categorie');
            $table->float('p_price');
            $table->text('p_description')->nullable();
            $table->text('p_components')->nullable();
            $table->text('p_avantage')->nullable();
            $table->text('p_usage')->nullable();
            $table->string('p_img');
            $table->string('p_img_sec');
            $table->string('p_icon');
            $table->softDeletes();
            $table->timestamps();
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
