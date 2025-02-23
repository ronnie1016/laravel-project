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
        Schema::create('mech_acc', function (Blueprint $table) {
            $table->id();
            $table->string('username',50);
            $table->string('password',50);
            $table->Integer('contact_number');
            $table->string('nickname',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mech_acc');
    }
};
