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
        Schema::create('inventory_history', function (Blueprint $table) {
            $table->id();
            $table->string('inventory_item_name',50);
            $table->integer('quantity');
            $table->string('mechanic_nickname',50);
            $table->enum('request_type',['checkup','job_order']);
            $table->unsignedbiginteger('checkup_request_id');
            $table->unsignedbiginteger('job_order_request_id');
            $table->timestamp('date_given');
            $table->string('size_name');
            $table->string('type_name');
            $table->timestamps();
            $table->foreign("job_order_request_id")->references("id")->on("job_order_request")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("checkup_request_id")->references("id")->on("checkup_request")->onDelete("cascade")->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_history');
    }
};
