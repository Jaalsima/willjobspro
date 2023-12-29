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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company_name');
            $table->string('industry');
            $table->string('address');
            $table->string('phone_number');
            $table->string('website')->nullable();
            $table->text('description');
            $table->string('contact_person');
            $table->string('logo_path')->nullable(); // Campo para almacenar la ruta del logo
            $table->enum('status', ['Activo', 'Inactivo', 'Pendiente']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
