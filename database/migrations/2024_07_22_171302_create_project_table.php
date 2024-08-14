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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('project_image');
            $table->string('project_name',100);
            $table->string('slug');
            $table->string('client_name',100);
            $table->string('project_type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->text('project_detail');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
