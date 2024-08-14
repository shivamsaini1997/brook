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
        Schema::create('seviceoffer', function (Blueprint $table) {
            $table->id();
            $table->text('svg_icon',4000);
            $table->string('main_heading',100);
            $table->string('sub_heading',100);
            $table->text('description',2000);
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seviceoffer');
    }
};
