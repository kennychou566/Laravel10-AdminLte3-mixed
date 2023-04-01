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
        Schema::create('kc_admins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('log_id', 100)->unique();
            $table->text('password')->nullable();
            $table->dateTime('last_at')->nullable();
            $table->string('log_ip',64)->nullable();
            $table->rememberToken();
            $table->tinyInteger('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kc_admins');
    }
};
