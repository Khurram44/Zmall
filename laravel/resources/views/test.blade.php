@extends('layouts.app')

@section('content')
<?php use App\storeDetail; ?>
<style type="text/css">
.pro-card{
     background: #fff;
    flex-basis: 20%;
    overflow: hidden;
    height: 100%;
    max-width: 20%;
    padding: 10px 5px;
}
.info-name {
    text-transform: capitalize;
    max-width: 182px;
    max-height: 20px;
    overflow:hidden;
}
.pro-card a{
  color: #282c3f;
}
.pro-card a:hover{
  color: #282c3f;
}
  .info__name {
    font-size: 14px;
    text-align: left;
    margin-bottom: 4px;
    color: #282c3f;
    margin: 0 auto 2px;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    line-height: 1.2;
    padding-top: 8px;
}
.amount_discount{
  display: flex;
}
.amount_old{
  margin: 0;
    font-size: 12px;
    text-decoration: line-through;
    color: #a5a7ae;
    padding: 0 4px 0 0;
    overflow: hidden;
    white-space: nowrap;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
}
.amount_perc{
    margin: 0;
    font-size: 12px;
    color: #bf221c;
    white-space: nowrap;
    padding: 0 15px 0 0;
}
.pro-rate{
  display: flex;
    font-size: 10px;
    color: #282c3f;
    line-height: 1.4;
  }
.rate-n{
    font-size: 10px;
    color: #282c3f;
    line-height: 1.4;
  }
.rate-i{    
    color: orange;
}
.review-i{
    color: #a5a7ae;
    margin-left: 4px;
  }
.info-price{
  display: flex;
  flex-direction: column;
}
.amount_discount{
  display: flex;
}
.amount_original{
    padding: 0;
    margin: 0;
    font-size: 12px;
    color: #282c3f;
    font-weight: 700;
}
.pro-ship a{
      color: rgba(40, 44, 63, 1.0);
    font-size: 12px;
    letter-spacing: 0px;
}
.pro-ship a:hover{
      color: #fe9126;
}
.pro-ship small{
      color: rgba(165, 167, 174, 1.0);
    font-size: 12px;
    letter-spacing: 0px;
}
.pro-des{
  padding: 5px;
}
.pro-img{
  margin-bottom: 4px;
 border: 1px solid #e4e4e6;
  position:relative;
  width:100%;
  font-size:0;
  background:#fff;
  overflow: hidden;
  padding-bottom:140%
}
.pro-img img{
  position: absolute; 
  width: 100%; height: 100%; 
  left: 0px; 
  transition-duration: 0.3s; 
  opacity: 1;
  object-fit: contain;
}
.pro-img img:hover{
  transform: scale(1.05);
}
.top-head{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.top-head-l{
  display: inline-block;
padding-left: 20px;
}
.top-head-l span{
    font-size: 14px;
    color: #282c3f;
    margin-right: 3px;
}
.top-head-r{
  display: inline-block;
    padding-bottom: 16px;
}
.top-head-r select{
  color: #282c3f;
  border: none;
  outline: none;
  background: none;
    font-size: 18px;
    padding: 12px 4px 0 0;
    cursor: pointer;
}
.top-head-r span{
  font-size: 14px;
    color: #a5a7ae;
    margin-right: 3px;
}
.filter-head{
  display: flex;
  justify-content: space-between;
  padding-right: 5px;
    font-size: 12px;
    color: #525564;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 10px;
}
.filter-head a{
  color: #fe9126;
  font-weight: normal;
  padding: 0px;
}
.filter-group{
  padding-right: 6px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    color: #525564;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    letter-spacing: 1px;

}
.expand_caret {
    transform: scale(1.6);
    margin-left: 8px;
    margin-top: -4px;
}
a[aria-expanded='false'] > .expand_caret {
    transform: scale(1.6) rotate(180deg);
}
.cos-da{
  text-decoration: none;
  color: #525564;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0px;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 700;
    color: #525564;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    letter-spacing: 1px;
}
.filter-unit{
  display: flex;
  flex-direction: column;

}
.filter-unit label{
  cursor: pointer;
  font-size: 12px;
  font-weight: normal;
}

.filter{
  padding: 0px 20px;
}
.color-filter{
  display: flex;
  justify-content: start;
  align-items: center;
  cursor: pointer;
}
.colr{
  height: 30px;
  width: 30px;
  margin: 10px 0px;
}
.color-filter span{
  margin-left: 10px;
}
.prange{
  margin-top: 5px;
}
.prange b{
  font-weight: normal;
}
.prange input{
  width: 100%;
  height: 20px;
  font-size: 12px;
  background: #ddd;
  outline: none;
  border: 1px solid #ddd;
  margin-top: 5px;
}
.mobi{
  display: none;
}
@media only screen and (max-width: 600px) {
  .filter{
    position: fixed;
    top: 0%;
    left: 0%;
    z-index: 1;
    background: #fff;
    width: 100%;
    height: 100%;
    overflow: scroll;
    padding: 20px 20px;
  }
  #filtermobi{
    display: none;
  }
  .container-fluid{
    margin-top: 0px !important;
  }
  .pro-card {
    background: #fff;
    flex-basis: 20%;
    overflow: hidden;
    height: 350px;
    width: 50%;
    max-width: 50%;
    padding: 0px 15px;
    float: left;
}
.desk{
  display: none;
}
.mobi{
  display: block !important;
  font-size: 18px !important;
  cursor: pointer;
  color: #282c3f !important;
}
.pro-img {
    margin-bottom: 4px;
    border: 1px solid #e4e4e6;
    position: relative;
    width: 100%;
    height: 220px;
    font-size: 0;
    background: #fff;
    overflow: hidden;
    padding-bottom: 140%;
}
.info-name {
    text-transform: capitalize;
    max-width: 182px;
    max-height: 20px;
    overflow: hidden;
}

}
</style>
<div class="container-fluid" style="margin-top: 120px; background: #fff;">
  <div class="row">
    <div class="col-sm-12 top-head">
      <div class="top-head-l">
        <span class="desk">All Products</span>
        <span class="mobi" onclick="showfilter();">Filter</span>
      </div>
      <div class="top-head-r">
        <span>Sort by:</span>
        <select>
          <option>Popularity</option>
          <option>Newest</option>
          <option>Price Low</option>
          <option>Price High</option>
          <option>Discount</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      <div class="filter" id="filtermobi">
        <div class="mobi" onclick="closefilter();" style="position: relative; float: right;"><i class="fa fa-times" aria-hidden="true"></i></div>
        <br>

        <div class="filter-inner">
          <div class="filter-head">
            <span>Filters</span>  <!-- <span><a href="#">clear all</a></span> -->
          </div>


          <div class="filter-group">
            <a class="cos-da" data-toggle="collapsed" data-target="#dimension" aria-expanded="false">
                <div>Department</div><div class="expand_caret caret"></div>
              </a>
              <div id="dimension" class="collapse show" >
                <div class="filter-unit">
                  @foreach($Categories as $c)
                 <label>  <input type="checkbox" class="common_selector category" value="{{$c->id}}" name="{{$c->id}}"> {{$c->name}}</label>
                 @endforeach
                </div>
              </div>
          </div>
          <hr>

          <div class="filter-group">
            <a class="cos-da" data-toggle="collapsed" data-target="#category" aria-expanded="false">
                <div>Category</div><div class="expand_caret caret"></div>
              </a>
              <div id="category" class="collapse show">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name=""> Brands</label>
                 <label>  <input type="checkbox" name=""> Batik</label>
                 <label>  <input type="checkbox" name=""> Women Wear</label>
                 <label>  <input type="checkbox" name=""> Men Wear</label>
                </div>
              </div>
          </div>
          <hr>

          <div class="filter-group">
            <a class="cos-da" data-toggle="collapsed" data-target="#brands" aria-expanded="false">
                <div>Brands</div><div class="expand_caret caret"></div>
              </a>
              <div id="brands" class="collapse show">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name=""> ANAKARA</label>
                 <label>  <input type="checkbox" name=""> Brands River</label>
                 
                </div>
              </div>
          </div>
          <hr>
          <div class="filter-group">
            <a class="cos-da" data-toggle="collapsed" data-target="#colors" aria-expanded="false">
                <div>Colors</div><div class="expand_caret caret"></div>
              </a>
              <div id="colors" class="collapse show">
                <div class="filter-unit">
                 <div class="color-filter">
                   <div class="colr" style="background: black;"></div> <span>Black</span>
                 </div>
                 <div class="color-filter">                 
                   <div class="colr" style="background: green;"></div> <span>Green</span>
                 </div>
                 <div class="color-filter">
                   <div class="colr" style="background: orange;"></div> <span>Orange</span>
                 </div>
                 
                </div>
              </div>
          </div>
          <hr>
          <div class="filter-group">
            <a class="cos-da" data-toggle="collapse" data-target="#p-range" aria-expanded="false">
                <div>Price Range</div><div class="expand_caret caret"></div>
              </a>
              <div id="p-range" class="collapse">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name="">  10,000 - 20,000</label>
                 <label>  <input type="checkbox" name="">  20,000 - 30,000</label>
                 <div class="prange">
                   <b>Custom Price in IDR</b>
                 <input type="text" name="">
                 <input type="text" name="">
                 </div>
                 
                </div>
              </div>
          </div>
          <hr>
          <div class="filter-group">
            <a class="cos-da" data-toggle="collapse" data-target="#size" aria-expanded="false">
                <div>Size</div><div class="expand_caret caret"></div>
              </a>
              <div id="size" class="collapse">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name="">  Free Size</label>
                </div>
              </div>
          </div>
          <hr>
          <div class="filter-group">
            <a class="cos-da" data-toggle="collapse" data-target="#material" aria-expanded="false">
                <div>Material</div><div class="expand_caret caret"></div>
              </a>
              <div id="material" class="collapse">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name="">  Polyester</label>
                </div>
              </div>
          </div>
          <hr>
          <div class="filter-group">
            <a class="cos-da" data-toggle="collapse" data-target="#pattern" aria-expanded="false">
                <div>Pattern</div><div class="expand_caret caret"></div>
              </a>
              <div id="pattern" class="collapse">
                <div class="filter-unit">
                 <label>  <input type="checkbox" name="">  Batik</label>
                </div>
              </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
    <div class="col-sm-10">
      <div class="product-grid">
        <div class="product-grid-inner filter_data">
         

        </div>
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript">
   var a=document.getElementById("filtermobi");
  function showfilter(){
  
   if (a.style.display="none") {
    a.style.display="block";
   }
   else{

    a.style.display="none";
   }
  }
  function closefilter(){
  if (a.style.display="block") {
      a.style.display="none";
     }
     else{

      a.style.display="block";
     }
  }
 </script>
<style>
#loading
{
  text-align:center; 
  background: url('/public/frontend/loaderimg.gif') no-repeat center; 
  height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var category = get_filter('category');
        if(category != ""){ console.log(category);}
        $.ajax({
            type:"POST",
            url:"/loading_product",
            data:{action:action, category:category},
            success:function(response){
              var response = JSON.parse(response);
              console.log(response);
            $('.filter_data').html(response);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }
    $('.common_selector').click(function(){
        filter_data();
    });

});
</script>


@endsection