<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('RefPdt')->primary()->unique();
            $table->string('libPdt');
            $table->integer('Prix');
            $table->integer('Qte');
            $table->text('description');
            $table->text('image');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_produits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
