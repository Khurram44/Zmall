   <?php $current_route_name =  Route::currentRouteName();?>
   <div class="row col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">

      
       <!--  <ul class="nav-second-level"> -->
            
             <a href="{{ url('dashboard') }}" class="list-group-item {{ $current_route_name === 'dashboard' ? 'active' : null }}  text-center">
                  <h4 class="fa fa-shopping-basket"></h4><br/>My Zmall 
                  
                    
                </a>
              
                 
               

                <a href="{{ url('account-setting') }}" class="list-group-item {{ $current_route_name === 'accountsetting' ? 'active' : null }} text-center">
                  <h4 class="fa fa-cogs"></h4><br/>Account Settings
                  
                </a>

                @if(Auth::user()->role  == 'vendor')
                <a href="{{url('inventory')}}" class="list-group-item {{$current_route_name === 'product_inventory' ? 'active':null}} text-center">
                 <h4 class="fa fa-cogs"></h4><br/>Inventory Management
                 </a>
                 @endif
                
                 
               

        

                  <a href="{{ url('orders/placed') }}" class="list-group-item text-center
                  @if($current_route_name==='orders' || $current_route_name==='processed' || $current_route_name==='shipped' || $current_route_name==='delivered' || $current_route_name==='dispute' || $current_route_name==='cancelled' || $current_route_name==='order-details') active @endif">
                  <h4 class="fa fa-cube"></h4><br/>Orders
                
                </a>
              



                <a href="{{ asset('/wishlist') }}" class="list-group-item {{$current_route_name==='dbrdcustwishlist' ? 'active':null}} text-center">
                  <h4 class="fa fa-heart"></h4><br/>Wishlist
                </a>

              


                <a href="{{ asset('/contactbook') }}" class="list-group-item {{$current_route_name==='contactbook' ? 'active':null}} text-center">
                  <h4 class="fa fa-map-signs"></h4><br/>My Shipping Address
                </a>

                <a href="{{ asset('/my-billing-address') }}" class="list-group-item {{$current_route_name==='mybillingaddress' ? 'active':null}} text-center">
                  <h4 class="fa fa-map-signs"></h4><br/>Billing Method 
                </a>

                <a href="{{ asset('/stores-followed') }}" class="list-group-item {{$current_route_name==='stores_followed' ? 'active':null}} text-center">
                  <h4 class="fa fa-map-signs"></h4><br/>Stores Followed 
                </a>
            



                <a href="{{ asset('/change-pass') }}" class="list-group-item {{$current_route_name==='changepass' ? 'active':null}} text-center">
                  <h4 class="fa fa-lock"></h4><br/>Change Password
                </a>

                 <a href="{{asset('/payout-history') }}" class="list-group-item {{ $current_route_name === 'payout_history' ? 'active' : null }} text-center">
                  <h4 class="fa fa-money"></h4><br/>Payout History
                  
                </a>
            
<!-- 
          </ul>
 -->

              </div>
            </div>

          <!--  <ul class="nav nav-second-level">
                    <li class="{{ Request::segment(1) === 'programs' ? 'active' : null }}">
                        <a href="{{ url('programs' )}}" ></i> Programs</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'beneficiaries' ? 'active' : null }}">
                        <a href="{{url('beneficiaries')}}"> Beneficiaries</a>
                    </li>
                    <li class="{{ Request::segment(1) === 'indicators' ? 'active' : null }}">
                        <a href="{{url('indicators')}}"> Indicators</a>
                    </li>                     
                </ul>  -->
