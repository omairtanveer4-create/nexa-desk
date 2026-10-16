import '../sass/tabler.scss';
import './bootstrap';
import './tabler-init';
import ApexCharts from 'apexcharts';

// Expose ApexCharts globally so dashboard blades can render charts
// without bundling a chart script per page.
window.ApexCharts = ApexCharts;

/*
|--------------------------------------------------------------------------
| UI Kit demo libraries
|--------------------------------------------------------------------------
|
| The component catalog (resources/views/ui-kit) demonstrates every Tablar
| component, including the JS-powered form widgets. Each library is exposed
| on window so individual demo pages can initialize them from @push('js').
|
*/

// Date pickers
import 'litepicker/dist/css/litepicker.css';
import Litepicker from 'litepicker';
window.Litepicker = Litepicker;

// Range sliders
import 'nouislider/dist/nouislider.css';
import nouislider from 'nouislider';
window.nouislider = nouislider;

// Color pickers
import '@melloware/coloris/dist/coloris.css';
import Coloris from '@melloware/coloris';
window.Coloris = Coloris;

// Drag & drop file uploads (manual init only, never auto-discover)
import 'dropzone/dist/dropzone.css';
import Dropzone from 'dropzone';
Dropzone.autoDiscover = false;
window.Dropzone = Dropzone;

// Searchable multi-selects
import 'tom-select/dist/css/tom-select.bootstrap5.css';
import TomSelect from 'tom-select';
window.TomSelect = TomSelect;

// Star ratings
import 'star-rating.js/dist/star-rating.css';
import StarRating from 'star-rating.js';
window.StarRating = StarRating;

// Signature drawing canvas
import SignaturePad from 'signature_pad';
window.SignaturePad = SignaturePad;

// Input masks
import IMask from 'imask';
window.IMask = IMask;

// Animated counters for statistic tiles
import { CountUp } from 'countup.js';
window.CountUp = CountUp;

// Vector maps (the world map registers itself on window.jsVectorMap.maps)
import 'jsvectormap/dist/jsvectormap.css';
import jsVectorMap from 'jsvectormap';
window.jsVectorMap = jsVectorMap;
import('jsvectormap/dist/maps/world.js');

// Calendar (FullCalendar v6 unified bundle — all plugins are
// auto-registered globally, so no explicit plugin list is needed)
import { Calendar } from 'fullcalendar';
window.FullCalendar = { Calendar };
