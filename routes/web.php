<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */



Route::get('/', 'App\Http\Controllers\ChrevadminController@dashboard_1');
Route::get('/index', 'App\Http\Controllers\ChrevadminController@dashboard_1');
Route::get('/coin-details', 'App\Http\Controllers\ChrevadminController@coin_details');
Route::get('/market-capital', 'App\Http\Controllers\ChrevadminController@market_capital');
Route::get('/my-wallet', 'App\Http\Controllers\ChrevadminController@my_wallet');
Route::get('/portfolio', 'App\Http\Controllers\ChrevadminController@portfolio');
Route::get('/transactions', 'App\Http\Controllers\ChrevadminController@transactions');
Route::get('/app-calender', 'App\Http\Controllers\ChrevadminController@app_calender');
Route::get('/app-profile', 'App\Http\Controllers\ChrevadminController@app_profile');
Route::get('/chart-chartist', 'App\Http\Controllers\ChrevadminController@chart_chartist');
Route::get('/chart-chartjs', 'App\Http\Controllers\ChrevadminController@chart_chartjs');
Route::get('/chart-flot', 'App\Http\Controllers\ChrevadminController@chart_flot');
Route::get('/chart-morris', 'App\Http\Controllers\ChrevadminController@chart_morris');
Route::get('/chart-peity', 'App\Http\Controllers\ChrevadminController@chart_peity');
Route::get('/chart-sparkline', 'App\Http\Controllers\ChrevadminController@chart_sparkline');
Route::get('/ecom-checkout', 'App\Http\Controllers\ChrevadminController@ecom_checkout');
Route::get('/ecom-customers', 'App\Http\Controllers\ChrevadminController@ecom_customers');
Route::get('/ecom-invoice', 'App\Http\Controllers\ChrevadminController@ecom_invoice');
Route::get('/ecom-product-detail', 'App\Http\Controllers\ChrevadminController@ecom_product_detail');
Route::get('/ecom-product-grid', 'App\Http\Controllers\ChrevadminController@ecom_product_grid');
Route::get('/ecom-product-list', 'App\Http\Controllers\ChrevadminController@ecom_product_list');
Route::get('/ecom-product-order', 'App\Http\Controllers\ChrevadminController@ecom_product_order');
Route::get('/email-compose', 'App\Http\Controllers\ChrevadminController@email_compose');
Route::get('/email-inbox', 'App\Http\Controllers\ChrevadminController@email_inbox');
Route::get('/email-read', 'App\Http\Controllers\ChrevadminController@email_read');
Route::get('/form-editor-summernote', 'App\Http\Controllers\ChrevadminController@form_editor_summernote');
Route::get('/form-element', 'App\Http\Controllers\ChrevadminController@form_element');
Route::get('/form-pickers', 'App\Http\Controllers\ChrevadminController@form_pickers');
Route::get('/form-validation-jquery', 'App\Http\Controllers\ChrevadminController@form_validation_jquery');
Route::get('/form-wizard', 'App\Http\Controllers\ChrevadminController@form_wizard');
Route::get('/map-jqvmap', 'App\Http\Controllers\ChrevadminController@map_jqvmap');
Route::get('/page-error-400', 'App\Http\Controllers\ChrevadminController@page_error_400');
Route::get('/page-error-403', 'App\Http\Controllers\ChrevadminController@page_error_403');
Route::get('/page-error-404', 'App\Http\Controllers\ChrevadminController@page_error_404');
Route::get('/page-error-500', 'App\Http\Controllers\ChrevadminController@page_error_500');
Route::get('/page-error-503', 'App\Http\Controllers\ChrevadminController@page_error_503');
Route::get('/page-forgot-password', 'App\Http\Controllers\ChrevadminController@page_forgot_password');
Route::get('/page-lock-screen', 'App\Http\Controllers\ChrevadminController@page_lock_screen');
Route::get('/page-login', 'App\Http\Controllers\ChrevadminController@page_login');
Route::get('/page-register', 'App\Http\Controllers\ChrevadminController@page_register');
Route::get('/table-bootstrap-basic', 'App\Http\Controllers\ChrevadminController@table_bootstrap_basic');
Route::get('/table-datatable-basic', 'App\Http\Controllers\ChrevadminController@table_datatable_basic');
Route::get('/uc-nestable', 'App\Http\Controllers\ChrevadminController@uc_nestable');
Route::get('/uc-noui-slider', 'App\Http\Controllers\ChrevadminController@uc_noui_slider');
Route::get('/uc-select2', 'App\Http\Controllers\ChrevadminController@uc_select2');
Route::get('/uc-sweetalert', 'App\Http\Controllers\ChrevadminController@uc_sweetalert');
Route::get('/uc-toastr', 'App\Http\Controllers\ChrevadminController@uc_toastr');
Route::get('/ui-accordion', 'App\Http\Controllers\ChrevadminController@ui_accordion');
Route::get('/ui-alert', 'App\Http\Controllers\ChrevadminController@ui_alert');
Route::get('/ui-badge', 'App\Http\Controllers\ChrevadminController@ui_badge');
Route::get('/ui-button', 'App\Http\Controllers\ChrevadminController@ui_button');
Route::get('/ui-button-group', 'App\Http\Controllers\ChrevadminController@ui_button_group');
Route::get('/ui-card', 'App\Http\Controllers\ChrevadminController@ui_card');
Route::get('/ui-carousel', 'App\Http\Controllers\ChrevadminController@ui_carousel');
Route::get('/ui-dropdown', 'App\Http\Controllers\ChrevadminController@ui_dropdown');
Route::get('/ui-grid', 'App\Http\Controllers\ChrevadminController@ui_grid');
Route::get('/ui-list-group', 'App\Http\Controllers\ChrevadminController@ui_list_group');
Route::get('/ui-media-object', 'App\Http\Controllers\ChrevadminController@ui_media_object');
Route::get('/ui-modal', 'App\Http\Controllers\ChrevadminController@ui_modal');
Route::get('/ui-pagination', 'App\Http\Controllers\ChrevadminController@ui_pagination');
Route::get('/ui-popover', 'App\Http\Controllers\ChrevadminController@ui_popover');
Route::get('/ui-progressbar', 'App\Http\Controllers\ChrevadminController@ui_progressbar');
Route::get('/ui-tab', 'App\Http\Controllers\ChrevadminController@ui_tab');
Route::get('/ui-typography', 'App\Http\Controllers\ChrevadminController@ui_typography');
Route::get('/widget-basic', 'App\Http\Controllers\ChrevadminController@widget_basic');