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

// Route::get('/', function () {
// 	return view('welcome');
// });




Route::group(['namespace'=>'Frontend'],function(){
	Route::get('/','FrontendController@getHome');


	Route::get('detail_dienthoai/{id}/{slug}.html', 'FrontendController@getDetailDienThoai');
	Route::post('detail_dienthoai/{id}/{slug}.html', 'FrontendController@postCommentDienThoai');

	Route::get('detail_tablet/{id}/{slug}.html', 'FrontendController@getDetailTablet');
	Route::post('detail_tablet/{id}/{slug}.html', 'FrontendController@postCommentTablet');

	Route::get('detail_phukien/{id}/{slug}.html', 'FrontendController@getDetailPhuKien');
	Route::post('detail_phukien/{id}/{slug}.html', 'FrontendController@postCommentPhuKien');

	Route::get('detail_dongho/{id}/{slug}.html', 'FrontendController@getDetailDongHo');
	Route::post('detail_dongho/{id}/{slug}.html', 'FrontendController@postCommentDongHo');

	Route::get('detail_laptop/{id}/{slug}.html', 'FrontendController@getDetailLaptop');
	Route::post('detail_laptop/{id}/{slug}.html', 'FrontendController@postCommentLaptop');

	Route::get('detail_dienmay/{id}/{slug}.html', 'FrontendController@getDetailDienMay');
	Route::post('detail_dienmay/{id}/{slug}.html', 'FrontendController@postCommentDienMay');

//
	Route::get('dienthoai', 'FrontendController@getDienThoai');
	Route::get('category_dienthoai/{id}/{slug}.html', 'FrontendController@getCategoryDienThoai');
//
	Route::get('tablet', 'FrontendController@getTablet');
	Route::get('category_tablet/{id}/{slug}.html', 'FrontendController@getCategoryTablet');
//
	Route::get('phukien', 'FrontendController@getPhuKien');
	Route::get('category_phukien/{id}/{slug}.html', 'FrontendController@getCategoryPhuKien');
//
	Route::get('dongho', 'FrontendController@getDongHo');
	Route::get('category_dongho/{id}/{slug}.html', 'FrontendController@getCategoryDongHo');
//
	Route::get('laptop', 'FrontendController@getLaptop');
	Route::get('category_laptop/{id}/{slug}.html', 'FrontendController@getCategoryLaptop');
//
	Route::get('dienmay', 'FrontendController@getDienMay');
	Route::get('category_dienmay/{id}/{slug}.html', 'FrontendController@getCategoryDienMay');

////////////////////

	Route::get('search', 'FrontendController@getSearch');
//Route::post('show','CartController@getComplete');
////////////
	Route::group(['prefix'=>'cart'],function(){
		Route::get('add_dienthoai/{id}', 'CartController@getAddCartDienThoai');
		Route::get('add_tablet/{id}', 'CartController@getAddCartTablet');
		Route::get('add_phukien/{id}', 'CartController@getAddCartPhuKien');
		Route::get('add_dongho/{id}', 'CartController@getAddCartDongHo');
		Route::get('add_laptop/{id}', 'CartController@getAddCartLaptop');
		Route::get('add_dienmay/{id}', 'CartController@getAddCartDienMay');

		Route::get('show_dienthoai','CartController@getShowCartDienThoai');
		Route::get('show_tablet','CartController@getShowCartTablet');
		Route::get('show_laptop','CartController@getShowCartLaptop');
		Route::get('show_phukien','CartController@getShowCartPhuKien');
		Route::get('show_dongho','CartController@getShowCartDongHo');
		Route::get('show_dienmay','CartController@getShowCartDienMay');
		
		Route::get('update','CartController@getUpdateCart');
		Route::get('show','CartController@getShowCart');
		Route::get('delete/{id}','CartController@getDeleteCart');

	});



	Route::group(['prefix'=>'slide'],function(){
		Route::get('list','SlideController@getListSlide');
		Route::get('add','SlideController@getAddSlide');
		Route::post('add','SlideController@postAddSlide');
		Route::get('edit/{id}','SlideController@getEditSlide');
		Route::post('edit/{id}','SlideController@postEditSlide');
		Route::get('delete/{id}','SlideController@getDelete');
	});




});



// Route::get('add', function () {
// 	return view('backend.slide.addSlide');
// });
// Route::get('edit', function () {
// 	return view('backend.slide.editSlide');
// });
// Route::get('list', function () {
// 	return view('backend.slide.listSlide');
// });






Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');		
	});

	Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'],function(){
		Route::get('home','HomeController@getHome');


		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CategoryController@getCateLink');
			
			Route::group(['prefix'=>'dienthoai'],function(){
				Route::get('/','CategoryController@getCate');
				Route::post('/','CategoryController@postCate');		
				Route::get('edit/{id}','CategoryController@getEditCate');
				Route::post('edit/{id}','CategoryController@postEditCate');		
				Route::get('delete/{id}','CategoryController@getDeleteCate');
			});

			Route::group(['prefix'=>'tablet'],function(){
				Route::get('/','CategoryController@getCateTablet');
				Route::post('/','CategoryController@postCateTablet');		
				Route::get('edit/{id}','CategoryController@getEditCateTablet');
				Route::post('edit/{id}','CategoryController@postEditCateTablet');		
				Route::get('delete/{id}','CategoryController@getDeleteCateTablet');
			});

			Route::group(['prefix'=>'laptop'],function(){
				Route::get('/','CategoryController@getCateLaptop');
				Route::post('/','CategoryController@postCateLaptop');		
				Route::get('edit/{id}','CategoryController@getEditCateLaptop');
				Route::post('edit/{id}','CategoryController@postEditCateLaptop');		
				Route::get('delete/{id}','CategoryController@getDeleteCateLaptop');
			});

			Route::group(['prefix'=>'phukien'],function(){
				Route::get('/','CategoryController@getCatePhukien');
				Route::post('/','CategoryController@postCatePhukien');		
				Route::get('edit/{id}','CategoryController@getEditCatePhukien');
				Route::post('edit/{id}','CategoryController@postEditCatePhukien');		
				Route::get('delete/{id}','CategoryController@getDeleteCatePhukien');
			});

			Route::group(['prefix'=>'dongho'],function(){
				Route::get('/','CategoryController@getCateDongHo');
				Route::post('/','CategoryController@postCateDongHo');		
				Route::get('edit/{id}','CategoryController@getEditCateDongHo');
				Route::post('edit/{id}','CategoryController@postEditCateDongHo');		
				Route::get('delete/{id}','CategoryController@getDeleteCateDongHo');
			});

			Route::group(['prefix'=>'dienmay'],function(){
				Route::get('/','CategoryController@getCateDienMay');
				Route::post('/','CategoryController@postCateDienMay');		
				Route::get('edit/{id}','CategoryController@getEditCateDienMay');
				Route::post('edit/{id}','CategoryController@postEditCateDienMay');		
				Route::get('delete/{id}','CategoryController@getDeleteCateDienMay');
			});

		});


		Route::group(['prefix'=>'product'],function(){
			Route::get('/','ProductController@getProductLink');
			
			Route::group(['prefix'=>'dienthoai'],function(){
				Route::get('/','ProductController@getProduct');
				Route::get('add','ProductController@getAddProduct');
				Route::post('add','ProductController@postAddProduct');
				Route::get('edit/{id}','ProductController@getEditProduct');
				Route::post('edit/{id}','ProductController@postEditProduct');		
				Route::get('delete/{id}','ProductController@getDeleteProduct');
			});


			Route::group(['prefix'=>'tablet'],function(){
				Route::get('/','ProductController@getProductTablet');
				Route::get('add','ProductController@getAddProductTablet');
				Route::post('add','ProductController@postAddProductTablet');
				Route::get('edit/{id}','ProductController@getEditProductTablet');
				Route::post('edit/{id}','ProductController@postEditProductTablet');		
				Route::get('delete/{id}','ProductController@getDeleteProductTablet');
			});

			Route::group(['prefix'=>'laptop'],function(){
				Route::get('/','ProductController@getProductLaptop');
				Route::get('add','ProductController@getAddProductLaptop');
				Route::post('add','ProductController@postAddProductLaptop');
				Route::get('edit/{id}','ProductController@getEditProductLaptop');
				Route::post('edit/{id}','ProductController@postEditProductLaptop');		
				Route::get('delete/{id}','ProductController@getDeleteProductLaptop');
			});

			Route::group(['prefix'=>'phukien'],function(){
				Route::get('/','ProductController@getProductPhuKien');
				Route::get('add','ProductController@getAddProductPhuKien');
				Route::post('add','ProductController@postAddProductPhuKien');
				Route::get('edit/{id}','ProductController@getEditProductPhuKien');
				Route::post('edit/{id}','ProductController@postEditProductPhuKien');		
				Route::get('delete/{id}','ProductController@getDeleteProductPhuKien');
			});

			Route::group(['prefix'=>'dongho'],function(){
				Route::get('/','ProductController@getProductDongHo');
				Route::get('add','ProductController@getAddProductDongHo');
				Route::post('add','ProductController@postAddProductDongHo');
				Route::get('edit/{id}','ProductController@getEditProductDongHo');
				Route::post('edit/{id}','ProductController@postEditProductDongHo');		
				Route::get('delete/{id}','ProductController@getDeleteProductDongHo');
			});

			Route::group(['prefix'=>'dienmay'],function(){
				Route::get('/','ProductController@getProductDienMay');
				Route::get('add','ProductController@getAddProductDienMay');
				Route::post('add','ProductController@postAddProductDienMay');
				Route::get('edit/{id}','ProductController@getEditProductDienMay');
				Route::post('edit/{id}','ProductController@postEditProductDienMay');		
				Route::get('delete/{id}','ProductController@getDeleteProductDienMay');
			});

		});


	});

});





Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
