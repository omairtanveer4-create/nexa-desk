<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UiKitController extends Controller
{
    /**
     * Component categories shown in the catalog and its sidebar groups.
     */
    public const CATEGORIES = [
        'ui' => 'UI Elements',
        'overlays' => 'Overlays',
        'data' => 'Data & Charts',
        'forms' => 'Forms',
    ];

    /**
     * Every Tablar/Tabler component shipped with a live demo page.
     *
     * Each entry links to resources/views/ui-kit/components/{slug}.blade.php,
     * which is rendered as a live preview AND as copy-paste source code.
     */
    public const COMPONENTS = [
        ['slug' => 'alerts', 'title' => 'Alerts', 'category' => 'ui', 'icon' => 'ti ti-alert-circle', 'description' => 'Contextual feedback messages for user actions.'],
        ['slug' => 'badges', 'title' => 'Badges & Pills', 'category' => 'ui', 'icon' => 'ti ti-badge', 'description' => 'Small count and labeling badges in many styles.'],
        ['slug' => 'buttons', 'title' => 'Buttons', 'category' => 'ui', 'icon' => 'ti ti-click', 'description' => 'Button colors, outline styles, sizes and groups.'],
        ['slug' => 'cards', 'title' => 'Cards', 'category' => 'ui', 'icon' => 'ti ti-id', 'description' => 'Flexible content containers with headers and footers.'],
        ['slug' => 'avatars', 'title' => 'Avatars', 'category' => 'ui', 'icon' => 'ti ti-user-circle', 'description' => 'User avatars in many sizes, colors and groupings.'],
        ['slug' => 'breadcrumbs', 'title' => 'Breadcrumbs', 'category' => 'ui', 'icon' => 'ti ti-chevron-right', 'description' => 'Hierarchical navigation indicators.'],
        ['slug' => 'dropdowns', 'title' => 'Dropdowns', 'category' => 'ui', 'icon' => 'ti ti-chevron-down', 'description' => 'Toggleable menus with actions and dividers.'],
        ['slug' => 'list-group', 'title' => 'List Group', 'category' => 'ui', 'icon' => 'ti ti-list', 'description' => 'Flexbox list group items and linked lists.'],
        ['slug' => 'progress', 'title' => 'Progress', 'category' => 'ui', 'icon' => 'ti ti-progress', 'description' => 'Progress bars with labels, colors and stripes.'],
        ['slug' => 'spinners', 'title' => 'Spinners', 'category' => 'ui', 'icon' => 'ti ti-loader', 'description' => 'Loading indicators in several sizes and colors.'],
        ['slug' => 'tabs', 'title' => 'Tabs', 'category' => 'ui', 'icon' => 'ti ti-layout-navbar', 'description' => 'Tabbed navigation with content panes.'],
        ['slug' => 'accordion', 'title' => 'Accordion', 'category' => 'ui', 'icon' => 'ti ti-arrows-minimize', 'description' => 'Collapsible content panels.'],
        ['slug' => 'pagination', 'title' => 'Pagination', 'category' => 'ui', 'icon' => 'ti ti-page-break', 'description' => 'Pagination links for long lists and tables.'],

        ['slug' => 'modals', 'title' => 'Modals', 'category' => 'overlays', 'icon' => 'ti ti-app-window', 'description' => 'Dialogs and confirmation windows.'],
        ['slug' => 'offcanvas', 'title' => 'Offcanvas', 'category' => 'overlays', 'icon' => 'ti ti-layout-sidebar-right', 'description' => 'Hidden side panels that slide into view.'],
        ['slug' => 'toasts', 'title' => 'Toasts', 'category' => 'overlays', 'icon' => 'ti ti-bell', 'description' => 'Lightweight notifications pinned to a corner.'],
        ['slug' => 'tooltips-popovers', 'title' => 'Tooltips & Popovers', 'category' => 'overlays', 'icon' => 'ti ti-message-circle', 'description' => 'Hover/focus bubbles with extra content.'],

        ['slug' => 'tables', 'title' => 'Tables', 'category' => 'data', 'icon' => 'ti ti-table', 'description' => 'Data tables with stripes, hover and states.'],
        ['slug' => 'stat-tiles', 'title' => 'Statistic Tiles', 'category' => 'data', 'icon' => 'ti ti-chart-bar', 'description' => 'KPI cards with animated counters.'],
        ['slug' => 'timeline', 'title' => 'Timeline', 'category' => 'data', 'icon' => 'ti ti-timeline', 'description' => 'Vertical activity timelines.'],
        ['slug' => 'charts', 'title' => 'Charts (ApexCharts)', 'category' => 'data', 'icon' => 'ti ti-chart-dots', 'description' => 'Area, bar and donut charts.'],
        ['slug' => 'maps', 'title' => 'Vector Maps', 'category' => 'data', 'icon' => 'ti ti-map-2', 'description' => 'Interactive world map (jsVectorMap).'],
        ['slug' => 'calendar', 'title' => 'Calendar', 'category' => 'data', 'icon' => 'ti ti-calendar', 'description' => 'Month view calendar with events.'],

        ['slug' => 'inputs', 'title' => 'Text Inputs', 'category' => 'forms', 'icon' => 'ti ti-form-enter', 'description' => 'Text, password, textarea and validation states.'],
        ['slug' => 'selects', 'title' => 'Selects', 'category' => 'forms', 'icon' => 'ti ti-chevron-drop', 'description' => 'Native select elements, sizes and multiples.'],
        ['slug' => 'fancy-select', 'title' => 'Fancy Select (Tom Select)', 'category' => 'forms', 'icon' => 'ti ti-arrow-badge-up', 'description' => 'Searchable multi-selects powered by Tom Select.'],
        ['slug' => 'checks-radios', 'title' => 'Checks, Radios & Switches', 'category' => 'forms', 'icon' => 'ti ti-checkbox', 'description' => 'Checkboxes, radios and toggle switches.'],
        ['slug' => 'input-groups', 'title' => 'Input Groups', 'category' => 'forms', 'icon' => 'ti ti-group', 'description' => 'Inputs with attached text, icons and buttons.'],
        ['slug' => 'date-picker', 'title' => 'Date Picker (Litepicker)', 'category' => 'forms', 'icon' => 'ti ti-calendar-time', 'description' => 'Single and range date pickers.'],
        ['slug' => 'range-slider', 'title' => 'Range Slider (noUiSlider)', 'category' => 'forms', 'icon' => 'ti ti-adjustments', 'description' => 'Single and double-handle value sliders.'],
        ['slug' => 'color-picker', 'title' => 'Color Picker (Coloris)', 'category' => 'forms', 'icon' => 'ti ti-palette', 'description' => 'Popover color pickers with swatches.'],
        ['slug' => 'file-upload', 'title' => 'File Upload (Dropzone)', 'category' => 'forms', 'icon' => 'ti ti-upload', 'description' => 'Drag & drop file upload zones.'],
        ['slug' => 'star-rating', 'title' => 'Star Rating', 'category' => 'forms', 'icon' => 'ti ti-star', 'description' => 'Clickable star rating widgets.'],
        ['slug' => 'signature', 'title' => 'Signature Pad', 'category' => 'forms', 'icon' => 'ti ti-writing', 'description' => 'Draw signatures on a canvas.'],
        ['slug' => 'input-mask', 'title' => 'Input Mask (iMAsk)', 'category' => 'forms', 'icon' => 'ti ti-masked-input', 'description' => 'Phone, date and currency input masks.'],
    ];

    /**
     * Catalog overview: every component grouped by category.
     */
    public function index(Request $request): View
    {
        $groups = [];

        foreach (self::CATEGORIES as $key => $label) {
            $groups[$key] = [
                'label' => $label,
                'components' => array_values(array_filter(self::COMPONENTS, fn ($c) => $c['category'] === $key)),
            ];
        }

        return view('ui-kit.index', [
            'groups' => $groups,
            'total' => count(self::COMPONENTS),
        ]);
    }

    /**
     * Single component page: live preview + copyable source code.
     */
    public function show(string $component): View
    {
        $entry = $this->findBySlug($component);

        abort_unless($entry, 404);

        $view = "ui-kit.components.{$entry['slug']}";
        $source = file_get_contents(view($view)->getPath());

        $slugs = array_column(self::COMPONENTS, 'slug');
        $position = array_search($entry['slug'], $slugs, true);

        return view('ui-kit.show', [
            'component' => $entry,
            'source' => $source,
            'prev' => $this->findBySlug($slugs[$position - 1] ?? null),
            'next' => $this->findBySlug($slugs[$position + 1] ?? null),
        ]);
    }

    /**
     * Look up a component definition by its slug.
     */
    private function findBySlug(?string $slug): ?array
    {
        if ($slug === null) {
            return null;
        }

        foreach (self::COMPONENTS as $entry) {
            if ($entry['slug'] === $slug) {
                return $entry;
            }
        }

        return null;
    }
}