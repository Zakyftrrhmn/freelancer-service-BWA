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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            // $table->integer("service_id")->nullable();
            $table->foreignId('service_id')->nullable()->index('fk_order_to_service');
            // $table->integer("freelance_id")->nullable();
            $table->foreignId('freelance_id')->nullable()->index('fk_order_freelance_to_users');
            // $table->integer("buyer_id")->nullable();
            $table->foreignId('buyer_id')->nullable()->index('fk_order_buyer_to_users');
            $table->longText("file")->nullable();
            $table->longText("note")->nullable();
            $table->date("expired_date")->nullable();
            // $table->integer("order_status_id")->nullable();
            $table->foreignId('order_status_id')->nullable()->index('fk_order_to_order_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
