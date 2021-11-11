<?php $current=Route::getFacadeRoot()->current()->uri(); ?>
<?php use App\notification;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/dash-ven.css?v=15')}}">
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
<script src='https://cdn.tiny.cloud/1/yani1srrz0tx75mcqznwmq09rnj6nbaxtmzut0q5tjclw8sn/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>
    
<style>
    .sidebar-inner a.active{
    color: #fe9126 !important;
    background-color: hsla(0,0%,100%,.12);
    
  }
  .dropdown-menu{
    position: absolute;
    left: 0;
    min-width: 180px;
    margin-left: -110px;
  }
  .dropdown-menu a{
      display: flex;
      flex-direction: column;
  }
  .dropdown-menu a{
    text-decoration: none;
    padding: 2px;
    border-radius: 0px;
  }
  .dropdown-menu a:hover{
    text-decoration: none;
    padding: 2px;
    border-radius: 0px;
  }
  .dash-right div a:hover{
      color: #fe9126;
    /*background: rgb(0,0,0,0.05);*/

  }
  @media screen and (max-width:  800px){
    .responsive-dash{
      display: none;
    }
    .top-dash{
      display: none;
    }
    .handburder{
    }
   .handburder div {
    height: 4px;
    border-radius: 8px;
    margin-top: 5px;
    width: 30px;
    background-color: rgb(0,0,0,0.7);
    }
    .handburder-close{
      position: absolute;
      top: 20px;
    }
    .handburder-close i{
      color: #fff;
      font-size: 40px;
      font-weight: bold;
    }
    .handburder-close div:nth-child(1) {
    height: 5px;
    width: 50px;
    background-color: #fff;
    transform: rotate(45deg);
    }
    .handburder-close div:nth-child(2) {
    height: 5px;
    width: 50px;
    background-color: #fff;
    transform: rotate(-45deg);
    }
    .menu-content{
      position: fixed;
      top: 0;
      left: 0;
      width: 80%;
      height: 100% !important;
      overflow: scroll;
      background-color: #1f1f1f;
      z-index: 99;
      padding: 10px 20px;
    }
    .menu-list{
      position: relative;
      top: 20px;
      left: 0;
      display: flex;
      flex-direction: column;
    }
    .menu-list ul li{
      list-style: none;
      padding: 10px 0px;
    }
    .menu-list ul li a{
      color: #fff;
      text-decoration: none;
      font-size: 16px;

    }
    .dash-top-res-l{
      background: #fff;
    }
    .dash-top-res-l{
      display: flex !important;
      justify-content: space-between;
      align-items: center;
      padding: 0px 30px;
    }
    .dash-top-res-r a i{
      color: rgb(0,0,0,0.7);

    }
    .sidebar-inner a{
      padding: 10px;
    }
    .acc-menu-content{
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      z-index: 99;
      padding: 10px 20px;

    }
    .acc-menu-content-inner{
      display: flex;
      flex-direction: column;
    }
    .acc-handburder-close{
      position: absolute;
      top: 20px;
      right: 20px;
    }
    .acc-handburder-close i{
      color: #666;
      font-size: 40px;
      font-weight: bold;
    }
    .acc-det-top{
      display: flex;
      justify-content: space-between;

    }
    .acc-det-top-l{
      position: absolute;
      top: 20px;
      left: 20px;
    }
    .acc-det-top-l b{
      font-size: 20px;
      color: #666;
      text-transform: capitalize;
    }
    .acc-det-top-l p{
      color: #666;
    }
    .acc-menu-list {
    border-top: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 110px;
    left: 0px;
    padding: 15px 15px;
    border-bottom: 1px solid #ddd;
    width: 100%;
   }
   .acc-menu-list a{
    color: #666;
    font-size: 18px;
    text-decoration: none;
    padding: 5px 0px;
   }
   .acc-menu-list2 {
    border-top: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    position: absolute;
    bottom: 20px;
    left: 0px;
    padding: 15px 0px;
    border-bottom: 1px solid #ddd;
    width: 100%;
   }
   .acc-menu-list2 a{
    color: #000;
    font-size: 18px;
    text-decoration: none;
    padding: 5px 0px;
    text-align: center;
   }
  
}
</style>

</head>
<body>
    
    
    
<div class="container-fluid">
    <div class="row">
           <div class="dash-top-res-l" style="display: none;">
              <div class="handburder" onclick="opennav();">
                  <div></div>
                  <div></div>
                  <div></div>
              </div>
              <div class="dash-top-res-m">
                  <a href="{{ asset('/') }}"><img src="/frontend/logo/zmalllogo-b.png" class="logo"></a> 
              </div>
              <div class="dash-top-res-r">
                  <a href="#" onclick="accnav();"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
              </div>
            </div>

            <div class="acc-menu-content" id="accDIV" style="display: none;">
              <div class="acc-menu-content-inner">
              <div class="acc-det-top">
                <div class="acc-det-top-l">
                  <b>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</b>
                  <p>Seller ID: sell123456</p>
                  <p style="color: green;"> Approved</p>
                </div>
                <div class="acc-handburder-close" onclick="accclosenav();">
                  <i style="font-size:24px" class="fa">&#x2715;</i>
                </div>
              </div>
              <div class="acc-menu-list">
                <a href="{{ asset('/Vendor/myaccount') }}">Account</a>
                <a href="{{ asset('Vendor/mystore/'.auth::id())}}">My Store</a>
                <a href="{{ asset('change-pass') }}">Change Password</a>
                <a class="dropdown-item" href="#">Contact us</a>
                <a class="dropdown-item" href="#">Terms and policy</a>
                <a class="dropdown-item" href="#">Help</a>
              </div>

              <div class="acc-menu-list2">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ho-dr-con-last waves-effect">            
                  {{ __('Logout') }}
                </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                 </form> 
              </div>
              </div>
            </div>
      
      
        <div class="menu-content" id="myDIV" style="display: none;">
          <div class="handburder-close" onclick="closenav();">
            <i style="font-size:24px" class="fa">&#x2715;</i> 
          </div>
          <a href="{{ asset('/') }}" style="margin-left: 40px;"><img src="/frontend/logo/zmalllogo-w.png" class="logo"></a> 
          <div class="menu-list">
 
          <div class="sidebar-inner">
            <a href="{{ asset('/Vendor/dashboard') }}" class="menu-dash {{ $current ==='Vendor/dashboard' ? 'active' : null}}"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
            <a href="{{ asset('/Vendor/myaccount') }}" class="menu-dash {{$current ==='Vendor/myaccount' ? 'active' : null}}"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
            <a href="{{ asset('/Vendor/analysis') }}" class="menu-dash {{$current ==='Vendor/analysis' ? 'active' : null}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Analysis</a>
            <a href="{{ asset('/Vendor/services') }}" class="menu-dash {{$current ==='Vendor/services' ? 'active' : null}}"><i class="fa fa-server" aria-hidden="true"></i> Services</a>
            <a><i class="fa fa-shopping-bag" aria-hidden="true"></i> Orders</a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/manage-orders') }}" class="menu-dash {{$current ==='Vendor/manage-orders' ? 'active' : null}}">Manage Orders</a>
                <a href="{{ asset('/Vendor/processed-orders') }}" class="menu-dash {{$current ==='Vendor/processed-orders' ? 'active' : null}}">Proccessed Order</a>
              </div>
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Products</a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/addproduct') }}" class="menu-dash {{$current ==='Vendor/addproduct' ? 'active' : null}}">Add Products</a>
                <a href="{{ asset('/Vendor/approved-products') }}" class="menu-dash {{$current ==='Vendor/approved-products' ? 'active' : null}}">Products</a>
                <a href="{{ asset('/Vendor/manage-products') }}" class="menu-dash {{$current ==='Vendor/manage-products' ? 'active' : null}}">Manage Products</a>
              </div>
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Finance </a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/bank-account') }}" class="menu-dash {{$current ==='Vendor/bank-account' ? 'active' : null}}">Bank Account</a>
                <a href="{{ asset('/Vendor/statement') }}" class="menu-dash {{$current ==='Vendor/statement' ? 'active' : null}}">Account Statement</a>
                <a href="{{ asset('/Vendor/order-review') }}" class="menu-dash {{$current ==='Vendor/order-review' ? 'active' : null}}">Order Review</a>
                <a href="{{ asset('/Vendor/transaction-overview') }}" class="menu-dash {{$current ==='Vendor/transaction-overview' ? 'active' : null}}">Transaction Overview</a>
              </div>
            <a href="{{ asset('/Vendor/catalog') }}" class="menu-dash {{$current ==='Vendor/catalog' ? 'active' : null}}"><i class="fa fa-table" aria-hidden="true"></i> Catalogs</a>
            
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Marketing </a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/marketing-center') }}" class="menu-dash {{$current ==='Vendor/marketing-center' ? 'active' : null}}"><i class="fa fa-cog" aria-hidden="true"></i> Marketing Center</a>
              </div>
            
            
            

            
          </div>
        </div>
</div>

      <div class="col-sm-1" style="width: 13%;">
        <div class="sidebar responsive-dash">
        <a href="{{ asset('/') }}"><img src="/frontend/logo/zmalllogo-w.png" class="logo"></a>  
          <div class="sidebar-inner">
            <a href="{{ asset('/Vendor/dashboard') }}" class="menu-dash {{ $current ==='Vendor/dashboard' ? 'active' : null}}"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
            <a href="{{ asset('/Vendor/myaccount') }}" class="menu-dash {{$current ==='Vendor/myaccount' ? 'active' : null}}"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
            <a href="{{ asset('/Vendor/analysis') }}" class="menu-dash {{$current ==='Vendor/analysis' ? 'active' : null}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Analysis</a>
            <a href="{{ asset('/Vendor/services') }}" class="menu-dash {{$current ==='Vendor/services' ? 'active' : null}}"><i class="fa fa-server" aria-hidden="true"></i> Services</a>
            <a><i class="fa fa-shopping-bag" aria-hidden="true"></i> Orders</a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/manage-orders') }}" class="menu-dash {{$current ==='Vendor/manage-orders' ? 'active' : null}}">Manage Orders</a>
                <a href="{{ asset('/Vendor/processed-orders') }}" class="menu-dash {{$current ==='Vendor/processed-orders' ? 'active' : null}}">Proccessed Order</a>
              </div>
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Products</a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/addproduct') }}" class="menu-dash {{$current ==='Vendor/addproduct' ? 'active' : null}}">Add Products</a>
                <a href="{{ asset('/Vendor/approved-products') }}" class="menu-dash {{$current ==='Vendor/approved-products' ? 'active' : null}}">Products</a>
                <a href="{{ asset('/Vendor/manage-products') }}" class="menu-dash {{$current ==='Vendor/manage-products' ? 'active' : null}}">Manage Products</a>
              </div>
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Finance </a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/bank-account') }}" class="menu-dash {{$current ==='Vendor/statement' ? 'active' : null}}">Bank Account</a>
                <a href="{{ asset('/Vendor/statement') }}" class="menu-dash {{$current ==='Vendor/statement' ? 'active' : null}}">Account Statement</a>
                <a href="{{ asset('/Vendor/order-review') }}" class="menu-dash {{$current ==='Vendor/order-review' ? 'active' : null}}">Order Review</a>
                <a href="{{ asset('/Vendor/transaction-overview') }}" class="menu-dash {{$current ==='Vendor/transaction-overview' ? 'active' : null}}">Transaction Overview</a>
              </div>
            <a href="{{ asset('/Vendor/catalog') }}" class="menu-dash {{$current ==='Vendor/catalog' ? 'active' : null}}"><i class="fa fa-table" aria-hidden="true"></i> Catalogs</a>
            <a href=""><i class="fa fa-tags" aria-hidden="true" class="menu-dash"></i> Marketing </a>
              <div class="inner-links">
                <a href="{{ asset('/Vendor/marketing-center') }}" class="menu-dash {{$current ==='Vendor/marketing-center' ? 'active' : null}}"><i class="fa fa-cog" aria-hidden="true"></i> Marketing Center</a>
              </div>
          </div>
        </div>
        

   





      </div>
      <div class="col-sm-11 top-dash" style="padding:10px 0px; margin-left: 25px; width: 85%;">
                
                    <div class="dash-left">
                      <div class="title-dash">
                        <span>Dashboard &nbsp; </span>
                      </div>
                      <div class="title-dash-name">
                        <span> -&nbsp; Welcome To Zmall, {{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
                      </div>
                    </div>
                
                    <div class="dash-right">
                      <div>
                        <a href=""><span>(0)</span> <span>New Orders</span></a>
                      </div>
                      <div>
                        <a href=""><i class="fa fa-language" aria-hidden="true"></i> <span> English</span></a>
                      </div>
                      <style type="text/css">
                      #noti-men{
                      	width: 350px;
    					margin-left: -250px !important;
    					padding:0px;
    					padding-bottom: 5px;
                      }
                      #noti-men a{
                      	color: #666;
   						padding: 10px 10px;
   						cursor: pointer;
                      }
                      #noti-men a:hover{
                      	background: rgb(0,0,0, 0.05);
                      }
                      .top-noti{
                      	padding: 5px !important;
                      }
                      .drop-item-inner{
                      	display: flex;
                      	flex-direction: column;
                      	padding: 0px !important;
                      }
                      .drop-item-inner-t{
                      	display: flex;
                      	padding: 0px !important;
                      }
                      .drop-item-inner-b{
                      	display: flex;
                      	justify-content: end;
                      	padding: 0px !important;
                      }
                      .drop-item-inner-b small{
                      	font-size: 10px;
                      }
                      </style>
                      <?php $notification = notification::where('to_user',Auth::id())->where('read_at', null)->get(); ?>
                      <div class="dropdown show">
                      	
                        <a href="#" class="dropdown-toggle" id="dropdownnoti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span> <i class="fa fa-comments" aria-hidden="true"><span style="font-size: 14px; padding: 0px 2px;">{{count($notification)}}</span></i></span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownnoti" id="noti-men">
                      	<div class="top-noti">
                      		<p style="font-size: 12px; font-weight: bolder; border-bottom: 1px solid #ddd; margin-bottom: 0px;">Notifications</p>
                      	</div>
                        @if(!empty($notification))
                          @foreach($notification as $n)
                          @if($n->notification_type == 'Placed Order')
                            <a class="dropdown-item" href="/order-view/{{$n->id}}">
                            	<div class="drop-item-inner">
                            		<div class="drop-item-inner-t"><span style="text-transform: capitalize !important;">{{$n->userinfo->first_name}}</span>	&nbsp;<span> has placed an order</span> 
                            		</div>
                            		<div class="drop-item-inner-b">
                            			<small>{{$n->created_at->diffForHumans()}}</small>
                            		</div>
                            	</div>
                            	
                            </a>
                            @endif
                            @endforeach
                            @else
                            <a href="#">No Notification</a>
                         @endif
                        </div>
                        </div> 
                      <div class="dropdown show">
                        <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
                            <hr>
                            <a class="dropdown-item" href="{{ asset('/Vendor/myaccount') }}">My account</a>
                            <a href="{{ asset('Vendor/mystore/'.auth::id())}}">My Store</a>
                            <a href="{{ asset('change-pass') }}">Change Password</a>
                            <a class="dropdown-item" href="#">Contact us</a>
                            <a class="dropdown-item" href="#">Terms and policy</a>
                             <a class="dropdown-item" href="#">Help</a>
                            <hr>
                            <a class="dropdown-item" href="{{ route('logout') }}"  
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();" class="ho-dr-con-last waves-effect">            
                                                    {{ __('Logout') }}
                                                </a><br>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>  
                          </div>
                      </div>
                    </div>
                
    </div>    
      
<script>
function opennav() {
   var x = document.getElementById("myDIV");
   if (x.style.display==="none") {
    x.style.display="block";
   }
   else{
    x.style.display="none";
   }
}
function closenav() {
   var x = document.getElementById("myDIV");
   if (x.style.display==="block") {
    x.style.display="none";
   }
   else{
    x.style.display="block";
   }
}
function accnav() {
   var x = document.getElementById("accDIV");
   var y = document.getElementById("myDIV");
   if (x.style.display==="none") {
    x.style.display="block";
    y.style.display="none";
   }
   else{
    x.style.display="none";

   }
}
function accclosenav() {
   var x = document.getElementById("accDIV");
   if (x.style.display==="block") {
    x.style.display="none";
   }
   else{
    x.style.display="block";
   }
}
</script>
            
            @yield('content')
            
    </div>
    
</div>

  
  
  
  
  <script>
           $(document).ready(function(){
  $('.sidebar-inner a').click(function(){
    $('.sidebar-inner a').removeClass(".active");
    $(this).addClass(".active");
});
});
</script>
  @include('dashboard.dash-layout.footer')
  
</body>
</html>