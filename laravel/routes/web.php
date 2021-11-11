<?php
use App\Http\Middleware\verifyadmin;
use App\Http\Middleware\checkoutauth;
use App\Http\Middleware\vendorauth;

Route::get('/Vendor/downloadslip/{id}','DashboardController@downloadslip');


Route::get('Vendor/order', function () {
    return view('dashboard.order');
});
Route::get('Vendor/zmall-ads', function () {
    return view('dashboard.marketing.zmall-ads');
});
Route::get('Vendor/zmall-ads/search', function () {
    return view('dashboard.marketing.zmall-ads-search');
});
Route::get('Vendor/zmall-ads/discovery', function () {
    return view('dashboard.marketing.zmall-ads-discovery');
});

Route::get('/black-friday-sale', function () {
    return view('BlackFriday');
});

Route::POST('/saveimg','HomeController@saveimg');
Route::POST('/test','LoginController@test');
Route::get('/loading_product','ProductsController@loading_product');
Route::POST('/savetestproduct', 'ProductsController@savetestproduct')->name('savetestproduct');
Route::POST('/jazzdone', 'CartController@jazzdone');
Route::get('shop/profile', function () {
    return view('shop.profile');
});
Route::get('/tampo/{id}', 'HomeController@testproduct')->name('tampo');
Route::get('Vendor/add-on', function () {
    return view('dashboard.marketing.add-on');
});
Route::get('Vendor/add-on/new', function () {
    return view('dashboard.marketing.add-on-new');
});
Route::get('Vendor/top-picks', function () {
    return view('dashboard.marketing.top-picks');
});
Route::get('Vendor/top-picks/new', function () {
    return view('dashboard.marketing.top-picks-new');
});
Route::get('Vendor/bundle-deal', function () {
    return view('dashboard.marketing.bundle-deal');
});
Route::get('Vendor/bundle-deal/new', function () {
    return view('dashboard.marketing.bundle-deal-new');
});

Route::get('Vendor/transaction-overview', function () {
    return view('dashboard.finance.transaction-overview');
});
Route::get('Vendor/view-product', function () {
    return view('dashboard.view-product');
});
// ---------------Tracking---------------------
Route::get('/trackdetail', function () {
    return view('trackingDetails');
});
// -----------------------------------------

Route::get('clear_cache', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('route:cache');
    \Artisan::call('config:cache');
});
Route::get('/forgot-password/{flag}', 'LoginController@forgot_password');
########################### User Dashboard ###################################
Route::group(['middleware' => ['auth']], function () {
Route::prefix('profile')->group( function(){
    Route::get('/', 'ProfileController@contact');
    Route::get('/contact', 'ProfileController@contact');
    Route::get('/vouchers', 'ProfileController@vouchers');
    Route::get('/cashback', 'ProfileController@cashback');
    Route::get('/wishlist', 'DashboardController@wishlist');
    Route::get('/wallet', 'ProfileController@wallet');
    Route::get('/new-address', 'ProfileController@new_address');
    Route::get('/orderSummaries', 'DashboardController@orders');
});
});
#################################################################


########################### Vendor Dashboard ###################################
Route::group(['middleware' => [vendorauth::class]], function () {
Route::prefix('Vendor')->group( function(){
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/Services/LogoDesign', 'DashboardController@LogoDesign');
    Route::get('/Services/ContentWriting', 'DashboardController@ContentWriting');
    Route::get('/Services/SEO', 'DashboardController@SEO');
    Route::get('/Services/PhotoEdit', 'DashboardController@PhotoEdit');
    Route::POST('/storeservice/{id}', 'DashboardController@storeservice');
    Route::get('/new-product', 'ProductsController@new_product');
    Route::get('/approved-products', 'DashboardController@approved_product');
    Route::POST('/savenewproduact', 'ProductsController@store')->name('savenewproduct');
    Route::get('/GetProductDetail', 'DashboardController@GetProductDetail')->name('GetProductDetail');
    Route::get('/analysis', 'DashboardController@analysis');
    Route::get('/services', 'DashboardController@services');
    Route::get('/manage-orders', 'DashboardController@manage_orders');
    Route::get('/processed-orders', 'DashboardController@processed_orders');
    Route::get('/addproduct', 'DashboardController@addproduct');
    Route::get('/manage-products', 'DashboardController@manage_products');
    Route::get('/promotions', 'DashboardController@promotions');
    Route::get('/catalog', 'DashboardController@catalog');
    Route::get('/mystore/{id}', 'DashboardController@mystore');
    Route::get('/myaccount', 'DashboardController@myaccount');
    Route::get('/sellerlogo', 'DashboardController@sellerlogo');
    Route::get('/commision', 'DashboardController@commision');
    Route::get('/delivery', 'DashboardController@delivery');
    Route::get('/invoice', 'DashboardController@invoice');
    Route::get('/bank-account', 'DashboardController@bank_account');
    Route::POST('/bank-account-save', 'DashboardController@bank_account_save');
    Route::get('/delete-bank-detail/{id}', 'DashboardController@delete_bank_detail');
    Route::get('/del-product/{id}','ProductsController@destroy');
    Route::POST('/edit-Seller-Account', 'AccountSettingController@edit_Seller_Account');
    Route::POST('/edit-business-info', 'AccountSettingController@edit_business_info');
    Route::POST('/edit-actual-address', 'AccountSettingController@edit_actual_address');
    Route::POST('/edit-return-address', 'AccountSettingController@edit_return_address');
    Route::POST('/edit-Seller-logo', 'AccountSettingController@edit_seller_logo');
    Route::get('/order_conformation/{id}', 'DashboardController@order_conformation');
    Route::get('/requestPickUp/{id}', 'DashboardController@requestPickUp');
    Route::get('/orders_cancelled', 'DashboardController@cancelled');
    Route::get('/order-review', 'DashboardController@order_review');
    Route::get('/statement', 'DashboardController@statement');
    Route::get('/marketing-center', 'MarketingController@marketing_center');
    Route::get('/vouchers', 'MarketingController@vouchers');
    Route::get('/all-sellers', 'MarketingController@all_sellers');
    Route::get('/all-sellers/new', 'MarketingController@all_sellers_new');
    Route::POST('/savenewpromotion', 'MarketingController@savenewpromotion')->name('savenewpromotion');
    Route::get('/vouchers/new', 'MarketingController@vouchers_new');
    Route::POST('/savenewvoucher', 'MarketingController@savenewvoucher')->name('savenewvoucher');
    Route::get('/voucher/deactivate/{id}', 'MarketingController@deactivate');
    Route::get('/promotion/deactivate/{id}', 'MarketingController@promotionDeactivate');
    Route::get('/campaign-details/{id}', 'MarketingController@campaign_details');
    Route::get('/add-campaign/{id}', 'MarketingController@add_campaign');
    Route::get('/add-campaign/new/{id}', 'MarketingController@add_new_campaign');
    Route::POST('/savenewcampaign', 'MarketingController@savenewcampaign')->name('savenewcampaign');
    
    Route::POST('/saveYourSubscription', 'DashboardController@saveYourSubscription');
    Route::get('/free-shipping/new', 'MarketingController@freeShippingNew');
    Route::get('/free-shipping', 'MarketingController@freeShipping');
    Route::POST('/savenewshipping', 'MarketingController@savenewshipping')->name('savenewshipping');
    Route::get('/freeShipping/deactivate/{id}', 'MarketingController@freeShippingdeactivate');
});
});
Route::get('/download-trax-slip/{id}', 'DashboardController@downloadTraxSlip');
Route::get('/edit-product/{id}','ProductsController@edit')->name('edit_product');
Route::post('/update-product','ProductsController@store')->name('updateproduct');
#################################################################
Route::get('feedback', function () {
    return view('feedback');
});
Route::get('/flash-deal', 'HomeController@flashDeal');
Route::get('/black-friday-sale', 'HomeController@blackFriday');
Route::get('/order-view/{id}', 'DashboardController@order_view');
Route::get('/getsubcategory/{id}', 'HomeController@getsubcategory');
Route::get('/getsubtype/{id}', 'HomeController@getsubtype');
Route::get('/store/{id}', 'DashboardController@store')->name('store');
Route::get('/shop/{id}', 'HomeController@shop')->name('shop');
Route::get('/login_register', 'LoginController@login_register')->name('login_register');
Route::get('/storedetails', 'LoginController@storedetails')->name('storedetails');
Route::get('/flayers', 'LoginController@flayers')->name('flayers');
Route::get('/showupdatefinancial', 'DashboardController@showupdatefinancial')->name('showupdatefinancial');
Route::POST('/savestoredetails', 'LoginController@savestoredetails')->name('savestoredetails');
Route::POST('/morestoreinfo', 'LoginController@morestoreinfo')->name('morestoreinfo');
Route::get('/financial_detail_store', 'LoginController@financial_detail_store')->name('financial_detail_store');
Route::POST('/savestorealldetails', 'LoginController@savestorealldetails')->name('savestorealldetails');
Route::POST('/updatestoredetail', 'DashboardController@updatestoredetail')->name('updatestoredetail');
Route::get('/login_register_vendor', 'LoginController@login_register_vendor')->name('login_register_vendor');
Route::POST('/Vendorupdatefinancial', 'DashboardController@updatefinancial')->name('Vendorupdatefinancial');
Route::post('/tracking-order', 'HomeController@trackingorder')->name('tracking-order');
Route::get('/checkout', 'CartController@checkout')->name('checkout')->middleware([checkoutauth::class]);
Route::POST('/applyVoucher', 'CartController@applyvoucher')->middleware([checkoutauth::class]);
Route::get('/GetCityAgainstProvinceEdit/{id}', 'CartController@GetCityAgainstProvinceEdit');
Route::get('/GetProductDetail/{id}', 'DashboardController@GetProductDetail');
Route::get('/GetOrderDetail/{id}', 'DashboardController@GetOrderDetail');
Route::get('/GetOrderImage/{id}', 'DashboardController@GetOrderImage');
Route::get('/getcategory/{id}', 'AdministratorController@getcategory');
Route::get('/gettype/{id}', 'AdministratorController@gettype');
Route::get('/GetProductDetailAttribute/{id}', 'DashboardController@GetProductDetailAttribute');
Route::group(['middleware' => ['auth']], function () {
Route::POST('/paymentsuccessfull', 'CartController@paymentsuccessfull')->name('paymentsuccessfull');
Route::get('/dashboard', 'DashboardController@index')->name('dashboardinfo');
Route::post('/become-vendor', 'DashboardController@become_vendor')->name('become_vendor');
Route::post('/add-billing_address','DashboardController@add_billing_address')->name('addbillingaddress');
Route::post('/add-request','DashboardController@add_request')->name('addrequest');

Route::get('/delete-from-wishlist/{id}','DashboardController@delete_wishlist_product')->name('del_wishlist_product');
Route::get('/storeupdate','DashboardController@storeupdate');
//orderpages
Route::POST('/chkdelivery', 'CartController@chkdelivery')->name('chkdelivery');
Route::get('/chkshipping', 'CartController@chkshipping')->name('chkshipping');
Route::get('/chkpayment', 'CartController@chkpayment')->name('chkpayment');
Route::get('/chkreview', 'CartController@chkreview')->name('chkreview');
Route::get('/verifyOTP', 'CartController@verifyOTP')->name('verifyOTP');
Route::get('/checkoutconfirm', 'CartController@checkoutconfirm')->name('checkoutconfirm');
Route::get('/paymentstatus', 'CartController@paymentstatus')->name('paymentstatus');
// Orders
Route::get('/admin/orders/processed', 'AdministratorController@order_processed')->name('processed');
Route::get('/admin/orders/placed', 'AdministratorController@placed')->name('placed');
Route::get('/admin/orders/pending', 'AdministratorController@pending')->name('pending');
Route::get('/admin/service', 'AdministratorController@service')->name('service');
Route::get('/admin/orders/shipped', 'AdministratorController@order_shipped')->name('shipped');
Route::get('/admin/orders/delivered', 'AdministratorController@order_delivered')->name('delivered');
Route::get('/admin/orders/dispute', 'AdministratorController@order_dispute')->name('dispute');
Route::get('/admin/orders/cancelled', 'AdministratorController@cancelled')->name('cancelled');
Route::get('/admin/orders/approved-flyers', 'AdministratorController@flyer_approved');
Route::get('/admin/orders/pending-flyer', 'AdministratorController@flyer_pending');
Route::get('/admin/orders/order-details/{id}', 'AdministratorController@order_details')->name('adminorderdetail');
Route::get('/admin/package/approve/{id}', 'AdministratorController@packageApprove');
Route::get('/aprroved/{id}', 'AdministratorController@aprroved')->name('aprroved');
Route::get('/disapproved/{id}', 'AdministratorController@disapproved')->name('disapproved');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//customer care
  Route::post('/customercare_accounts', 'HomeController@customercare_accounts')->name('customercare_accounts');
  Route::post('/customercare_shipping', 'HomeController@customercare_shipping')->name('customercare_shipping');
  Route::post('/customercare_product', 'HomeController@customercare_product')->name('customercare_product');
  Route::post('/customercare_payment_checkout', 'HomeController@customercare_payment_checkout')->name('customercare_payment_checkout');
  Route::post('/customercare_cupons', 'HomeController@customercare_cupons')->name('customercare_cupons');

});

Route::get('/admin', 'AdministratorController@index')->name('admin');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/500/{deals}', 'HomeController@products');
Route::get('/Daily-Deals', 'HomeController@Daily_Deals');
Route::get('/voucher-products/{v}', 'HomeController@voucherproduct');
Route::get('/z-beauty', 'HomeController@zbeauty');
Route::get('/sell-on-zmall', 'HomeController@sellonzmall')->name('sellonzmall');
Route::get('/search-products',['uses' => 'HomeController@searchproducts','as' => 'searchproducts']);
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/new-arivals', 'HomeController@newarivals')->name('newarivals');
Route::get('/sale', 'HomeController@sale')->name('sale');
Route::get('/category-For-Mobile/{catid}', 'HomeController@categoryForMobile')->name('products');
Route::get('/products/{catid}', 'HomeController@products')->name('products');
Route::get('/products/{catid}/{subid}', 'HomeController@products')->name('products');
Route::get('/products/{catid}/{subid}/{typeid}', 'HomeController@products')->name('products');
Route::get('/product/{catname}', 'HomeController@product')->name('product');
Route::get('/product/{catname}/{subname}', 'HomeController@product')->name('product');
Route::get('/product/{catname}/{subname}/{typename}', 'HomeController@product')->name('product');
Route::get('/product-detail/{id}', 'HomeController@productdetail')->name('product-detail');
Route::get('/allcategories','HomeController@category')->name('categories');
Route::get('/about-us','HomeController@about_us')->name('about_us');
Route::get('/ShopByCategory/{value}', 'HomeController@ShopByCategory')->name('ShopByCategory');

// shopping cart and order
Route::get('/remove/{slug}', 'CartController@remove')->name('remove');
Route::get('/view-cart', 'CartController@view_cart')->name('view_cart');
Route::get('/view-cart/{type}/{discount}/{voucher_no}', 'CartController@viewCartVoucher');
Route::post('/add_to_cart', 'CartController@add_to_cart')->name('add_to_cart');
Route::post('/add_to_wishlist', 'CartController@add_to_wishlist')->name('add_to_wishlist');
Route::post('/savecart', 'CartController@savecart')->name('savecart');

Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/customercare', 'HomeController@customercare')->name('customercare');
Route::post('/savecontact', 'HomeController@savecontact')->name('savecontact');
Route::post('/cartheadersection', 'CartController@cartheadersection')->name('cartheadersection');
Route::post('/attributeprice', 'CartController@attributeprice')->name('attributeprice');
Route::post('/savecheckout', 'CartController@savecheckout')->name('savecheckout');

Route::get('/thankyou', 'CartController@thankyou')->name('thankyou');
Route::get('/successfull', 'CartController@successfull')->name('successfull');
Route::get('/orderfeedback/{id}','CartController@orderfeedback')->name('orderfeedback');

Route::get('/dbrdcust-order-details', 'DashboardController@dbrdcustorderdetails')->name('dbrdcustorderdetails');

Route::get('/vendor-order-processed','DashboardController@processedorder');
Route::get('/vendor-order-pending', 'DashboardController@dbrdcustorderpending')->name('custorderpending');
Route::get('/vendor-order-shipped', 'DashboardController@dbrdvendorordershipped')->name('dbrdvendorordershipped');
Route::get('/vendor-order-delivered', 'DashboardController@dbrdvendororderdelivered')->name('dbrdvendororderdelivered');
Route::get('/vendor-order-dispute', 'DashboardController@dbrdvendororderdispute')->name('dbrdvendororderdispute');
Route::get('/dbrdcust-contactbook', 'DashboardController@dbrdcustcontactbook')->name('dbrdcustcontactbook');

//vendor_dashboad
Route::get('/orders/placed', 'DashboardController@orders')->name('orders');
// Orders
Route::get('/orders/placed', 'DashboardController@orders')->name('orders');
Route::get('/orders/processed', 'DashboardController@processed')->name('processed');
Route::get('/orders/shipped', 'DashboardController@shipped')->name('shipped');
Route::get('/orders/delivered', 'DashboardController@delivered')->name('delivered');
Route::get('/orders/dispute', 'DashboardController@dispute')->name('dispute');
Route::post('/update-status', 'DashboardController@update_status')->name('updatestatus');

Route::get('/order-details/{id}', 'DashboardController@orderdetails')->name('order-details');
Route::post('/save-review','DashboardController@save_review')->name('save_review');


//admin change password
Route::get('/change-pass', 'DashboardController@change_pass')->name('changepass');
Route::post('/update-password', 'DashboardController@update_pass')->name('updatepassword');


Route::get('/login', 'LoginController@index')->name('login');
Route::POST('/fblogin', 'LoginController@fblogin');
Route::post('/adminlogin', 'LoginController@adminlogin');
Route::post('/vendorlogin', 'LoginController@vendorlogin');
//Registration part
Route::get('/register', 'RegisterssController@index')->name('register');
Route::post('/sub-register', 'RegisterssController@registar')->name('subregister');
Route::get('/faq', 'FaqssController@index')->name('faq');
Route::post('/authlogin/{flag}', 'LoginController@authlogin')->name('authlogin');
Auth::routes();
Route::get('/blog', 'BloggridController@index')->name('blog');
Route::post('/authsignup', 'LoginController@authsignup')->name('authsignup');
Route::post('/logindirect/{flag}', 'LoginController@logindirect')->name('logindirect');
Route::post('/forgetPasswordVendor', 'LoginController@forgetPasswordVendor')->name('forgetPasswordVendor');
Route::post('/forgetPasswordUser', 'LoginController@forgetPasswordUser')->name('forgetPasswordUser');
Route::post('/resetVendor/{email}', 'LoginController@resetVendor')->name('resetVendor');
Route::get('/resetVendor/{email}', 'LoginController@resetVendor')->name('resetVendor');
Route::post('/resetUser/{email}', 'LoginController@resetUser')->name('resetUser');
Route::get('/resetUser/{email}', 'LoginController@resetUser')->name('resetUser');
//Account Setting module
Route::get('/account-setting', 'AccountSettingController@index')->name('accountsetting');

Route::get('/payout-history', 'DashboardController@payout_history')->name('payout_history');
Route::get('/my-billing-address','DashboardController@my_billing_address')->name('mybillingaddress');



//registration
Route::post('/loadsubtypes', 'HomeController@loadsubtypes')->name('loadsubtypes');
Route::post('/loadprovincebasecities', 'HomeController@loadprovincebasecities')->name('loadprovincebasecities');
Route::get('/admin/products/allproducts', 'AdministratorController@allproducts')->name('allproducts');
Route::get('/admin/products/pendingproducts', 'AdministratorController@pendingproducts')->name('pendingproducts');
Route::get('/admin/products/rejectedproducts', 'AdministratorController@rejectedproducts')->name('rejectedproducts');
Route::get('/admin/products/product-page/{slug}', 'AdministratorController@product_page')->name('productpage');
Route::get('/admin/products/approve-product/{id}', 'AdministratorController@approve')->name('approve-product');
Route::get('/admin/products/reject-product/{id}', 'AdministratorController@reject')->name('reject-product');
Route::get('/admin/products/reject-reason/{id}', 'AdministratorController@rejectreason')->name('reject-reason');
Route::get('/admin/flayers/approve-order/{id}', 'AdministratorController@flayerapprove')->name('approve-order');
Route::get('/admin/service/approve/{id}', 'AdministratorController@serviceApprove');
Route::post('/admin/saveComment', 'AdministratorController@saveComment');
Route::get('/mail', function () {
    return view('mail.forgetpassword');
});

// shipping address module
Route::get('/profile/address', 'ContactBookController@index');
Route::post('/create-contactbook', 'ContactBookController@create')->name('createcontactbook');
Route::get('/edit-address/{id}', 'ContactBookController@edit');
Route::post('/update-contactbook', 'ContactBookController@update')->name('updatecontactbook');
Route::get('/delete-contactbook/{id}', 'ContactBookController@delete')->name('deletecontactbook');
Route::post('/follow-store/{id}','ProfileController@follow_store')->name('follow_store')->middleware('auth');

Route::get('/stores-followed','DashboardController@stores_followed')->name('stores_followed');

//Faqs
Route::get('/faqs','HomeController@faqs')->name('faqs');
Route::get('/return-and-refund','HomeController@return_and_refund')->name('return_and_refund');
Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/blog_detail/{id}', 'HomeController@blogdetail')->name('blogdetail');
Route::post('/news-letter','HomeController@news_letter')->name('newsletter');
Route::POST('/payment-done','CartController@paymentdone')->name('paymentdone');

//Contact Admin Panel


Route::get('link_storage',function(){
    Artisan::call('storage:link');
});

Route::get('/all-product-for-facebook', 'HomeController@productforfacebook');
Route::get('/uprivacy', 'UserController@uprivacy')->name('uprivacy');
Route::get('/terms&condition', 'UserController@termsandcondition')->name('termsandcondition');
###########################ADMIN ROUTE###################################
Route::get('/admin/contact/all','AdministratorController@contact')->name('contact')->middleware([verifyadmin::class]);
Route::get('/admin/advertisement/index', 'AdministratorController@advertisement')->name('advertisement')->middleware([verifyadmin::class]);
Route::get('/admin/advertisement/addadvertisement', 'AdministratorController@addadvertisement')->name('addadvertisement')->middleware([verifyadmin::class]);
Route::post('/admin/advertisement/addadvertisement', 'AdministratorController@addadvertisement')->name('addadvertisement')->middleware([verifyadmin::class]);
Route::post('/admin/advertisement/editadvertisement/{id}', 'AdministratorController@editadvertisement')->name('editadvertisement')->middleware([verifyadmin::class]);
Route::post('/admin/advertisement/deletadvertisement/{id}', 'AdministratorController@deletadvertisement')->name('deletadvertisement')->middleware([verifyadmin::class]);
Route::get('/admin/news/index', 'AdministratorController@news')->name('news')->middleware([verifyadmin::class]);
Route::get('/admin/news/addnews', 'AdministratorController@newsadd')->name('addnews')->middleware([verifyadmin::class]);
Route::post('addnews', 'AdministratorController@newsadd')->name('addnews')->middleware([verifyadmin::class]);
Route::post('/admin/news/editnews/{id}', 'AdministratorController@editnews')->name('editnews')->middleware([verifyadmin::class]);
Route::post('/admin/news/deletnews/{id}', 'AdministratorController@deletnews')->name('deletnews')->middleware([verifyadmin::class]);
Route::get('/admin/news_letter','AdministratorController@news_letter')->name('news_letter')->middleware([verifyadmin::class]);
// slider module
Route::get('/admin/slider/index', 'AdministratorController@slider')->name('slider')->middleware([verifyadmin::class]);
Route::get('/admin/slider/addslider', 'AdministratorController@addslider')->name('addslider')->middleware([verifyadmin::class]);
Route::post('/admin/slider/addslider', 'AdministratorController@addslider')->name('addslider')->middleware([verifyadmin::class]);
Route::post('/admin/slider/editslider/{id}', 'AdministratorController@editslider')->name('editslider')->middleware([verifyadmin::class]);
Route::post('/admin/slider/deletslider/{id}', 'AdministratorController@deletslider')->name('deletslider')->middleware([verifyadmin::class]);


//shippment
Route::get('/admin/shippment/all','AdministratorController@shippment')->name('shippment')->middleware([verifyadmin::class]);
Route::get('/admin/shippment/add-shippment','AdministratorController@add_shippment')->name('addshippment')->middleware([verifyadmin::class]);
Route::post('/admin/shippment/save-shippment','AdministratorController@save_shippment')->name('saveshippment')->middleware([verifyadmin::class]);
// seller stories
Route::get('/admin/seller/seller-story', 'AdministratorController@seller_story')->name('sellerstory')->middleware([verifyadmin::class]);
Route::get('/admin/seller/edit-story/{id}', 'AdministratorController@edit_story')->name('editstory')->middleware([verifyadmin::class]);
Route::get('admin/seller/add-story','AdministratorController@add_story')->name('addstory')->middleware([verifyadmin::class]);
Route::post('admin/seller/save-story','AdministratorController@savestory')->name('savestory')->middleware([verifyadmin::class]);
Route::get('/admin/seller/del-story/{id}','AdministratorController@DelStory')->name('delstory')->middleware([verifyadmin::class]);
Route::post('/admin/seller/save-addstory','AdministratorController@savestory')->name('saveaddstory')->middleware([verifyadmin::class]);
Route::get('/messages', 'HomeController@messages')->name('messages')->middleware([verifyadmin::class]);
Route::get('/admin/config/{id}', 'AdministratorController@config')->name('config')->middleware([verifyadmin::class]);
Route::get('/admin/config/attributies/{id}', 'AdministratorController@attributies')->name('attributies')->middleware([verifyadmin::class]);
Route::get('/admin/config/add/{id}', 'AdministratorController@add')->name('add')->middleware([verifyadmin::class]);
Route::get('/admin/config/addattribute/{id}', 'AdministratorController@add_attribude')->name('add_attribude')->middleware([verifyadmin::class]);
Route::post('/admin/storeattribute', 'AdministratorController@storeconfig')->name('storeattribute')->middleware([verifyadmin::class]);
Route::post('/admin/storeconfig', 'AdministratorController@storeconfig')->name('storeconfig')->middleware([verifyadmin::class]);
Route::post('/admin/config/editconfig/{id}', 'AdministratorController@editconfig')->name('editconfig')->middleware([verifyadmin::class]);
Route::post('/admin/config/deletconfig/{id}', 'AdministratorController@deletconfig')->name('deletconfig')->middleware([verifyadmin::class]);

Route::get('/admin/campaign/pending', 'AdministratorController@pendingcampaigns')->name('pendingcampaigns')->middleware([verifyadmin::class]);
Route::get('/admin/campaign/approved', 'AdministratorController@approvedcampaigns')->name('approvedcampaigns')->middleware([verifyadmin::class]);
Route::get('/admin/campaign/rejected', 'AdministratorController@rejectedcampaigns')->name('rejectedcampaigns')->middleware([verifyadmin::class]);
Route::get('/admin/campaign/all', 'AdministratorController@allcampaigns')->name('allcampaigns')->middleware([verifyadmin::class]);
Route::get('/aprrovedcampaign/{id}', 'AdministratorController@aprrovedcampaign')->name('aprrovedcampaign')->middleware([verifyadmin::class]);
Route::get('/disapprovedcampaign/{id}', 'AdministratorController@disapprovedcampaign')->name('disapprovedcampaign')->middleware([verifyadmin::class]);

Route::get('/admin/users/allagents', 'AdministratorController@allagents')->name('allagents')->middleware([verifyadmin::class]);
Route::get('/admin/users/allvendors', 'AdministratorController@allvendors')->name('allvendors')->middleware([verifyadmin::class]);
Route::get('/admin/users/vendordashboard/{id}', 'AdministratorController@vendordashboard')->name('vendordashboard')->middleware([verifyadmin::class]);
Route::get('/admin/users/viewdashboard/{id}', 'AdministratorController@viewdashboard')->middleware([verifyadmin::class]);
Route::get('/admin/users/allcustomers', 'AdministratorController@allcustomers')->name('allcustomers')->middleware([verifyadmin::class]);
Route::get('/admin/del-customer/{id}','AdministratorController@delete_customer')->name('del_customer')->middleware([verifyadmin::class]);
Route::get('/admin/del-vendor/{id}','AdministratorController@delete_vendor')->name('del_vendor')->middleware([verifyadmin::class]);
Route::get('/admin/users/allschools', 'AdministratorController@allschools')->name('allschools')->middleware([verifyadmin::class]);
Route::get('/admin/vendor/pending-subscription', 'AdministratorController@pendingsub')->middleware([verifyadmin::class]);
Route::get('/admin/vendor/approved-subscription', 'AdministratorController@approvesub')->middleware([verifyadmin::class]);
Route::get('/admin/vendor/without-subscription', 'AdministratorController@withoutsub')->middleware([verifyadmin::class]);
Route::get('/admin/ourteam/index', 'AdministratorController@ourteams')->name('ourteams')->middleware([verifyadmin::class]);
Route::get('/admin/ourteam/addourteam', 'AdministratorController@ourteamsadd')->name('ourteamsadd')->middleware([verifyadmin::class]);
Route::post('ourteamsadd', 'AdministratorController@ourteamsadd')->name('ourteamsadd')->middleware([verifyadmin::class]);
Route::post('/admin/ourteam/editourteam/{id}', 'AdministratorController@edit')->name('editourteam')->middleware([verifyadmin::class]);
Route::post('/admin/ourteam/deleteourteam/{id}', 'AdministratorController@deleteourteam')->name('deleteourteam')->middleware([verifyadmin::class]);

Route::get('/admin/blog/index', 'AdministratorController@blog')->name('blog')->middleware([verifyadmin::class]);
Route::get('/admin/blog/addblog', 'AdministratorController@blogadd')->name('addblog')->middleware([verifyadmin::class]);
Route::post('addblog', 'AdministratorController@blogadd')->name('addblog')->middleware([verifyadmin::class]);
Route::post('/admin/blog/editblog/{id}', 'AdministratorController@editblog')->name('editblog')->middleware([verifyadmin::class]);
Route::post('/admin/blog/deletblog/{id}', 'AdministratorController@deletblog')->name('deletblog')->middleware([verifyadmin::class]);

Route::get('/admin/community/addcommunity', 'AdministratorController@communityadd')->name('addcommunity')->middleware('auth')->middleware([verifyadmin::class]);
Route::post('addcommunity', 'AdministratorController@communityadd')->name('addcommunity');
Route::post('/admin/community/editcommunity/{id}', 'AdministratorController@editcommunity')->name('editcommunity')->middleware('auth')->middleware([verifyadmin::class]);
Route::post('/admin/community/deletcommunity/{id}', 'AdministratorController@deletcommunity')->name('deletcommunity')->middleware('auth')->middleware([verifyadmin::class]);

Route::get('/admin/faqs/index', 'AdministratorController@faqs')->name('faqs')->middleware([verifyadmin::class]);
Route::get('/admin/return-and-refund/index', 'AdministratorController@return_and_refund')->name('return_and_refund')->middleware([verifyadmin::class]);
Route::get('/admin/return-and-refund/addreturn', 'AdministratorController@addreturn')->name('addreturn')->middleware([verifyadmin::class]);
Route::post('/admin/return-and-refund/editreturn/{id}', 'AdministratorController@editreturn')->name('editreturn')->middleware([verifyadmin::class]);
Route::post('/admin/return-and-refund/deletereturn/{id}', 'AdministratorController@deletereturn')->name('deletereturn')->middleware([verifyadmin::class]);
Route::get('/admin/faqs/addfaq', 'AdministratorController@addfaqs')->name('addfaqs')->middleware([verifyadmin::class]);
Route::post('addfaqs', 'AdministratorController@addfaqs')->name('addfaqs')->middleware([verifyadmin::class]);
Route::post('addreturn', 'AdministratorController@addreturn')->name('addreturn')->middleware([verifyadmin::class]);
Route::post('/admin/faqs/editfaq/{id}', 'AdministratorController@editfaq')->name('editfaq')->middleware([verifyadmin::class]);
Route::post('/admin/faqs/deletefaq/{id}', 'AdministratorController@deletefaq')->name('deletefaq')->middleware([verifyadmin::class]);


Route::get('/admin/generalsettings', 'AdministratorController@generalsettings')->name('generalsettings')->middleware([verifyadmin::class]);
Route::get('/admin/profile', 'AdministratorController@profile')->name('profile')->middleware([verifyadmin::class]);
Route::get('/admin/aboutus', 'AdministratorController@aboutus')->name('aboutus')->middleware([verifyadmin::class]);
Route::get('/admin/privacy', 'AdministratorController@privacy')->name('privacy')->middleware([verifyadmin::class]);
Route::get('/admin/terms', 'AdministratorController@terms')->name('terms')->middleware([verifyadmin::class]);
Route::get('/admin/wallet', 'AdministratorController@wallet')->name('wallet')->middleware([verifyadmin::class]);
Route::get('/admin/investment', 'AdministratorController@investment')->name('investment')->middleware([verifyadmin::class]);
Route::get('/admin/withdrawrequest', 'AdministratorController@withdrawrequest')->name('withdrawrequest')->middleware([verifyadmin::class]);
Route::get('/admin/paidrequest', 'AdministratorController@paidrequest')->name('paidrequest')->middleware([verifyadmin::class]);
Route::get('/admin/rejectedrequest', 'AdministratorController@rejectedrequest')->name('rejectedrequest')->middleware([verifyadmin::class]);
Route::post('saveadmin', 'AdministratorController@saveadmin')->name('saveadmin')->middleware([verifyadmin::class]);

Route::get('/adminpanel', 'SmartadminController@index')->name('adminpanel')->middleware([verifyadmin::class]);


Route::get('/admin/dashboard', 'AdministratorController@dashboard')->name('dashboard')->middleware([verifyadmin::class]);
Route::get('/admin/payment/pending', 'AdministratorController@paymentPending')->middleware([verifyadmin::class]);
Route::get('/admin/marketing/campaign', 'AdministratorController@campaign')->middleware([verifyadmin::class]);
Route::post('/admin/storeCampaign', 'AdministratorController@storeCampaign')->name('storeCampaign')->middleware([verifyadmin::class]);
Route::get('/admin/campaign/add', 'AdministratorController@addCampaign')->middleware([verifyadmin::class]);
Route::get('/admin/payment/clear', 'AdministratorController@paymentClear')->middleware([verifyadmin::class]);
Route::get('/admin/payment/withdraw', 'AdministratorController@paymentWithdraw')->middleware([verifyadmin::class]);
Route::get('/admin/payment/approve-payment/{id}', 'AdministratorController@approvePayment')->middleware([verifyadmin::class]);
###########################for vendor dashboard by admin###################################
Route::group(['middleware' => [verifyadmin::class]], function () {
Route::get('/admin/tovendor/dashboard', 'adminAsVendor@dashboard');
    Route::get('/admin/tovendor/new-product', 'adminAsVendor@new_product');
    Route::get('/admin/tovendor/approved-products', 'adminAsVendor@approved_product');
    Route::POST('admintovendorsavenewproduct', 'adminAsVendor@store')->name('admintovendorsavenewproduct');
    Route::get('/admin/tovendor/GetProductDetail', 'adminAsVendor@GetProductDetail');
    Route::get('/admin/tovendor/analysis', 'adminAsVendor@analysis');
    Route::get('/admin/tovendor/services', 'adminAsVendor@services');
    Route::get('/admin/tovendor/manage-orders', 'adminAsVendor@manage_orders');
    Route::get('/admin/tovendor/processed-orders', 'adminAsVendor@processed_orders');
    Route::get('/admin/tovendor/addproduct', 'adminAsVendor@addproduct');
    Route::get('/admin/tovendor/manage-products', 'adminAsVendor@manage_products');
    Route::get('/admin/tovendor/promotions', 'adminAsVendor@promotions');
    Route::get('/admin/tovendor/catalog', 'adminAsVendor@catalog');
    Route::get('/admin/tovendor/myaccount', 'adminAsVendor@myaccount');
    Route::get('/admin/tovendor/sellerlogo', 'adminAsVendor@sellerlogo');
    Route::get('/admin/tovendor/commision', 'adminAsVendor@commision');
    Route::get('/admin/tovendor/delivery', 'adminAsVendor@delivery');
    Route::get('/admin/tovendor/invoice', 'adminAsVendor@invoice');
    Route::get('/admin/tovendor/statement', 'adminAsVendor@statement');
    Route::get('/admin/tovendor/order-review', 'adminAsVendor@order_review');
    Route::get('/admin/tovendor/del-product/{id}','adminAsVendor@destroy');
    Route::POST('/admin/tovendor/edit-Seller-Account', 'adminAsVendor@edit_Seller_Account');
    Route::POST('/admin/tovendor/edit-business-info', 'adminAsVendor@edit_business_info');
    Route::POST('/admin/tovendor/edit-bank-account', 'adminAsVendor@edit_bank_account');
    Route::POST('/admin/tovendor/edit-actual-address', 'adminAsVendor@edit_actual_address');
    Route::POST('/admin/tovendor/edit-return-address', 'adminAsVendor@edit_return_address');
    Route::POST('/admin/tovendor/edit-Seller-logo', 'adminAsVendor@edit_seller_logo');
    Route::get('/admin/tovendor/order_conformation/{id}', 'adminAsVendor@order_conformation');
    Route::get('/admin/tovendor/requestPickUp/{id}', 'adminAsVendor@requestPickUp');
    Route::get('/admin/tovendor/edit-product/{id}','adminAsVendor@edit');
    Route::get('/admin/tovendor/storeupdate','adminAsVendor@storeupdate');
    Route::POST('adminupdatestoredetail', 'adminAsVendor@updatestoredetail')->name('adminupdatestoredetail');
    Route::get('/admin/tovendor/flayers','adminAsVendor@showflayer');
    Route::POST('orderflayer', 'adminAsVendor@orderflayer')->name('orderflayer');
    Route::get('/admin/tovendor/showupdatefinancial', 'adminAsVendor@showupdatefinancial');
    Route::POST('/adminupdatefinancial', 'adminAsVendor@updatefinancial')->name('updatefinancial');
    Route::get('/admin/tovendor/bank-account', 'adminAsVendor@bank_account');
    Route::POST('/bank-account-save', 'adminAsVendor@bank_account_save');
    Route::get('/delete-bank-detail/{id}', 'adminAsVendor@delete_bank_detail');
    Route::POST('/admin/tovendor/delivery-save', 'adminAsVendor@delivery_save');
    Route::get('/admin/tovendor/download-trax-slip/{id}', 'adminAsVendor@downloadslip');
});