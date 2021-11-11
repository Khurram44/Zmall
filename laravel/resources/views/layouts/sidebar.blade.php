<?php 
$user_id = Auth::id();
$modules =  \DB::table('modules')->get(); 
$userprofile =  \DB::table('users')->where('id', $user_id)->first();
?>
<div class="sb2-1" style="width: 200px;" >
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="{{ asset('/frontend/storage/uploads/'.$userprofile->image) }}" alt="">
                        </li>
                        <li>
                            <h5>{{$userprofile->username}}
                                <span>{{$userprofile->first_name." ".$userprofile->last_name}}</span>
                            </h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="{{ asset('admin/dashboard') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Administrator</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                   <?php if(!empty($modules)){
                                                        foreach($modules as $e){
                                            

                                                            ?>
                                    <li><a href="{{ asset('/admin/config/'.$e->id) }}"> <?php echo $e->name; ?></a>
                                    </li>
                                   <?php } }?>
                                   <li><a href="{{ asset('/admin/config/attributies/7000')}}">Attributes</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                     
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('admin/users/allcustomers')}}">Customers</a>
                                    <li><a href="{{asset('/admin/users/allvendors')}}">Vendors</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Subscription</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('/admin/vendor/pending-subscription')}}">Pending Subscription</a>
                                    <li><a href="{{asset('/admin/vendor/approved-subscription')}}">Approved Subscription</a></li>
                                    <li><a href="{{asset('/admin/vendor/without-subscription')}}">Vendor Without Subscription</a></li>
                                </ul>
                            </div>
                        </li>
                       
                        <li><a href="{{ asset('/admin/advertisement/index') }}">
                            <i class="fa fa-file" aria-hidden="true"></i> Advertisement</a>
                        </li>
                        <li><a href="{{ asset('/admin/shippment/all') }}">
                            <i class="fa fa-file" aria-hidden="true"></i> Shippment</a>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Orders</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('/admin/orders/placed')}}">Placed</a></li>
                                    <li><a href="{{asset('/admin/orders/pending')}}">Pending</a></li>
                                    <li><a href="{{asset('/admin/orders/processed')}}">Processed</a>
                                    
                                    <li><a href="{{asset('/admin/orders/shipped')}}">Shipped</a></li>
                                    <li><a href="{{asset('/admin/orders/delivered')}}">Delivered</a></li>
                                    <li><a href="{{asset('/admin/orders/dispute')}}">Disputed</a> </li>
                                    <li><a href="{{asset('/admin/orders/cancelled')}}">Cancelled</a> </li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Products</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('admin/products/allproducts')}}">Approved Products</a></li>
                                    <li><a href="{{asset('/admin/products/pendingproducts')}}">Pending Products</a></li>
                                    <li><a href="{{asset('/admin/products/rejectedproducts')}}">Rejected Products</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Flyers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('admin/orders/approved-flyers')}}">Approved Flyers</a></li>
                                    <li><a href="{{asset('/admin/orders/pending-flyer')}}">Pending Flyers</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Financial Statement</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('admin/payment/pending')}}">Pending Payment</a></li>
                                    <li><a href="{{asset('/admin/payment/clear')}}">Clear Payment</a></li>
                                    <li><a href="{{asset('/admin/payment/withdraw')}}">Withdraw Payment</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Marketing</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{asset('admin/marketing/campaign ')}}">Campaign</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li><a href="{{asset('admin/service')}}" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Services</a>

                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-file" aria-hidden="true"></i> Website Pages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="{{ asset('/admin/slider/index') }}"> Slider</a>
                                    <li><a href="{{ asset('/admin/faqs/index') }}">Faqs</a></li>
                                    <li><a href="{{ asset('/admin/return-and-refund/index') }}">Return & Refund</a></li>
                                  <!-- <li><a href="{{ asset('/admin/news/index') }}">News</a></li> -->
                                    <li><a href="{{ asset('/admin/blog/index') }}">Blog</a></li>
                                    <li><a href="{{ asset('/admin/seller/seller-story') }}">
                                         Seller Stories</a>
                                    </li>
                                    <li><a href="{{ asset('/admin/news_letter') }}">Newsletter</a>
                                    <li><a href="{{ asset('/admin/aboutus') }}">About Us</a>
                                    </li>
                                    <li><a href="{{ asset('/admin/ourteam/index') }}">Our Team</a>
                                    </li>
                                    <li><a href="{{ asset('/admin/privacy') }}">Privacy Policy</a>
                                    </li>
                                    <li><a href="{{ asset('/admin/terms') }}">Terms & Conditions</a>
                                    </li>
                                   
                                    
                                </ul>
                            </div>
                        </li>
                         <li><a href="{{asset('/admin/contact/all')}}" class="collapsible-header"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a>
                           
                        </li> 
                         <li><a href="{{ asset('/admin/generalsettings') }}" class="collapsible-header"><i class="fa fa-cog" aria-hidden="true"></i> General Settings</a>
                           
                        </li> 
                        <li><a href="{{ asset('/admin/profile') }}" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Account Settings</a>
                           
                        </li> 

                            <li>
                                <a  href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                           
                            </li>
                    </ul>
                </div>
            </div>