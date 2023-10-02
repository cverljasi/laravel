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
        Schema::create('user_steps', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->timestamp('step1')->useCurrent();
            $table->timestamp('step2')->nullable()->default(null);
            $table->timestamp('step3')->nullable()->default(null);
            $table->timestamp('step4')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_steps');
    }
};
