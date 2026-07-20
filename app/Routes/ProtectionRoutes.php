<?php
namespace App\Routes;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\ProtectionModels;

Route::middleware(['web', 'auth', 'admin'])->prefix('admin/protection')->group(function () {
    Route::get('/', function () {
        $settings = ProtectionModels::first();
        return view('protection.management', compact('settings'));
    })->name('admin.protection.index');

    Route::post('/save', function (Request $request) {
        ProtectionModels::updateOrCreate(
            ['id' => 1],
            [
                'ddos_protection' => $request->has('ddos_protection'),
                'rate_limit_req_per_min' => $request->input('rate_limit', 120),
                'waf_enabled' => $request->has('waf_enabled'),
                'ip_whitelist_only' => $request->has('ip_whitelist_only'),
                'whitelisted_ips' => $request->input('whitelisted_ips'),
            ]
        );
        return redirect()->back()->with('success', 'Konfigurasi Proteksi Berhasil Disimpan!');
    })->name('admin.protection.save');
});
