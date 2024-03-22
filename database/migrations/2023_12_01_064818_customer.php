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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobileNo');
            $table->string('telephone');
            $table->string('address');
            $table->string('area');
            $table->string('city');
            $table->string('district');
            $table->string('customerCategory');
            $table->string('customerType');
            $table->string('lastBilling');
            $table->string('balance');
            $table->string('payterm');
            $table->string('callPerson');
            $table->string('callDate');
            $table->string('callPurpose');
            $table->string('callResponse');
            $table->string('oldResponse');
            $table->string('callPurpose2');
            $table->string('action');
            $table->string('nextPlan');
            $table->string('timeToCall');
            $table->string('competitor');
            $table->string('amount');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
