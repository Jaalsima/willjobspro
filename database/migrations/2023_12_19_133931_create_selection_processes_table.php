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
        Schema::create('selection_processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offer_id')->constrained('job_offers');
            $table->enum('status', ['open', 'closed', 'other_status']);
            $table->date('opening_date');
            $table->date('closing_date');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selection_processes');
    }
};
