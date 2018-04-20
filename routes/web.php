<?php

/*
|--------------------------------------------------------------------------
| Web
|--------------------------------------------------------------------------
|
*/

//Route::get('/', ['as' => 'web', 'uses' => 'WebController@home']);
Route::get('/', function(){ return view('web/web'); });
Route::get('director', function(){ return view('web/director'); });
Route::get('wmail', function(){ return redirect('https://accounts.zoho.com/signin?servicename=VirtualOffice&signupurl=https://mail.zoho.com'); });


/*
|--------------------------------------------------------------------------
| Web / Blog y Galería
|--------------------------------------------------------------------------
*/

Route::get('noticias', ['as' => 'web.portfolio', 'uses' => 'WebController@portfolio']);
// Show Article / Catalogue
Route::get('article/{slug}', ['uses' => 'WebController@showWithSlug', 'as'   => 'web.portfolio.article'])->where('slug', '[\w\d\-\_]+');
// Article Searcher
Route::get('categories/{name}', ['uses' => 'WebController@searchCategory', 'as'   => 'web.search.category']);
Route::get('tag/{name}', ['uses' => 'WebController@searchTag', 'as'   => 'web.search.tag']);
Route::post('main_contact_mailsender', 'WebController@mainContactMailSender');

Route::get('galeria', ['as' => 'web.galeria', 'uses' => 'WebController@gallery']);
Route::get('galeria/{slug}', ['uses' => 'WebController@showCatalogimgWithSlug', 'as'   => 'web.catalogoimg.item'])->where('slug', '[\w\d\-\_]+');
Route::get('galeria_categorias/{name}', ['uses' => 'WebController@searchCatalogimgCategory', 'as'   => 'web.search.catalogimgcategory']);
Route::get('galeria_etiqueta/{name}', ['uses' => 'WebController@searchCatalogimgTag', 'as'   => 'web.search.catalogimgtag']);



/*
|--------------------------------------------------------------------------
| VADMIN
|--------------------------------------------------------------------------
*/

Auth::routes();
// AUTH ROUTES
Route::group(['prefix'=> 'vadmin'], function() {
    // Login Routes...
    Route::get('login', ['as' => 'vadmin.login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'vadmin.logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes...
    Route::get('register', ['as' => 'vadmin.register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['uses' => 'Auth\RegisterController@register']);

    // VADMIN Password Reset Routes...
    Route::get('password/reset', ['as' => 'vadmin.password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'vadmin.password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'vadmin.password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['uses' => 'Auth\ResetPasswordController@reset']);
});

// Route::get('/home', 'VadminController@index');
// Route::get('/vadmin', 'VadminController@index');

/*
|--------------------------------------------------------------------------
| Vadmin - Sections
|--------------------------------------------------------------------------
*/

Route::get('sendmail', 'VadminController@sendMail');

// Functions that all users can access
Route::group(['prefix' => 'vadmin'], function(){
    // -- SUPPORT --
    Route::get('docs', function(){ return view('vadmin.support.docs'); });
    Route::get('soporte', function(){ return view('vadmin.support.support'); });
    Route::post('techSupport', ['as' => 'vadmin.soporte', 'uses' => 'VadminController@techSupport']);

    // -- EXPORT --
    Route::get('exportViewPdf/{view}/{params}/{model}/{filename}', ['as' => 'vadmin.exportViewPdf', 'uses' => 'invoiceController@exportViewPdf']);

    Route::get('exportUsersListPdf/{params}', ['as' => 'vadmin.exportUsersListPdf', 'uses' => 'UserController@exportPdf']);
    Route::get('exportUsersListXls/{params}', ['as' => 'vadmin.exportUsersListXls', 'uses' => 'UserController@exportXls']);

    Route::get('exportCatalogListPdf/{params}', ['as' => 'vadmin.exportCatalogListPdf', 'uses' => 'Catalog\ArticlesController@exportPdf']);
    Route::get('exportCatalogListXls/{params}', ['as' => 'vadmin.exportCatalogListXls', 'uses' => 'Catalog\ArticlesController@exportExcel']);
});

// En un futuro debe restringirse estas operaciones a usuarios que no sean admin
Route::group(['prefix' => 'vadmin', 'middleware' => 'admin'], function(){

    //Route::get('/home', 'VadminController@index');
    Route::get('/', 'VadminController@index');
    
    // -- USERS --
    Route::resource('users', 'UserController');
    Route::post('updateAvatar', 'UserController@updateAvatar');	
    Route::post('message_status/{id}', 'VadminController@updateMessageStatus');

    // -- MESSAGES --
    Route::get('/mensajes_recibidos/{status}', 'VadminController@storedContacts');
    Route::post('buscar_mensajes_recibidos', ['as' => 'searchStoredContact', 'uses' => 'VadminController@searchStoredContact']);
    Route::get('mensajes_recibidos/{id}', 'VadminController@showStoredContact');
    Route::post('setMessageAsReaded', 'VadminController@setMessageAsReaded');
    
    // -- PORTFOLIO --
    Route::resource('portfolio', 'Portfolio\ArticlesController');
    Route::resource('categories', 'Portfolio\CategoriesController');
    Route::resource('tags', 'Portfolio\TagsController');
    Route::post('updateStatus/{id}', 'Portfolio\ArticlesController@updateStatus');
    Route::post('deleteArticleImg/{id}', 'Portfolio\ArticlesController@deleteArticleImg');

    // -- CATALOG --
    Route::resource('catalogo', 'Catalog\ArticlesController');
    Route::post('update_catalog_stock/{id}', 'Catalog\ArticlesController@updateStock');
    Route::post('update_catalog_price/{id}', 'Catalog\ArticlesController@updatePrice');
    Route::post('update_catalog_discount/{id}', 'Catalog\ArticlesController@updateDiscount');
    Route::get('panel-de-control', ['as' => 'storeControlPanel', 'uses' => 'VadminController@storeControlPanel']);
    
    Route::resource('cat_categorias', 'Catalog\CategoriesController');
    Route::resource('cat_tags', 'Catalog\TagsController');
    Route::post('cat_article_status/{id}', 'Catalog\ArticlesController@updateStatus');
    // Atribute 1
    Route::resource('cat_atribute1', 'Catalog\CatalogAtribute1Controller');
    Route::post('catalog_make_thumb/{id}', 'Catalog\ArticlesController@makeThumb');
    // Shipping
    Route::resource('shippings', 'Catalog\ShippingsController');
    // Payments Methods
    Route::resource('payments', 'Catalog\PaymentsController');
    
    // -- IMAGE CATALOG--
    Route::resource('catalogoimg', 'Catalogimg\ArticlesController');
    
    Route::resource('catimg_categorias', 'Catalogimg\CategoriesController');
    Route::resource('catimg_tags', 'Catalogimg\TagsController');
    Route::post('catimg_article_status/{id}', 'Catalogimg\ArticlesController@updateStatus');
    
});
    
    
/*
|--------------------------------------------------------------------------
| Vadmin - Destroy
|--------------------------------------------------------------------------
*/

Route::prefix('vadmin')->middleware('admin')->group(function () {
    Route::post('destroy_users', 'UserController@destroy');
    Route::post('destroy_portfolio', 'Portfolio\ArticlesController@destroy');
    Route::post('destroy_categories', 'Portfolio\CategoriesController@destroy');
    Route::post('destroy_tags', 'Portfolio\TagsController@destroy');
    Route::post('destroy_catalogo', 'Catalog\ArticlesController@destroy');
    Route::post('destroy_cat_categorias', 'Catalog\CategoriesController@destroy');
    Route::post('destroy_cat_tags', 'Catalog\TagsController@destroy');
    Route::post('destroy_stored_contacts', 'VadminController@destroyStoredContacts');
    Route::post('destroy_cat_atribute1', 'Catalog\CatalogAtribute1Controller@destroy');
    Route::post('destroy_product_image', 'Catalog\ImagesController@destroy');
    Route::post('destroy_portfolio_image', 'Portfolio\ImagesController@destroy');
    Route::post('destroy_catalogimg_image', 'Catalogimg\ImagesController@destroy');
    Route::post('destroy_shippings', 'Catalog\ShippingsController@destroy');
    Route::post('destroy_payments', 'Catalog\PaymentsController@destroy');
    Route::post('destroy_catalogoimg', 'Catalogimg\ArticlesController@destroy');
    Route::post('destroy_catimg_categorias', 'Catalogimg\CategoriesController@destroy');
    Route::post('destroy_catimg_tags', 'Catalogimg\TagsController@destroy');
});


/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);

