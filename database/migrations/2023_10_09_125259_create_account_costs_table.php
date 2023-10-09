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
        Schema::create('account_costs', function (Blueprint $table) {
            $table->id();
            $table->string('cost_date');
            $table->string('cost_name');
            $table->string('amount');
            $table->string('reference');
            $table->string('comment');
            $table->string('inserter_name');
            $table->string('inserter_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_costs');
    }
};
