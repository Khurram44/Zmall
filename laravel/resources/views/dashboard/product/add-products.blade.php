@extends('dashboard.dash-layout.layout')
@section('content')
<?php $current=Route::getFacadeRoot()->current()->uri(); ?>
<?php
use App\Manage;

?>
<style type="text/css">
.modal-content{
  height: 500px;
}
  .search{
    display: flex;
  }
  .search-l{
    width: 250px;
  }
  .search-l ul{
    padding-inline-start: 0px;
  }
  .search-l ul li{
    list-style: none;
    margin-top: 10px;
    padding-inline-start: 0px;
  }
  .search-l ul li a{
    text-decoration: none;
    font-size: 14px;
    padding: 10px 15px;
    color: #111;
  }
  .sr input{
    height: 36px!important;
    border-radius: 4px!important;
    border: 1px solid #ddd!important;
    background-color: #fff!important;
    font-size: 14px;
    line-height: 16px;
    width: 100%;
    margin: .5px 0 0!important;
    width: 100%;
    color: #333!important;
    outline: none;
    padding: 10px 0 10px 18px!important;
  }
  .sr input:focus{
    border: 1px solid #fe9126 !important;
  }
  .search-r{
    width: 100%;
    padding: 10px 20px;
  }
  .recent{
    font-size: 14px;
    line-height: 14px;
    color: #262938;
    margin: 14px 0 8px 14px;
  }
  .recent-list ul li{
    list-style: none;
    margin-top: 5px;
  }
  .recent-list ul{
     padding-inline-start: 10px;
  }

  .recent-list ul li a{
    text-decoration: none;
    margin: 4px;
    font-size: 14px;
    line-height: 16px;
    color: #666;
    cursor: pointer;
  }
    .recent-list ul li a:hover{
      color: #fe9126;
    }
    .left-manu{
      height: 430px;
      overflow-y: scroll;
      border-right: 1px solid #ddd;
    }
    .left-manu ul li a:hover{
      color: #fe9126 !important;
      font-weight: 500;
    }
    .subtype li a{

    }
    .subtype li{
    list-style: none;
    margin-top: 5px;
  }
  .subtype{
     padding-inline-start: 10px;
  }

  .subtype li a{
    text-decoration: none;
    font-size: 14px;
    line-height: 18px;
    color: #666;
    cursor: pointer;
    margin-bottom: 4px;
  }
    .subtype li a:hover{
      color: #fe9126;
    }
    .subcaterory > a{
      text-decoration: none;
      font-size: 16px;
      line-height: 18px;
      font-weight: 500;
      margin-bottom: 12px;
      color: #000;
    }
    .all-cat{
      overflow-x: hidden;
      overflow-y: scroll;
      height: 430px;
    }
    .but button{
      margin-right: 5px;
    }
    .bod-m h6{
      font-size: 20px;
      line-height: 28px;
      font-weight: 600;
      padding-top: 16px;
      padding-bottom: 8px;
      text-align: center;
    }
    .bod-m p{
      font-size: 16px;
      line-height: 20px;
      text-align: center;
    }
    .img-m{
      height: 250px;
      width: auto;
      display: flex;
      justify-content: center;
    }
    .img-m img{
      height: 250px;
      object-fit: cover;
      overflow: hidden;
    }
    .guid-btn{
      margin-top: 50px;
      display: flex;
      justify-content: center;
    }
    .guid-btn2{
      margin-top: 10px;
      display: flex;
      justify-content: center;
    }
    .nxt-btn{
      outline: none;
      border: 1px solid #fe9126;
      color: #fff;
      background: #fe9126;
      padding: 5px 10px;
      border-radius: 5px;
      margin: 0px 5px;
    }
    .pre-btn{
      outline: none;
      border: 1px solid #333;
      color: #333;
      background: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      margin: 0px 5px;
    }
    .img-m-g{
      display: flex;
      justify-content: space-around;
    }
    .slide{
      width: 150px;
      height: auto;
    }
    .slide img {
    width: 150px;
    max-height: 230px;
    object-fit: contain;
  }
    .slide p{
      text-align: center;
      font-weight: 14px;
      color: #222;
    }
    .fa-check{
      color: green;
      border: 3px solid green;
      border-radius: 50%;

    }
    .fa-times-circle-o{
      color: red;
    }
    .slide i{
      position: relative;
      right: 10px;
      top: 20px;
    }
    .nmbr{
      position: relative !important;
      left: 130px !important;
      top: 20px !important;
      color: #ddd;
      width: 50px;
      height: 50px;
      border: 1px solid #ddd;
      border-radius: 25px;
    }
    .shoes-size li{
          list-style:none;
          margin-top: 10px;
        }
        .shoes-size li a{
          text-decoration:none;

        }
    @media screen and (max-width: 800px){
        .add-pro-top{
            margin:0px !important;
        }
        .add-pro-top b {
            font-weight: 200;
            color: rgb(0,0,0,0.5);
            padding: 0px 20px;
        }
        .res-pro{
            margin: 0px !important;
            height:100%:;
        }
        .pro-add-left {
            position: relative;
            top:0;
            left: 10px;
        }
       .addpro-img img{
           margin-top:50px;
           width:100%;
           height:auto;
       }
       .pro-add-btn{
           display: flex;
           justify-content: center;
           flex-direction:column;
           align-items: center;
       }
    }
</style>
<div class="row">
        
        <div class="col-sm-10">
          <div class="add-pro-top " style="margin-left:30px;">
            <b>
            Zmall operates a zero tolerance policy against fraud and counterfeit goods. Sellers engaging in such activities will be suspended from the platform.
          </b>
          </div>  

          <div class="row res-pro" style="margin-top: 100px;">
            <div class="col-sm-6">
              <div class="pro-add-left">
                <div class="pro-add-desc">
                  <h4>Add products to get started</h4>
                  <p>Adding a single product takes less than 30 seconds!</p>
                  <p>Products will be reviewed before they are visible on ZMall.</p>
                </div>
                <br>
                <div class="pro-add-btn">
                    <form>
                        <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add a Product</button>
                    </form>
                  
                  <button>Add Product in Bulk</button>
                </div>
                
              </div>
            </div>
            <div class="col-sm-6">
              <div class="addpro-img">
                <img src="/frontend/img/vendor_dash/add_products.png" class="img-fluid">
              </div>
            </div>
          </div>      
        </div>
        
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="mod1">
       <div class="modal-header">
        <b class="modal-title" id="exampleModalLabel">Select a product category</b>
        <div class="but" style="float: right;">
        <button style="background: none; border: none; color: #fe9126; outline: none;"><i class="fa fa-picture-o" aria-hidden="true"></i> Take quick tour of image guidelines</button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="vertical-align: middle;">
          <span style="color: #111;" aria-hidden="true">&times;</span>
        </button>
        </div>
      </div>
      <div class="search">
        <div class="search-l">
          <div class="left-manu">
            <ul>
              <li><a href="#" onclick="showcat('1');">All Category</a></li>
              @if(!empty($Categories))
              @foreach($Categories as $c)
              <li><a href="#" onclick="showcat('2','{{$c->id}}');">{{ $c->name }}</a></li>
              @endforeach
            @endif
            </ul>
          </div>
        </div>
        <div class="search-r">
         <!--  #######################all################### -->
              <div class="" id="all">
                <div class="sr">
                  <input type="text" name="" placeholder="Seach Here">
                </div>
                <div class="recent-list">
                  <div class="recent">
                    <b>Recently used by you</b> 
                  </div>
                  <ul>
                    <li><a href="#"> Women</a></li>
                    <li><a href="#"> Men</a></li>
                  </ul>
                </div>
              </div>
    <!-- ################################################# -->
    <!--  #######################women################### -->
              <div class="" id="women" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 1)
                <?php
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 1)->where('is_deleted', 0)->orderBy('name')->get();
                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="col-sm-3 subcaterory">
                    <a>{{$sc->name}}</a>
                   @foreach($sub_categories_types as $sct)
                    <ul class="subtype">
                      <li><a onclick="womenre('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    </ul>
                    @endforeach
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
          <style>
              .subtype li{
                  padding-inline-start:0px;
              }
              .subcaterory{
                  float:left; 
                  margin-left:30px;
              }
          </style>
       <!--    ############################################### -->
       <!--  #######################men################### -->
              <div class="" id="men" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 2)
                <?php 
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 2)->where('is_deleted', 0)->orderBy('name')->get();
                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="subcaterory" style="float:left; margin-left:30px;">
                    <a>{{$sc->name}}</a>
                    <ul class="subtype">
                   @foreach($sub_categories_types as $sct)
                    
                      <li style="padding-inline-start:0px;"><a onclick="menre('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    
                    @endforeach
                    </ul>
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
       <!--    ############################################### -->
       <!--  #######################kid################### -->
              <div class="" id="kid" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 510)
                <?php 
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 510)->where('is_deleted', 0)->orderBy('name')->get();
                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="col-sm-3 subcaterory">
                    <a>{{$sc->name}}</a>
                   @foreach($sub_categories_types as $sct)
                    <ul class="subtype">
                      <li><a onclick="kidre('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    </ul>
                    @endforeach
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
       <!--    ############################################### -->
       <!--  #######################lifestyle################### -->
              <div class="" id="lifestyle" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 516)
                <?php 
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 516)->where('is_deleted', 0)->orderBy('name')->get();
                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="col-sm-3 subcaterory">
                    <a>{{$sc->name}}</a>
                   @foreach($sub_categories_types as $sct)
                    <ul class="subtype">
                      <li><a onclick="lifestylere('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    </ul>
                    @endforeach
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
       <!--    ############################################### -->
       <!--  #######################beauty################### -->
              <div class="" id="beauty" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 323)
                <?php 
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 323)->where('is_deleted', 0)->orderBy('name')->get();
                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="col-sm-3 subcaterory">
                    <a>{{$sc->name}}</a>
                   @foreach($sub_categories_types as $sct)
                    <ul class="subtype">
                      <li><a onclick="beautyre('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    </ul>
                    @endforeach
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
       <!--    ############################################### -->
       <!--  #######################electronic################### -->
              <div class="" id="electronic" style="display: none;">
              <div class="all-cat">
                @if(!empty($Categories))
              @foreach($Categories as $c)
              @if($c->id == 745)
                <?php 
                $sub_categories = Manage::where('module_id', 2)->where('parent_id', 745)->where('is_deleted', 0)->orderBy('name')->get();

                ?>
                 @foreach($sub_categories as $sc)
                  <?php 
                    $sub_categories_types = Manage::where('module_id', 3)->where('parent_id', $sc->id)->where('is_deleted', 0)->orderBy('name')->get();
                  ?>
                  <div class="col-sm-3 subcaterory">
                    <a>{{$sc->name}}</a>
                   @foreach($sub_categories_types as $sct)
                    <ul class="subtype">
                      <li><a onclick="electre('{{$sct->name}}','{{$c->id}}','{{$sc->id}}','{{$sct->id}}');"> {{$sct->name}}</a></li>
                    </ul>
                    @endforeach
                  </div>
                  @endforeach
                  @endif
                  @endforeach
                  @endif
             </div>
          </div>
       <!--    ############################################### -->
        </div>
      </div>
    </div>

<!-- #####################Beauty################### -->
<div class="modal-content" id="beauty1" style="display:none;">
  <div class="bod-m">
    <h6>Before you add products take a quick tour of the guidelines</h6>
    <p>It takes less than 20 seconds and accelerates product approval</p>
    <div class="img-m">
      <img src="/frontend/img/vendor_dash/guide/banners/Beauty.webp" alt="">
    </div>
    <div class="guid-btn">
        <form  action="/Vendor/new-product">
          <input type="hidden" value="" name="sessionresult11" id="sessionresult11">
          <input type="hidden" value="" name="cateid11" id="cateid11">
          <input type="hidden" value="" name="scateid11" id="scateid11">
          <input type="hidden" value="" name="sctcateid11" id="sctcateid11">
             <button class="pre-btn">Skip & Add product</button>
        </form>
     
      <button class="nxt-btn" onclick="beautyre2();">Begin Tour</button>
    </div>
  </div>
</div>

<div class="modal-content"  id="beauty2" style="display:none;">
  <div class="bod-m">
    <h6>Good primary images increase page views upto 4x</h6>
    <p>Bad primary product images reduce sales by upto 7x</p>
    <div class="img-m-g">
      <div class="slide">
       
        <img src="/frontend/img/vendor_dash/guide/beauty/1.png">
        <p>Clean background, product in focus and high resolution</p>
      </div>
      <div class="slide">
    
        <img src="/frontend/img/vendor_dash/guide/beauty/2.png">
        <p>No product in focus. Multiple products shown together</p>
      </div>
      <div class="slide">
     
        <img src="/frontend/img/vendor_dash/guide/beauty/3.png">
        <p>Model, text, logo, photoshop or busy background in the image</p>
      </div>
      <div class="slide">
      
        <img src="/frontend/img/vendor_dash/guide/beauty/4.png">
        <p>Collage showing application. Use separate images</p>
      </div>
      <div class="slide">
     
       <img src="/frontend/img/vendor_dash/guide/beauty/5.png">
        <p>Cropped product on model and product in one image. Use separate images</p>
      </div>
    </div>
    <div class="guid-btn2">
      
      <button class="nxt-btn" onclick="beautyre3();">  Next  </button>
      <button class="pre-btn" onclick="extguide()">Select another category</button>
    </div>
  </div>
</div>

<div class="modal-content" id="beauty3" style="display:none;">
        <div class="bod-m">
          <h6>Detailed image angles and sequence improve sales by 3x</h6>
          <p>The images must reflect the product, be appropriate, and in this sequence</p>
          <div class="img-m-g">
            <div class="slide">
            
              <img src="/frontend/img/vendor_dash/guide/step/beauty2.png">
              <p>Product shown clearly</p>
            </div>
            <div class="slide">
              
              <img src="/frontend/img/vendor_dash/guide/step/beauty3.png">
              <p>Open product focus</p>
            </div>
            <div class="slide">
      
              <img src="/frontend/img/vendor_dash/guide/step/beauty5.png">
              <p>Product on model</p>
            </div>
            <div class="slide">
           
              <img src="/frontend/img/vendor_dash/guide/step/beauty4.png">
              <p>USP and details of the product</p>
            </div>
            <div class="slide">
       
              <img src="/frontend/img/vendor_dash/guide/step/beauty1.png">
              <p>Product with packaging</p>
            </div>
          </div>
          <div class="guid-btn2">
            <form action="/Vendor/new-product">
              <input type="hidden" name="sessionresult12" id="sessionresult12">
              <input type="hidden" value="" name="cateid12" id="cateid12">
              <input type="hidden" value="" name="scateid12" id="scateid12">
              <input type="hidden" value="" name="sctcateid12" id="sctcateid12">
                <button class="nxt-btn" >  Proceed to add products </button>
                </form>
                <button class="pre-btn" onclick="extguide()">Select another category</button>
            
            
          </div>
        </div>
</div>
<!-- #####################Beauty Close################### -->


<!-- #####################WOMEN################### -->

<div class="modal-content" id="women1" style="display:none;">
      <div class="bod-m">
        <h6>Before you add products take a quick tour of the guidelines</h6>
        <p>It takes less than 20 seconds and accelerates product approval</p>
        <div class="img-m">
          <img src="/frontend/img/vendor_dash/guide/banners/Women.webp" alt="">
        </div>
        <div class="guid-btn">
            <form action="/Vendor/new-product">
              <input type="hidden" value="" name="sessionresult21" id="sessionresult21">
              <input type="hidden" value="" name="cateid21" id="cateid21">
              <input type="hidden" value="" name="scateid21" id="scateid21">
              <input type="hidden" value="" name="sctcateid21" id="sctcateid21">
                 <button class="pre-btn">Skip & Add product</button>
            </form>
         
          <button class="nxt-btn" onclick="womenre2();">Begin Tour</button>

        </div>
      </div>
</div>

<div class="modal-content" id="women_shoe" style="display:none;">
      <div class="bod-m">
        <h6>Shoes Size</h6>
        <p>Please select the size standard</p>
        <br><br>
        <form action="/Vendor/new-product">
        <ul class="shoes-size">
          <li><button type="submit" name="uk" value="UK">UK</button></li>
          <li><button type="submit" name="us" value="US">US</button></li>
        </ul>
              <input type="hidden" value="" name="sessionresult211" id="sessionresult211">
              <input type="hidden" value="" name="cateid211" id="cateid211">
              <input type="hidden" value="" name="scateid211" id="scateid211">
              <input type="hidden" value="" name="sctcateid211" id="sctcateid211">
        </form>
      </div>
</div>




<div class="modal-content" id="women2" style="display:none;">
      <div class="bod-m">
        <h6>WOMENGood primary images increase page views upto 4x</h6>
        <p>Bad primary product images reduce sales by upto 7x</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/women/1.png">
            <p>Clean background, product in focus and high resolution</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/women/2.png">
            <p>No product in focus. Multiple products shown together</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/women/3.png">
            <p>Model, text, logo, photoshop or busy background in the image</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/women/4.png">
            <p>Collage showing application. Use separate images</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/women/5.png">
            <p>Cropped product on model and product in one image. Use separate images</p>
          </div>
        </div>
        <div class="guid-btn2">
          
          <button class="nxt-btn" onclick="womenre3();">  Next  </button>
          <button class="pre-btn" onclick="extguide()">Select another category</button>
        </div>
      </div>
</div>


<div class="modal-content" id="women3" style="display:none;">
      <div class="bod-m">
        <h6>WOMENDetailed image angles and sequence improve sales by 3x</h6>
        <p>The images must reflect the product, be appropriate, and in this sequence</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/women1.png">
            <p>Product shown clearly</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/women2.png">
            <p>Open product focus</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/women3.png">uide/seq_3.jpg">
            <p>Product on model</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/women4.png">
            <p>USP and details of the product</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/women5.png">
            <p>Product with packaging</p>
          </div>
        </div>
        <div class="guid-btn2">
          <form action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult22" id="sessionresult22">
            <input type="hidden" value="" name="cateid22" id="cateid22">
            <input type="hidden" value="" name="scateid22" id="scateid22">
            <input type="hidden" value="" name="sctcateid22" id="sctcateid22">
              <button class="nxt-btn">  Proceed to add products </button>
              </form>
              <button class="pre-btn" onclick="extguide()">Select another category</button>
          
          
        </div>
      </div>
</div>

<!-- #####################END WOMEN################### -->
<!-- #####################MEN################### -->

<div class="modal-content" id="men1" style="display:none;">
      <div class="bod-m">
        <h6>Before you add products take a quick tour of the guidelines</h6>
        <p>It takes less than 20 seconds and accelerates product approval</p>
        <div class="img-m">
          <img src="/frontend/img/vendor_dash/guide/banners/Men.webp" alt="">
        </div>
        <div class="guid-btn">
            <form  action="/Vendor/new-product">
              <input type="hidden" value="" name="sessionresult31" id="sessionresult31">
              <input type="hidden" value="" name="cateid31" id="cateid31">
              <input type="hidden" value="" name="scateid31" id="scateid31">
              <input type="hidden" value="" name="sctcateid31" id="sctcateid31">
                 <button class="pre-btn">Skip & Add product</button>
            </form>
         
          <button class="nxt-btn" onclick="menre2();">Begin Tour</button>
        </div>
      </div>
</div>

<div class="modal-content" id="men2" style="display:none;">
      <div class="bod-m">
        <h6>MENGood primary images increase page views upto 4x</h6>
        <p>Bad primary product images reduce sales by upto 7x</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/men/1.png">
            <p>Clean background, product in focus and high resolution</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/men/2.png">
            <p>No product in focus. Multiple products shown together</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/men/3.png">
            <p>Model, text, logo, photoshop or busy background in the image</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/men/4.png">
            <p>Collage showing application. Use separate images</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/men/5.png">
            <p>Cropped product on model and product in one image. Use separate images</p>
          </div>
        </div>
        <div class="guid-btn2">
          
          <button class="nxt-btn" onclick="menre3();">  Next  </button>
          <button class="pre-btn" onclick="extguide()">Select another category</button>
        </div>
      </div>
</div>


<div class="modal-content" id="men3" style="display:none;">
      <div class="bod-m">
        <h6>WOMENDetailed image angles and sequence improve sales by 3x</h6>
        <p>The images must reflect the product, be appropriate, and in this sequence</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/men1.png">
            <p>Product shown clearly</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/men2.png">
            <p>Open product focus</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/men3.png">
            <p>Product on model</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/men4.png">
            <p>USP and details of the product</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/men5.png">
            <p>Product with packaging</p>
          </div>
        </div>
        <div class="guid-btn2">
          <form action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult32" id="sessionresult32">
            <input type="hidden" value="" name="cateid32" id="cateid32">
            <input type="hidden" value="" name="scateid32" id="scateid32">
            <input type="hidden" value="" name="sctcateid32" id="sctcateid32">
              <button class="nxt-btn">  Proceed to add products </button>
          </form>
              <button class="pre-btn" onclick="extguide()">Select another category</button>
          
          
        </div>
      </div>
</div>

<!-- #####################END MEN################### -->

<!-- #####################KID################### -->

<div class="modal-content" id="kid1" style="display:none;">
      <div class="bod-m">
        <h6>Before you add products take a quick tour of the guidelines</h6>
        <p>It takes less than 20 seconds and accelerates product approval</p>
        <div class="img-m">
          <img src="/frontend/img/vendor_dash/guide/banners/Kids.webp" alt="">
        </div>
        <div class="guid-btn">
            <form  action="/Vendor/new-product">
              <input type="hidden" value="" name="sessionresult41" id="sessionresult41">
              <input type="hidden" value="" name="cateid41" id="cateid41">
              <input type="hidden" value="" name="scateid41" id="scateid41">
              <input type="hidden" value="" name="sctcateid41" id="sctcateid41">
                 <button class="pre-btn">Skip & Add product</button>
            </form>
         
          <button class="nxt-btn" onclick="kidre2();">Begin Tour</button>
        </div>
      </div>
</div>

<div class="modal-content" id="kid2" style="display:none;">
      <div class="bod-m">
        <h6>MENGood primary images increase page views upto 4x</h6>
        <p>Bad primary product images reduce sales by upto 7x</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/kid/1.png">
            <p>Clean background, product in focus and high resolution</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/kid/2.png">
            <p>No product in focus. Multiple products shown together</p>
          </div>
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/kid/3.png">
            <p>Model, text, logo, photoshop or busy background in the image</p>
          </div>
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/kid/4.png">
            <p>Collage showing application. Use separate images</p>
          </div>
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/kid/5.png">
            <p>Cropped product on model and product in one image. Use separate images</p>
          </div>
        </div>
        <div class="guid-btn2">
          
          <button class="nxt-btn" onclick="kidre3();">  Next  </button>
          <button class="pre-btn" onclick="extguide()">Select another category</button>
        </div>
      </div>
</div>


<div class="modal-content" id="kid3" style="display:none;">
      <div class="bod-m">
        <h6>WOMENDetailed image angles and sequence improve sales by 3x</h6>
        <p>The images must reflect the product, be appropriate, and in this sequence</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/kid2.png">
            <p>Product shown clearly</p>
          </div>
          <div class="slide">
           <img src="/frontend/img/vendor_dash/guide/step/kid3.png">
            <p>Open product focus</p>
          </div>
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/step/kid4.png">
            <p>Product on model</p>
          </div>
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/step/kid5.png">
            <p>USP and details of the product</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/kid1.png">
            <p>Product with packaging</p>
          </div>
        </div>
        <div class="guid-btn2">
          <form action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult42" id="sessionresult42">
            <input type="hidden" value="" name="cateid42" id="cateid42">
            <input type="hidden" value="" name="scateid42" id="scateid42">
            <input type="hidden" value="" name="sctcateid42" id="sctcateid42">
              <button class="nxt-btn">  Proceed to add products </button>
              </form>
              <button class="pre-btn" onclick="extguide()">Select another category</button>
          
          
        </div>
      </div>
</div>

<!-- #####################END KID################### -->
<!-- #####################Lifestyle################### -->

<div class="modal-content" id="lifestyle1" style="display:none;">
      <div class="bod-m">
        <h6>Before you add products take a quick tour of the guidelines</h6>
        <p>It takes less than 20 seconds and accelerates product approval</p>
        <div class="img-m">
          <img src="/frontend/img/vendor_dash/guide/banners/Lifestyle.webp" alt="">
        </div>
        <div class="guid-btn">
            <form  action="/Vendor/new-product">
              <input type="hidden" value="" name="sessionresult51" id="sessionresult51">
              <input type="hidden" value="" name="cateid51" id="cateid51">
              <input type="hidden" value="" name="scateid51" id="scateid51">
              <input type="hidden" value="" name="sctcateid51" id="sctcateid51">
                 <button class="pre-btn">Skip & Add product</button>
            </form>
         
          <button class="nxt-btn" onclick="lifestylere2();">Begin Tour</button>
        </div>
      </div>
</div>

<div class="modal-content" id="lifestyle2" style="display:none;">
      <div class="bod-m">
        <h6>MENGood primary images increase page views upto 4x</h6>
        <p>Bad primary product images reduce sales by upto 7x</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/lifestyle/1.png">
            <p>Clean background, product in focus and high resolution</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/lifestyle/2.png">
            <p>No product in focus. Multiple products shown together</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/lifestyle/3.png">
            <p>Model, text, logo, photoshop or busy background in the image</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/lifestyle/4.png">
            <p>Collage showing application. Use separate images</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/lifestyle/5.png">
            <p>Cropped product on model and product in one image. Use separate images</p>
          </div>
        </div>
        <div class="guid-btn2">
          
          <button class="nxt-btn" onclick="lifestylere3();">  Next  </button>
          <button class="pre-btn" onclick="extguide()">Select another category</button>
        </div>
      </div>
</div>


<div class="modal-content" id="lifestyle3" style="display:none;">
      <div class="bod-m">
        <h6>WOMENDetailed image angles and sequence improve sales by 3x</h6>
        <p>The images must reflect the product, be appropriate, and in this sequence</p>
        <div class="img-m-g">
          <div class="slide">
             <img src="/frontend/img/vendor_dash/guide/step/lifestyle1.png">
            <p>Product shown clearly</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/lifestyle2.png">
            <p>Open product focus</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/lifestyle3.png">
            <p>Product on model</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/lifestyle4.png">
            <p>USP and details of the product</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/lifestyle5.png">
            <p>Product with packaging</p>
          </div>
        </div>
        <div class="guid-btn2">
          <form action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult52" id="sessionresult52">
            <input type="hidden" value="" name="cateid52" id="cateid52">
            <input type="hidden" value="" name="scateid52" id="scateid52">
            <input type="hidden" value="" name="sctcateid52" id="sctcateid52">
              <button class="nxt-btn">  Proceed to add products </button>
              </form>
              <button class="pre-btn" onclick="extguide()">Select another category</button>
          
          
        </div>
      </div>
</div>

<!-- #####################END Lifestyle################### -->

<!-- #####################Elect################### -->

<div class="modal-content" id="elect1" style="display:none;">
      <div class="bod-m">
        <h6>Before you add products take a quick tour of the guidelines</h6>
        <p>It takes less than 20 seconds and accelerates product approval</p>
        <div class="img-m">
          <img src="/frontend/img/vendor_dash/guide/banners/Electronics.webp" alt="">
        </div>
        <div class="guid-btn">
            <form  action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult61" id="sessionresult61">
            <input type="hidden" value="" name="cateid61" id="cateid61">
            <input type="hidden" value="" name="scateid61" id="scateid61">
            <input type="hidden" value="" name="sctcateid61" id="sctcateid61">
                 <button class="pre-btn">Skip & Add product</button>
            </form>
         
          <button class="nxt-btn" onclick="electre2();">Begin Tour</button>
        </div>
      </div>
</div>

<div class="modal-content" id="elect2" style="display:none;">
      <div class="bod-m">
        <h6>MENGood primary images increase page views upto 4x</h6>
        <p>Bad primary product images reduce sales by upto 7x</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/elect/1.png">
            <p>Clean background, product in focus and high resolution</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/elect/2.png">
            <p>No product in focus. Multiple products shown together</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/elect/3.png">
            <p>Model, text, logo, photoshop or busy background in the image</p>
          </div>
          <div class="slide">
           <img src="/frontend/img/vendor_dash/guide/elect/4.png">
            <p>Collage showing application. Use separate images</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/elect/5.png">
            <p>Cropped product on model and product in one image. Use separate images</p>
          </div>
        </div>
        <div class="guid-btn2">
          
          <button class="nxt-btn" onclick="electre3();">  Next  </button>
          <button class="pre-btn" onclick="extguide()">Select another category</button>
        </div>
      </div>
</div>


<div class="modal-content" id="elect3" style="display:none;">
      <div class="bod-m">
        <h6>WOMENDetailed image angles and sequence improve sales by 3x</h6>
        <p>The images must reflect the product, be appropriate, and in this sequence</p>
        <div class="img-m-g">
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/elect1.png">
            <p>Product shown clearly</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/elect2.png">
            <p>Open product focus</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/elect3.png">
            <p>Product on model</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/elect4.png">
            <p>USP and details of the product</p>
          </div>
          <div class="slide">
            <img src="/frontend/img/vendor_dash/guide/step/elect5.png">
            <p>Product with packaging</p>
          </div>
        </div>
        <div class="guid-btn2">
          <form  action="/Vendor/new-product">
            <input type="hidden" value="" name="sessionresult62" id="sessionresult62">
            <input type="hidden" value="" name="cateid62" id="cateid62">
            <input type="hidden" value="" name="scateid62" id="scateid62">
            <input type="hidden" value="" name="sctcateid62" id="sctcateid62">
              <button class="nxt-btn">  Proceed to add products </button>
              </form>
              <button class="pre-btn" onclick="extguide()">Select another category</button>
          
          
        </div>
      </div>
</div>

<!-- #####################END Elect################### -->



  </div>
</div>
<script >
  var a=document.getElementById("all");
  var women=document.getElementById("women");
  var men=document.getElementById("men");
  var kid=document.getElementById("kid");
  var beauty=document.getElementById("beauty");
  var electronic=document.getElementById("electronic");
  var lifestyle=document.getElementById("lifestyle");
  var l=document.getElementById("mod1");
  var beauty1=document.getElementById("beauty1");
  var beauty2=document.getElementById("beauty2");
  var beauty3=document.getElementById("beauty3");

   var men1=document.getElementById("men1");
  var men2=document.getElementById("men2");
  var men3=document.getElementById("men3");

   var women1=document.getElementById("women1");
  var women2=document.getElementById("women2");
  var women3=document.getElementById("women3");
var women_shoe=document.getElementById("women_shoe");
   var kid1=document.getElementById("kid1");
  var kid2=document.getElementById("kid2");
  var kid3=document.getElementById("kid3");

   var lifestyle1=document.getElementById("lifestyle1");
  var lifestyle2=document.getElementById("lifestyle2");
  var lifestyle3=document.getElementById("lifestyle3");

   var elect1=document.getElementById("elect1");
  var elect2=document.getElementById("elect2");
  var elect3=document.getElementById("elect3");




  function showcat(x,z){
    if (x==='1') {
      a.style.display="block";
      b.style.display="none";
    }
    else if (x==='2' && z==='1') {
      a.style.display="none";
      men.style.display="none";
      kid.style.display="none";
      beauty.style.display="none";
      electronic.style.display="none";
      lifestyle.style.display="none";
      women.style.display="block";
    }
    else if (x==='2' && z==='2') {
      a.style.display="none";
      men.style.display="block";
      women.style.display="none";
      kid.style.display="none";
      beauty.style.display="none";
      electronic.style.display="none";
      lifestyle.style.display="none";
    }
    else if (x==='2' && z==='323') {
      a.style.display="none";
      men.style.display="none";
      women.style.display="none";
      kid.style.display="none";
      beauty.style.display="block";
      electronic.style.display="none";
      lifestyle.style.display="none";
    }
    else if (x==='2' && z==='510') {
      a.style.display="none";
      men.style.display="none";
      women.style.display="none";
      kid.style.display="block";
      beauty.style.display="none";
      electronic.style.display="none";
      lifestyle.style.display="none";
    }
    else if (x==='2' && z==='516') {
      a.style.display="none";
      men.style.display="none";
      women.style.display="none";
      kid.style.display="none";
      beauty.style.display="none";
      electronic.style.display="none";
      lifestyle.style.display="block";
    }
    else if (x==='2' && z==='745') {
      a.style.display="none";
      men.style.display="none";
      women.style.display="none";
      kid.style.display="none";
      beauty.style.display="none";
      electronic.style.display="block";
      lifestyle.style.display="none";
    }
    else{
      a.style.display="none";
      b.style.display="none";
    }

  }

  function beautyre(typename,id,sid,scid){
    if (beauty1.style.display==='none') {
      document.getElementById("sessionresult11").value = typename;
      document.getElementById("sessionresult12").value = typename;
      document.getElementById("cateid11").value = id;
      document.getElementById("cateid12").value = id;
      document.getElementById("scateid11").value = sid;
      document.getElementById("scateid12").value = sid;
      document.getElementById("sctcateid11").value = scid;
      document.getElementById("sctcateid12").value = scid;
      beauty1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      beauty1.style.display="none";
    }
    }
    function beautyre2(){
    if (beauty2.style.display==='none') {
      beauty2.style.display="block";
      beauty1.style.display="none";
    }
    else{   
      n.style.display="none";
      beauty1.style.display="none";
    }
    }
    function beautyre3(){
    if (beauty3.style.display==='none') {
      beauty3.style.display="block";
      beauty2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      beauty2.style.display="none";
    }
    }

function womenre(typename,id,sid,scid){
  if(sid == 500){
      document.getElementById("sessionresult211").value = typename;
      document.getElementById("cateid211").value = id;
      document.getElementById("scateid211").value = sid;
      document.getElementById("sctcateid211").value = scid;
      women_shoe.style.display="block";
      l.style.display="none";
  }
  else{
    if (women1.style.display==='none') {
      document.getElementById("sessionresult21").value = typename;
      document.getElementById("sessionresult22").value = typename;
      document.getElementById("cateid21").value = id;
      document.getElementById("cateid22").value = id;
      document.getElementById("scateid21").value = sid;
      document.getElementById("scateid22").value = sid;
      document.getElementById("sctcateid21").value = scid;
      document.getElementById("sctcateid22").value = scid;
      women1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      women1.style.display="none";
    }
  }
    }
    function womenre2(){
    if (women2.style.display==='none') {
      women2.style.display="block";
      women1.style.display="none";
    }
    else{   
      n.style.display="none";
      women1.style.display="none";
    }
    }
    function womenre3(){
    if (women3.style.display==='none') {
      women3.style.display="block";
      women2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      women2.style.display="none";
    }
    }

function menre(typename,id,sid,scid){
  if(sid == 508){
      document.getElementById("sessionresult211").value = typename;
      document.getElementById("cateid211").value = id;
      document.getElementById("scateid211").value = sid;
      document.getElementById("sctcateid211").value = scid;
      women_shoe.style.display="block";
      l.style.display="none";
  }
  else{
    if (men1.style.display==='none') {
     document.getElementById("sessionresult31").value = typename;
      document.getElementById("sessionresult32").value = typename;
      document.getElementById("cateid31").value = id;
      document.getElementById("cateid32").value = id;
      document.getElementById("scateid31").value = sid;
      document.getElementById("scateid32").value = sid;
      document.getElementById("sctcateid31").value = scid;
      document.getElementById("sctcateid32").value = scid;
      men1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      men1.style.display="none";
    }
    }}
    function menre2(){
    if (men2.style.display==='none') {
      men2.style.display="block";
      men1.style.display="none";
    }
    else{   
      n.style.display="none";
      men1.style.display="none";
    }
    }
    function menre3(){
    if (men3.style.display==='none') {
      men3.style.display="block";
      men2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      men2.style.display="none";
    }
    }

function kidre(typename,id,sid,scid){
  if(scid == 636 || scid == 645){
      document.getElementById("sessionresult211").value = typename;
      document.getElementById("cateid211").value = id;
      document.getElementById("scateid211").value = sid;
      document.getElementById("sctcateid211").value = scid;
      women_shoe.style.display="block";
      l.style.display="none";
  }
  else{
    if (kid1.style.display==='none') {
      document.getElementById("sessionresult41").value = typename; 
      document.getElementById("sessionresult42").value = typename;
      document.getElementById("cateid41").value = id;
      document.getElementById("cateid42").value = id;
      document.getElementById("scateid41").value = sid;
      document.getElementById("scateid42").value = sid;
      document.getElementById("sctcateid41").value = scid;
      document.getElementById("sctcateid42").value = scid;
      kid1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      kid1.style.display="none";
    }
    }}
    function kidre2(){
    if (kid2.style.display==='none') {
      kid2.style.display="block";
      kid1.style.display="none";
    }
    else{   
      n.style.display="none";
      kid1.style.display="none";
    }
    }
    function kidre3(){
    if (kid3.style.display==='none') {
      kid3.style.display="block";
      kid2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      kid2.style.display="none";
    }
    }

function lifestylere(typename,id,sid,scid){
    if (lifestyle1.style.display==='none') {
      document.getElementById("sessionresult51").value = typename;
      document.getElementById("sessionresult52").value = typename;
      document.getElementById("cateid51").value = id;
      document.getElementById("cateid52").value = id;
      document.getElementById("scateid51").value = sid;
      document.getElementById("scateid52").value = sid;
      document.getElementById("sctcateid51").value = scid;
      document.getElementById("sctcateid52").value = scid;
      lifestyle1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      lifestyle1.style.display="none";
    }
    }
    function lifestylere2(){
    if (lifestyle2.style.display==='none') {
      lifestyle2.style.display="block";
      lifestyle1.style.display="none";
    }
    else{   
      n.style.display="none";
      lifestyle1.style.display="none";
    }
    }
    function lifestylere3(){
    if (lifestyle3.style.display==='none') {
      lifestyle3.style.display="block";
      lifestyle2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      lifestyle2.style.display="none";
    }
    }

function electre(typename,id,sid,scid){
    if (elect1.style.display==='none') {
      document.getElementById("sessionresult61").value = typename; 
      document.getElementById("sessionresult62").value = typename;
      document.getElementById("cateid61").value = id;
      document.getElementById("cateid62").value = id;
      document.getElementById("scateid61").value = sid;
      document.getElementById("scateid62").value = sid;
      document.getElementById("sctcateid61").value = scid;
      document.getElementById("sctcateid62").value = scid;
      elect1.style.display="block";
      l.style.display="none";
    }
    else{   
      l.style.display="none";
      elect1.style.display="none";
    }
    }
    function electre2(){
    if (elect2.style.display==='none') {
      elect2.style.display="block";
      elect1.style.display="none";
    }
    else{   
      n.style.display="none";
      elect1.style.display="none";
    }
    }
    function electre3(){
    if (elect3.style.display==='none') {
      elect3.style.display="block";
      elect2.style.display="none";
    }
    else{   
      n.style.display="none";
      k.style.display="none";
      elect2.style.display="none";
    }
    }


    function extguide(){
      l.style.display="block";
      beauty1.style.display="none";
      beauty2.style.display="none";
      beauty3.style.display="none";
      men1.style.display="none";
      men2.style.display="none";
      men3.style.display="none";

      women1.style.display="none";
      women2.style.display="none";
      women3.style.display="none";
      kid1.style.display="none";
      kid2.style.display="none";
      kid3.style.display="none";
      lifestyle1.style.display="none";
      lifestyle2.style.display="none";
      lifestyle3.style.display="none";
      elect1.style.display="none";
      elect2.style.display="none";
      elect3.style.display="none";
    }
</script>

@endsection