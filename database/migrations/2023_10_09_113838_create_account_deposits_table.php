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
        Schema::create('account_deposits', function (Blueprint $table) {
            $table->id();
            $table->string('tran_id');
            $table->string('user_name');
            $table->string('deposit_date');
            $table->integer('amount');
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
        Schema::dropIfExists('account_deposits');
    }
};
