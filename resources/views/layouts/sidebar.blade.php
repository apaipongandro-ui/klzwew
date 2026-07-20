<!-- resources/views/layouts/sidebar.blade.php -->
<div class="sidebar" style="background: var(--canva-surface); min-height: 100vh; width: 250px; padding: 20px;">
    <ul class="nav flex-column">
        <!-- Settings Menu -->
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="{{ route('admin.settings') }}">
                <i class="fa fa-cog" style="color: #00C4CC;"></i> Settings
            </a>
        </li>

        <!-- Protection Management Menu (Di tengah sesuai request) -->
        <li class="nav-item mb-2">
            <a class="nav-link text-white" href="{{ route('admin.protection.index') }}" style="background: rgba(125, 42, 232, 0.2); border-radius: 8px;">
                <i class="fa fa-shield-alt" style="color: #7D2AE8;"></i> Protection Management
            </a>
        </li>

        <!-- Application API Menu -->
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.api.index') }}">
                <i class="fa fa-gamepad" style="color: #00C4CC;"></i> Application API
            </a>
        </li>
    </ul>
</div>
