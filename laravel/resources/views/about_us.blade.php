@extends('layouts.app')

@section('content')
@include('layouts.second-nav')

<style type="text/css">
  .panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #fe9126;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: #fff;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 400;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  content: '\e146';
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: ' ';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: ' ';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\e909';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */
.about_text{
  text-align: justify;
}
#accordion .panel-heading a:before {
  content: '\e316';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: rotate(180deg);
  transition: all 0.5s;
  visibility: hidden;
}
.about_color{
      color: #fe9126;s
}
#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}
.show {
    display: none !important;
}
.collapse.in{
  display: block !important;
}
</style>


  <link href="{{ asset('main/css/all.css') }}" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- /NAVIGATION -->
<!-- _____________________________________________________ -->

  <!-- BREADCRUMB -->
  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{asset('/home')}}">Home</a></li>
        <li class="active">About Us</li>
      </ul>
    </div>
  </div>

 
 
  <script>
    AOS.init();
  </script>

  

 

    <!-- <section class="visitingCard">
    <div class="container"> -->
      <!-- <div class="row">
        <img src="images/download.jpg" class="img-responsive appDownload">
      </div> -->
      

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <!-- <h2 class="text-center m-t-lg">About Us</h2> -->
         <br>
          <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
             
           
              <!-- end of panel -->
               
              <div class="panel">
                <div class="">
                  <h4 class="panel-title">
                              </h4>
                </div>
                <div >
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="about_text"><strong>Are you fashion obsessed?</strong></p> 

<p  class="about_text">If yes, then for sure you must crave a versatile variety of brands under one roof. 
No worries, we got you all covered! </p>

<p  class="about_text">Z Mall provides the top Pakistani and foreign brands under one roof. Not even we provide your favorite clothing brands but to make it easier for you shoe brands are also entertained. </p>

<p  class="about_text">The idea behind this is what makes the Z Mall stand out from the crowd. It is just not a typical online store but we incorporated some amazing features in it. The daily live unwrapping and direct chat with vendors make it unique.</p>
 
<p  class="about_text">From casual to formal, we have a wide range of variety for every occasion, either its formal lunch or birthday party, with few clicks, make your dress done! 
</p>
<p  class="about_text">With approaching winters, the wardrobes need a sharp switch. Pakistan is one of the blessed states, as we enjoy all four seasons in a year. </p>
<p  class="about_text">To enjoy all the seasons, clothing is important. One can not enjoy all the flavors and spices if one is not wearing comfortable clothes. December and January are two months when we have the peak of the frigid climate. To keep yourself warm, several brands offer a variety of wardrobe assets, the shawls, coats and sweaters, long boots, and many others. For more details, you can go through the <strong>ultimate outerwear guide.</strong> </p>
<p  class="about_text">We are here to make your shopping done in a few clicks. </p>
<p  class="about_text">Summer is our longest season and we need to tackle it calmly. Wearing soft colored delicate and gentle lawn suits is one way. Your favorite brands are there to welcome you and make this hot weather enjoyable with comfortable, stylish, and soft collections. </p>
<p  class="about_text"><strong>Make your summer calm and cold </strong>can assist you further in knowing the best of fact-based information. Shop now and enjoy by staying at home! 
  </p>
  <p  class="about_text">Most of people dont like summers because of high temperatures, sunburn, dehydration,and many more.</p>
  <p  class="about_text">We are here to suggest you little tips on summers dressing that will help you in bringing a big difference. </p>
  <ul>
    <li><strong class="about_color">• Loose clothing</strong>
  <p  class="about_text">While shopping, make sure that what you are going to buy wont hurt you. In peak season, try to opt-out of light and loose dresses. </p>
    </li>
    <li><strong class="about_color">• Soft colors</strong>
    <p  class="about_text">The colors can make a considerable difference. Light colors reflect back the light, don’t you want to reflect away the sun rays in such hot weather? For sure, you want! So, fill your summer closet with light colors. </p> </li>
    <li><strong class="about_color">• Prefer simple dresses</strong>
      <p  class="about_text">When your dress is light and simple, it will make you feel more comfortable. The heavy embellishments might annoy you. Choose simple, feel good!</p>
      
    </li>
    <li><strong class="about_color">• Minimize sunburn</strong>
      <p  class="about_text">To avoid painful and injuring sunburns, prioritize full-sleeved dresses especially for the day time. Your skin is a gift of God, take good care of it.</p></li>
    <li><strong class="about_color">• Say NO to synthetic fabrics</strong>
      <p  class="about_text">Try to utilize natural fabric always but especially in the summer season. Natural clothing materials are better at tackling, absorbing, and drying sweat than synthetic ones. </p></li>
    <li><strong class="about_color">• Textured dresses</strong>
      <p  class="about_text">To keep your dress away from your body, textured fabrics are always preferable. Linen is one’s optimum choice for this purpose. 
These are some little clothing tips that if you will opt for, you will surely feel the difference. Besides these, intake maximum water and keep yourself stay at home. 
With all of these tips and vast variety, now it's easier for you to choose the best dress for you.
</p></li>
   
  </ul>
                        
        <title>About Us | Fashion, Brands, Clothing In One Place | Zmall.pk</title>
        <meta name="description" content="Zmall in not limited to online shopping. Now anyone can sell and purchase Fashion & Style, Brands, and clothing products in one place.">
                      </div>
                      <div class="col-md-4">
                        <img src="http://68.183.181.136/storage/uploads/aboutbanner.jpg" alt="" style="    box-shadow: 0px 0px 8px 4px #fe9126;">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
              <!-- end of panel -->

             

              
              <!-- end of panel -->

            </div>

        </div>
      </div>
    </div>
  </section>

@endsection