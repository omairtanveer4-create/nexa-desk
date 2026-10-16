<?php

use App\Http\Controllers\UiKitController;
use TakiElias\Tablar\Menu\Filters\ActiveFilter;
use TakiElias\Tablar\Menu\Filters\ClassesFilter;
use TakiElias\Tablar\Menu\Filters\DataFilter;
use TakiElias\Tablar\Menu\Filters\GateFilter;
use TakiElias\Tablar\Menu\Filters\HrefFilter;
use TakiElias\Tablar\Menu\Filters\LangFilter;
use TakiElias\Tablar\Menu\Filters\SearchFilter;

/*
|--------------------------------------------------------------------------
| UI Kit sidebar groups
|--------------------------------------------------------------------------
|
| Generated from UiKitController::COMPONENTS so every registered component
| automatically gets a sidebar link to its demo page.
|
*/
$uiKitGroupIcons = [
    'ui' => 'ti ti-layout-grid',
    'overlays' => 'ti ti-layers-difference',
    'data' => 'ti ti-chart-dots',
    'forms' => 'ti ti-forms',
];

$uiKitMenuGroups = [];
foreach (UiKitController::CATEGORIES as $groupKey => $groupLabel) {
    $uiKitMenuGroups[] = [
        'text' => $groupLabel,
        'icon' => $uiKitGroupIcons[$groupKey] ?? 'ti ti-component',
        'submenu' => array_values(array_map(fn (array $component) => [
            'text' => $component['title'],
            'url' => 'ui-kit/'.$component['slug'],
            'icon' => $component['icon'],
        ], array_filter(UiKitController::COMPONENTS, fn (array $c) => $c['category'] === $groupKey))),
    ];
}

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'Nexa Desk',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Nexa Desk',
    'current_version' => 'v11.11',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Nexa</b> Desk',
    'logo_img_alt' => 'Nexa Desk Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'assets/tablar-logo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
     *
     * Default path is 'resources/views/vendor/tablar' as null. Set your custom path here If you need.
     */

    'views_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout' => 'vertical',
    // boxed, combo, condensed, fluid, fluid-vertical, horizontal, navbar-overlap, navbar-sticky, rtl, vertical, vertical-right, vertical-transparent

    'layout_light_sidebar' => null,
    'layout_light_topbar' => true,
    'layout_enable_top_header' => true,

    /*
    |--------------------------------------------------------------------------
    | Sticky Navbar for Top Nav
    |--------------------------------------------------------------------------
    |
    | Here you can enable/disable the sticky functionality of Top Navigation Bar.
    |
    | For detailed instructions, you can look at the Top Navigation Bar classes here:
    |
    */

    'sticky_top_nav_bar' => false,

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => 'profile',
    'setting_url' => 'settings',

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => true,

    /*
    |--------------------------------------------------------------------------
    | Chrome (notifications, header & footer buttons)
    |--------------------------------------------------------------------------
    |
    | Toggle the notifications dropdown and customise top-bar / footer
    | buttons. Each button is `['name' => ..., 'url' => ..., 'icon' => 'ti ti-*']`.
    | Empty arrays render no buttons.
    |
    */

    'enable_notifications' => true,

    'header_buttons' => [
        ['name' => 'Source code', 'url' => 'https://github.com/takielias/tablar', 'icon' => 'ti ti-brand-github'],
        ['name' => 'Sponsor', 'url' => 'https://www.buymeacoffee.com/takielias', 'icon' => 'ti ti-heart text-pink'],
    ],

    'footer_buttons' => [
        ['name' => 'Source code', 'url' => 'https://github.com/takielias/tablar', 'icon' => 'ti ti-brand-github'],
        ['name' => 'Sponsor', 'url' => 'https://www.buymeacoffee.com/takielias', 'icon' => 'ti ti-heart text-pink'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        [
            'text' => 'Dashboard',
            'icon' => 'ti ti-home',
            'url' => 'home',
        ],
        [
            'text' => 'Profile',
            'icon' => 'ti ti-user',
            'url' => 'profile',
        ],
        [
            'text' => 'Settings',
            'icon' => 'ti ti-settings',
            'url' => 'settings',
        ],
        [
            'text' => 'Component Catalog',
            'icon' => 'ti ti-palette',
            'url' => 'ui-kit',
        ],
        ...$uiKitMenuGroups,
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        GateFilter::class,
        HrefFilter::class,
        SearchFilter::class,
        ActiveFilter::class,
        ClassesFilter::class,
        LangFilter::class,
        DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://livewire.laravel.com
    |
    */

    'livewire' => false,
];
