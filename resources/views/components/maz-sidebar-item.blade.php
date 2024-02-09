@props(['icon', 'link', 'name'])

@php
    $uri1 = request()->segment(1);
    $active_submenu = null;
    if ($uri1 == strtolower($name)) {
        $active_submenu = true;
    }
    
    $currentRoutePath = request()->fullUrl();
    $active = $currentRoutePath == $link ? true : false;
    $classes = $active == true ? 'sidebar-item  active' : 'sidebar-item';
@endphp

@if ($slot->isNotEmpty())
    <li class="{{ $classes }} {{ $active_submenu ? 'active' : '' }} has-sub">
        <a href="#" class='sidebar-link'>
            <i class="{{ $icon }}"></i>
            <span>{{ __($name) }}</span>
        </a>
        <ul class="submenu {{ $active_submenu ? 'active' : '' }}">
            {{ $slot }}
        </ul>
    </li>
@else
    <li class="{{ $classes }}">
        <a href="{{ $link }}" class='sidebar-link'>
            <i class="{{ $icon }}"></i>
            <span>{{ __($name) }}</span>
        </a>
    </li>
@endif
