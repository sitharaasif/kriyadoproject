<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name');
            $table->string('mobile_number');
            $table->string('email_address');
            $table->string('location');
            $table->string('country');
            $table->string('website')->nullable();
            $table->string('shop_type');
            $table->string('state');
            $table->string('district');
            $table->string('locality');
            $table->string('town');
            $table->string('pincode');
            $table->string('owner_name')->nullable();
            $table->string('manager_name');
            $table->string('manager_contact');
            $table->string('land_phone')->nullable();
            $table->string('registered_address');
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('google_map_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('working_hours')->nullable();
            $table->string('home_delivery');
            $table->string('store_photo')->nullable();
            $table->foreignId('total_bill_discount')->nullable()->constrained('discountaddition');
            $table->string('discount_type')->nullable();
            $table->decimal('discount_value', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
