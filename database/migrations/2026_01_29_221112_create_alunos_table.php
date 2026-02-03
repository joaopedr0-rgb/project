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
        Schema::create('alunos', function (Blueprint $table) {
            $table->int('id')-> autoIncrement('id');
            $table->string ('nome');
            $table->string('email')-> unique();
            $table-> string('data_nascimento');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */

    
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
