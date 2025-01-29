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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название услуги');
            $table->text('description')->comment('Описание услуги');
            $table->bigInteger('price')->comment('Цена услуги');
            $table->string('image')->nullable()->comment('Изображение');
            $table->boolean('is_active')->default(true)->comment('Отображать на сайте');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
