<?php

if (!function_exists('dataTableOptions')) {
    /**
     * Data Table Options
     *
     * @param array $options
     * @return array
     */
    function dataTableOptions(array $options = [])
    {
        $default = [
            'pageLength' => 25,
            'order'      => [0, 'DESC']
        ];

        return array_merge($default, $options);
    }
}

if (!function_exists('menu_active')) {

    /**
     * Check if the current route is active
     *
     * @param array|string $routes
     * @param string $output
     * @return string
     */
    function menu_active(array|string $routes, string $output = 'active'): string
    {
        $routes = (array) $routes;
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return $output;
            }
        }
        return '';
    }
}
