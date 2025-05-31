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
        Schema::create('add__speakers', function (Blueprint $table) {
            $table->id();
            $table->string('speaker_name');
            $table->string('speaker_photo');
            $table->longText('speaker_description1');
            $table->longText('speaker_description2');
            $table->longText('speaker_description3')->nullable();
            $table->longText('speaker_description4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add__speakers');
    }
};
