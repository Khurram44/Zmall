 <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend//css/venderforms.css') }}">

<style>
input[type="checkbox"] {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
input[type="checkbox"]+span {
  cursor: pointer;
  font: 16px sans-serif;
  color: black;
}

input[type="checkbox"]+span:before {
  content: '';
  border: 1px solid grey;
  border-radius: 3px;
  display: inline-block;
  width: 16px;
  height: 16px;
  margin-right: 0.5em;
  margin-top: 0.5em;
  vertical-align: -2px;
}

input[type="checkbox"]:checked+span:before {

  background-image: url('https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/collection/build/ionicons/svg/ios-checkmark.svg');
  background-repeat: no-repeat;
  background-position: center;
  /* The size of the checkmark icon, you may/may not need this */
  background-size: 25px;
  border-radius: 2px;
  background-color: #ffe9126;
  color: white;
}

input[type="checkbox"]:focus+span:before,
input[type="checkbox"]:not(:disabled)+span:hover:before {
  /* Visible in the full-color space */
  box-shadow: 0px 0px 0px 2px rgba(0, 150, 255, 1);
  outline-color: transparent; /*switch to transparent*/
  outline-width: 2px;
  outline-style: dotted;
  }

input[type="checkbox"]:disabled+span {
  cursor: default;
  color: black;
  opacity: 0.7;
}
.form-control{
    height:auto;
}
.store{
    top:10%;
}
input:disabled {
    background: #fe9126;
}
input[type="checkbox"]{
    background: #fe9126;
}
    @media only screen and (max-width: 600px) {
        body{
            background: rgb(255,255,255,0.9);
        }
        .container-fluid{
            width: auto !important;
            margin: auto !important;
            padding: auto !important;
            
        }
        .header {
    align-items: center;
    background: #fff;
    height: 100px;
    -webkit-box-shadow: 5px 14px 6px -11px rgb(0 0 0 / 10%);
    box-shadow: 5px 14px 6px -11px rgb(0 0 0 / 10%);
    margin:0px;
}
.formall-store {
    width: 100%;
}
.store {
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    background: #fff;
    padding: 20px;
    -webkit-box-shadow: 0 0 0 1px rgb(0 0 0 / 10%);
    box-shadow: 0 0 0 1px rgb(0 0 0 / 10%);
}
}
</style>
  </head>
  <body>
    <div class="container-fluid" style="width: 100%; margin: 0px; padding: 0px;">
      <!--<div class="row header">-->
      <!--   <div class="col-sm-4">-->
      <!--     <h3>Zmall</h3>-->
      <!--   </div>-->
      <!--   <div class="col-sm-4">-->
      <!--        <div class="progress-bar">-->
      <!--           <div class="step ">-->
                  
      <!--              <div class="bullet active">-->
      <!--                <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>-->
      <!--              </div>-->
      <!--            <div class="check fas fa-check">-->
      <!--            </div>-->
      <!--             <p>Store Type</p>-->
      <!--            </div>-->


      <!--            <div class="step">-->
                      
      <!--              <div class="bullet active">-->
      <!--                 <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>-->
      <!--              </div>-->
      <!--              <div class="check fas fa-check">-->
      <!--              </div>-->
      <!--              <p> Store Details</p>-->
      <!--              </div>-->


      <!--              <div class="step lastone" >-->
                      
      <!--              <div class="bullet">-->

      <!--                  <span><i class="fa fa-address-book" aria-hidden="true"></i></span>-->
      <!--              </div>-->
      <!--              <div class="check fas fa-check">-->
                      
      <!--              </div>-->
      <!--              <p>Terms</p>-->
      <!--              </div>-->
                
      <!--         </div>-->
      <!--   </div>-->
      <!--   <div class="col-sm-4"></div>-->
      
      <!--</div>-->
      <div class="row" style="margin:0px;">
        <form method="POST" action="{{ route('savestoredetails') }}" enctype="multipart/form-data">
        @csrf
        <div class="store" style="right: 32%;">
          <div class="p1-top-title">
            <center>
              <h4>Store Details</h4>
              <small>To pick up products from your store</small>
            </center>
          </div>
          <div class="formall-store">
            <div class="inner-form form-group">
              <input type="text" class="form-control" name="store_name" placeholder="Store Name" required="required">
            </div>
            <div class="inner-form form-group">
              <select class="form-control" name="store_category" id="store_category" required="required">
                <option value="" disabled selected>Select Category</option>
                @if(!empty($Categories))
                @foreach($Categories as $c)
                <option value="{{$c->name}}">{{$c->name}}</option>
                @endforeach
                @endif
              </select>
            </div>
            <div class="inner-form form-group">
              <input type="text" class="form-control" name="store_phone" pattern="[0][3][0-9]{9}" placeholder="03**********" required="required">
            </div>
            <div class="inner-form form-group">
              <input type="text" class="form-control" name="store_address" placeholder="Store Address" required="required">
            </div>
            <div class="inner-form form-group" name="state" id="" required="required">
              <select class="form-control " name="store_state" id="" required="required">
                        <option value="" disabled selected>Select The Province</option>
                        @if(!empty($province))
                          @foreach($province as $c)
                           <option value="{{$c->name}}">{{$c->name}}</option>
                          @endforeach
                        @endif
                </select>
            </div>
            <div class="inner-form form-group">
              <select class="form-control " name="store_city" id="" required="required">
                        <option value="" disabled selected>Select The City</option>
                        @if(!empty($cities))
                        @foreach($cities as $c)
                         <option value="{{$c->name}}">{{$c->name}}</option>
                        @endforeach
                        @endif
                      </select>
            </div>
            <div class="form-group">
                <label>
                  <input type="checkbox" checked disabled>
                  <span>Default Store Address</span>
                </label>
                
                <br>
                
                <label>
                  <input type="checkbox" checked disabled>
                  <span>Default Pick-up Address</span>
                </label>
                <br>
                
                <label>
                  <input type="checkbox" checked disabled>
                  <span>Default Return Address Address</span>
                </label>
              
            </div>
           
          </div>
          <center><button type="submit" style="width: 100%; outline:none; background:#fe9126; color:#fff; border:none; padding:10px 0px;">Next</button></center> 
        </div>
      </div>
      </form>
</div>
<script>
  $(function() {
  $(".load_province_cities").change(function(e) {
    var value = $(this).val(); 
    var _token = "{{ csrf_token() }}";
    $.post("{{ url('loadprovincebasecities')}}", {value:value,_token:_token}, function(result){
            $(".citiesdropdownfield").html(result);
        });
    });
  });
</script>
  </body>
</html>
