@extends('layouts.admin')

@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

            <div class="sb2-2">

                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> All Users</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="dashboard_pdetial">
                        <div class="row">
                          <div class="col-md-4">
                            <div class="dprobx">
                              <img src="{{ asset('storage/uploads/'.$PData->images)}}" alt="" class="dpro_img" id="dashproid">
                              <img src="http://68.183.181.136/zmall/storage/uploads/shirts.png" alt="" class="dpro_img" id="dashproid1" style="display: none;">
                              <img src="http://68.183.181.136/zmall/storage/uploads/redshirt.png" alt="" class="dpro_img" id="dashproid2" style="display: none;">
                              <img src="http://68.183.181.136/zmall/storage/uploads/shirts.png" alt="" class="dpro_img" id="dashproid3" style="display: none;">
                              
                            
                          </div>
                          <br>
                        
                               <ul class="navlist">
                                    <li class="dnavsmalimg" onclick="firstimag()"><img src="http://68.183.181.136/zmall/storage/uploads/shirts.png" class="navlist_img"></li>
                                    <li class="dnavsmalimg" onclick="secondimag()"><img src="http://68.183.181.136/zmall/storage/uploads/redshirt.png" class="navlist_img"></li>
                                    <li class="dnavsmalimg" onclick="thirdimag()"><img src="http://68.183.181.136/zmall/storage/uploads/shirts.png" class="navlist_img"></li>
                                                                       
                                </ul>

                          
                        </div>
                          <div class="col-md-8">
                            <h3 class="dproduct-title">{{$PData->title}}</h3>
                            <p class="dproductprice">Current Price: <span class="dproprice">${{$PData->price}}</span></p>
                            <div class="rating">
                                    <div class="stars">
                                      <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star "></span>
                                        <span class="fa fa-star rating_star "></span>
                                        <span class="m-l-10">41 reviews</span>
                                      
                                    </div>
                                    
                                </div>
                                <br>
                            <p>{{$PData->description}}</p> 
                            <p><strong>78% </strong>of buyers enjoyed this product! <strong>(23 votes)</strong></p>

                            <h3 class="sizes">sizes:
                                    <span class="size" title="small">s</span>
                                    <span class="size" title="medium">m</span>
                                    <span class="size" title="large">l</span>
                                    <span class="size" title="xtra large">xl</span>
                                </h3>
                            <h3 class="colors">colors:
                                    <span class="color bg-amber not-available" title="Not In store"></span>
                                    <span class="color bg-green"></span>
                                    <span class="color bg-blue"></span>
                                </h3>       
                          </div>
                        </div>
<!-- descrpiton part -->
<br>
<br>
                     <div class="row">
                    <div class="col-md-12">
                       <ul class="ddetail">
                                    <li class="ddetailimg"><a onclick="descrpiton()" href="">Description</a></li>
                                    <li class="ddetailimg"><a onclick="review()" href=""> Review</a></li>                                         
                                </ul>
                    </div>
                   </div>
<br>
                  <div id="desc">
                   <div class="row">
                    <div class="col-md-12">
                      <div class="dashproddes">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bo</p>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bo</p>
                      </div>
                       
                    </div>
                   </div>
                 </div>

                   <div style="display: none" id="reve">
                   <div class="row">
                    <div class="col-md-12">
                      <div class="dashproddes">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen bo</p>
                        <div class="col-md-1">
                          <img src="http://68.183.181.136/zmall/storage/uploads/shirts.png" class="navlist_img">
                        </div>
                        <div class="col-md-11">
                          <h5>Ellen Damm</h5>
                                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                      <p>
                                        <span class="m-l-10 review_pro">Infinx Note 7</span>
                                        <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star"></span>
                                        <span class="fa fa-star checked rating_star "></span>
                                        <span class="fa fa-star rating_star "></span>
                                        <span style="float: right;color:gray;">Dec 26,2021</span>
                                         </p>
                        </div>
                        <hr>     
                      </div>   
                    </div>
                   </div>
                 </div>


  

                      </div>
                    </div>
                    
                   </div>
                   <!--  -->
                   


               </div>
           </div>
       <script type="text/javascript">
        var onee=document.getElementById("dashproid");
         var one=document.getElementById("dashproid1");
         var two=document.getElementById("dashproid2");
         var three=document.getElementById("dashproid3");
         var des=document.getElementById("desc");
         var rev=document.getElementById("reve");
      
         function firstimag() {
          if(one.style.display=="none")
          {
            onee.style.display="none";
            two.style.display="none";
            three.style.display="none";
            one.style.display="block";

           // body...
          }
         }
         function secondimag() {
          if(two.style.display=="none")
          {
            onee.style.display="none";
            one.style.display="none";
            three.style.display="none";
            two.style.display="block";

           // body...
          }
         }
         function thirdimag() {
          if(three.style.display=="none")
          {
            onee.style.display="none";
            three.style.display="block";
            one.style.display="none";
            two.style.display="none";

           // body...
          }
         }
          function descrpiton() {
          if(rev.style.display=="none")
          {
            des.style.display="block";
            rev.style.display="none";
           

           // body...
          }
         }
          function review() {
          if(rev.style.display=="none")
          {    des.style.display="none";
               rev.style.display="block";
           

           // body...
          }
         }
        

       </script>
@endsection
