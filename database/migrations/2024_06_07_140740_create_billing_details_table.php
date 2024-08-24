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
        Schema::create('billing_details', function (Blueprint $table) {
            $table->id();
            $table->string('name_billing_details');
            $table->string('email_billing_details');
            $table->string('company_billing_details')->nullable();
            $table->string('address_billing_details');
            $table->string('city_billing_details');
            $table->string('post_code_billing_details');
            $table->string('phone_billing_details');
            $table->text('notes_billing_details')->nullable();
            $table->json('categories_billing_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_details');
    }
};
