<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout-style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    
    
    <style>
        @media screen and (min-width: 800px){
                .container, .container-md, .container-sm {
                    max-width: 1080px !important;
                }
               
        }
    </style>
    
  </head>

  <body>


  <!----------------- Container starts here ----------------->
<div class="container">
      <!----------------- Row1 starts here ----------------->
      <div class="row">
      

          <div class="col-sm-2">
           <a href="/home"> <img src="/frontend/logo/zmalllogo-b.png" style="width:120px;"> </a>
          </div>
          <!----------------- Progress starts here ----------------->
          <div class="col-sm-6">
              <div class="progress-bar">
                 <div class="step">
                  
                    <div class="bullet">
                      <span>1</span>
                    </div>
                  <div class="check fas fa-check">
                  </div>
                   <p>ADDRESS</p>
                  </div>
                    <div class="step">
                      
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>PAYMENT METHOD</p>
                    </div>
                    <div class="step">
                        
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p>REVIEW & PAY</p>
                    </div>
              </div>
            </div>
            <!----------------- /Progress ----------------->
      </div>
      <!----------------- /Row1 ----------------->

      <!----------------- Row2 Ends here ----------------->
      <div class="row">
          <div class="form-outer">
                 <form id="checkout-form" class="clearfix section-white p-sm" method="POST" action="{{ route('chkdelivery') }}" enctype="multipart/form-data">
                   @csrf
                  <div class="page slide-page">
                            <div class="title">
                              Enter a New Address
                            </div>

                            <div class="row">
                              <div class="col">
                                <label>First Name *</label>
                                <input type="text" class="form-control" aria-label="Name"  name="first_name" placeholder=" First Name" value="{{ $first_name}}" required>
                              </div>
                              <div class="col">
                                <label>Last Name *</label>
                                <input type="text" class="form-control" aria-label="Name"  name="last_name" placeholder="Last Name" value="{{ $last_name}}" required>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Phone Number *</label>
                              <input type="text" class="form-control" type="tel" name="phone" pattern="[0][3][0-9]{9}" placeholder="03**********" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email *</label>
                              <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $email }}" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Address *</label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="" required>
                            </div>
                            <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label" >Province *</label>
                              <select class="form-control provincesdropdownfield" name="province" id="city_name" required>
                                <option value="" selected>Select</option>
                                @if(!empty($province))
                                @foreach($province as $p)
                                 <option value="{{$p->name}}" {{$p->name ==  $alreadyprovince ? 'selected' : ''}}>{{$p->name}}</option>
                                @endforeach
                                @endif          
                      </select>
                            </div>
                            <div class="mb-3">
                              <label for="formGroupExampleInput2" class="form-label">City *</label>
                              <select class="form-control citiesdropdownfield selectpicker " data-live-search="true" name="City" id="city" required>  
                      </select>
                      
                            </div>
                            <div class="row">
                              
                              <div class="col">
                                <label>Postal Code </label>
                                <input type="text" name="zip_code" class="form-control" >
                              </div>
                               
                              <div class="col">
                                <label>Country *</label>
                                <input type="text" class="form-control" id="country" required>
                              </div>
                            </div>
                            <div class="row">
                               <div class="col">
                                <input type="checkbox" name="defaultAddress" id="defaultAddress" > Default Address
                               </div>
                               @if(!empty($address))
                               <input type="hidden" name="address1" id="address1" value="{{$address->address}}">
                               <input type="hidden" name="city1" id="city1" value="{{$address->city}}">
                               <input type="hidden" name="state1" id="state1" value="{{$address->state}}">
                               <input type="hidden" name="country1" id="country1" value="Pakistan">
                               @endif
                             </div>
                            <div class="field">
                             <button type="submit" name="proceed_to_payment" class="firstNext next">Deliver to this Address</button>
                             </div>
                  </div>
              </form>
          </div>
          <!----------------- Outerpage/  ----------------->
          
          </div>
          <!----------------- Row2/ ----------------->
          
</div>
<!----------------- /Container ----------------->
    
    <!--Json api code for cities-->
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
      $(document).ready(function () {
      $('#city_name').on('change', function () {
      let id = $(this).val();
      $('#city').empty();
      $('#city').append(`<option value="0" disabled selected>Processing...</option>`);
      $.ajax({
      type: 'GET',
      url: '/GetCityAgainstProvinceEdit/' + id,
      success: function (response) {
      var response = JSON.parse(response);
      console.log(response); 
      
      $('#city').empty();
      $('#city').append(`<option value="0" disabled selected>Select The City*</option>`);
      response.forEach(element => {
      $('#city').append(`<option value="${element['name']}">${element['name']}</option>`);
            });
          }
         });
       });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
      $('#defaultAddress').on('change', function () {
        address = document.getElementById('address1').value;
        city = document.getElementById('city1').value;
        state = document.getElementById('state1').value;
        country = document.getElementById('country1').value;
        if (address !== "" && city !== "" && state !== "") {
          
          document.getElementById('address').value = address;
          if (state == "247") {
            document.getElementById('city_name').selectedIndex  = "1";
          }
          if(state == "248") {
            document.getElementById('city_name').selectedIndex  = "2";
          }
          if (state == "249") {
            document.getElementById('city_name').selectedIndex  = "3";
          }
          if (state == "250") {
            document.getElementById('city_name').selectedIndex  = "4";
          }
          if (state == "251") {
            document.getElementById('city_name').selectedIndex  = "5";
          }
          $('#city').append(`<option value="`+city+`" selected>`+city+`</option>`);
          document.getElementById('country').value = country;
        }
        });
      });
    </script>
  </body>
</html>
