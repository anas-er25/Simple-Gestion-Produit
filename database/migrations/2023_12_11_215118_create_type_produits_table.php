<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('type_produits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('type');
        });


        DB::table('type_produits')->insert([
            ['type' => 'Electronique'],
            ['type' => 'Electricite'],
            ['type' => 'Informatique'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('type_produits');
    }
};