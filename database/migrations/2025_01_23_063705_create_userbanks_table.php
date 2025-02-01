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
        Schema::create('userbanks', function (Blueprint $table) {
            $table->id();
            $table->string('codehesab');
            $table->string('sh_hesab');
            $table->string('sh_card');
            $table->string('sh_sheba');
            $table->string('type');
            $table->boolean('has_check');
            $table->decimal('balance');
            $table->string('office_id')->onDelete('cascade');
            $table->string('banklist_id')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userbanks');
    }
};
