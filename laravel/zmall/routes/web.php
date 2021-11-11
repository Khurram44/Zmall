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

Route::get('clear_cache', function () {

    \Artisan::call('cache:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');


});

Route::get('/viewtopic/{id}', 'CommunityController@viewtopic')->name('viewtopic');
Route::group(['middleware' => ['auth']], function () {
    
// Orders
Route::get('/admin/orders/processed', 'AdministratorController@order_processed')->name('processed');
Route::get('/admin/orders/pending', 'AdministratorController@order_pending')->name('pending');
Route::get('/admin/orders/shipped', 'AdministratorController@order_shipped')->name('shipped');
Route::get('/admin/orders/delivered', 'AdministratorController@order_delivered')->name('delivered');
Route::get('/admin/orders/dispute', 'AdministratorController@order_dispute')->name('dispute');
Route::get('/admin/orders/order-details/{id}', 'AdministratorController@order_details')->name('orderpage');

Route::post('/signup', 'JoinController@store')->name('signup');
Route::get('/show', 'JoinController@index')->name('show');


Route::get('/aprroved/{id}', 'AdministratorController@aprroved')->name('aprroved');
Route::get('/disapproved/{id}', 'AdministratorController@disapproved')->name('disapproved');

Route::get('/admin/users/allagents', 'AdministratorController@allagents')->name('allagents');
Route::get('/admin/users/allvendors', 'AdministratorController@allvendors')->name('allvendors');
Route::get('/admin/users/allcustomers', 'AdministratorController@allcustomers')->name('allcustomers');
Route::get('/admin/users/allschools', 'AdministratorController@allschools')->name('allschools');


Route::get('/admin/ourteam/index', 'AdministratorController@ourteams')->name('ourteams');
Route::get('/admin/ourteam/addourteam', 'AdministratorController@ourteamsadd')->name('ourteamsadd');
Route::post('ourteamsadd', 'AdministratorController@ourteamsadd')->name('ourteamsadd');
Route::post('/admin/ourteam/editourteam/{id}', 'AdministratorController@edit')->name('editourteam');
Route::post('/admin/ourteam/deleteourteam/{id}', 'AdministratorController@deleteourteam')->name('deleteourteam');

Route::get('/admin/blog/index', 'AdministratorController@blog')->name('blog');
Route::get('/admin/blog/addblog', 'AdministratorController@blogadd')->name('addblog');
Route::post('addblog', 'AdministratorController@blogadd')->name('addblog');
Route::post('/admin/blog/editblog/{id}', 'AdministratorController@editblog')->name('editblog');
Route::post('/admin/blog/deletblog/{id}', 'AdministratorController@deletblog')->name('deletblog');

Route::get('/admin/community/addcommunity', 'AdministratorController@communityadd')->name('addcommunity')->middleware('auth');
Route::post('addcommunity', 'AdministratorController@communityadd')->name('addcommunity');
Route::post('/admin/community/editcommunity/{id}', 'AdministratorController@editcommunity')->name('editcommunity')->middleware('auth');
Route::post('/admin/community/deletcommunity/{id}', 'AdministratorController@deletcommunity')->name('deletcommunity')->middleware('auth');

Route::get('/admin/faqs/index', 'AdministratorController@faqs')->name('faqs');
Route::get('/admin/faqs/addfaq', 'AdministratorController@addfaqs')->name('addfaqs');
Route::post('addfaqs', 'AdministratorController@addfaqs')->name('addfaqs');
Route::post('/admin/faqs/editfaq/{id}', 'AdministratorController@editfaq')->name('editfaq');
Route::post('/admin/faqs/deletefaq/{id}', 'AdministratorController@deletefaq')->name('deletefaq');

Route::get('/admin/generalsettings', 'AdministratorController@generalsettings')->name('generalsettings');
Route::get('/admin/profile', 'AdministratorController@profile')->name('profile');
Route::get('/admin/aboutus', 'AdministratorController@aboutus')->name('aboutus');
Route::get('/admin/privacy', 'AdministratorController@privacy')->name('privacy');
Route::get('/admin/terms', 'AdministratorController@terms')->name('terms');
Route::get('/admin/wallet', 'AdministratorController@wallet')->name('wallet');
Route::get('/admin/investment', 'AdministratorController@investment')->name('investment');
Route::get('/admin/withdrawrequest', 'AdministratorController@withdrawrequest')->name('withdrawrequest');
Route::get('/admin/paidrequest', 'AdministratorController@paidrequest')->name('paidrequest');
Route::get('/admin/rejectedrequest', 'AdministratorController@rejectedrequest')->name('rejectedrequest');
Route::post('saveadmin', 'AdministratorController@saveadmin')->name('saveadmin');

Route::get('/adminpanel', 'SmartadminController@index')->name('adminpanel');


Route::get('/admin/dashboard', 'AdministratorController@dashboard')->name('dashboard');




Route::get('/messages', 'HomeController@messages')->name('messages');
Route::get('/admin/config/{id}', 'AdministratorController@config')->name('config');
Route::get('/admin/config/add/{id}', 'AdministratorController@add')->name('add');
Route::post('/admin/storeconfig', 'AdministratorController@storeconfig')->name('storeconfig');
Route::post('/admin/config/editconfig/{id}', 'AdministratorController@editconfig')->name('editconfig');
Route::post('/admin/config/deletconfig/{id}', 'AdministratorController@deletconfig')->name('deletconfig');
Route::get('/propertydetail/{id}', 'RealestateController@propertydetail')->name('propertydetail');

Route::get('/admin/campaign/pending', 'AdministratorController@pendingcampaigns')->name('pendingcampaigns');
Route::get('/admin/campaign/approved', 'AdministratorController@approvedcampaigns')->name('approvedcampaigns');
Route::get('/admin/campaign/rejected', 'AdministratorController@rejectedcampaigns')->name('rejectedcampaigns');
Route::get('/admin/campaign/all', 'AdministratorController@allcampaigns')->name('allcampaigns');
Route::get('/aprrovedcampaign/{id}', 'AdministratorController@aprrovedcampaign')->name('aprrovedcampaign');
Route::get('/disapprovedcampaign/{id}', 'AdministratorController@disapprovedcampaign')->name('disapprovedcampaign');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/resume', 'ResumeController@index')->name('resume');

Route::get('/myagents', 'AccountsController@index')->name('myagents');
Route::get('/addagents', 'AccountsController@addagents')->name('addagents');
Route::get('/editagents/{id}', 'AccountsController@editagents')->name('editagents');
Route::post('/saveaccounts', 'AccountsController@saveaccounts')->name('saveaccounts');


Route::get('/myprofessor', 'AccountsController@myprofessor')->name('myprofessor');
Route::get('/addprofessor', 'AccountsController@addprofessor')->name('addprofessor');
Route::get('/editprofessor/{id}', 'AccountsController@editprofessor')->name('editprofessor');
Route::post('/saveprofessor', 'AccountsController@saveprofessor')->name('saveprofessor');

Route::get('/courses', 'AccountsController@courses')->name('courses');
Route::get('/addcourses', 'AccountsController@addcourses')->name('addcourses');
Route::get('/editcourses/{id}', 'AccountsController@editcourses')->name('editcourses');
Route::post('/savecourses', 'AccountsController@savecourses')->name('savecourses');
Route::get('/deletcourses/{id}', 'AccountsController@deletcourses')->name('deletcourses');

Route::get('/member', 'MemberController@index')->name('member');
Route::post('/deletmember/{id}', 'MemberController@deletmember')->name('deletmember');
Route::post('/activemember/{id}', 'MemberController@activemember')->name('activemember');

Route::get('/addacademic', 'ResumeController@addacademic')->name('addacademic');
Route::get('/editacademic/{id}', 'ResumeController@editacademic')->name('editacademic');
Route::post('/saveacademic', 'ResumeController@saveacademic')->name('saveacademic');


Route::get('/addexperience', 'ResumeController@addexperience')->name('addexperience');
Route::get('/editexperience/{id}', 'ResumeController@editexperience')->name('editexperience');
Route::post('/saveexperience', 'ResumeController@saveexperience')->name('saveexperience');
Route::post('/map', 'RealestateController@map')->name('map');


Route::get('/addlanguage', 'ResumeController@addlanguage')->name('addlanguage');
Route::get('/editportfolio/{id}', 'ResumeController@editportfolio')->name('editportfolio');
Route::post('/savelanguage', 'ResumeController@savelanguage')->name('savelanguage');


Route::get('/addportfolio', 'ResumeController@addportfolio')->name('addportfolio');
Route::get('/editlanguage/{id}', 'ResumeController@editlanguage')->name('editlanguage');
Route::post('/saveportfolio', 'ResumeController@saveportfolio')->name('saveportfolio');


Route::get('/addresume', 'ResumeController@addresume')->name('addresume');
Route::get('/editresume/{id}', 'ResumeController@addresume')->name('editresume');
Route::post('/updateresume', 'ResumeController@updateresume')->name('updateresume');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/editprofile/{id}', 'ProfileController@addprofile')->name('editprofile');
Route::post('/updateprofile', 'ProfileController@updateprofile')->name('updateprofile');

Route::get('/myproperties', 'PropertiesController@index')->name('myproperties');
Route::get('/addproperty', 'PropertiesController@addproperty')->name('addproperty');
Route::get('/editproperty/{id}', 'PropertiesController@editproperty')->name('editproperty');
Route::post('/saveproperty', 'PropertiesController@store')->name('saveproperty');

Route::get('/mycampaign', 'CampaignController@index')->name('mycampaign');
Route::get('/addcampaign', 'CampaignController@addcampaign')->name('addcampaign');
Route::get('/editcampaign/{id}', 'CampaignController@editcampaign')->name('editcampaign');
Route::get('/faqs/{id}', 'CampaignController@faqs')->name('faqs');
Route::post('/faqs/deletefaq/{id}', 'CampaignController@deletefaq')->name('deletefaq');
Route::get('/updatecampaign/{id}', 'CampaignController@updatecampaign')->name('updatecampaign');
Route::get('/deleteupdatecampaign/{id}', 'CampaignController@deleteupdatecampaign')->name('deleteupdatecampaign');
Route::post('/savecampaign', 'CampaignController@store')->name('savecampaign');

Route::get('/payments', 'Userfundshistory@payments')->name('payments');
Route::get('/savefunds', 'Userfundshistory@savefunds')->name('savefunds');
Route::post('/saveinvestment', 'Userfundshistory@saveinvestment')->name('saveinvestment');
Route::post('/transferfunds', 'Userfundshistory@transferfunds')->name('transferfunds');
Route::post('/storemessages', 'MessagesController@storemessages')->name('storemessages');
Route::get('/myfriendrequest', 'MessagesController@myfriendrequest')->name('myfriendrequest');
Route::get('/my-messages', 'MessagesController@mymessages')->name('my-messages');
Route::get('/messages-reply/{id}', 'MessagesController@reply')->name('messages-reply');
Route::post('/approverequest/{id}', 'MessagesController@approverequest')->name('approverequest');
Route::post('/cancelrequest/{id}', 'MessagesController@cancelrequest')->name('cancelrequest');


// slider module
Route::get('/admin/slider/index', 'AdministratorController@slider')->name('slider');
Route::get('/admin/slider/addslider', 'AdministratorController@addslider')->name('addslider');
Route::post('/admin/slider/addslider', 'AdministratorController@addslider')->name('addslider');
Route::post('/admin/slider/editslider/{id}', 'AdministratorController@editslider')->name('editslider');
Route::post('/admin/slider/deletslider/{id}', 'AdministratorController@deletslider')->name('deletslider');

// seller stories
Route::get('/admin/seller/seller-story', 'AdministratorController@seller_story')->name('sellerstory');
Route::get('/admin/seller/edit-story/{id}', 'AdministratorController@edit_story')->name('editstory');
Route::get('admin/seller/add-story','AdministratorController@add_story')->name('addstory');
Route::post('admin/seller/save-story','AdministratorController@savestory')->name('savestory');
Route::get('/admin/seller/del-story/{id}','AdministratorController@DelStory')->name('delstory');
Route::post('/admin/seller/save-addstory','AdministratorController@savestory')->name('saveaddstory');


});

Route::get('/admin', 'AdministratorController@index')->name('admin');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/random-flash-deals', 'HomeController@randomflashdeals')->name('randomflashdeals');
Route::get('/sell-on-zmall', 'HomeController@sellonzmall')->name('sellonzmall');
Route::get('/search-products',['uses' => 'HomeController@searchproducts','as' => 'searchproducts']);
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/new-arivals', 'HomeController@newarivals')->name('newarivals');
Route::get('/sale', 'HomeController@sale')->name('sale');
Route::get('/products/{catid}', 'HomeController@products')->name('products');
Route::get('/products/{catid}/{subid}', 'HomeController@products')->name('products');
Route::get('/products/{catid}/{subid}/{typeid}', 'HomeController@products')->name('products');
Route::get('/product-detail/{id}', 'HomeController@productdetail')->name('product-detail');



// shopping cart and order
Route::get('/remove/{locale}/{pid}/{quantity}', 'CartController@remove')->name('remove');
Route::get('/view-cart', 'CartController@view_cart')->name('view_cart');
Route::post('/add_to_cart', 'CartController@add_to_cart')->name('add_to_cart');
Route::post('/savecart', 'CartController@savecart')->name('savecart');
Route::get('/checkout', 'CartController@checkout')->name('checkout');
Route::post('/cartheadersection', 'CartController@cartheadersection')->name('cartheadersection');
Route::post('/attributeprice', 'CartController@attributeprice')->name('attributeprice');
Route::post('/savecheckout', 'CartController@savecheckout')->name('savecheckout');
Route::get('/thankyou', 'CartController@thankyou')->name('thankyou');

//inventory
// Route::get('/product_inventory', 'InventoryController@index')->name('product_inventory');
// Route::get('/add-product', 'InventoryController@add_product')->name('addproduct');
// Route::post('/save-product', 'InventoryController@store')->name('saveproduct');
// Route::get('/edit-product/{id}','InventoryController@edit')->name('edit_product');
// Route::post('/update-product','InventoryController@store')->name('updateproduct');
// Route::get('/del-product/{id}','InventoryController@destroy')->name('delproduct');

Route::get('/inventory', 'ProductsController@index')->name('product_inventory');
Route::get('/add-product', 'ProductsController@create')->name('addproduct');
Route::post('/save-product', 'ProductsController@store')->name('saveproduct');
Route::get('/edit-product/{id}','ProductsController@edit')->name('edit_product');
Route::post('/update-product','ProductsController@store')->name('updateproduct');
Route::get('/del-product/{id}','ProductsController@destroy')->name('delproduct');

Route::get('/dashboard', 'DashboardController@index')->name('dashboardinfo');
Route::get('/dbrdcust-order-details', 'DashboardController@dbrdcustorderdetails')->name('dbrdcustorderdetails');

Route::get('/vendor-order-processed','DashboardController@processedorder');
Route::get('/vendor-order-pending', 'DashboardController@dbrdcustorderpending')->name('custorderpending');
Route::get('/vendor-order-shipped', 'DashboardController@dbrdvendorordershipped')->name('dbrdvendorordershipped');
Route::get('/vendor-order-delivered', 'DashboardController@dbrdvendororderdelivered')->name('dbrdvendororderdelivered');
Route::get('/vendor-order-dispute', 'DashboardController@dbrdvendororderdispute')->name('dbrdvendororderdispute');
Route::get('/dbrdcust-wishlist', 'DashboardController@dbrdcustwishlist')->name('dbrdcustwishlist');
Route::get('/dbrdcust-contactbook', 'DashboardController@dbrdcustcontactbook')->name('dbrdcustcontactbook');

// Orders
Route::get('/orders/placed', 'DashboardController@orders')->name('orders');
Route::get('/orders/processed', 'DashboardController@processed')->name('processed');
Route::get('/orders/shipped', 'DashboardController@shipped')->name('shipped');
Route::get('/orders/delivered', 'DashboardController@delivered')->name('delivered');
Route::get('/orders/dispute', 'DashboardController@dispute')->name('dispute');
Route::get('/orders/cancelled', 'DashboardController@cancelled')->name('cancelled');
Route::get('/order-details/{id}', 'DashboardController@orderdetails')->name('order-details');


//admin change password
Route::get('/change-pass', 'DashboardController@change_pass')->name('changepass');
Route::post('/update-password', 'DashboardController@update_pass')->name('updatepassword');


Route::get('/login', 'LoginController@index')->name('login');
//Registration part
Route::get('/register', 'RegisterssController@index')->name('register');
Route::post('/sub-register', 'RegisterssController@registar')->name('subregister');
Route::get('/faq', 'FaqssController@index')->name('faq');
Route::post('/authlogin', 'LoginController@authlogin')->name('authlogin');

Auth::routes();
Route::get('/blog', 'BloggridController@index')->name('blog');
Route::post('/authsignup', 'LoginController@authsignup')->name('authsignup');

//Accoutn Setting module
Route::get('/account-setting', 'AccountSettingController@index')->name('accountsetting');
Route::get('/edit-email', 'AccountSettingController@edit_email')->name('editemail');
Route::post('/update-email', 'AccountSettingController@update_email')->name('updatemail');
Route::get('/edit-phone', 'AccountSettingController@edit_phone')->name('editphone');
Route::post('/update-phone', 'AccountSettingController@update_phone')->name('updatephone');
Route::get('/edit-profile', 'AccountSettingController@edit_profile')->name('editprofile');
Route::post('/update-profile', 'AccountSettingController@update_profile')->name('updateprofile');
Route::post('/saveaccountsettings', 'AccountSettingController@store')->name('saveaccountsettings');
Route::get('/account-setting', 'AccountSettingController@index')->name('accountsetting');

//registration
Route::post('register', 'Auth\SignUpController@register')->name('postRegister');
Route::post('/loadsubtypes', 'HomeController@loadsubtypes')->name('loadsubtypes');
Route::get('/admin/products/allproducts', 'AdministratorController@allproducts')->name('allproducts');
Route::get('/admin/products/product-page/{id}', 'AdministratorController@product_page')->name('productpage');



// shipping address module
Route::get('/contactbook', 'ContactBookController@index')->name('contactbook');
Route::post('/create-contactbook', 'ContactBookController@create')->name('createcontactbook');
Route::post('/update-contactbook', 'ContactBookController@update')->name('updatecontactbook');
Route::get('/delete-contactbook/{id}', 'ContactBookController@delete')->name('deletecontactbook');

