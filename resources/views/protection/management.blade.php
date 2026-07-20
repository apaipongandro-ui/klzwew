<!-- resources/views/protection/management.blade.php -->
@extends('layouts.app')

@section('title', 'Protection Management')

@section('styles')
<link rel="stylesheet" href="{{ mix('css/protection-management.css') }}">
@endsection

@section('content')
<div class="canva-card">
    <h2 class="mb-4"><i class="fa fa-lock" style="color: var(--canva-primary);"></i> Protection Management</h2>
    
    @if(session('success'))
        <div class="alert" style="background: #00C4CC; color: #000; padding: 10px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <form id="protection-form" action="{{ route('admin.protection.save') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="canva-toggle">
                <input type="checkbox" name="ddos_protection" {{ (isset($settings->ddos_protection) && $settings->ddos_protection) ? 'checked' : '' }}>
                <span class="canva-slider"></span>
                <span class="text-white">Enable Layer 7 Anti-DDoS</span>
            </label>
        </div>

        <div class="mb-4">
            <label class="text-white d-block mb-2">Max Requests / Minute (Rate Limit)</label>
            <input type="number" name="rate_limit" class="canva-input" value="{{ $settings->rate_limit_req_per_min ?? 120 }}">
        </div>

        <div class="mb-4">
            <label class="canva-toggle">
                <input type="checkbox" name="waf_enabled" {{ (isset($settings->waf_enabled) && $settings->waf_enabled) ? 'checked' : '' }}>
                <span class="canva-slider"></span>
                <span class="text-white">Enable Web Application Firewall (WAF)</span>
            </label>
        </div>

        <div class="mb-4">
            <label class="text-white d-block mb-2">Whitelisted IPs (One per line)</label>
            <textarea name="whitelisted_ips" class="canva-input" rows="4">{{ $settings->whitelisted_ips ?? '' }}</textarea>
        </div>

        <button type="submit" class="canva-btn-primary w-100">Save Protection Config</button>
    </form>
</div>
@endsection
