<?php
use App\Templates;
use App\WebsiteSettings;
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

Route::get('/admin', function () {
    return view('admin.index');
});


Auth::routes();


// rotas com prefixo admin
Route::prefix('admin')->group(function () {
    Route::get('home', 'Backend\HomeController@index')->name('home');
    Route::get('banners', 'Backend\BannersController@index')->name('banners');
    Route::get('settings', 'Backend\SettingsController@index')->name('settings');
    Route::get('templates', 'Backend\TemplateController@index')->name('templates');
    Route::get('products', 'Backend\ProductsController@index')->name('products');
    Route::get('blog', 'Backend\BlogController@index')->name('blog');
    Route::get('discounts', 'Backend\DiscountsController@index')->name('discounts');
    Route::get('costumers', 'Backend\CostumersController@index')->name('costumers');
    Route::get('shipping', 'Backend\ShippingController@index')->name('shipping');
    Route::get('orders', 'Backend\OrdersController@index')->name('orders');
    Route::get('notifications', 'Backend\NotificationsController@index')->name('notifications');
    
    // rota com prefixo settings
    Route::prefix('settings')->group(function () {
        Route::get('general', 'Backend\SettingsController@generalSettings')->name('general');
        Route::get('account', 'Backend\SettingsController@accountSettings')->name('account');
        Route::get('shipping', 'Backend\SettingsController@shippingSettings')->name('shipping_settings');
        Route::get('notifications', 'Backend\SettingsController@NotificationsSettings')->name('notifications_settings');


        // para atualizar a informacao de definições gerais
        Route::post('general', 'Backend\SettingsController@updateWebsite')->name('settings_general_edit');
        // para atualizar a informação do utilizador do BO;
        Route::post('account', 'Backend\SettingsController@updateAccountSettings')->name('settings_account_edit');
    });

    // rota com prefixo banners
    Route::prefix('banners')->group(function () {
        Route::get('new', 'Backend\BannersController@newBanner')->name('banner_new');
        Route::get('edit/{id}', 'Backend\BannersController@editBanner')->name('banner_edit');

        // para criar novo banner
        Route::post('new', 'Backend\BannersController@insertNewBanner')->name('banner_insert');
        // para editar o banner
        Route::post('edit/{id}', 'Backend\BannersController@updateBanner')->name('banner_update');
        // para eliminar o banner
        Route::post('del/{id}', 'Backend\BannersController@deleteBanner')->name('banner_delete');
    });

    // rota com prefixo templates
    Route::prefix('templates')->group(function () {
        Route::get('new', 'Backend\TemplateController@newTemplate')->name('template_new');
        Route::get('edit/{id}', 'Backend\TemplateController@editTemplate')->name('template_edit');
        
        // para criar novo template
        Route::post('new', 'Backend\TemplateController@insertNewTemplate')->name('template_insert');
        // para editar o template
        Route::post('edit/{id}', 'Backend\TemplateController@updateTemplate')->name('template_update');
        // para eliminar o template
        Route::post('del/{id}', 'Backend\TemplateController@deleteTemplate')->name('template_delete');
        
    });

    // rota com prefixo products
    Route::prefix('products')->group(function () {
        Route::get('new', 'Backend\ProductsController@newProduct')->name('product_new');
        Route::get('edit/{id}', 'Backend\ProductsController@editProduct')->name('product_edit');

        // para criar novo product
        Route::post('new', 'Backend\ProductsController@insertNewProduct')->name('product_insert');
        // para editar o product
        Route::post('edit/{id}', 'Backend\ProductsController@updateProduct')->name('product_update');
        // para eliminar o product
        Route::post('del/{id}', 'Backend\ProductsController@deleteProduct')->name('product_delete');
        
    });

    // rota com prefixo settings/notifications
    Route::prefix('settings/notifications')->group(function () {
        Route::get('new', 'Backend\SettingsController@newNotification')->name('notification_new');
        Route::get('edit/{id}', 'Backend\SettingsController@editNotification')->name('notification_edit');

        // para criar um template de notificação
        Route::post('new', 'Backend\SettingsController@createNotification')->name('notification_create');
        // para editar um template de notificação
        Route::post('edit/{id}', 'Backend\SettingsController@updateNotification')->name('notification_update');
        
    });

    Route::prefix('notifications')->group(function () {
        Route::get('new', 'Backend\NotificationsController@newNotification')->name('notification_send');
    });

    

    // rota com prefixo blog
    Route::prefix('blog')->group(function () {
        Route::get('new', 'Backend\BlogController@newBlog')->name('blog_new');
        Route::get('edit/{id}', 'Backend\BlogController@editBlog')->name('blog_edit');

        
        // para criar novo post
        Route::post('new', 'Backend\BlogController@insertNewBlog')->name('blog_insert');
        // para editar o post
        Route::post('edit/{id}', 'Backend\BlogController@updateBlog')->name('blog_update');
        // para eliminar o post
        Route::post('del/{id}', 'Backend\BlogController@deleteBlog')->name('blog_delete');
    });

    // rota com prefixo costumers
    Route::prefix('costumers')->group(function () {
        Route::get('new', 'Backend\CostumersController@newCostumer')->name('costumer_new');
        Route::get('edit', 'Backend\CostumersController@editCostumer')->name('costumer_edit');
    });

    // rota com prefixo orders
    Route::prefix('orders')->group(function () {
        Route::get('new', 'Backend\OrdersController@newOrder')->name('order_new');
        Route::get('edit', 'Backend\OrdersController@editOrder')->name('order_edit');
    });

    // rota com prefixo discounts
    Route::prefix('discounts')->group(function () {
        Route::get('new', 'Backend\DiscountsController@newDiscount')->name('discount_new');
        Route::get('edit', 'Backend\DiscountsController@editDiscount')->name('discount_edit');
    });

    

    // rota com prefixo shipping
    Route::prefix('shipping')->group(function () {
        Route::get('new', 'Backend\ShippingController@newShipping')->name('shipping_new');
        Route::get('edit', 'Backend\ShippingController@editShipping')->name('shipping_edit');
    });

    Route::prefix('ajax')->group(function () {
        Route::post('upload_images', 'Backend\AjaxController@UploadImages')->name('upload_images');
    });

});

Route::get('/', 'Frontend\HomeController@index');

// VIEW COMPOSERS

// templates
View::composer(['*'], function($view){
    $urls = Templates::get()->where("status",'on');
    $view->with("urls",$urls);
});

// settings
View::composer(['*'], function($view){
    $settings = WebsiteSettings::get();
    $view->with("settings",$settings);
});