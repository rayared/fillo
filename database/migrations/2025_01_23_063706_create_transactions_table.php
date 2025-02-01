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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamp('dateandtime');
            $table->decimal('amount');
            $table->integer('sourcetype');
            $table->unsignedBigInteger('sourceid');
            $table->integer('desttype');
            $table->unsignedBigInteger('destid');
            $table->string('office_id')->onDelete('cascade');
            $table->string('category_id')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
