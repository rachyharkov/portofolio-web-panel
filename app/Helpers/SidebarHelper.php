<?php

namespace App\Helpers;

class SidebarHelper
{
    /**
     * Check the sidebar menu with the current Uri
     */
    public static function isActiveMenu(string|array $route): string
    {
        $activeClass = ' active';

        if (is_string($route)) {
            if (request()->is(substr($route . '*', 1))) {
                return $activeClass;
            }

            if (request()->is(str($route)->slug() . '*')) {
                return $activeClass;
            }

            if (request()->segment(2) == str($route)->before('/')) {
                return $activeClass;
            }

            if (request()->segment(3) == str($route)->after('/')) {
                return $activeClass;
            }

            if(str_contains(request()->url(), $route)) {
                return $activeClass;
            }
        }

        if (is_array($route)) {
            foreach ($route as $value) {
                $actualRoute = str($value)->remove(' view')->plural();

                if (request()->is(substr($actualRoute . '*', 1))) {
                    return $activeClass;
                }

                if (request()->is(str($actualRoute)->slug() . '*')) {
                    return $activeClass;
                }

                if (request()->segment(2) == $actualRoute) {
                    return $activeClass;
                }

                if (request()->segment(3) == $actualRoute) {
                    return $activeClass;
                }
            }
        }

        return '';
    }
}
