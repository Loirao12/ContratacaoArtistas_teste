<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migration responsible for creating the contracts table.
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('contracts', function (Blueprint $table) {
    $table->id();

    // Person who is hiring the artist
    $table->string('name');

    // Selected artist name
    $table->string('artist_name');

    // Artist fee
    $table->decimal('fee', 10, 2);

    // Event date
    $table->date('event_date');

    // Event address
    $table->string('address')->nullable();

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
