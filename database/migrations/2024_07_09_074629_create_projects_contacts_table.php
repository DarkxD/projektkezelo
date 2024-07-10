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
        Schema::create('projects_contacts', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('projects_id')->nullable();
            $table->unsignedBigInteger('contacts_id')->nullable();
            
        });
    }

    /***
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_contacts');
    }
};
