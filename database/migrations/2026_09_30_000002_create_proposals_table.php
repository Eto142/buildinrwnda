<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 50)->nullable();
            $table->string('company');
            $table->string('country', 100);
            $table->string('project_name');
            $table->string('sector', 100);
            $table->string('estimated_investment', 100);
            $table->string('land_required', 100);
            $table->text('why_rwanda');
            $table->string('business_plan_path')->nullable();
            $table->string('business_plan_name')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};