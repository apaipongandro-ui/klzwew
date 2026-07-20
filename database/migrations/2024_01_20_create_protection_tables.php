<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('protection_settings', function (Blueprint $table) {
            $table->id();
            $table->boolean('ddos_protection')->default(true);
            $table->integer('rate_limit_req_per_min')->default(120);
            $table->boolean('waf_enabled')->default(true);
            $table->boolean('ip_whitelist_only')->default(false);
            $table->text('whitelisted_ips')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('protection_settings');
    }
};
