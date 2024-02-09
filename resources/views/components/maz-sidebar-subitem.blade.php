@props(['active', 'icon', 'link', 'name', 'badge'])

@php
    $active = SidebarHelper::isActiveMenu($link);
@endphp

<li class="submenu-item {{ $active }}">
    <a href="{{ $link }}" class="submenu-link">{{ __($name) }} @if (isset($badge))
            <span class="badge bg-primary float-end">{{ $badge }}</span>
        @endif
    </a>
</li>
