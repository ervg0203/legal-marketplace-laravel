<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('request_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('legal_worker_id')->constrained('legal_workers')->onDelete('cascade');
            $table->string('user_name');
            $table->string('user_email');
            $table->text('description');
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
