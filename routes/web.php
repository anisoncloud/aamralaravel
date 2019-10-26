<?php

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

//Banner Routes
Route::get('/banner/all',[
    'uses'=>'BannerController@index',
    'as'=>'/all-banners'
]);

Route::get('/banner/add',[
    'uses'=>'BannerController@create',
    'as'=>'/add-banner'
]);
Route::post('/banner/save', [
    'uses'  =>'BannerController@saveBanner',
    'as'    =>'save-banner'
]);
Route::get('/banner/unpublished/{id}', [
    'uses'  =>  'BannerController@unpublishedBanner',
    'as'    =>  'unpublished-banner'
]);
Route::get('/banner/published/{id}', [
    'uses'  =>  'BannerController@publishedBanner',
    'as'    =>  'published-banner'
]);
Route::get('/banner/edit/{id}', [
    'uses'  =>  'BannerController@editBanner',
    'as'    =>  'edit-banner'
]);

Route::post('/banner/update/', [
    'uses'  =>  'BannerController@updateBanner',
    'as'    =>  'update-banner'
]);
Route::get('/banner/delete/{id}', [
    'uses'  =>  'BannerController@deleteBanner',
    'as'    =>  'delete-banner'
]);


//Page Routes
Route::get('/page/all',[
    'uses'=>'PageController@index',
    'as'=>'/all-pages'
]);

Route::get('/page/add',[
    'uses'=>'PageController@create',
    'as'=>'/add-page'
]);
Route::post('/page/save', [
    'uses'  =>'PageController@savePage',
    'as'    =>'save-page'
]);
Route::get('/page/unpublished/{id}', [
    'uses'  =>  'PageController@unpublishedPage',
    'as'    =>  'unpublished-page'
]);
Route::get('/page/published/{id}', [
    'uses'  =>  'PostController@publishedPage',
    'as'    =>  'published-page'
]);
Route::get('/page/edit/{id}', [
    'uses'  =>  'PageController@editPage',
    'as'    =>  'edit-page'
]);

Route::post('/page/update/', [
    'uses'  =>  'PageController@updatePage',
    'as'    =>  'update-page'
]);
Route::get('/page/delete/{id}', [
    'uses'  =>  'PageController@deletePage',
    'as'    =>  'delete-page'
]);



//Services Routes
Route::get('/service/all',[
    'uses'=>'ServiceController@index',
    'as'=>'/all-services'
]);

Route::get('/service/add',[
    'uses'=>'ServiceController@create',
    'as'=>'/add-service'
]);
Route::post('/service/save', [
    'uses'  =>'ServiceController@saveService',
    'as'    =>'save-service'
]);
Route::get('/service/unpublished/{id}', [
    'uses'  =>  'ServiceController@unpubliShedservice',
    'as'    =>  'unpublished-service'
]);
Route::get('/service/published/{id}', [
    'uses'  =>  'ServiceController@publishedService',
    'as'    =>  'published-service'
]);
Route::get('/service/edit/{id}', [
    'uses'  =>  'ServiceController@editService',
    'as'    =>  'edit-service'
]);

Route::post('/service/update/', [
    'uses'  =>  'ServiceController@updateService',
    'as'    =>  'update-service'
]);
Route::get('/Service/delete/{id}', [
    'uses'  =>  'ServiceController@deleteService',
    'as'    =>  'delete-service'
]);




// post management
Route::get('/post/all',[
    'uses'=>'PostController@index',
    'as'=>'/all-post'
]);

Route::get('/post/add',[
    'uses'=>'PostController@create',
    'as'=>'/add-post'
]);

Route::post('/post/save', [
    'uses'  =>'PostController@savePost',
    'as'    =>'save-post'
]);

Route::get('/post/unpublished/{id}', [
    'uses'  =>  'PostController@unpublishedPost',
    'as'    =>  'unpublished-post'
]);
Route::get('/post/published/{id}', [
    'uses'  =>  'PostController@publishedPost',
    'as'    =>  'published-post'
]);
Route::get('/post/edit/{id}', [
    'uses'  =>  'PostController@editPost',
    'as'    =>  'edit-post'
]);

Route::post('/post/update/', [
    'uses'  =>  'PostController@updatePost',
    'as'    =>  'update-post'
]);
Route::get('/post/delete/{id}', [
    'uses'  =>  'PostController@deletePost',
    'as'    =>  'delete-post'
]);
// End Post management

/// Home page route
Route::get('/',[
    'uses'=>'DefaultController@index',
    'as'=>'/'
]);

// End home page route

Route::get('/category-product/{id}',[
    'uses'  =>  'NewShopController@categoryProduct',
    'as'    =>  'category-product'
]);

Route::get('/product/details',[
    'uses'  =>  'NewShopContorller@productDetails',
    'as'    =>  'product-details'
]);

Route::get('/mail-us',[
    'uses'=>'NewShopController@mailUs',
    'as'=>'/mail-us'
]);

// Login Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// End Dashboard route

Route::get('/category/add', [
    'uses'  =>  'CategoryController@index',
    'as'    =>  'add-category'
]);

Route::post('/category/save', [
    'uses'  =>  'CategoryController@saveCategory',
    'as'    =>  'new-category'
]);

Route::get('/category/manager', [
    'uses'  => 'CategoryController@manageCategory',
    'as'    => 'category-manage'
]);


Route::get('/category/unpublished/{id}', [
    'uses'  =>  'CategoryController@unpublishedCategory',
    'as'    =>  'unpublished-category'
]);
Route::get('/category/published/{id}', [
    'uses'  =>  'CategoryController@publishedCategory',
    'as'    =>  'published-category'
]);
Route::get('/category/edit/{id}', [
    'uses'  =>  'CategoryController@editCategory',
    'as'    =>  'edit-category'
]);

Route::post('/category/update/', [
    'uses'  =>  'CategoryController@updateCategory',
    'as'    =>  'update-category'
]);
Route::get('/category/delete/{id}', [
    'uses'  =>  'CategoryController@deleteCategory',
    'as'    =>  'delete-category'
]);

//Brand Management

Route::get('/brand/add',[
    'uses'  =>  'BrandController@newBrand',
    'as'    =>  'add-brand'
]);

Route::post('/brand/save', [
    'uses'  => 'BrandController@saveBrand',
    'as'    => 'new-brand'
]);

Route::get('/brand/manage', [
    'uses'  => 'BrandController@manageBrand',
    'as'    =>  'manage-brand'
]);

Route::get('/brand/unpublished/{id}' ,[
    'uses'  => 'BrandController@brandUnpublished',
    'as'    => 'brand-unpublished'
]);

Route::get('/brand/published/{id}' ,[
    'uses'  => 'BrandController@brandPublished',
    'as'    => 'brand-published'
]);
Route::get('/brand/edit/{id}',[
    'uses'  => 'BrandController@editBrand',
    'as'    => 'edit-brand'
]);
Route::post('/brand/update/', [
    'uses'  => 'BrandController@updateBrand',
    'as'    => 'update-brand'
]);

Route::get('/product/add', [
    'uses'  => 'ProductController@index',
    'as'    =>  'add-product'
]);
Route::get('/product/manage', [
    'uses'  => 'ProductController@manageProduct',
    'as'    => 'product-manage'
]);
Route::post('/product/save', [
    'uses'  =>'ProductController@saveProduct',
    'as'    =>'save-product'
]);
