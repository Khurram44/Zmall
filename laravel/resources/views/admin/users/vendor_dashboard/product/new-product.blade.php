@extends('admin.users.vendor_dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
.pull-right a{
 color:#999;
 margin-left: 5px;
}
.expand_caret {
    transform: scale(1.6);
    margin-left: 8px;
    margin-top: -4px;
}
a[aria-expanded='false'] > .expand_caret {
    transform: scale(1.6) rotate(-180deg);
}
.basic-info{
       font-size: 18px;
    line-height: 20px;
    font-weight: 600;
}
.img-title span{
       font-size: 14px;
       color: #333;
}
.img-title ol li{
        font-size: 14px;
       color: #666;
}
.img-title ol{
       margin-top: 20px;
}
.image-upload-one{
    grid-area: img-u-one;
    display: flex;
    justify-content: center;
  }
  .image-upload-two{
    grid-area: img-u-two;
    display: flex;
    justify-content: center;
  }
  .image-upload-three{
    grid-area: img-u-three;
    display: flex;
    justify-content: center;
  }
  .image-upload-four{
    grid-area: img-u-four;
    display: flex;
    justify-content: center;
  }
  .image-upload-five{
    grid-area: img-u-five;
    display: flex;
    justify-content: center;
  }
  .image-upload-six{
    grid-area: img-u-six;
    display: flex;
    justify-content: center;
  }
  .image-upload-seven{
    grid-area: img-u-seven;
    display: flex;
    justify-content: center;
  }
  .image-upload-eight{
    grid-area: img-u-eight;
    display: flex;
    justify-content: center;
  }
  .image-upload-nine{
    grid-area: img-u-nine;
    display: flex;
    justify-content: center;
  }
  .image-upload-nine{
    grid-area: img-u-ten;
    display: flex;
    justify-content: center;
  }
  .image-upload-container{
    display: flex;
    justify-content: space-between;
  }
  .center {
    display:inline;
    margin: 3px;
  }

  .form-input {
    padding: 10px;
    background: #fff;
    border: 1px dashed #50ABF1;
    height: 80px;
    width: 80px;

  }
  
  .form-input input {
    display:none;
  }
  .form-input label {
    display:block;
    height: auto;
    background: transparent;
    border-radius:10px;
    cursor:pointer;
  }
  
  .form-input img {
    width:60px;
    margin: auto;
    opacity: .7;
  }
    .form-input img:hover{
        opacity: .9;
    }

  .imgRemove{
    position: relative;
    bottom: 80px;
    left: 100%;
    background-color: transparent;
    border: none;
    font-size: 20px;
    outline: none;
    color: red;
    height: 20px;
    width: 20px;


  }
  
  .imgRemove::after{
    content: 'x';
    color: red;
    font-weight: 900;
    border-radius: 50%;
    cursor: pointer;
    position: relative;
    bottom: 10px;
  }

  .small{
    color: #888;
    font-size: 14px;
    text-align: center;
    display: flex;
    align-content: flex-start;
    justify-content: center;
}
  }

  @media only screen and (max-width: 700px){
    .image-upload-container{
      grid-template-areas: 'img-u-one img-u-two img-u-three img-u-four img-u-five img-u-six img-u-seven img-u-eight img-u-nine';
    }
  }
  .quantity {
 display: inline-block; }

.quantity .input-text.qty {
 width: 35px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}
input[type=checkbox], input[type=radio] {
    margin: 5px;
    margin-left: 20px;
    line-height: normal;
    height: auto !important;
    width: auto !important;
}
input[type=checkbox] + label{
    font-weight: 400 !important;
}
.occ-st{

}
.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 0px 10px 0px;
 border: 1px solid #efefef;
 cursor:pointer;
}

.quantity.buttons_added .minus {
 border-right: 0; 
 border: 1px solid #efefef;}

.quantity.buttons_added .plus {
 border-left: 0; 
 border: 1px solid #efefef;}

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover{
 background: #eeeeee; 
 border: 1px solid #fe9126;
 cursor: pointer;
}


.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }
 .add-form{
  padding: 20px;
 }
 .form-all{
  margin-top: 10px;
  background-color: #fff;
  padding: 20px;
 }
 .top-form-head span{
  font-size: 18px;
    line-height: 20px;
    font-weight: 600;
    overflow-x: hidden;
    overflow-y: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
 }
 .form-f{
  margin: 15px 0px;
 }
 .form-f label{
     font-size: 14px;
      line-height: 16px;
      color: #666;
 }
 .form-f input{
      border: 1px solid #e1e1e6;
      height: 30px;
      padding: 8px;
      width: 100%;
      outline: none;
    }
    .form-f select{
      font-size: 14px;
      height: 30px;
      width: 100px;
      color: #333;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #fff;
      outline: none;
      border: 1px solid #ddd;
    }
     .form-f input:focus{
      border: 1px solid #fe9126;
     }
     .form-f select:focus{
      border: 1px solid #fe9126;
     }
     .form-f input:hover{
      border: 1px solid #fe9126;
     }
     .form-f select:hover{
      border: 1px solid #fe9126;
     }
    .form-f-w input{
      border: 1px solid #e1e1e6;
      height: 30px;
      padding: 8px;
      outline: none;
     
    }
    .form-f-w select{
      font-size: 14px;
      height: 30px;
      width: 70px;
      color: #333;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #fff;
      outline: none;
      border: 1px solid #ddd;
    }
        .form-f-w input:focus{
          border: 1px solid #fe9126;
        }
        .form-f-w select:focus{
          border: 1px solid #fe9126;
        }
        .form-f-w input:hover{
          border: 1px solid #fe9126;
        }
        .form-f-w select:hover{
          border: 1px solid #fe9126;
        }
        .form-f-d {

        }
    .form-f-d input{
      border: 1px solid #e1e1e6;
      height: 30px;
      padding: 8px;
      outline: none;
      width: 70px;
     
    }
    .form-f-d select{
      font-size: 14px;
      height: 30px;
      width: 50px !important;
      color: #333;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #fff;
      outline: none;
      border: 1px solid #ddd;
    }
      .form-f-d input:focus{
        border: 1px solid #fe9126;
      }
      .form-f-d select:focus{
        border: 1px solid #fe9126;
      }
      .form-f-d input:hover{
        border: 1px solid #fe9126;
      }
      .form-f-d select:hover{
        border: 1px solid #fe9126;
      }
      .form-f-a{
          margin-top: 15px !important; 
      }
      .form-f-a input{
      border: 1px solid #e1e1e6;
      height: 30px;
      padding: 8px;
      outline: none;
      width: 250px;
      
    }
    .form-f-a span::after{
        content:"\a";
        white-space: pre;
        
        
    }
    .form-f-a select{
      font-size: 14px;
      height: 30px;
      width: 250px;
      color: #333;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #fff;
      outline: none;
      border: 1px solid #ddd;
    
    }
      .form-f-a input:focus{
        border: 1px solid #fe9126;
      }
      .form-f-a select:focus{
        border: 1px solid #fe9126;
      }
      .form-f-a input:hover{
        border: 1px solid #fe9126;
      }
      .form-f-a select:hover{
        border: 1px solid #fe9126;
      }

      .color-select b{
            font-size: 18px;
          line-height: 20px;
          font-weight: 600;
          }
      .color-select small{
              font-size: 14px;
      line-height: 16px;
      color: #666;
      }
      .color-select select{
            width: 200px;
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            border-radius: 2px;
            padding: 4px 18px;
            font-size: 14px;
            font-weight: 500;
            color: #3d158c;
            background-color: #f7f5fa;
            border: 1px solid #3d158c;
            outline: none;
            margin-top: 10px;
      }
      .color-selected{
        display: flex;
      }
      .c-field{
        margin-left: 20px;
      }
      .c-field label{
        font-size: 14px;
          line-height: 20px;
          font-weight: 500;
          color: #333;
      }
      .c-field select{
          width: 200px;
            cursor: pointer;
            display: inline-block;
            vertical-align: top;
            border-radius: 2px;
            padding: 3px 18px;
            font-size: 14px;
            font-weight: 500;
            color: #666;
            background-color: #rgb(0, 0, 0, 0.02);
            border: 1px solid #fe9126;
            outline: none;
            margin: 0!important;
      }


      .c-field input{
        border: 1px solid #e1e1e6;
        height: 30px;
        padding: 8px;
        outline: none;
      
      }
      .form-f-t input{
      border: 1px solid #e1e1e6;
      height: 30px;
      padding: 8px;
      outline: none;
   
     
    }
    .form-f-t select{
      font-size: 14px;
      height: 30px;
      
      color: #333;
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
      background-color: #fff;
      outline: none;
      border: 1px solid #ddd;
    }
      .form-f-t input:focus{
        border: 1px solid #fe9126;
      }
      .form-f-t select:focus{
        border: 1px solid #fe9126;
      }
      .form-f-t input:hover{
        border: 1px solid #fe9126;
      }
      .form-f-t select:hover{
        border: 1px solid #fe9126;
      }
      .form-f-t table tr td{
        text-align: center;
      }
      .form-f-t table tr td label{
        font-weight: 400;
        margin-left: 5px;
      }
      .form-f-t table tr td label:hover{
        cursor: pointer;
      }
      .img-upload{
        padding: 20px;
      }
      .img-div{
        position: relative;
      }
      .img-div label .drag-img{
        position: relative;
      top: 10px;
      margin-left: auto;
      margin-right: auto;
      /* height: 20px; */
      padding: 50px;
      border: 1px solid #ddd;
      display: flex;
      font-weight: 500;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      }
      .drag-img span label{
        color: #fe9126;
      }
      .drag-img span label:hover{
        cursor: pointer;
      }
      .drag-img i{
        color: rgb(0, 0, 0, 0.2);
      }
      ..gallery{
        margin-top: 30px;
      }
      .gallery img{
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin: 10px 5px;
        border:  1px solid #fe9126;
        padding: 5px;
      }
@media only screen and (max-width: 600px){

  input[type=checkbox], input[type=radio]{
    margin: 5px;
     margin-left: 10px; 
    height: auto !important;
    width: auto !important;
    
    }
    .form-f-a{
        overflow-y: scroll;
    }
    .image-upload-container {
    display: flex;
    justify-content: space-between;
    overflow-x: scroll;
    }
    .occ-st{
        margin-right: 10px;
    }
    .color-selected{
        display: block;
    }
    .form-f-t table {
    overflow-y: scroll;
    font-size: 13px;
    margin-left: -20px;
}
.add-form{
    padding: 0px;
}
.img-title {
    height:auto !important;
}
.form-f-a input{
    width:100%;
}
.form-f-a select{
    width:100%;
}
.form-f-d input{
    width:100%;
}
.form-f-d input{
    width:100%;
}
.form-f-w input{
    width:100%;
}
.form-f-w input{
    width:100%;
}
}
</style>

        <form  method="POST" action="{{route('admintovendorsavenewproduct')}}" enctype="multipart/form-data">
          @csrf
        <div class="col-sm-10">
            <div class="add-form">
                <div class="add-form-inner">
                    <div class="top-form-head">
                        <span>New product in {{$typename}}</span>
                        <input type="hidden" value="{{$typename}}" name="type_name">
                        <input type="hidden" value="{{$cateid}}" name="cateid">
                        <input type="hidden" value="{{$scateid}}" name="scateid">
                        <input type="hidden" value="{{$sctcateid}}" name="sctcateid">
                    </div>
                    <div class="form-all">
                        <div class="form-f">
                          <span>Product Title *</span>
                          <input type="text" id="title" name="title" minlength="20" title="Please add minimum 20 characters">
                          @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-f">
                          <span>Product Video link (Optional)</span>
                          <input type="text" name="video" id="video" >
                        </div>
                        <div class="form-f">
                          <span>Description *</span>
                          
                          <textarea id="mytextarea" rows="10" cols="80" name="description">
                          </textarea>
                          
                         
                          @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-f">
                          <span>Product Visibility *</span>
                          <select style="width: 200px; margin-left: 10px;" name="visibility" >
                            <option selected disabled>Select</option>
                            <option value="Public Product">Public Product</option>
                            <option value="Private Product">Private Product</option>
                          </select>
                          @error('visibility')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-all">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-f-w">
                              <span>Product Weight</span>
                                <div class="form-f-w" style="display:flex;">
                                  <input type="text" name="weight" >
                                   <select name="weightIn" >
                                    <option selected disabled>Select</option>
                                      <option value="g">g</option>
                                      <option value="kg">kg</option>
                                    </select>
                                     @error('weightIn')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                                </div>
                                @error('weight')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-d">
                              <span>Package dimensions — l x b x h</span>
                                <div class="form-f-d" style="display: flex;">
                                  <input type="text" name="Length" placeholder="Length">
                                  <input type="text" name="Breath" placeholder="Breath">
                                  <input type="text" name="Height" placeholder="Height">
                                <select name="dimensionIn">
                                  <option value="cm">cm</option>
                                  <option value="m">m</option>
                                </select>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-w">
                              <span>Starting Price</span>
                                <div class="form-f-w" style="display: flex;">
                                 <input type="number" name="starting_price" placeholder="Starting Price">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-all">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Brand Name *</span>
                                <div style="display:flex;">
                                  <input type="text" name="brand" >
                                   @error('brand')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                                </div>
                                
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Model no</span>
                                  <input type="text" name="model_no">
                                  @error('model_no')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                            </div>
                          </div>
                          @if($cateid === '1')
                          @if($typename === "Tops & Tunis")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wrap tops">wrap tops</option>
                                <option value="kaftan top">kaftan top</option>
                                <option value="blouses">blouses</option>
                                <option value="tank tops">tank tops</option>
                                <option value="crop tops">crop tops</option>
                                <option value="choker tops">choker tops</option>
                                <option value="spegatti">spegatti</option>
                                <option value="tube tops">tube tops</option>
                                <option value="body suits">body suits</option>
                                <option value="peplum tops">peplum tops</option>
                                <option value="tunics">tunics</option>
                                <option value="bustier">bustier</option>
                                <option value="kebaya">kebaya</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st">Occasion</span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="regular">regular</option>
                                <option value="longline">longline</option>
                                <option value="crop">crop</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="kimono">kimono</option>
                                <option value="cap sleeve">cap sleeve</option>
                                <option value="slit sleeve">slit sleeve</option>
                                <option value="roll up sleeve ">roll up sleeve </option>
                                <option value="cuffed sleeves">cuffed sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="flared sleeve">flared sleeve</option>
                                <option value="batwings">batwings</option>
                                <option value="other">other</option>
                                <option value="puff sleeve">puff sleeve</option>
                                <option value="bell sleeves">bell sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Dresses")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="mexi dresses">mexi dresses</option>
                                <option value="t-shirt dresses">t-shirt dresses</option>
                                <option value="a-line dresses">a-line dresses</option>
                                <option value="off shoulder dresses">off shoulder dresses</option>
                                <option value="bodycon dresses">bodycon dresses</option>
                                <option value="kebaya dresses">kebaya dresses</option>
                                <option value="kaftaan dresses">kaftaan dresses</option>
                                <option value="sheat dresses">sheat dresses</option>
                                <option value="peplim dresses">peplim dresses</option>
                                <option value="shirt dresses">shirt dresses</option>
                                <option value="wrap dresses">wrap dresses</option>
                                <option value="fit & flare dresses">fit & flare dresses</option>
                                <option value="shift dresses">shift dresses</option>
                                <option value="pencil dresses">pencil dresses</option>
                                <option value="sweater dresses">sweater dresses</option>
                                <option value="blouseon dresses">blouseon dresses</option>
                                <option value="asymmetric dresses">asymmetric dresses</option>
                                <option value="denim dresses">denim dresses</option>
                                <option value="skater dresses">skater dresses</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>-- Sleeve Length --</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected> Select Type</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mini">mini</option>
                                <option value="knee length">knee length</option>
                                <option value="mexi">mexi</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="kimono">kimono</option>
                                <option value="cap sleeve">cap sleeve</option>
                                <option value="slit sleeve">slit sleeve</option>
                                <option value="roll up sleeve ">roll up sleeve </option>
                                <option value="cuffed sleeves">cuffed sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="flared sleeve">flared sleeve</option>
                                <option value="batwings">batwings</option>
                                <option value="other">other</option>
                                <option value="puff sleeve">puff sleeve</option>
                                <option value="bell sleeves">bell sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                                <option value="houndstooth pattern">houndstooth pattern</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Jumpsuit")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="party">party</option>
                                <option value="casual">casual</option>
                                <option value="sports">sports</option>
                                <option value="beach">beach</option>
                                <option value="formal">formal</option>
                                <option value="ethnic">ethnic</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="basic jumpsuit" id="basic jumpsuit"> <label for="basic jumpsuit">basic jumpsuit</label>
                              <input type="checkbox" name="playsuit/roampers" id="playsuit/roampers"> <label for="playsuit/roampers">playsuit/roampers</label>
                              <input type="checkbox" name="culotte jumpsuit" id="culotte jumpsuit"> <label for="culotte jumpsuit">culotte jumpsuit</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="cap sleeves">cap sleeves</option>
                                <option value="slit sleeves">slit sleeves</option>
                                <option value="rollup sleeves">rollup sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="batwing">batwing</option>
                                <option value="puff sleeves">puff sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Tees & Shirts")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                              <option value="shirt">shirt</option>
                              <option value="T-shirt">T-shirt</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="Boxy">Boxy</option>
                                <option value="Slim">Slim</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cap sleeves">cap sleeves</option>
                                <option value="roll up sleeves">roll up sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="Other">Other</option>
                                <option value="puff sleeves">puff sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="Long Line">Long Line</option>
                                <option value="Crop Line">Crop Line</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Skirts")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="flared">flared</option>
                                <option value="asymmetrical">asymmetrical</option>
                                <option value="layered">layered</option>
                                <option value="peplum">peplum</option>
                                <option value="peplum">peplum</option>
                                <option value="straight">straight</option>
                                <option value="tube">tube</option>
                                <option value="pleated">pleated</option>
                                <option value="pencil">pencil</option>
                                <option value="a line">a line</option>
                                <option value="slit">slit</option>
                                <option value="bubble">bubble</option>
                                <option value="trumpet">trumpet</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="midi">midi</option>
                                <option value="mini">mini</option>
                                <option value="knee length">knee length</option>
                                <option value="mexi">mexi</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="pu">pu</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Shorts")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="sports shorts">sports shorts</option>
                                <option value="denim shorts">denim shorts</option>
                                <option value="hot pants">hot pants</option>
                                <option value="regular shorts">regular shorts</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mini">mini</option>
                                <option value="knee length">knee length</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="pu">pu</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Jacket")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="blazer">blazer</option>
                                <option value="hoodie">hoodie</option>
                                <option value="sweat shirt">sweat shirt</option>
                                <option value="denim jacket">denim jacket</option>
                                <option value="sweaters">sweaters</option>
                                <option value="pea coats">pea coats</option>
                                <option value="shrugs">shrugs</option>
                                <option value="cardigan">cardigan</option>
                                <option value="trench coat">trench coat</option>
                                <option value="biker jackets">biker jackets</option>
                                <option value="kimonos">kimonos</option>
                                <option value="swing coats">swing coats</option>
                                <option value="cape & ponchos">cape & ponchos</option>
                                <option value="parkas">parkas</option>
                                <option value="leather jackets">leather jackets</option>
                                <option value="bomber jackets">bomber jackets</option>
                                <option value="down coat">down coat</option>
                                <option value="duster coat">duster coat</option>
                                <option value="duffle coat">duffle coat</option>
                                <option value="puffer jacket">puffer jacket</option>
                                <option value="gilet">gilet</option>
                                <option value="raincoat">raincoat</option>
                                <option value="windcheater">windcheater</option>
                                <option value="waistcoat">waistcoat</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="Long Line">Long Line</option>
                                <option value="Crop Line">Crop Line</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="pu">pu</option>
                                <option value="fleece">fleece</option>
                                <option value="fauxfur">fauxfur</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Features </span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="padded">padded</option>
                                <option value="reversable">reversable</option>
                                <option value="hooded">hooded</option>
                                <option value="light weight">light weight</option>
                                <option value="water resistant">water resistant</option>
                                <option value="zipper">zipper</option>
                                <option value="quilted">quilted</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Collar </span>
                              <select name="collar" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="High Collar">High Collar</option>
                                <option value="mandarin">mandarin</option>
                                <option value="Stand Collar">Stand Collar</option>
                                <option value="Hooded">Hooded</option>
                                <option value="Ripped Collar">Ripped Collar</option>
                                <option value="Shwl Collar">Shwl Collar</option>
                                <option value="lapel Collar">lapel Collar</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="roll up sleeves">roll up sleeves</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Trouser")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="plazo">plazo</option>
                                <option value="chinos">chinos</option>
                                <option value="formal pants">formal pants</option>
                                <option value="harem pants">harem pants</option>
                                <option value="cargo pants">cargo pants</option>
                                <option value="culottes">culottes</option>
                                <option value="jeggings">jeggings</option>
                                <option value="cigeratte trouser">cigeratte trouser</option>
                              </select>
                            </div>
                            </div>
                            <div class="col-sm-12">
                            <div class="form-f-a" style="display: flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="DYED">DYED</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="pleated">pleated</option>
                                <option value="flared">flared</option>
                                <option value="boot cut">boot cut</option>
                                <option value="loose">loose</option>
                                <option value="slim">slim</option>
                                <option value="regular">regular</option>
                                <option value="straight">straight</option>
                                <option value="narrow">narrow</option>
                                <option value="skinny">skinny</option>
                                <option value="pencil">pencil</option>
                                <option value="relaxed">relaxed</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Waist Rise</span>
                              <select name="waist_rise" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HIGH RISE">LOW RISE</option>
                                <option value="MID RISE">MID RISE</option>
                                <option value="LOW RISE">LOW RISE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Jeans")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Waist Rise</span>
                              <select name="waist_rise" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HIGH RISE">HIGH RISE</option>
                                <option value="MID RISE">MID RISE</option>
                                <option value="LOW RISE">LOW RISE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="Crop">Crop</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Wash</span>
                              <select name="wash" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Heavy Wash">Heavy Wash</option>
                                <option value="Acid Wash">Acid Wash</option>
                                <option value="Light Wash">Light Wash</option>
                                <option value="Clean Wash">Clean Wash</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="pleated">pleated</option>
                                <option value="flared">flared</option>
                                <option value="boot cut">boot cut</option>
                                <option value="loose">loose</option>
                                <option value="slim">slim</option>
                                <option value="regular">regular</option>
                                <option value="straight">straight</option>
                                <option value="narrow">narrow</option>
                                <option value="skinny">skinny</option>
                                <option value="pencil">pencil</option>
                                <option value="relaxed">relaxed</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Distress</span>
                              <select name="distress" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Mildy Distress">Mildy Distress</option>
                                <option value="Heacy Distress">Heacy Distress</option>
                                <option value="Clean Look">Clean Look</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sports Wear")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="T-shirt">T-shirt</option>
                                <option value="Sweatshirts">Sweatshirts</option>
                                <option value="tracksuit">tracksuit</option>
                                <option value="sports">sports</option>
                                <option value="peplum">peplum</option>
                                <option value="tank tops">tank tops</option>
                                <option value="trackpant">trackpant</option>
                                <option value="track jacket">track jacket</option>
                                <option value="tights">tights</option>
                                <option value="sports bra">sports bra</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                            </div>
                          </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length required">
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="nylon">nylon</option>
                                <option value="fleece">fleece</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Features </span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="hooded">hooded</option>
                                <option value="light weight">light weight</option>
                                <option value="water resistant">water resistant</option>
                                <option value="reversible">reversible</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="roll up sleeves">roll up sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="square neck">square neck</option>
                                <option value="round neck">round neck</option>
                                <option value="Polo neck">Polo neck</option>
                                <option value="v neck">v neck</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Leggings")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="silk">silk</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sunglasses")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Material</span>
                              <select name="Lens_material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="composite">composite</option>
                                <option value="glass">glass</option>
                                <option value="plastic">plastic</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="plastic">plastic</option>
                                <option value="metal">metal</option>
                                <option value="plastic & metal">plastic & metal</option>
                                <option value="polycarbonate">polycarbonate</option>
                                <option value="aceteae">aceteae</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Shape Frame</span>
                              <select name="Shape_frame" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wrap">wrap</option>
                                <option value="round">round</option>
                                <option value="OVAL">OVAL</option>
                                <option value="oversized">oversized</option>
                                <option value="way farer">way farer</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Warrenty</span>
                              <select name="warrenty" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="more then 5 years">more then 5 years</option>
                                <option value="1 year">1 year</option>
                                <option value="no-warrenty">no-warrenty</option>
                                <option value="2-5 years">2-5 years</option>
                                <option value="6 months">6 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Color</span>
                              <select name="lens_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sliver">sliver</option>
                                <option value="green">green</option>
                                <option value="pink">pink</option>
                                <option value="brown">brown</option>
                                <option value="white">white</option>
                                <option value="yellow">yellow</option>
                                <option value="blue">blue</option>
                                <option value="cyan">cyan</option>
                                <option value="black">black</option>
                                <option value="grey">grey</option>
                                <option value="transparent">transparent</option>
                                <option value="purple">purple</option>
                                <option value="orange">orange</option>
                                <option value="gold">gold</option>
                                <option value="red">red</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Feature</span>
                              <select name="lens_feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="uv protection">uv protection</option>
                                <option value="polarised">polarised</option>
                                <option value="uv protection & polarised">uv protection & polarised</option>
                                <option value="none">none</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Belts")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="party">party</option>
                                <option value="casual">casual</option>
                                <option value="sport">sport</option>
                                <option value="wedding">wedding</option>
                                <option value="beach">beach</option>
                                <option value="formal">formal</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="synthatic">synthatic</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="rubber">rubber</option>
                                <option value="denim">denim</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="others">others</option>
                                <option value="SOLID">SOLID</option>
                                <option value="textured">textured</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Feature</span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value=""></option>
                                <option value="reversible ">reversible</option>
                                <option value="non-reversible">non-reversible</option>
                              </select>
                            </div>
                          </div>
                          @endif
                                            @if($typename == "Fragrance")
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="deodrants">deodrants</option>
                                <option value="body mists">body mists</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatharepy">aromatharepy</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Application</span>
                               <select name="application" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Jar">Jar</option>
                                <option value="Spray">Spray</option>
                                <option value="Wipes">Wipes</option>
                                <option value="Minature">Minature</option>
                                <option value="Roll On">Roll On</option>
                              </select>
                            </div>
                          </div>
        @endif
                          @if($typename == "Hats")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BERET">BERET</option>
                                <option value="BASEBALL CAP">BASEBALL CAP</option>
                                <option value="BUCKET">BUCKET</option>
                                <option value="FEDORA">FEDORA</option>
                                <option value="SUNHAT">SUNHAT</option>
                                <option value="PANAMA">PANAMA</option>
                                <option value="BOATER">BOATER</option>
                                <option value="CAMPAIGN">CAMPAIGN</option>
                                <option value="BEANIE">BEANIE</option>
                                <option value="FLAT">FLAT</option>
                                <option value="VISCORS">VISCORS</option>
                                <option value="CARTWHEEL">CARTWHEEL</option>
                                <option value="party">party</option>
                                <option value="GATSBY">GATSBY</option>
                                <option value="BOWLER">BOWLER</option>
                                <option value="BOUDOIR CAP">BOUDOIR CAP</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="others">others</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="WASHED">WASHED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="synthatic">synthatic</option>
                                <option value="other">other</option>
                                <option value="denim">denim</option>
                                <option value="cloth">cloth</option>
                                <option value="Wool">Wool</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Scarves")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="WASHED">WASHED</option>
                                <option value="BATIK">BATIK</option>
                                <option value="embroidered">embroidered</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="silk">silk</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sports Accessories")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GYM">GYM</option>
                                <option value="BIKING">BIKING</option>
                                <option value="SWIMMING">SWIMMING</option>
                                <option value="FITNESS">FITNESS</option>
                                <option value="YOGA">YOGA</option>
                                <option value="SPORTS">SPORTS</option>
                                <option value="HIKING">HIKING</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Socks")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="tab">tab</option>
                                <option value="CREW">CREW</option>
                                <option value="LOW">LOW</option>
                                <option value="QUARTER">QUARTER</option>
                                <option value="NO SHOW">NO SHOW</option>
                                <option value="stockings">stockings</option>
                                <option value="pantyhose">pantyhose</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="embroidered">embroidered</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Wool">Wool</option>
                                <option value="synthatic">synthatic</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Other")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Fragrence")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="deodrants">deodrants</option>
                                <option value="body mists">body mists</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatharepy">aromatharepy</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Application</span>
                               <select name="application" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Jar">Jar</option>
                                <option value="Spray">Spray</option>
                                <option value="Wipes">Wipes</option>
                                <option value="Minature">Minature</option>
                                <option value="Roll On">Roll On</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sandals & Sleeper")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Shape</span>
                              <select name="heel_shape" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wedge">wedge</option>
                                <option value="kitten">kitten</option>
                                <option value="platform">platform</option>
                                <option value="cone">cone</option>
                                <option value="other">other</option>
                                <option value="block">block</option>
                                <option value="stilleto">stilleto</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="velcro">velcro</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="flatform">flatform</option>
                                <option value="sliders">sliders</option>
                                <option value="clogs">clogs</option>
                                <option value="hight ( above 3.5 inches)">hight ( above 3.5 inches)</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Height</span>
                               <select name="heel_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Flat (0-1.5 inches)">Flat (0-1.5 inches)</option>
                                <option value="low (1.5-2.5 inches)">low (1.5-2.5 inches)</option>
                                <option value="mid (2.5-3.5 inches)">mid (2.5-3.5 inches)</option>
                                <option value="hight ( above 3.5 inches)">hight ( above 3.5 inches)</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Flat shoes")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="loafers">loafers</option>
                                <option value="t-strap flat">t-strap flat</option>
                                <option value="gladiators">gladiators</option>
                                <option value="mules">mules</option>
                                <option value="peep toe">peep toe</option>
                                <option value="one toe flats">one toe flats</option>
                                <option value="espadriles">espadriles</option>
                                <option value="bellarinas">bellarinas</option>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="velcro">velcro</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Heel")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Shape</span>
                              <select name="heel_shape" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wedge">wedge</option>
                                <option value="kitten">kitten</option>
                                <option value="platform">platform</option>
                                <option value="cone">cone</option>
                                <option value="other">other</option>
                                <option value="block">block</option>
                                <option value="stilleto">stilleto</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="velcro">velcro</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Height</span>
                               <select name="heel_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Flat (0-1.5 inches)">Flat (0-1.5 inches)</option>
                                <option value="low (1.5-2.5 inches)">low (1.5-2.5 inches)</option>
                                <option value="mid (2.5-3.5 inches)">mid (2.5-3.5 inches)</option>
                                <option value="hight ( above 3.5 inches)">hight ( above 3.5 inches)</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Boots")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Shaft Height</span>
                              <select name="shaft_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mid calf">mid calf</option>
                                <option value="over the knee">over the knee</option>
                                <option value="platform">platform</option>
                                <option value="anckle">anckle</option>
                                <option value="knee high">knee high</option>
                                <option value="thigh-High">thigh-High</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="velcro">velcro</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="harness boats">harness boats</option>
                                <option value="chelsea">chelsea</option>
                                <option value="chukka">chukka</option>
                                <option value="cow boy boots">cow boy boots</option>
                                <option value="others">others</option>
                                <option value="desert boots">desert bootss</option>
                                <option value="bootie">bootie</option>
                                <option value="combat">combat</option>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Height</span>
                               <select name="heel_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Flat (0-1.5 inches)">Flat (0-1.5 inches)</option>
                                <option value="low (1.5-2.5 inches)">low (1.5-2.5 inches)</option>
                                <option value="mid (2.5-3.5 inches)">mid (2.5-3.5 inches)</option>
                                <option value="hight ( above 3.5 inches)">hight ( above 3.5 inches)</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Heel Shape</span>
                              <select name="heel_shape" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wedge">wedge</option>
                                <option value="kitten">kitten</option>
                                <option value="platform">platform</option>
                                <option value="cone">cone</option>
                                <option value="other">other</option>
                                <option value="block">block</option>
                                <option value="stilleto">stilleto</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sports shoes")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="motorshports">motorshports</option>
                                <option value="tesnis">tesnis</option>
                                <option value="bowling">bowling</option>
                                <option value="cycling">cycling</option>
                                <option value="footbal">footbal</option>
                                <option value="cricket">cricket</option>
                                <option value="gym & training">gym & training</option>
                                <option value="golf">golf</option>
                                <option value="riding">riding</option>
                                <option value="running">running</option>
                                <option value="basket ball">basket ball</option>
                                <option value="gum soles">gum soles</option>
                                <option value="walking">walking</option>
                                <option value="HIKING">HIKING</option>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Lace up">Lace up</option>
                                <option value="velcro">velcro</option>
                                <option value="NONE">NONE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="canvas">canvas</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Casual Shoes")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="LACE UP">LACE UP</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Ankle Height</span>
                              <select name="ankle_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Mid- top">Mid- top</option>
                                <option value="hight -top">hight -top</option>
                                <option value="regular">regular</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sneakers">sneakers</option>
                                <option value="loafers">loafers</option>
                                <option value="derbys">derbys</option>
                                <option value="slip on">slip on</option>
                                <option value="oxfoards">oxfoards</option>
                                <option value="boat shoes">boat shoes</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sling bags")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                               <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="checked">checked</option>
                                <option value="WASHED">WASHED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Hand bag")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                               <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="checked">checked</option>
                                <option value="WASHED">WASHED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option disabled selected>-- Select --</option>
                                <option value="batik">batik</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>laptop comparment</span>
                              <select name="laptop_comparment" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Wallet & Clutches")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                               <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="checked">checked</option>
                                <option value="WASHED">WASHED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="batik">batik</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Bag pack")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                               <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="checked">checked</option>
                                <option value="WASHED">WASHED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="batik">batik</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>laptop comparment</span>
                              <select name="laptop_comparment" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Blouse")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shaded">shaded</option>
                                <option value="geomatric">geomatric</option>
                                <option value="tie dye">tie dye</option>
                                <option value="striped">striped</option>
                                <option value="graphics">graphics</option>
                                <option value="solid">solid</option>
                                <option value="tropical">tropical</option>
                                <option value="tie dye">tie dye</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="batik">batik</option>
                                <option value="printed">printed</option>
                                <option value="floral">floral</option><option value="crochet">crochet</option>
                                <option value="dyed">dyed</option>
                                <option value="ikat">ikat</option>
                                <option value="beadworks">beadworks</option>
                                <option value="chevron">chevron</option><option value="abstract">abstract</option>
                                <option value="thread works">thread works</option>
                                <option value="zardozi works">zardozi works</option>
                                <option value="polka dot">polka dot</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Closure</span>
                              <select name="closure" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="slip on">slip on</option>
                                <option value="elasticated">elasticated</option>
                                <option value="button">button</option>
                                <option value="drawstring">drawstring</option>
                                <option value="zipper">zipper</option>
                                <option value="other">other</option>
                                <option value="hook & eye">hook & eye</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="cap sleeves">cap sleeves</option>
                                <option value="slit sleeves">slit sleeves</option>
                                <option value="rollup sleeves">rollup sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="batwing">batwing</option>
                                <option value="puff sleeves">puff sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="silk">silk</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Dupatta")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shaded">shaded</option>
                                <option value="geomatric">geomatric</option>
                                <option value="tie dye">tie dye</option>
                                <option value="striped">striped</option>
                                <option value="graphics">graphics</option>
                                <option value="solid">solid</option>
                                <option value="tropical">tropical</option>
                                <option value="tie dye">tie dye</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="batik">batik</option>
                                <option value="printed">printed</option>
                                <option value="floral">floral</option><option value="crochet">crochet</option>
                                <option value="dyed">dyed</option>
                                <option value="ikat">ikat</option>
                                <option value="beadworks">beadworks</option>
                                <option value="chevron">chevron</option><option value="abstract">abstract</option>
                                <option value="thread works">thread works</option>
                                <option value="zardozi works">zardozi works</option>
                                <option value="polka dot">polka dot</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="silk">silk</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Border</span>
                              <select name="border" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="tapping">tapping</option>
                                <option value="no border">no border</option>
                                <option value="fringed">fringed</option>
                                <option value="printed">printed</option>
                                <option value="tasseled">tasseled</option>
                                <option value="embellished">embellished</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Ethnic Bottomwear")
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shaded">shaded</option>
                                <option value="geomatric">geomatric</option>
                                <option value="tie dye">tie dye</option>
                                <option value="striped">striped</option>
                                <option value="graphics">graphics</option>
                                <option value="solid">solid</option>
                                <option value="tropical">tropical</option>
                                <option value="tie dye">tie dye</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="batik">batik</option>
                                <option value="printed">printed</option>
                                <option value="floral">floral</option><option value="crochet">crochet</option>
                                <option value="dyed">dyed</option>
                                <option value="ikat">ikat</option>
                                <option value="beadworks">beadworks</option>
                                <option value="chevron">chevron</option><option value="abstract">abstract</option>
                                <option value="thread works">thread works</option>
                                <option value="zardozi works">zardozi works</option>
                                <option value="polka dot">polka dot</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="silk">silk</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Waist Rise</span>
                              <select name="waist_rise" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HIGH RISE">HIGH RISE</option>
                                <option value="MID RISE">MID RISE</option>
                                <option value="LOW RISE">LOW RISE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="dhoti pants">dhoti pants</option>
                                <option value="plazzo">plazzo</option>
                                <option value="leggings">leggings</option>
                                <option value="shalwar">shalwar</option>
                                <option value="lehnga">lehnga</option>
                                <option value="others">others</option>
                                <option value="patiala">patiala</option>
                                <option value="churidar">churidar</option>
                                <option value="sharara">sharara</option>
                                <option value="capri">capri</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="flared">flared</option>
                                <option value="slim">slim</option>
                                <option value="regular">regular</option>
                                <option value="straight">straight</option>
                                <option value="tapered">tapered</option>
                                <option value="relaxed">relaxed</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ankle length">ankle length</option>
                                <option value="full length">full length</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Hijab")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC fibers</option>
                                <option value="polka dot">polka dot</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="BATIK">BATIK</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="pashmina">pashmina</option>
                                <option value="chiffon">chiffon</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="jersay">jersay</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="voile">voile</option>
                                <option value="viscos">viscos</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Kurtas & Kurtis")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="regular">regular</option>
                                <option value="Kaftan">Kaftan</option>
                                <option value="pleated">pleated</option>
                                <option value="a line">a line</option>
                                <option value="anarkali">anarkali</option>
                                <option value="layered">layered</option>
                                <option value="emprie">emprie</option>
                              </select>
                              <option value="panelled">panelled</option>
                              </select>
                              <option value="high slit">high slit</option>
                              </select>
                              <option value="tiered">tiered</option>
                              </select>
                              <option value="angrakha">angrakha</option>
                              <option value="straight">straight</option>
                              </select>

                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                                <option value="shawl neck">shawl neck</option>
                                <option value="shirt collar">shirt collar</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shaded">shaded</option>
                                <option value="geomatric">geomatric</option>
                                <option value="tie dye">tie dye</option>
                                <option value="striped">striped</option>
                                <option value="graphics">graphics</option>
                                <option value="solid">solid</option>
                                <option value="tropical">tropical</option>
                                <option value="tie dye">tie dye</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="batik">batik</option>
                                <option value="printed">printed</option>
                                <option value="floral">floral</option><option value="crochet">crochet</option>
                                <option value="dyed">dyed</option>
                                <option value="ikat">ikat</option>
                                <option value="beadworks">beadworks</option>
                                <option value="chevron">chevron</option><option value="abstract">abstract</option>
                                <option value="thread works">thread works</option>
                                <option value="zardozi works">zardozi works</option>
                                <option value="polka dot">polka dot</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ankle length">ankle length</option>
                                <option value="full length">full length</option>
                                <option value="above knee">above knee</option>
                                <option value="calf length">calf length</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="cap sleeves">cap sleeves</option>
                                <option value="slit sleeves">slit sleeves</option>
                                <option value="rollup sleeves">rollup sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="batwing">batwing</option>
                                <option value="puff sleeves">puff sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Shalwar qamiz")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="regular">regular</option>
                                <option value="Kaftan">Kaftan</option>
                                <option value="pleated">pleated</option>
                                <option value="a line">a line</option>
                                <option value="anarkali">anarkali</option>
                                <option value="layered">layered</option>
                                <option value="emprie">emprie</option>
                              </select>
                              <option value="panelled">panelled</option>
                              </select>
                              <option value="high slit">high slit</option>
                              </select>
                              <option value="tiered">tiered</option>
                              </select>
                              <option value="angrakha">angrakha</option>
                              <option value="straight">straight</option>
                              </select>

                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="halter neck">halter neck</option>
                                <option value="hooded">hooded</option>
                                <option value="choker neck">choker neck</option>
                                <option value="square neck">square neck</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="sweatheart neck">sweatheart neck</option>
                                <option value="round neck">round neck</option>
                                <option value="boat neck">boat neck</option>
                                <option value="turtle">turtle</option>
                                <option value="peter pan collar">peter pan collar</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                                <option value="shawl neck">shawl neck</option>
                                <option value="shirt collar">shirt collar</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shaded">shaded</option>
                                <option value="geomatric">geomatric</option>
                                <option value="tie dye">tie dye</option>
                                <option value="striped">striped</option>
                                <option value="graphics">graphics</option>
                                <option value="solid">solid</option>
                                <option value="tropical">tropical</option>
                                <option value="tie dye">tie dye</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="batik">batik</option>
                                <option value="printed">printed</option>
                                <option value="floral">floral</option><option value="crochet">crochet</option>
                                <option value="dyed">dyed</option>
                                <option value="ikat">ikat</option>
                                <option value="beadworks">beadworks</option>
                                <option value="chevron">chevron</option><option value="abstract">abstract</option>
                                <option value="thread works">thread works</option>
                                <option value="zardozi works">zardozi works</option>
                                <option value="polka dot">polka dot</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Top Length</span>
                              <select name="top_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ankle length">ankle length</option>
                                <option value="full length">full length</option>
                                <option value="above knee">above knee</option>
                                <option value="calf length">calf length</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Style</span>
                              <select name="sleeve_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cold shoulder">cold shoulder</option>
                                <option value="cap sleeves">cap sleeves</option>
                                <option value="slit sleeves">slit sleeves</option>
                                <option value="rollup sleeves">rollup sleeves</option>
                                <option value="off shoulder">off shoulder</option>
                                <option value="batwing">batwing</option>
                                <option value="puff sleeves">puff sleeves</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="leather">leather</option>
                                <option value="satin">satin</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Bottom Type</span>
                              <select name="bottom_type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Skirt">Skirt</option>
                                <option value="Plazzo">Plazzo</option>
                                <option value="dhoti pants">dhoti pants</option>
                                <option value="shalwar">shalwar</option>
                                <option value="harem pants">harem pants</option>
                                <option value="patiala">patiala</option>
                                <option value="churidar">churidar</option>
                                <option value="sharara">sharara</option>
                                <option value="trousers">trousers</option>
                                <option value="pyjamas">pyjamas</option>
                                <option value="others">others</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Duppatta</span>
                              <select name="dupatta" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="yes">yes</option>
                                <option value="no">no</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>piece Count</span>
                              <select name="piece_count" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="1 piece">1 piece</option>
                                <option value="2 piece">2 piece</option>
                                <option value="3 piece">3 piece</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Analog")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Color</span>
                              <select name="strap_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Dial Color</span>
                              <select name="dail_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Colour Block</span>
                              <select name="color_block" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="square">square</option>
                                <option value="rectangular">rectangular</option>
                                <option value="round">round</option>
                                <option value="oval">oval</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Material</span>
                              <select name="strap_material" required>
                                <option disabled selected>-- Select --</option>
                                <option value="mesh">mesh</option>
                                <option value="plastic">plastic</option>
                                <option value="silicon">silicon</option>
                                <option value="leather">leather</option>
                                <option value="rubber">rubber</option>
                                <option value="metal">metal</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Type</span>
                              <select name="strap_type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="magnet">magnet</option>
                                <option value="elastic">elastic</option>
                                <option value="clamp">clamp</option>
                                <option value="leather">leather</option>
                                <option value="shape on">shape on</option>
                                <option value="metal">metal</option>
                                <option value="buckle">buckle</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Digital")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Color</span>
                              <select name="strap_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Dial Color</span>
                              <select name="dail_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Colour Block</span>
                              <select name="color_block" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="square">square</option>
                                <option value="rectangular">rectangular</option>
                                <option value="round">round</option>
                                <option value="oval">oval</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Material</span>
                              <select name="strap_material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mesh">mesh</option>
                                <option value="plastic">plastic</option>
                                <option value="silicon">silicon</option>
                                <option value="leather">leather</option>
                                <option value="rubber">rubber</option>
                                <option value="metal">metal</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Type</span>
                              <select name="strap_type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="magnet">magnet</option>
                                <option value="elastic">elastic</option>
                                <option value="clamp">clamp</option>
                                <option value="leather">leather</option>
                                <option value="shape on">shape on</option>
                                <option value="metal">metal</option>
                                <option value="buckle">buckle</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                         <!--  ###################################### Women End ################################################################ -->
                          <!--  ###################################### Kid  ################################################################ -->
                          @if($cateid === '510')
                          @if($typename == "Accessories")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Bottoms")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Dresses")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Foot Wear")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="sports">sports</option>
                                <option value="rain boots">rain boots</option>
                                <option value="boots">boots</option>
                                <option value="heel">heel</option>
                                <option value="sneakers">sneakers</option>
                                <option value="school shoes">school shoes</option>
                                <option value="flat shoes">flat shoes</option>
                                <option value="slippers">slippers</option>
                                <option value="trainers">trainers</option>
                                <option value="sandals">sandals</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="synthatic">synthatic</option>
                                <option value="patent leather">patent leather</option>
                                <option value="suede">suede</option>
                                <option value="cloth">cloth</option>
                                <option value="leather">leather</option>
                              </select>
                            </div>
                          </div>

                          @endif
                          @if($typename == "Jackets")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Nightsuits")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Tops")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "onesies")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="new born">new born</option>
                                <option value="0-3 months">0-3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 month">9-12 month</option>
                                <option value="12-18 months">12-18 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Diapers")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Baby Size</span>
                              <select name="baby_size" required>
                                <option value=""  disabled selected>-- Select --</option>
                                <option value="New born-up to 5kg">New born-up to 5kg</option>
                                <option value="Medium 6-11kg">Medium 6-11kg</option>
                                <option value="small 3-8kg">small 3-8kg</option>
                                <option value="larger 9-12kg">larger 9-12kg</option>
                                <option value="x-large 12-17kg">x-large 12-17kg</option>
                                <option value="xx-large 17 -25kg">xx-large 17 -25kg</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value=""  disabled selected>-- Select --</option>
                                <option value="baby diapers">baby diapers</option>
                                <option value="diaper pants">diaper pants</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Body Wash")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="sensitive skin">sensitive skin</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatherapy">aromatherapy</option>
                                <option value="organic">organic</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Body Cream & Oil")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sensitive skin">sensitive skin</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatherapy">aromatherapy</option>
                                <option value="organic">organic</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Hair wash")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sensitive skin">sensitive skin</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatherapy">aromatherapy</option>
                                <option value="organic">organic</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Toys")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="soft toys">soft toys</option>
                                <option value="outdoor toys">outdoor toys</option>
                                <option value="remote controll toys">remote controll toys</option>
                                <option value="board games">board games</option>
                                <option value="educational toys">educational toys</option>
                                <option value="puzzles">puzzles</option>
                                <option value="vehicle models">vehicle models</option>
                                <option value="action figures">action figures</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="0-2 years">0-2 years</option>
                                <option value="2-5 years">2-5 years</option>
                                <option value="5-8 years">5-8 years</option>
                                <option value="8-12 years">8-12 years</option>
                                <option value="12-15 years">12-15 years</option>
                                <option value="15+ years">15+ years</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Others")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="baby cushion">baby cushion</option>
                                <option value="milk bottles">milk bottles</option>
                                <option value="pecifiers & teether">pecifiers & teether</option>
                                <option value="rattles">rattles</option>
                                <option value="slippers">slippers</option>
                                <option value="sterilizer">sterilizer</option>
                                <option value="wipes">wipes</option>
                                <option value="ear buds">ear buds</option>
                                <option value="baby guides">baby guides</option>
                                <option value="nail clipper">nail clipper</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sipper & Mugs")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Feature</span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="bpa free">bpa free</option>
                                <option value="non spill">non spill</option>
                                <option value="with lid">with lid</option>
                                <option value="with spoon">with spoon</option>
                                <option value="insulated cup">insulated cup</option>
                                <option value="with straw">with straw</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="tumblers">tumblers</option>
                                <option value="straw sipper">straw sipper</option>
                                <option value="sipper accessories">sipper accessories</option>
                                <option value="mugs">mugs</option>
                                <option value="spout sipper">spout sipper</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Bags")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="polka dot">polka dot</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="CARTOONS">CARTOONS</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="lunch bag">lunch bag</option>
                                <option value="sling bag">sling bag</option>
                                <option value="duffle bag">duffle bag</option>
                                <option value="messenger bag">messenger bag</option>
                                <option value="school bag">school bag</option>
                                <option value="shoulder bag">shoulder bag</option>
                                <option value="wallets &  cluthes">wallets &  cluthes</option>
                                <option value="hand bags">hand bags</option>
                                <option value="wheeled bags">wheeled bags</option>
                                <option value="sports bags">sports bags</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="plastic">plastic</option>
                                <option value="patent leather">patent leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="thermoplastic">thermoplastic</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="other">other</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sets")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="WASHED">WASHED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="PRINTED">PRINTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Age</span>
                              <select name="age" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="0-2 years">0-2 years</option>
                                <option value="2-5 years">2-5 years</option>
                                <option value="5-8 years">5-8 years</option>
                                <option value="8-12 years">8-12 years</option>
                                <option value="12-15 years">12-15 years</option>
                                <option value="15+ years">15+ years</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="organic">organic</option>
                                <option value="lycra">lycra</option>
                                <option value="synthatic fiber">synthatic fiber</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                          <!--  ###################################### Kid End ################################################################ -->
                          <!--  ###################################### Beauty ################################################################ -->
                          @if($cateid === '323')
                          @if($scateid === '522')
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Sensitive Skin">Sensitive Skin</option>
                                <option value="combination">combination</option>
                                <option value="oily skins">oily skins</option>
                                <option value="daily use">daily use</option>
                                <option value="dry skin">dry skin</option>
                                <option value="normal skin">normal skin</option>
                                <option value="organic">organic</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Product</span>
                              <select name="products" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Nail cream">Nail cream</option>
                                <option value="wrinkle free">wrinkle free</option>
                                <option value="dark circle remover">dark circle remover</option>
                                <option value="body polish">body polish</option>
                                <option value="puffiness cream">puffiness cream</option>
                                <option value="under eye cream">under eye cream</option>
                                <option value="footspa cream">footspa cream</option>
                                <option value="anti aging">anti aging</option>
                                <option value="dark spot removal">dark spot removal</option>
                                <option value="vitamin based cream">vitamin based cream</option>
                                <option value="cooling cream">cooling cream</option>
                                <option value="purifying hand cream">purifying hand cream</option>
                                <option value="fairness cream">fairness cream</option>
                                <option value="body butter">body butter</option>
                                <option value="hyderation cream">hyderation cream</option>
                                <option value="cooling foot cream">cooling foot cream</option>
                                <option value="nail and cuticle cream">nail and cuticle cream</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Apply On</span>
                              <select name="apply_on" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Sensitive Skin">Sensitive Skin</option>
                                <option value="foot">foot</option>
                                <option value="face">face</option>
                              <option value="body">body</option>
                                <option value="nail">nail</option>
                              <option value="under eye">under eye</option>
                                <option value="hand">hand</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($scateid === '523')
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Brushes & comb">Brushes & comb</option>
                                <option value="hair dryer">hair dryer</option>
                              <option value="curling iron">curling iron</option>
                                <option value="Damaged hair">Damaged hair</option>
                              <option value="cury hair">cury hair</option>
                                <option value="normal hair">normal hair</option>
                                <option value="straightening">straightening</option>
                                <option value="Dull hair">Dull hair</option>
                                <option value="Aging hair">Aging hair</option>
                                <option value="frizzy hair">frizzy hair</option>
                                <option value="sensitive scalp">sensitive scalp</option>
                                <option value="oily  scalp">oily  scalp</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($scateid === '523')
                          @if($typename == "Applicators")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="LIPS">LIPS</option>
                                <option value="FACE">FACE</option>
                              <option value="NAILS">NAILS</option>
                                <option value="nail">nail</option>
                              <option value="BODY">BODY</option>
                              <option value="EYES">EYES</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Body")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Glitters">Glitters</option>
                                <option value="Bronzer">Bronzer</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Eyes")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="UNDER EYE CONCEALER">UNDER EYE CONCEALER</option>
                                <option value="EYEBROWS">EYEBROWS</option>
                                <option value="EYE SHADOW">EYE SHADOW</option>
                                <option value="MASCARA">MASCARA</option>
                                <option value="EYE PENCIL">EYE PENCIL</option>
                                <option value="EYELINER">EYELINER</option>
                                <option value="PRIMER">PRIMER</option>
                                <option value="FALSE EYELASHES">FALSE EYELASHES</option>

                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Face")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="FOUNDATION">FOUNDATION</option>
                                <option value="FACE POWDER">FACE POWDER</option>
                                <option value="blush & stainer">blush & stainer</option>
                                <option value="contouring">contouring</option>
                                <option value="Bronzer & liminizer">Bronzer & liminizer</option>
                                <option value="makeup remover">makeup remover</option>
                                <option value="cc& bb cream">cc& bb cream</option>
                                <option value="concealer">concealer</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Lips")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="LIPSET">LIPSET</option>
                                <option value="LIP LINER">LIP LINER</option>
                                <option value="LIPSTAIN">LIPSTAIN</option>
                                <option value="LIPSTICK">LIPSTICK</option>
                                <option value="LIPGLOSS">LIPGLOSS</option>
                                <option value="LIPBALM">LIPBALM</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Nails")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="NAIL POLISH">NAIL POLISH</option>
                                <option value="FALSE NAILS">FALSE NAILS</option>
                                <option value="NAIL POLISH REMOVER">NAIL POLISH REMOVER</option>
                                <option value="NAIL TREATMENT">NAIL TREATMENT</option>
                                <option value="NAIL EMBELLISHMENT">NAIL EMBELLISHMENT</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Sets & Palette")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SET & PALLETE">SET & PALLETE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                          @if($scateid === "526")
                          @if($typename == "Hairs")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEL">GEL</option>
                                <option value="CLAY">CLAY</option>
                                <option value="PRE STYLING">PRE STYLING</option>
                                <option value="TRETMENTS">TRETMENTS</option>
                                <option value="SPRAY">SPRAY</option>
                                <option value="SHAMPOO">SHAMPOO</option>
                                <option value="WAX">WAX</option>
                                <option value="CONDITIONER">CONDITIONER</option>
                                <option value="POMADE">POMADE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Scent</span>
                              <select name="scent" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="NATURAL">NATURAL</option>
                                <option value="FRESH">FRESH</option>
                                <option value="UNSCENTED">UNSCENTED</option>
                                <option value="AROMATIC">AROMATIC</option>
                                <option value="FRUITY">FRUITY</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="WOOD">WOOD</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Shaving")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Sensitive Skin">Sensitive Skin</option>
                                <option value="combination">combination</option>
                                <option value="oily skins">oily skins</option>
                                <option value="daily use">daily use</option>
                                <option value="dry skin">dry skin</option>
                                <option value="normal skin">normal skin</option>
                                <option value="organic">organic</option>
                                <option value="Aromatherapy">Aromatherapy</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Product</span>
                              <select name="products" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SHAVING TOOL">SHAVING TOOL</option>
                                <option value="SHAVING CREAM">SHAVING CREAM</option>
                                <option value="AFTER SHAVE">AFTER SHAVE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename == "Skin care")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Sensitive Skin">Sensitive Skin</option>
                                <option value="combination">combination</option>
                                <option value="oily skins">oily skins</option>
                                <option value="daily use">daily use</option>
                                <option value="dry skin">dry skin</option>
                                <option value="normal skin">normal skin</option>
                                <option value="organic">organic</option>
                                <option value="Aromatherapy">Aromatherapy</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Product</span>
                              <select name="products" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="TOOL">TOOL</option>
                                <option value="MASK">MASK</option>
                                <option value="SKIN CREAM">SKIN CREAM</option>
                                <option value="MOISTURIZER">MOISTURIZER</option>
                                <option value="EYE CREAM">EYE CREAM</option>
                                <option value="BODY OIL">BODY OIL</option>
                                <option value="CLEANSER">CLEANSER</option>
                                <option value="TOONER">TOONER</option>
                                <option value="TREATMENT">TREATMENT</option>
                                <option value="SCRUB">SCRUB</option>
                                <option value="BODY WASH">BODY WASH</option>
                                <option value="SUN CREAM">SUN CREAM</option>
                                <option value="LIP BALM ">LIP BALM </option>
                                <option value="FACE WASH">FACE WASH</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Scent</span>
                              <select name="scent" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="NATURAL">NATURAL</option>
                                <option value="FRESH">FRESH</option>
                                <option value="UNSCENTED">UNSCENTED</option>
                                <option value="AROMATIC">AROMATIC</option>
                                <option value="FRUITY">FRUITY</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="WOOD">WOOD</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Care</span>
                              <select name="care" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="WHITENING">WHITENING</option>
                                <option value="WASH">WASH</option>
                                <option value="HYDERATING">HYDERATING</option>
                                <option value="MATTE">MATTE</option>
                                <option value="ANTI ACNE">ANTI ACNE</option>
                                <option value="EXFOLIATING">EXFOLIATING</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                          @if($scateid === "525")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ACNE PRONE">ACNE PRONE</option>
                                <option value="OILY">OILY</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="SENSITVE">SENSITVE</option>
                                <option value="DRY">DRY</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                          @if($cateid === '516')
                          @if($typename === "Home Decor")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BEAN BAGS">BEAN BAGS</option>
                                <option value="SIGNS">SIGNS</option>
                                <option value="PHOTOFRAMES">PHOTOFRAMES</option>
                                <option value="CUSHIONCOVER">CUSHIONCOVER</option>
                                <option value="MIRRORS">MIRRORS</option>
                                <option value="ARTS">ARTS</option>
                                <option value="WAL DECALS">WAL DECALS</option>
                                <option value="PARTY STUFF">PARTY STUFF</option>
                                <option value="WALL HANGING">WALL HANGING</option>
                                <option value="CLOCKS">CLOCKS</option>
                                <option value="LIGHTENING">LIGHTENING</option>
                                <option value="CUSHION">CUSHION</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Kitchen")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="KITCHEN TOOLS">KITCHEN TOOLS</option>
                                <option value="SETS">SETS</option>
                                <option value="SERVING UTENSILS">SERVING UTENSILS</option>
                                <option value="CUTLERY">CUTLERY</option>
                                <option value="GLOVES">GLOVES</option>
                                <option value="BACKING ACCESSORIES">BACKING ACCESSORIES</option>
                                <option value="CROCKERY">CROCKERY</option>
                                <option value="APRON">APRON</option>
                                <option value="COOKING TOOLS">COOKING TOOLS</option>
                                <option value="COOKING UTENSILS">COOKING UTENSILS</option>
                                <option value="GLASSES">GLASSES</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Storage")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BOXES">BOXES</option>
                                <option value="BASKETS">BASKETS</option>
                                <option value="ORGANIZERS">ORGANIZERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Size</span>
                              <select name="size" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Bathroom")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="BATHROOM ESSENTIALS">BATHROOM ESSENTIALS</option>
                                <option value="SETS">SETS</option>
                                <option value="RODS">RODS</option>
                                <option value="HOLDERS">HOLDERS</option>
                                <option value="HOOKS">HOOKS</option>
                                <option value="CLEANING SUPPLIES">CLEANING SUPPLIES</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Bedroom")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="QUILT COVER">QUILT COVER</option>
                                <option value="SETS">SETS</option>
                                <option value="BED COVER">BED COVER</option>
                                <option value="BEDSHEET">BEDSHEET</option>
                                <option value="BLANKET">BLANKET</option>
                                <option value="DUVET COVERS">DUVET COVERS</option>
                                <option value="BOLSTER COVER">BOLSTER COVER</option>
                                <option value="PILLOW COVER">PILLOW COVER</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Size</span>
                              <select name="size" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="KING">KING</option>
                                <option value="SUPER SINGLE">SUPER SINGLE</option>
                                <option value="SINGLE">SINGLE</option>
                                <option value="TWIN">TWIN</option>
                                <option value="QUEEN">QUEEN</option>
                                <option value="DOUBLE">DOUBLE</option>
                                <option value="FULL">FULL</option>
                                <option value="EXTRA KING">EXTRA KING</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYENTHETIC">SYENTHETIC</option>
                                <option value="RAYON">RAYON</option>
                                <option value="SILK">SILK</option>
                                <option value="TENCEL">TENCEL</option>
                                <option value="FLANNEL">FLANNEL</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="BAMBOO">BAMBOO</option>
                                <option value="COTTON">COTTON</option>
                                <option value="COTTON BLENDS">COTTON BLENDS</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Home Fragrance")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="air freshner">air freshner</option>
                                <option value="ultrasonic diffuser">ultrasonic diffuser</option>
                                <option value="diffusers">diffusers</option>
                                <option value="diffuser refils">diffuser refils</option>
                                <option value="oil diffusers">oil diffusers</option>
                                <option value="car freshner">car freshner</option>
                                <option value="scent balls">scent balls</option>
                                <option value="atomizer">atomizer</option>
                                <option value="reed diffuser">reed diffuser</option>
                                <option value="insence sticks">insence sticks</option>
                                <option value="pot pourri">pot pourri</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Scent</span>
                              <select name="scent" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="spicy">spicy</option>
                                <option value="FRESH">FRESH</option>
                                <option value="none">none</option>
                                <option value="AROMATIC">AROMATIC</option>
                                <option value="FRUITY">FRUITY</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="WOOD">WOOD</option>
                                <option value="citrus">citrus</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYENTHETIC">SYENTHETIC</option>
                                <option value="fiber">RAYON</option>
                                <option value="rattan">rattan</option>
                                <option value="glass">glass</option>
                                <option value="copper">copper</option>
                                <option value="wood">wood</option>
                                <option value="BAMBOO">BAMBOO</option>
                                <option value="aluminium">aluminium</option>
                                <option value="vinyl">vinyl</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Shoe Racks")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SHOE HANGER ">SHOE HANGER </option>
                                <option value="SHOE BOX">SHOE BOX</option>
                                <option value="SHOE COVER">SHOE COVER</option>
                                <option value="SHOE BAG">SHOE BAG</option>
                                <option value="SHOE RACK">SHOE RACK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PLASTIC">PLASTIC</option>
                                <option value="METAL">METAL</option>>
                                <option value="wood">wood</option>
                                <option value="CARBOARD">CARBOARD</option>
                                <option value="CLOTH">CLOTH</option>
                                <option value="JUTE">JUTE</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Towels")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BEACH TOWEL">BEACH TOWEL</option>
                                <option value="MBODY TOWELETAL">METAL</option>>
                                <option value="SPORTS TOWEL">SPORTS TOWEL</option>
                                <option value="HAND TOWEL">HAND TOWEL</option>
                                <option value="TOWEL MATS">TOWEL MATS</option>
                                <option value="FACE TOWEL">FACE TOWEL</option>
                                <option value="BATHROBES">BATHROBES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Size</span>
                              <select name="size" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Free Size">Free Size</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYENTHATIC">SYENTHATIC</option>
                                <option value="HEMP">HEMP</option>>
                                <option value="BAMBOO FIBER">BAMBOO FIBER</option>
                                <option value="MODAL">MODAL</option>
                                <option value="RAYON">RAYON</option>
                                <option value="COTTON">COTTON</option>
                                <option value="COTTON BLENDS">COTTON BLENDS</option>
                                <option value="LINEN">LINEN</option>
                                <option value="MICRO FIBER">MICRO FIBER</option>
                                <option value="TERRY COTTON">TERRY COTTON</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>>
                                <option value="CHECKED">CHECKED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKED">CHECKED</option>
                                <option value="STRIPED">STRIPED</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Camping & Hiking")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="CAMPING&HIIKING LIGHTS & ACCESSORIES">CAMPING&HIIKING LIGHTS & ACCESSORIES</option>
                                <option value="CAMPING&HIIKING TOOL KITS">CAMPING&HIIKING TOOL KITS</option>>
                                <option value="CAMPING&HIKING COVERS">CAMPING&HIKING COVERS</option>
                                <option value="CAMPING SLEEPING GEARS">CAMPING SLEEPING GEARS</option>
                                <option value="TENTS & FURNITURE">TENTS & FURNITURE</option>
                                <option value="CAMPING HYDERATION & COOLER">CAMPING HYDERATION & COOLER</option>
                                <option value="CAMPING& HIKING KITS">CAMPING& HIKING KITS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Suitcase")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Size</span>
                              <select name="size" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="CABIN">CABIN</option>
                                <option value="OVERSIZED">OVERSIZED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="THERMOPLASTIC">THERMOPLASTIC</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="NYLON">NYLON</option>
                                <option value="ALUMINIUM">ALUMINIUM</option>
                                <option value="POLYCARBONATE">POLYCARBONATE</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Feature</span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SPINNER WHEEEL">SPINNER WHEEEL</option>
                                <option value="LIGHTWEIGHT LUGGAGE">LIGHTWEIGHT LUGGAGE</option>
                                <option value="WATER RESISTANCE">WATER RESISTANCE</option>
                                <option value="SOFTCASE">SOFTCASE</option>
                                <option value="HARDCASE">HARDCASE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Suitcase Weight</span>
                              <select name="suitcase_weight" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="UPTO 2.5KG">UPTO 2.5KG</option>
                                <option value="2.5 -4.5">2.5 -4.5</option>
                                <option value="ABOVE 4.5KG">ABOVE 4.5KG</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>No Of Wheels</span>
                              <select name="no_of_wheels" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lock</span>
                              <select name="lock" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="NO LOCK">NO LOCK</option>
                                <option value="COMBINATION">COMBINATION</option>
                                <option value="KEY LOCK">KEY LOCK</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Expendables</span>
                              <select name="expendable" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="YES">YES</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Travel Accessories")
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PASSPORT HOLDDER & pouches">PASSPORT HOLDDER & pouches</option>
                                <option value="luggage tags">luggage tags</option>
                                <option value="sleeping bags">sleeping bags</option>
                                <option value="TRAVEL KITS">TRAVEL KITS</option>
                                <option value="KEYCHAIN & LOCKS">KEYCHAIN & LOCKS</option>
                                <option value="EYE MASKs">EYE MASKs</option>
                                <option value="EAR PLUGS">EAR PLUGS</option>
                                <option value="TRAVEL WALLET">TRAVEL WALLET</option>
                                <option value="TRAVEL ESSENTIAL">TRAVEL ESSENTIAL</option>
                                <option value="TRAVEL ORGANIZERS">TRAVEL ORGANIZERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Ideal For</span>
                              <select name="ideal-for" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="MEN">MEN</option>
                                <option value="WOMEN">WOMEN</option>
                                <option value="UNISEX">UNISEX</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYENTHETIC">SYENTHETIC</option>
                                <option value="fiber">RAYON</option>
                                <option value="PLASTIC">PLASTIC</option>
                                <option value="PU">PU</option>
                                <option value="CANVAS">CANVAS</option>
                                <option value="COTTON BLENDS">COTTON BLENDS</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @if($typename === "Travel Wallet & Organizer")
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="TRAVEL WALLET">TRAVEL WALLET</option>
                                <option value="PASSPORT HOLDER">PASSPORT HOLDER</option>
                                <option value="ORGANIZER">ORGANIZER</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="MEGNATIC BUTTON">MEGNATIC BUTTON</option>
                                <option value="BUCKLE">BUCKLE</option>
                                <option value="VELCRO">VELCRO</option>
                                <option value="BUTTON">BUTTON</option>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="COTTON">COTTON</option>
                                <option value="PLASTIC">PLASTIC</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="JUTE">JUTE</option>
                                <option value="CORK">CORK</option>
                                <option value="OTHER">OTHER</option>
                              </select>
                            </div>
                          </div>
                          @endif
                          @endif
                          @if($cateid == 2)
                          @if($typename == "T-shirts & Polos")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                              <input type="checkbox" name="sports_formal" id="sports-formal"> <label for="sports-formal">sports formal</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="Boxy">Boxy</option>
                                <option value="Slim">Slim</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="scoop neck">scoop neck</option>
                                <option value="hooded">hooded</option>
                                <option value="COWL neck">COWL neck</option>
                                <option value="square neck">square neck</option>
                                <option value="polo neck">polo neck</option>
                                <option value="mandarin">mandarin</option>
                                <option value="jenley neck">jenley neck</option>
                                <option value="round turtle">round turtle</option>
                                <option value="v neck">v neck</option>
                                <option value="collared">collared</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC</option>
                                <option value="SUPERHEROS">SUPERHEROS</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="SOLID">SOLID</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="CARTOONS">CARTOONS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-f-a">
                                <span>SLEEVE LENGHT</span>
                                <select name="sleeve_length" required>
                                  <option value="" disabled selected>-- Select --</option>
                                  <option value="HALF SLEEVES">HALF SLEEVES</option>
                                  <option value="SLEEVE LESS">SLEEVE LESS</option>
                                  <option value="SLEEVE LESS">SLEEVE LESS</option>
                                  <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                  <option value="FULL SLEEVES">FULL SLEEVES</option>
                                </select>
                              </div>
                          </div>
                          @endif
                          @if($typename == "Formal Shirts")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                              <div class="form-f-a">
                                <span>SLEEVE LENGHT</span>
                                <select name="sleeve_length" required>
                                  <option value="" disabled selected>-- Select --</option>
                                  <option value="HALF SLEEVES">HALF SLEEVES</option>
                                  <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                  <option value="FULL SLEEVES">FULL SLEEVES</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Collar </span>
                              <select name="collar" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="WINGTIP COLLAR">WINGTIP COLLAR</option>
                                <option value="CUTAWAY COLLAR">CUTAWAY COLLAR</option>
                                <option value="SPREAD COLLAR">SPREAD COLLAR</option>
                                <option value="MANDARIAN COLLAR">MANDARIAN COLLAR</option>
                                <option value="BUTTON DOWN COLLAR">BUTTON DOWN COLLAR</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                               <option value="SOLID">SOLID</option>
                               <option value="CHECKS">CHECKS</option>
                               <option value="BATIK">BATIK</option>
                               <option value="PRINTED">PRINTED</option>
                               <option value="HOUNDSTOOTH PATTERN">HOUNDSTOOTH PATTERN</option>
                               <option value="HERRINGBONE PATTERN">HERRINGBONE PATTERN</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>HEMLINE</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="CURVED">CURVED</option>
                               <option value="STRAIGHT">STRAIGHT</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="TAILORED">TAILORED</option>
                                <option value="SLIM">SLIM</option>
                              </select>
                            </div>
                          </div>
                          @endif
        @if($typename == "Casual Shirts")
                         
                            <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                              <input type="checkbox" name="sports_formal" id="sports-formal"> <label for="sports-formal">sports formal</label>
                            </div>
                          
                          </div>
                          <div class="col-sm-4">
                              <div class="form-f-a">
                                <span>SLEEVE LENGHT</span>
                                <select name="sleeve_length" required>
                                  <option value="" disabled selected>-- Select --</option>
                                  <option value="HALF SLEEVES">HALF SLEEVES</option>
                                  <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                  <option value="FULL SLEEVES">FULL SLEEVES</option>
                                
                                </select>
                              </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Collar </span>
                              <select name="collar" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="WINGTIP COLLAR">WINGTIP COLLAR</option>
                                <option value="CUTAWAY COLLAR">CUTAWAY COLLAR</option>
                                <option value="SPREAD COLLAR">SPREAD COLLAR</option>
                                <option value="MANDARIAN COLLAR">MANDARIAN COLLAR</option>
                                <option value="BUTTON DOWN COLLAR">BUTTON DOWN COLLAR</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC</option>
                                <option value="SUPERHEROS">SUPERHEROS</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="SOLID">SOLID</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="WASHED">WASHED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="CARTOONS">CARTOONS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                                <option value="HERRINGBONE PATTERN">HERRINGBONE PATTERN</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>HEMLINE</span>
                              <select name="hemline" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="CURVED">CURVED</option>
                               <option value="STRAIGHT">STRAIGHT</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="DENIM">DENIM</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="TAILORED">TAILORED</option>
                                <option value="SLIM">SLIM</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Formal Trousers")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SLIM">SLIM</option>
                                <option value="TAILORED">TAILORED</option>
                                <option value="STRAIGHT">STRAIGHT</option>
                                <option value="NARROW">NARROW</option>
                                <option value="PLEATED">PLEATED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHERS">OTHERS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Men's Shorts & 3/4ths")
                         <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party " id="party "> <label for="party ">party </label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BERMUDAS">BERMUDAS</option>
                                 <option value="REGULAR SHORTS">REGULAR SHORTS</option>
                                  <option value="CARGO SHORTS">CARGO SHORTS</option>
                                   <option value="3/4TH ">3/4TH </option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="linen">linen</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Jeans")
                         <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value=""  disabled selected>-- Select --</option>
                                <option value="LOOSE">LOOSE</option>
                                <option value="SLIM">SLIM</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="NARROW">NARROW</option>
                                <option value="STRIGHT">STRIGHT</option>
                                <option value="SKINNY">SKINNY</option>
                                <option value="PENCIL">PENCIL</option>
                                <option value="RELAXED">RELAXED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Distress</span>
                              <select name="distress" required>
                                <option  value="" disabled selected>-- Select --</option>
                                <option value="CLEAN LOOK">CLEAN LOOK</option>
                                <option value="MILDY DISTRESS">MILDY DISTRESS</option>
                                <option value="HEAVY DISTRESS">HEAVY DISTRESS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Wash</span>
                              <select name="wash" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HEAVY WASH">HEAVY WASH</option>
                                <option value="ACID WASH">ACID WASH</option>
                                <option value="LIGHT WASH">LIGHT WASH</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>WAIST RISE</span>
                              <select name="waist_rise" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HIGH RISE ">HIGH RISE </option>
                                <option value="LOW RISE">LOW RISE</option>
                                <option value="MID RISE">MID RISE</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Casual Trousers & Chinos")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports </label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="CARGO PANTS">CARGO PANTS</option>
                                 <option value="TROUSERS">TROUSERS</option>
                                  <option value="CHINOS">CHINOS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>WAIST RISE</span>
                              <select name="waist_rise" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HIGH RISE ">HIGH RISE </option>
                                <option value="LOW RISE">LOW RISE</option>
                                <option value="MID RISE">MID RISE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC</option>
                                <option value="ANIMAL PRINT">ANIMAL PRINT</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="BATIK">BATIK</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="DYED">DYED</option>
                                <option value="PAISLEY">PAISLEY</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="IKAT">IKAT</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                              </select>
                            </div>
                          </div>

        @endif
        @if($typename == "Jackets")
                          <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                             <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sports formal" id="sports formal"> <label for="sports formal">sports formal</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Features </span>
                              <select name="feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="padded">padded</option>
                                <option value="reversable">reversable</option>
                                <option value="hooded">hooded</option>
                                <option value="light weight">light weight</option>
                                <option value="water resistant">water resistant</option>
                                <option value="zipper">zipper</option>
                                <option value="quilted">quilted</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                              <option value="HOODIE">HOODIE</option>
                              <option value="SWEAT SHIRTS">SWEAT SHIRTS</option>
                              <option value="DANIM JACKET">DANIM JACKET</option>
                              <option value="PEA COATS">PEA COATS</option>
                              <option value="SHRUGS">SHRUGS</option>
                              <option value="BIKER JACKETS">BIKER JACKETS</option>
                              <option value="TRENCH COATS">TRENCH COATS</option>
                              <option value="VEST">VEST</option>
                              <option value="SWING COATS">SWING COATS</option>
                              <option value="CAPE & PONCHOS">CAPE & PONCHOS</option>
                              <option value="LEATHER JACKETS">LEATHER JACKETS</option>
                              <option value="DOWN COAT JACKET">DOWN COAT JACKET</option>
                              <option value="KIMONOS">KIMONOS</option>
                              <option value="PARKAS">PARKAS</option>
                              <option value="BOMBER JACKET">BOMBER JACKET</option>
                              <option value="BOMBER JACKET">BOMBER JACKET</option>
                              <option value="DUFFLE COAT">DUFFLE COAT</option>
                              <option value="PUFFER JACKET">PUFFER JACKET</option>
                               <option value="RAINCOAT">RAINCOAT 
                               JACKET</option>
                                <option value="WIND CHEATERS">WIND CHEATERS 
                                JACKET</option>
                                 <option value="GILETS">GILETS 
                                 JACKET</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="synthatic">synthatic</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="spandax">spandax</option>
                                <option value="corduroy">corduroy</option>
                                <option value="other">other</option>
                                <option value="viscos">viscos</option>
                                <option value="lace">lace</option>
                                <option value="nylon">nylon</option>
                                <option value="linen">linen</option>
                                <option value="crepe">crepe</option>
                                <option value="valvet">valvet</option>
                                <option value="silk">silk</option>
                                <option value="shiffon">shiffon</option>
                                <option value="denim">denim</option>
                                <option value="wool">wool</option>
                                <option value="valvet">valvet</option>
                                <option value="FAUX FUR">FAUX FUR</option>
                                <option value="FLEECE">FLEECE</option>
                                <option value="FUR LEATHER">FUR LEATHER</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>

        @endif
        @if($typename == "Sweatshirts")
       <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="SPORTS" id="SPORTS"> <label for="SPORTS">SPORTS</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                            </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="LOOSE ">LOOSE </option>
                                <option value="REGULAR ">REGULAR </option>
                                <option value="SLIM">SLIM</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED ">STRIPPED </option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="FLEECE">FLEECE</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="T-SHIRT">T-SHIRT</option>
                                <option value="TRACKSUIT shorts">TRACKSUIT</option>
                                <option value="SHORTS">SHORTS</option>
                                <option value="TRACK PANTS">TRACK PANTS</option>
                                <option value="TRACK JACKET">TRACK JACKET</option>
                                <option value="TIGHTS">TIGHTS</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option disabled selected>-- Select --</option>
                                <option value="HOODED ">HOODED </option>
                                <option value="POLO NECK">POLO NECK</option>
                                <option value="ROUND NECK">ROUND NECK</option>
                                <option value="V NECKS">V NECKS</option>
                                <option value="OTHERS">OTHERS</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sports wear")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="SPORTS" id="SPORTS"> <label for="SPORTS">SPORTS</label>
                            </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HALF SLEEVES">HALF SLEEVES</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="LOOSE ">LOOSE </option>
                                <option value="Slim">Slim</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="spandax">spandax</option>
                                <option value="nylon">nylon</option>
                                <option value="FLEECE">FLEECE</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="T-SHIRT">T-SHIRT</option>
                                <option value="TRACKSUIT">TRACKSUIT</option>
                                <option value="SHORTS">SHORTS</option>
                                <option value="TRACK PANTS">TRACK PANTS</option>

                                <option value="TRACK JACKET">TRACK JACKET</option>
                                <option value="TIGHTS">TIGHTS</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="HOODED ">HOODED </option>
                                <option value="POLO NECK">POLO NECK</option>
                                <option value="ROUND NECK">ROUND NECK</option>
                                <option value="V NECK">V NECK</option>
                                <option value="OTHERS">OTHERS</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Swimwear/Beachwear")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="SPORTS" id="SPORTS"> <label for="SPORTS">SPORTS</label>
                              
                              
                            </div>
</div>
 <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED ">STRIPPED </option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                                <option value="BATIK">BATIK</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value=""disabled selected>--Select--</option>
                                <option value="T-SHIRT">T-SHIRT</option>
                                <option value="TANK TOP">TANK TOP</option>
                                <option value="SHORTS">SHORTS</option>
                                <option value="RASH GUARD">RASH GUARD</option>
                                <option value="TRUNK ">TRUNK </option>
                                <option value="SWIM SHORTS">SWIM SHORTS</option>
                                <option value="BRIEF">BRIEF</option>
                                <option value="BOXER">BOXER</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="viscose">viscose</option>
                                <option value="SPANDAX">SPANDAX</option>
                                <option value="NYLON">NYLON</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "InnerWear")
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMATRIC">GEOMATRIC</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHICS">GRAPHICS</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="WASHED">WASHED</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                                <option value="ABSTRACT ">ABSTRACT </option>
                                <option value="COLOUR BLOCK">COLOUR BLOCK</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="PYJAMAS ">PYJAMAS </option>
                                <option value="SHORTS">SHORTS</option>
                                <option value="V NECK VEST">V NECK VEST</option>
                                <option value="TRUNK">TRUNK</option>
                                <option value="NIGHTSUIT">NIGHTSUIT</option>
                                <option value="ROUND NECK VEST">ROUND NECK VEST</option>
                                <option value="BRIEF">BRIEF</option>
                                <option value="SLEEPWEAR SET">SLEEPWEAR SET</option>
                                <option value="BOXER">BOXER</option>
                                <option value="VEST SETS">VEST SETS</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="modal">modal</option>
                                <option value="rayon">rayon</option>
                                <option value="polyester">polyester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="viscose">viscose</option>
                                <option value="SPANDAX">SPANDAX</option>
                                <option value="NYLON">NYLON</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Blazers")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                             <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party " id="party "> <label for="party ">party </label>
                              <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              
                            </div>
</div>
          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>LAPEL</span>
                              <select name="lapel" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PEAKED LAPEL">PEAKED LAPEL</option>
                                <option value="SHAWL LAPEL">SHAWL LAPEL</option>
                                <option value="NOTCHED LAPEL">NOTCHED LAPEL</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fornt Styling</span>
                              <select name="fornt_styling" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SINGLE BREASTED">SINGLE BREASTED</option>
                                <option value="DOUBLE BREASTED">DOUBLE BREASTED</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>LENGTH</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="LONGLINE">LONGLINE</option>
                                <option value="CROP">CROP</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="BATIK">BATIK</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="TAILORED">TAILORED</option>
                                <option value="Slim">Slim</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BLENDED FIBER">BLENDED FIBER</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                                <option value="MODAL">MODAL</option>
                                <option value="RAYON">RAYON</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="BAMBOO">BAMBOO</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="VISCOSE">VISCOSE</option>
                                <option value="LINEN">LINEN</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Suits")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party " id="party "> <label for="party ">party </label>
                              <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
                              <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
                              <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              
                            </div>
                          </div>
                             <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>LAPEL</span>
                              <select name="lapel" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PEAKED LAPEL">PEAKED LAPEL</option>
                                <option value="SHAWL LAPEL">SHAWL LAPEL</option>
                                <option value="NOTCHED LAPEL">NOTCHED LAPEL</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>FRONTSTYLING</span>
                              <select name="front_styling" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SINGLE BREASTED">SINGLE BREASTED</option>
                                <option value="DOUBLE BREASTED">DOUBLE BREASTED</option>
                                
                               
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="LONGLINE">LONGLINE</option>
                                <option value="CROP">CROP</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="BATIK">BATIK</option>
                                <option value="SOLID">SOLID</option>
                                <option value="CHECKS">CHECKS</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fit</span>
                              <select name="fit" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Regular">Regular</option>
                                <option value="TAILORED">TAILORED</option>
                                <option value="Slim">Slim</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BLENDED FIBER">BLENDED FIBER</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                                <option value="MODAL">MODAL</option>
                                <option value="RAYON">RAYON</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="BAMBOO">BAMBOO</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="VISCOSE">VISCOSE</option>
                                <option value="LINEN">LINEN</option>
                              
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="WAISTCOAT & TROUSERS">WAISTCOAT & TROUSERS</option>
                                <option value="BLAZER & WAISTCOAT">BLAZER & WAISTCOAT</option>
                                <option value="BLAZER & TROUSER">BLAZER & TROUSER</option>

                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sweaters")
      <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              
                              <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
                              <input type="checkbox" name="wintter" id="wintter"> <label for="wintter">wintter</label>
                              
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              
                            </div>
                            <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shawl collor">shawl collor</option>
                                <option value="high collor">high collor</option>
                                <option value="shirt collor">shirt collor</option>
                                <option value="polo neck">polo neck</option>
                                <option value="crew neck">crew neck</option>
                                <option value="mandarin collor">mandarin collor</option>
                                <option value="round neck">round neck</option>
                                <option value="lapel">lapel</option>
                                <option value="turtule">turtule</option>
                                <option value="v neck">v neck</option>
                                <option value="others">others</option>
                                
                              </select>
                            </div>
                          </div>
                          </div>
                             <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>LAPEL</span>
                              <select name="lapel" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="PEAKED LAPEL">PEAKED LAPEL</option>
                                <option value="SHAWL LAPEL">SHAWL LAPEL</option>
                                <option value="NOTCHED LAPEL">NOTCHED LAPEL</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option>-- Select --</option>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                <option value="SHORT SLEEVES">SHORT SLEEVES</option>
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Length</span>
                              <select name="length" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="REGULAR">REGULAR</option>
                                <option value="LONGLINE">LONGLINE</option>
                                <option value="CROP">CROP</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="GEOMETRIC">GEOMETRIC</option>
                                <option value="knit pattern">knit pattern</option>
                                <option value="woven pattern">woven pattern</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="GRAPHIC">GRAPHIC</option>
                                <option value="SOLID">SOLID</option>
                                <option value="checks">checks</option>
                                <option value="TROPICAL">TROPICAL</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="FLORAL">FLORAL</option>
                                <option value="argyle pattern">argyle pattern</option>
                                <option value="textured">textured</option>
                                <option value="other">other</option>
                                <option value="washed">washed</option>
                                <option value="TYPOGRAPHY">TYPOGRAPHY</option>
                                <option value="CAMOUFLAGE">CAMOUFLAGE</option>
                                <option value="ABSTRACT">ABSTRACT</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="rhombus">rhombus</option>
                                
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="BLENDED FIBER">BLENDED FIBER</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                                <option value="cotton blends">cotton blends</option>
                                <option value="RAYON">RAYON</option>
                                <option value="POLYESTER">POLYESTER</option>
                                <option value="BAMBOO">BAMBOO</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="VISCOSE">VISCOSE</option>
                                <option value="LINEN">LINEN</option>
                                <option value="wool">wool</option>
                                <option value="fleece ">fleece </option>
                                <option value="acro wool">acro wool</option>
                              
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sweatshirt">sweatshirt</option>
                                <option value="sweater">sweater</option>
                                <option value="cardigan">cardigan</option>
                                <option value="hoodes">hoodes</option>
                                <option value="brlted cardigan">brlted cardigan</option>
                                <option value="pull over">pull over</option>
                                <option value="sweater vests">sweater vests</option>
                               

                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Belts")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
               <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
               <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
               <input type="checkbox" name="SPORT" id="SPORT"> <label for="SPORT">SPORT</label>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="SOLID">SOLID</option>
                                <option value="TEXTURED">TEXTURED</option>
                              </select>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                               <option value="" disabled selected>-- Select --</option>
                                <option value="blended fibers">blended fibers</option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="NON LEATHER">NON LEATHER</option>

                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Wallets")
        <div class="col-sm-4">
          <div class="form-f-a">
            <span>STYLE</span>
            <select name="style" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="SOLID">SOLID</option>
              <option value="EMBROIDERED">EMBROIDERED</option>
              <option value="GRAPHIC">GRAPHIC</option>
              <option value="WASHED">WASHED</option>
              <option value="STRIPED">STRIPED</option>
              <option value="PRINTED">PRINTED</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                
                                <option value="PLASTIC">PLASTIC</option>
                               <option value="synthatic LEATHER">synthatic LEATHER</option>
                             <option value="SUEDE LEATHER">SUEDE LEATHER</option>
                          <option value="CANVAS ">CANVAS </option>
                             <option value="PATENT LEATHER">PATENT LEATHER</option>
                               <option value="OTHER">OTHER</option>
                                 <option value="RUBBER">RUBBER</option>
                                   <option value="GENUINE LEATHER">GENUINE LEATHER</option>
                                    <option value="CLOTH">CLOTH</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Hats & Caps")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
            <input type="checkbox" name="BEACH" id="BEACH"> <label for="BEACH">BEACH</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="SPORT" id="SPORT"> <label for="SPORT">SPORT</label>
            
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-f-a">
            <span>Type</span>
            <select name="type" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="BERET">BERET</option>
              <option value="BASEBALL CAP">BASEBALL CAP</option>
              <option value="BUCKET">BUCKET</option>
              <option value="FEDORA">FEDORA</option>
              <option value="SUNHAT">SUNHAT</option>
              <option value="PANAMA">PANAMA</option>
              <option value="BOATER">BOATER</option>
              <option value="CAMPAIGN">CAMPAIGN</option>
              <option value="BEANIE">BEANIE</option>
              <option value="FLAT">FLAT</option>
              <option value="VISCORS">VISCORS</option>
              <option value="CARTWHEEL">CARTWHEEL</option>
              <option value="party ">party </option>
              <option value="GATSBY">GATSBY</option>
              <option value="BOWLER">BOWLER</option>
              <option value="BOUDOIR CAP">BOUDOIR CAP</option>
            </select>

          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                 <option value="GRAPHIC">GRAPHIC</option>
                                  <option value="SOLID">SOLID</option>
                                   <option value="CHECKS">CHECKS</option>
                                    <option value="PRINTED">PRINTED</option>
                                     <option value="OTHERS">OTHERS</option>
                                      <option value="WASHED">WASHED</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="DENIM ">DENIM </option>
                                <option value="WOOL">WOOL</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Ties")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="ethic" id="ethic"> <label for="ethic">ethnic</label>
            <input type="checkbox" name="BEACH" id="BEACH"> <label for="BEACH">BEACH</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="SPORT" id="SPORT"> <label for="SPORT">SPORT</label>
            
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-f-a">
            <span>Type</span>
            <select name="type" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="BOW TIE">BOW TIE</option>
              <option value="BROAD TIE">BROAD TIE</option>
              <option value="OTHERS">OTHERS</option>
              <option value="CRAVAAT">CRAVAAT</option>
              <option value="SKINNY">SKINNY</option>
              
            </select>

          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                 <option value="GRAPHIC">GRAPHIC</option>
                                  <option value="SOLID">SOLID</option>
                                   <option value="CHECKS">CHECKS</option>
                                    <option value="PRINTED">PRINTED</option>
                                     <option value="OTHERS">OTHERS</option>
                                      <option value="WASHED">COLOUR BLOCK</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SILK">SILK</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="POLYESTER ">POLYESTER </option>
                                <option value="SATIN">SATIN</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Cufflinks")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="SPORT" id="SPORT"> <label for="SPORT">SPORT</label>
            <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
            
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Metal</span>
                              <select name="metal" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SILVER PLATED">SILVER PLATED</option>
                                <option value="PLATINUM">PLATINUM</option>
                                <option value="GOLD PLATED">GOLD PLATED</option>
                                <option value="TITANIUM">TITANIUM</option>
                                <option value="BRASS">BRASS</option>
                                <option value="NONE">NONE</option>
                                <option value="WHITE GOLD">WHITE GOLD</option>
                                <option value="TUNGSTEN">TUNGSTEN</option>
                                <option value="SILVER">SILVER</option>
                                <option value="YELLOW GOLD">YELLOW GOLD</option>
                                <option value="STAINLESS STEEL">STAINLESS STEEL</option>
                                <option value="PALLADIUM">PALLADIUM</option>
                                <option value="PLATINIUM PLATED">PLATINIUM PLATED</option>
                                <option value="OTHER">OTHER</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Shape</span>
                              <select name="shape" required>
                                <option value="" disabled selected>-- Select --</option>
                                
                                <option value="RECTANGLE">RECTANGLE</option>
                              <option value="ROUND">ROUND</option>
                           <option value="OVAL">OVAL</option>
                              <option value="SQUARE">SQUARE</option>
                              <option value="canvas">canvas</option>
                                <option value="OTHERS">OTHERS</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Rings")
       <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
            <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Metal</span>
                              <select name="metal" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SILVER PLATED">SILVER PLATED</option>
                                <option value="PLATINUM">PLATINUM</option>
                                <option value="GOLD PLATED">GOLD PLATED</option>
                                <option value="TITANIUM">TITANIUM</option>
                                <option value="BRASS">BRASS</option>
                                <option value="NONE">NONE</option>
                                <option value="WHITE GOLD">WHITE GOLD</option>
                                <option value="TUNGSTEN">TUNGSTEN</option>
                                <option value="SILVER">SILVER</option>
                                <option value="YELLOW GOLD">YELLOW GOLD</option>
                                <option value="STAINLESS STEEL">STAINLESS STEEL</option>
                                <option value="PALLADIUM">PALLADIUM</option>
                                <option value="PLATINIUM PLATED">PLATINIUM PLATED</option>
                                <option value="OTHER">OTHER</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected> -- Select --</option>
                                <option value="PLASTIC">PLASTIC</option>
                                <option value="CERAMIC">CERAMIC</option>
                                <option value="CRYSTAL">CRYSTAL</option>
                                <option value="ENAMEL ">ENAMEL </option>
                                <option value="CORAL">CORAL</option>
                                <option value="FABRIC">FABRIC</option>
                                <option value="METAL">METAL</option>
                                <option value="bamboo">bamboo</option>
                                <option value="PEARL ">PEARL </option>
                                <option value="WOOD">WOOD</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="RUBBER ">RUBBER </option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="SHELL">SHELL</option>
                                <option value="RESIN">RESIN</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Bracelets")
        <div class="col-sm-12">
         <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
            <input type="checkbox" name="BEACH" id="BEACH"> <label for="BEACH">BEACH</label>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Metal</span>
                              <select name="metal" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SILVER PLATED">SILVER PLATED</option>
                                <option value="PLATINUM">PLATINUM</option>
                                <option value="GOLD PLATED">GOLD PLATED</option>
                                <option value="TITANIUM">TITANIUM</option>
                                <option value="BRASS">BRASS</option>
                                <option value="NONE">NONE</option>
                                <option value="WHITE GOLD">WHITE GOLD</option>
                                <option value="TUNGSTEN">TUNGSTEN</option>
                                <option value="SILVER">SILVER</option>
                                <option value="YELLOW GOLD">YELLOW GOLD</option>
                                <option value="STAINLESS STEEL">STAINLESS STEEL</option>
                                <option value="PALLADIUM">PALLADIUM</option>
                                <option value="PLATINIUM PLATED">PLATINIUM PLATED</option>
                                <option value="OTHER">OTHER</option>

                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PLASTIC">PLASTIC</option>
                                <option value="CERAMIC">CERAMIC</option>
                                <option value="CRYSTAL">CRYSTAL</option>
                                <option value="ENAMEL ">ENAMEL </option>
                                <option value="CORAL">CORAL</option>
                                <option value="FABRIC">FABRIC</option>
                                <option value="METAL">METAL</option>
                                <option value="bamboo">bamboo</option>
                                <option value="PEARL ">PEARL </option>
                                <option value="WOOD">WOOD</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="RUBBER ">RUBBER </option>
                                <option value="LEATHER">LEATHER</option>
                                <option value="SHELL">SHELL</option>
                                <option value="RESIN">RESIN</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Pocket Squares")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="PARTY" id="PARTY"> <label for="PARTY">PARTY</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
            <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
            <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
            <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-f-a">
            <span>Pattern</span>
            <select name="pattern" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="GEOMETRIC">GEOMETRIC</option>
              <option value="STRIPPED">STRIPPED</option>
              <option value="SOLID">SOLID</option>
              <option value="CHECKS">CHECKS</option>
              <option value="PRINTED">PRINTED</option>
              <option value="EMBROIDERED">EMBROIDERED</option>
              <option value="OTHERS">OTHERS</option>
              <option value="POLKA DOT">POLKA DOT</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                                <option value="ARTIFICIAL SILK">ARTIFICIAL SILK</option>
                                <option value="SATIN">SATIN</option>
                                <option value="SHIFFON">SHIFFON</option>
                                <option value="RAYON ">RAYON </option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                               
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Socks")
        <div class="col-sm-12">
         <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="FORMAL" id="FORMAL"> <label for="FORMAL">FORMAL</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>

          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-f-a">
            <span>Pattern</span>
            <select name="pattern" required>
              <option value="" disabled selected>-- Select --</option>
              <option value="STRIPPED">STRIPPED</option>
              <option value="SOLID">SOLID</option>
              <option value="CHECKS">CHECKS</option>
              <option value="PRINTED">PRINTED</option>
              <option value="OTHERS">OTHERS</option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="WOOL">WOOL</option>
                                <option value="COTTON">COTTON</option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="SYNTHATIC">SYNTHATIC</option>
                               
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="CREW">CREW</option>
                                <option value="LOW">LOW</option>
                                <option value="QUARTER">QUARTER</option>
                                <option value="NOSHOW">NO SHOW</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sports Accessories")
        <div class="col-sm-12">
          <div class="form-f-a" style="display:flex;">
            <span class="occ-st"> Occasion </span> <br>
            <input type="checkbox" name="SPORTS" id="SPORTS"> <label for="SPORTS">SPORTS</label>
            <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>

          </div>
        </div>
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option value="" disabled selected>--Select--</option>
                                <option value="GYM">GYM</option>
                                <option value="BIKING">BIKING</option>
                                <option value="SWIMMING">SWIMMING</option>
                                <option value="FITNESS">FITNESS</option>
                                <option value="YOGA">YOGA</option>
                                <option value="SPORTS">SPORTS</option>
                                <option value="HIKING">HIKING</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sunglasses")
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Material</span>
                              <select name="lens_aterial" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="composite">composite</option>
                                <option value="glass">glass</option>
                                <option value="plastic">plastic</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="plastic">plastic</option>
                                <option value="metal">metal</option>
                                <option value="plastic & metal">plastic & metal</option>
                                <option value="polycarbonate">polycarbonate</option>
                                <option value="aceteae">aceteae</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Shape Frame</span>
                              <select name="shape_frame" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="wrap">wrap</option>
                                <option value="round">round</option>
                                <option value="OVAL">OVAL</option>
                                <option value="oversized">oversized</option>
                                <option value="way farer">way farer</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Warrenty</span>
                              <select name="warrenty" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="more then 5 years">more then 5 years</option>
                                <option value="1 year">1 year</option>
                                <option value="no-warrenty">no-warrenty</option>
                                <option value="2-5 years">2-5 years</option>
                                <option value="6 months">6 months</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Color</span>
                              <select name="lens_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="sliver">sliver</option>
                                <option value="green">green</option>
                                <option value="pink">pink</option>
                                <option value="brown">brown</option>
                                <option value="white">white</option>
                                <option value="yellow">yellow</option>
                                <option value="blue">blue</option>
                                <option value="cyan">cyan</option>
                                <option value="black">black</option>
                                <option value="grey">grey</option>
                                <option value="transparent">transparent</option>
                                <option value="purple">purple</option>
                                <option value="orange">orange</option>
                                <option value="gold">gold</option>
                                <option value="red">red</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Lens Feature</span>
                              <select name="lens_feature" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="uv protection">uv protection</option>
                                <option value="polarised">polarised</option>
                                <option value="uv protection & polarised">uv protection & polarised</option>
                                <option value="none">none</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Fragrance")
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="deodrants">deodrants</option>
                                <option value="body mists">body mists</option>
                                <option value="perfumes">perfumes</option>
                                <option value="aromatharepy">aromatharepy</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Application</span>
                               <select name="application" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Jar">Jar</option>
                                <option value="Spray">Spray</option>
                                <option value="Wipes">Wipes</option>
                                <option value="Minature">Minature</option>
                                <option value="Roll On">Roll On</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Bagpack")
       <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                               <select name="style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="SOLID">SOLID</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="checked">checked</option>
                                <option value="WASHED">WASHED</option>
                                <option value="graphics">graphics</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                           <div class="form-f-a" style="display:flex;">
                             <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="plastic">plastic</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>laptop comparment</span>
                              <select name="laptop_comparment" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Casual Shoes")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                             <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                                <option value="LACE UP">LACE UP</option>
                                <option value="velcro">velcro</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                              <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="sneakers">sneakers</option>
                                <option value="trainers">trainers</option>
                                <option value="derbys">derbys</option>
                                <option value="slip on">slip on</option>
                                <option value="moccasins">moccasins</option>
                                <option value="boat shoes">boat shoes</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Ankle Height</span>
                              <select name="ankle_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Mid- top">Mid- top</option>
                                <option value="hight -top">hight -top</option>
                                <option value="regular">regular</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Formal Shoes")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>

                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                            </div>
                          </div>
                           <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="monk shoes">monk shoes</option>
                                <option value="loafers">loafers</option>
                                <option value="derbys">derbys</option>
                                <option value="oxfoards">oxfoards</option>
                                <option value="brogues">brogues</option>
                                <option value="others">others</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="lace up none">lace up none</option>
                                <option value="buckle">buckle</option>
                                <option value="NONE">NONE</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                
                                <option value="SOLID">SOLID</option>
                                
                                <option value="textured">textured</option>
                                
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sandals & Sleeper")
        <div class="col-sm-12">
                           <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                             
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                             
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sleepwear" id="sleepwear"> <label for="sleepwear">sleepwear</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="slider">slider</option>
                                <option value="Thong flip flop">Thong flip flop</option>
                                <option value="clogs">clogs</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Sports Shoes")
       <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                             
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                          
                              <input type="checkbox" name="sports" id="sports"> <label for="sports">sports</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="motorshports">motorshports</option>
                                <option value="tesnis">tesnis</option>
                                <option value="bowling">bowling</option>
                                <option value="cycling">cycling</option>
                                <option value="footbal">footbal</option>
                                <option value="cricket">cricket</option>
                                <option value="gym & training">gym & training</option>
                                <option value="golf">golf</option>
                                <option value="riding">riding</option>
                                <option value="running">running</option>
                                <option value="basket ball">basket ball</option>
                                <option value="gum soles">gum soles</option>
                                <option value="walking">walking</option>
                                <option value="HIKING">HIKING</option>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="canvas">canvas</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="Lace up">Lace up</option>
                                <option value="velcro">velcro</option>
                                <option value="NONE">NONE</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Boots")
       <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st">Occasion </span> <br>
                             
                              <input type="checkbox" name="party" id="party"> <label for="party">party</label>
                              
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                             
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="WEDDING" id="WEDDING"> <label for="WEDDING">WEDDING</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="valvet">valvet</option>
                                <option value="synthatic leather">synthatic leather</option>
                                <option value="suede leather">suede leather</option>
                                <option value="satin">satin</option>
                                <option value="pu">pu</option>
                                <option value="canvas">canvas</option>
                                <option value="patent leather">patent leather</option>
                                <option value="other">other</option>
                                <option value="mesh">mesh</option>
                                <option value="rubber">rubber</option>
                                <option value="genuine leather">genuine leather</option>
                                <option value="cloth">cloth</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Shaft Height</span>
                              <select name="shaft_height" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mid calf">mid calf</option>
                                <option value="over the knee">over the knee</option>
                                <option value="platform">platform</option>
                                <option value="anckle">anckle</option>
                                <option value="knee high">knee high</option>
                                <option value="thigh-High">thigh-High</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Fastening</span>
                              <select name="fastening" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="ZIPPER">ZIPPER</option>
                                <option value="lace up">lace up</option>
                                <option value="BUCKLE">BUCKLE</option>
                                
                                <option value="none">none</option>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Type</span>
                               <select name="type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="harness boats">harness boats</option>
                                <option value="chelsea">chelsea</option>
                                <option value="chukka">chukka</option>
                                <option value="cow boy boots">cow boy boots</option>
                                <option value="desert boots">desert boots</option>
                                
                                <option value="others">others</option>
  
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="PRINTED">PRINTED</option>
                                <option value="OTHER">OTHER</option>
                                <option value="SOLID">SOLID</option>
                                <option value="STRIPPED">STRIPPED</option>
                                <option value="textured">textured</option>
                                <option value="colour block">colour block</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Analog")
       <div class="col-sm-12">
                           <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion </span> <br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Color</span>
                              <select name="strap_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Dial Color</span>
                              <select name="dail_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Colour Block</span>
                              <select name="color_block" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="square">square</option>
                                <option value="rectangular">rectangular</option>
                                <option value="round">round</option>
                                <option value="oval">oval</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Material</span>
                              <select name="strap_material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="mesh">mesh</option>
                                <option value="plastic">plastic</option>
                                <option value="silicon">silicon</option>
                                <option value="leather">leather</option>
                                <option value="rubber">rubber</option>
                                <option value="metal">metal</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Type</span>
                              <select name="strap_type" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="magnet">magnet</option>
                                <option value="elastic">elastic</option>
                                <option value="clamp">clamp</option>
                                <option value="leather">leather</option>
                                <option value="shape on">shape on</option>
                                <option value="metal">metal</option>
                                <option value="buckle">buckle</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "Digital")
        <div class="col-sm-12">
                            <div class="form-f-a" style="display:flex;">
                              <span class="occ-st"> Occasion  </span><br>
                              <input type="checkbox" name="party" id="party"> <label for="party">Party</label>
                              <input type="checkbox" name="formal" id="formal"> <label for="formal">formal</label>
                              <input type="checkbox" name="beach" id="beach"> <label for="beach">beach</label>
                              <input type="checkbox" name="casual" id="casual"> <label for="casual">casual</label>
                              <input type="checkbox" name="wedding" id="wedding"> <label for="wedding">wedding</label>
                              <input type="checkbox" name="ethnic" id="ethnic"> <label for="ethnic">ethnic</label>
                              <input type="checkbox" name="sport" id="sport"> <label for="sport">sport</label>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Color</span>
                              <select name="strap_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Dial Color</span>
                              <select name="dail_color" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="cyan">cyan</option>
                                <option value="gold">gold</option>
                                <option value="multi">multi</option>
                                <option value="geen">geen</option>
                                <option value="grey">grey</option>
                                <option value="violet">violet</option>
                                <option value="orange">orange</option>
                                <option value="pink">pink</option>
                                <option value="blue">blue</option>
                                <option value="brown">brown</option>
                                <option value="silver">silver</option>
                                <option value="white">white</option>
                                <option value="red">red</option>
                                <option value="other">other</option>
                                <option value="black">black</option>
                                <option value="yellow">yellow</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Colour Block</span>
                              <select name="color_block" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="square">square</option>
                                <option value="rectangular">rectangular</option>
                                <option value="round">round</option>
                                <option value="oval">oval</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Material</span>
                              <select name="strap_material" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="mesh">mesh</option>
                                <option value="plastic">plastic</option>
                                <option value="silicon">silicon</option>
                                <option value="leather">leather</option>
                                <option value="rubber">rubber</option>
                                <option value="metal">metal</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Strap Type</span>
                              <select name="strap_type" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="magnet">magnet</option>
                                <option value="elastic">elastic</option>
                                <option value="clamp">clamp</option>
                                <option value="leather">leather</option>
                                <option value="shape on">shape on</option>
                                <option value="metal">metal</option>
                                <option value="buckle">buckle</option>
                              </select>
                            </div>
                          </div>
        @endif
        @if($typename == "kurtas")
        <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Neck Style</span>
                              <select name="neck_style" required>
                                <option value="" disabled selected>-- Select --</option>
                                <option value="shawl collor">shawl collor</option>
                                <option value="bandh gala">bandh gala</option>
                                <option value="cowl neck">cowl neck</option>
                                <option value="shirt collor">shirt collor</option>
                                <option value="mandrin collor">mandrin collor</option>
                                <option value="round neck">round neck</option>
                                <option value="v neck">v neck</option>
                                <option value="others">others</option>
                                
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Sleeve Length</span>
                              <select name="sleeve_length" required>
                                <option value="" disabled selected>-- Select --</option>
                                
                                <option value="SLEEVE LESS">SLEEVE LESS</option>
                                
                                <option value="3/4TH SLEEVES">3/4TH SLEEVES</option>
                                <option value="FULL SLEEVES">FULL SLEEVES</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Style</span>
                              <select name="style" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="regular">regular</option>
                                <option value="empire">empire</option>
                                <option value="pathani">pathani</option>
                                <option value="pleated">pleated</option>
                                <option value="a line">a line</option>
                                <option value="angrakha">angrakha</option>
                                <option value="layered">layered</option>
                                <option value="panelled">panelled</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Material</span>
                              <select name="material" required>
                                <option  value=""disabled selected>-- Select --</option>
                                
                                <option value="blended fibers">blended fibers</option>
                                <option value="sythatic">sythatic</option>
                                <option value="valvet">valvet</option>
                                <option value="silkk">silkk</option>
                                <option value="modal">modal</option>
                                <option value="shiffon">shiffon</option>
                                <option value="rayon">rayon</option>
                                <option value="poylester">poylester</option>
                                <option value="bamboo">bamboo</option>
                                <option value="cotton">cotton</option>
                                <option value="linen">linen</option>
                                <option value="jacquard">jacquard</option>
                                <option value="corduroy">corduroy</option>
                                <option value="others">others</option>
                                

                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-f-a">
                              <span>Pattern</span>
                              <select name="pattern" required>
                                <option  value=""disabled selected>-- Select --</option>
                                <option value="tye dye">tye dye</option>
                                <option value="striped">striped</option>
                                <option value="checked">checked</option>
                                <option value="printed">printed</option>
                                <option value="EMBROIDERED">EMBROIDERED</option>
                                <option value="textured">textured</option>
                                <option value="ETHNIC MOTIFS">ETHNIC MOTIFS</option>
                                <option value="COLOR BLOCK">COLOR BLOCK</option>
                                <option value="others">others</option>
                               
                              </select>
                            </div>
                          </div>

        @endif
                          @endif
                        </div>
                    </div>
                    <!-- <div class="form-all" id="ap">
                    </div> -->
                    <div class="form-all">

                     <b class="basic-info">Add Images *</b><br>
                     <div class="img-sec">
                            <div class="row">
                                   <div class="img-title col-sm-2" style="display:flex; justify-content: center; align-items: center; height: 80px;">
                                          <span>Product Images: </span>
                                   </div>
                                   <div class="image-upload-container col-sm-10">
                                         <div class="image-upload-one">
                                           <div class="center">
                                             <div class="form-input">
                                               <label for="file-ip-1">
                                                 <img id="file-ip-1-preview" src="/frontend/img/up-img.png">
                                                 <div id="div-1-close" style="display:none;">
                                                 <button id="file-ip-1-preview" type="button" class="imgRemove" onclick="myImgRemove(1)"></button></div>
                                               </label>
                                               <input type="file"  name="img_one" id="file-ip-1" accept="image/*" onchange="showPreview(event, 1);">
                                             </div>
                                             <small class="small">* Cover Photo</small>
                                           </div>
                                         </div>
                                         <!-- ************************************************************************************************************ -->
                                         <div class="image-upload-two">
                                           <div class="center">
                                             <div class="form-input">
                                               <label for="file-ip-2">
                                                 <img id="file-ip-2-preview" src="/frontend/img/up-img.png">
                                                 <div id="div-2-close" style="display:none;">
                                                 <button type="button" class="imgRemove" onclick="myImgRemove(2)"></button></div>
                                               </label>
                                               <input type="file" name="img_two" id="file-ip-2" accept="image/*" onchange="showPreview(event, 2);">
                                             </div>
                                             <small class="small">Image 01</small>
                                           </div>
                                         </div>

                                         <!-- ************************************************************************************************************ -->
                                         <div class="image-upload-three">
                                           <div class="center">
                                             <div class="form-input">
                                               <label for="file-ip-3">
                                                 
                                                 <img id="file-ip-3-preview" src="/frontend/img/up-img.png">
                                                 <div id="div-3-close" style="display:none;">
                                                 <button type="button" class="imgRemove" onclick="myImgRemove(3)"></button>
                                                   </div>
                                               </label>
                                               <input type="file" name="img_three" id="file-ip-3" accept="image/*" onchange="showPreview(event, 3);">
                                             </div>
                                             <small class="small">Image 02</small>
                                           </div>
                                         </div>
                                         <!-- *********************************************************************************************************** -->
                                           <div class="image-upload-four">
                                             <div class="center">
                                               <div class="form-input">
                                                 <label for="file-ip-4">
                                                   <img id="file-ip-4-preview" src="/frontend/img/up-img.png">
                                                   <div id="div-4-close" style="display:none;">
                                                   <button type="button" class="imgRemove" onclick="myImgRemove(4)"></button></div>
                                                 </label>
                                                 <input type="file" name="img_four" id="file-ip-4" accept="image/*" onchange="showPreview(event, 4);">
                                               </div>
                                               <small class="small">Image 03</small>
                                             </div>
                                           </div>
                                           <!-- ************************************************************************************************************ -->
                                           <div class="image-upload-five">
                                             <div class="center">
                                               <div class="form-input">
                                                 <label for="file-ip-5">
                                                   <img id="file-ip-5-preview" src="/frontend/img/up-img.png">
                                                   <div id="div-5-close" style="display:none;">
                                                   <button type="button" class="imgRemove" onclick="myImgRemove(5)"></button></div>
                                                 </label>
                                                 <input type="file" name="img_five" id="file-ip-5" accept="image/*" onchange="showPreview(event, 5);">
                                               </div>
                                               <small class="small">Image 04</small>
                                             </div>
                                           </div>
                                     
                                           <!-- ************************************************************************************************************ -->
                                           <div class="image-upload-six">
                                             <div class="center">
                                               <div class="form-input">
                                                 <label for="file-ip-6">
                                                   <img id="file-ip-6-preview" src="/frontend/img/up-img.png">
                                                   <div id="div-6-close" style="display:none;">
                                                   <button type="button" class="imgRemove" onclick="myImgRemove(6)"></button></div>
                                                 </label>
                                                 <input type="file" name="img_six" id="file-ip-6" accept="image/*" onchange="showPreview(event, 6);">
                                               </div>
                                               <small class="small">Image 05</small>
                                             </div>
                                           </div>

                                         <!-- ************************************************************************************************************** -->
                                                <div class="image-upload-seven">
                                                    <div class="center">
                                                      <div class="form-input">
                                                        <label for="file-ip-7">
                                                          <img id="file-ip-7-preview" src="/frontend/img/up-img.png">
                                                          <div id="div-7-close" style="display:none;">
                                                          <button type="button" class="imgRemove" onclick="myImgRemove(7)"></button></div>
                                                        </label>
                                                        <input type="file" name="img_seven" id="file-ip-7" accept="image/*" onchange="showPreview(event, 7);">
                                                      </div>
                                                      <small class="small">Image 06</small>
                                                    </div>
                                                  </div>
                                                  <!-- ************************************************************************************************************** -->
                                                <div class="image-upload-eight">
                                                    <div class="center">
                                                      <div class="form-input">
                                                        <label for="file-ip-8">
                                                          <img id="file-ip-8-preview" src="/frontend/img/up-img.png">
                                                          <div id="div-8-close" style="display:none;">
                                                          <button type="button" class="imgRemove" onclick="myImgRemove(8)"></button></div>
                                                        </label>
                                                        <input type="file" name="img_eight" id="file-ip-8" accept="image/*" onchange="showPreview(event, 8);">
                                                      </div>
                                                      <small class="small">Image 07</small>
                                                    </div>
                                                  </div>
                                                  <!-- ************************************************************************************************************** -->
                                                <div class="image-upload-nine">
                                                    <div class="center">
                                                      <div class="form-input">
                                                        <label for="file-ip-9">
                                                          <img id="file-ip-9-preview" src="/frontend/img/up-img.png">
                                                          <div id="div-9-close" style="display:none;">
                                                          <button type="button" class="imgRemove" onclick="myImgRemove(9)"></button>
                                                        </div>
                                                        </label>
                                                        <input type="file" name="img_nine" id="file-ip-9" accept="image/*" onchange="showPreview(event, 9);">
                                                      </div>
                                                      <small class="small">Image 08</small>
                                                    </div>
                                                  </div>
                                   </div>
                            </div>
                            <div class="row">
                                   <div class="img-title col-sm-2" style="display:flex; justify-content: center; align-items: center; height: 80px;">
                                          <span>Product Video<br>(Optional) </span>
                                   </div>
                                   <div class="image-upload-container col-sm-1">
                                         <div class="image-upload-ten">
                                           <div class="center">
                                             <div class="form-input">
                                               <label for="file-ip-10">
                                                 
                                                 <img id="file-ip-10-preview" src="/frontend/img/up-img.png">
                                                 <div id="div-10-close" style="display:none;">
                                                 <button type="button" class="imgRemove" onclick="myImgRemove(10)"></button>
                                                 </div>
                                               </label>
                                               <input type="file"  name="img_ten" id="file-ip-10" accept="video/*" onchange="showPreview(event, 10);">
                                             </div>
                                             <small class="small">Cover Video</small>
                                           </div>
                                         </div>
                                  </div>
                                  <div class="img-title col-sm-4">
                                         <ol>
                                                <li>Size Max 30Mb, Resolution should not exceed 1280x1280px.</li>
                                                <li>Duration: 10s-60s</li>
                                                <li>Format: MP4</li>
                                                <li>Your video will public after processing.</li>
                                         </ol>
                                  </div>
                            </div>
                     </div>
                     
                         

                      <!-- <div class="img-upload">
                        <b>Images *</b>
                            <div class="img-div">
                              <label for="draggy" style="width: 100%;">
                              <div class="drag-img">
                                <i class="fa fa-picture-o fa-4x" aria-hidden="true"></i>
                                <span>Drag and drop image here</span>
                                <span> Or <label for="draggy">Select from Computer</label>
                                <input type="file" id="draggy" multiple name="image[]" style="display: none;" multiple id="gallery-photo-add" > </span>
                              </div>
                              </label>
                            </div>
                            <div class="gallery" id="gallery"></div>
                        </div> -->
                    </div>


                    <div class="form-all" id="ap1">
                      <div class="color-select">
                        <b>Add a new color map and get started!</b><br>
                        <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                        <select id="clrsel1" onchange="showimg1();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          
                        </select>
                      </div>
                    </div>
                    <div id="showcolor1" style="display:none;">
                      <div class="form-all" id="img-show1">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-1-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(1);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color1" id="selectedclr1">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name1" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize1" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize1" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize1" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-1-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price1" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity1" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap2">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel2" onchange="showimg2();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor2" style="display:none;">
                      <div class="form-all" id="img-show2">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-2-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(2);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color2" id="selectedclr2">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name2" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize2" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize2" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize2" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-2-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price2" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity2" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap3">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel3" onchange="showimg3();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor3" style="display:none;">
                      <div class="form-all" id="img-show3">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-3-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(3);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color3" id="selectedclr3">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name3" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize3" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize3" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize3" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-3-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price3" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity3" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap4">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel4" onchange="showimg4();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor4" style="display:none;">
                      <div class="form-all" id="img-show4">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-4-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(4);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color4" id="selectedclr4">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name4" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize4" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize4" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize4" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-4-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price4" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity4" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap5">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel5" onchange="showimg5();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor5" style="display:none;">
                      <div class="form-all" id="img-show5">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-5-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(5);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color5" id="selectedclr5">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name5" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize5" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize5" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize5" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-5-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price5" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity5" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap6">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel6" onchange="showimg6();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor6" style="display:none;">
                      <div class="form-all" id="img-show6">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-6-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(6);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color6" id="selectedclr6">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name6" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize6" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize6" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize6" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-6-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price6" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity6" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap7">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel7" onchange="showimg7();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor7" style="display:none;">
                      <div class="form-all" id="img-show7">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-7-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(7);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color7" id="selectedclr7">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name7" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize7" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize7" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize7" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-7-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price7" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity7" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                      <div class="form-all" id="ap8">
                        <div class="color-select">
                          <b>Add a new color map and get started!</b><br>
                          <small>You can also provide custom name to your product’s colors now. Add images, prices and stock after you select a new color.</small><br>
                          <select id="clrsel8" onchange="showimg8();">
                          <option disabled selected>--Select--</option>
                          <option style="background-color:azure; color: #000;" value="azure">Azure</option>
                          <option style="background-color:brown; color: #fff;" value="brown">Brown</option>
                          <option style="background-color:darkorange; color: #000;" value="darkorange">Dark Orange</option>
                          <option style="background-color:deeppink; color: #000;" value="deeppink">Deep Pink</option>
                          <option style="background-color:pink; color: #000;" value="pink">Pink</option>
                          <option style="background-color:orange  ; color: #000;" value="orange ">Orange </option>
                          <option style="background-color:red; color: #fff;" value="red">Red</option>
                          <option style="background-color:steelblue; color: #fff;" value="steelblue">Steelblue</option>
                          <option style="background-color: black; color: #fff;" value="Black">Black</option>
                          <option style="background-color:yellow; color: #000;" value="Yellow">Yellow</option>
                          <option style="background-color:red; color: #fff;" value="Red">Red</option>
                          <option style="background-color:maroon; color: #fff;" value="Maroon">Maroon</option>
                          <option style="background-color:gray; color: #fff;" value="Gray">Gray</option>
                          <option style="background-color:lime; color: #000;" value="Lime">Lime</option>
                          <option style="background-color:green; color: #fff;" value="Green">Green</option>
                          <option style="background-color:olive; color: #fff;" value="Olive">Olive</option>
                          <option style="background-color:silver; color: #000;" value="Silver">Silver</option>
                          <option style="background-color:aqua; color: #000;" value="Aqua">Aqua</option>
                          <option style="background-color:blue; color: #fff;" value="Blue">Blue</option>
                          <option style="background-color:navy; color: #fff;" value="Navy">Navy</option>
                          <option style="background-color:white; color: #000;" value="White">White</option>
                          <option style="background-color:fuchsia; color: #fff;" value="Fuchsia">Fuchsia</option>
                          <option style="background-color:purple; color: #fff;" value="Purple">Purple</option>
                          <option style="background-color:teal; color: #fff;" value="Teal">Teal</option>
                          <option style="background-color:aquamarine; color: #000;" value="aquamarine">Aqua Marine</option>
                          <option style="background-color:antiquewhite; color: #000;" value="Antique White">Antique White</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="showcolor8" style="display:none;">
                      <div class="form-all" id="img-show8">
                        <div class="pull-right" id="exp">
                          <a data-toggle='collapse' data-target='#close-8-colors' aria-expanded='false'><div class='expand_caret caret'></div></a>
                          <a onclick='closeclr(8);'><i class='fa fa-times' aria-hidden='true'></i></a>
                        </div>
                        <div class="color-selected">
                          <div class="c-field">
                            <label>Color Map</label><br>
                            <select name="color8" id="selectedclr8">
                            </select>
                          </div>
                            <div class="c-field">
                              <label>Accurate Color (Optional)</label><br>
                              <input type="color" name="color_name8" id="lafz">
                            </div>
                            @if(!empty($shoe_type))
                            @if($shoe_type == 'US')
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize8" id="shoesize">
                                <option value="">Select</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                              </select>
                            </div>
                            @else
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="shoesize8" id="shoesize">
                                <option value="">Select</option>
                                <option value="39">39</option>
                                <option value="40">40</option>
                                <option value="41">41</option>
                                <option value="42">42</option>
                                <option value="43">43</option>
                                <option value="44">44</option>
                                <option value="45">45</option>
                                <option value="46">46</option>
                                <option value="47">47</option>
                                <option value="48">48</option>
                              </select>
                            </div>
                            @endif
                            @else
                            @if($cateid == 1 || $cateid == 2)
                            @if($scateid ==498  || $scateid == 505)
                            <div class="c-field">
                              <label>Size</label><br>
                              <select name="selectsize8" id="selectsize">
                                <option value="">Select</option>
                                <option value="FREE SIZE">FREE SIZE</option>
                                <option value="XS SMALL">XS SMALL</option>
                                <option value="SMALL">SMALL</option>
                                <option value="MEDIUM">MEDIUM</option>
                                <option value="LARGE">LARGE</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                              </select>
                            </div>
                            @endif
                            @endif
                            @endif
                        </div>
                          <div class="form-f-t collapse in" id="close-8-colors" class="collapse">
                            <span>Varient</span>
                            <small>Stock in Pieces, Price per item in PKR</small>
                            <table class="table table-bordered">
                               <tr>
                                 <td>Seller Sku Id</td>
                                 <td>Price per item PKR *</td>
                                 <td>Stock (Pieces) *</td>
                               </tr>  
                               <tr>
                                 <td style="text-align: center;">
                                    <span id="auto-y" style="width: 100px;"> (Auto)</span>
                                    <input id="auto-n" type="text" name="" style="display:none; width: 100px;">
                                 </td>
                                 <td><input type="text" name="price8" id="selectprice"></td>
                                 <td>
                                    <div class="quantity buttons_added">
                                      <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity8" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus" id="selectquantity">
                                    </div>
                                </td>
                               </tr>
                            </table>
                          </div>
                      </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <button type="submit" name="saveproduct" style="background:#fe9126; color:#fff; padding: 10px 80px; outline:none; border:none; float:right; margin-right: 30px; margin-bottom:30px;" >Save</button>
        </div>
        
        </form>


   <script>
  tinymce.init({
  selector: '#mytextarea',
  plugins: 'lists advlist autolink autoresize charmap code emoticons hr image insertdatetime link media paste preview searchreplace table textpattern toc visualblocks visualchars wordcount quickbars',
  toolbar: 'link image | code preview | undo redo | formatselect | fontselect | fontsizeselect | bold italic underline strikethrough backcolor | subscript superscript | numlist bullist | alignleft aligncenter alignright alignjustify | outdent indent | paste searchreplace | toc link image media charmap insertdatetime emoticons hr | table tabledelete | tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol | removeformat',
   insertdatetime_element: true,
   media_scripts: [
   {filter: 'platform.twitter.com'},
   {filter: 's.imgur.com'},
   {filter: 'instagram.com'},
   {filter: 'https://platform.twitter.com/widgets.js'},
 ],
   browser_spellcheck: true,
   contextmenu: false,
  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
    images_upload_url: 'postAcceptor.php',
    here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  },
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});
  </script>
<script type="text/javascript">
  function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
  }
  String.prototype.getDecimals || (String.prototype.getDecimals = function() {
      var a = this,
          b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
      return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
  }), jQuery(document).ready(function() {
      wcqib_refresh_quantity_increments()
  }), jQuery(document).on("updated_wc_div", function() {
      wcqib_refresh_quantity_increments()
  }), jQuery(document).on("click", ".plus, .minus", function() {
      var a = jQuery(this).closest(".quantity").find(".qty"),
          b = parseFloat(a.val()),
          c = parseFloat(a.attr("max")),
          d = parseFloat(a.attr("min")),
          e = a.attr("step");
      b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
  });
</script>

<script type="text/javascript">
  var show1 = document.getElementById('showcolor1');
  var show2 = document.getElementById('showcolor2');
  var show3 = document.getElementById('showcolor3');
  var show4 = document.getElementById('showcolor4');
  var show5 = document.getElementById('showcolor5');
  var show6 = document.getElementById('showcolor6');
  var show7 = document.getElementById('showcolor7');
  var show8 = document.getElementById('showcolor8');
  var setcolor1 = document.getElementById('ap1');
  var setcolor2 = document.getElementById('ap2');
  var setcolor3 = document.getElementById('ap3');
  var setcolor4 = document.getElementById('ap4');
  var setcolor5 = document.getElementById('ap5');
  var setcolor6 = document.getElementById('ap6');
  var setcolor7 = document.getElementById('ap7');
  var setcolor8 = document.getElementById('ap8');

  function showimg1(){
      var color=document.getElementById('clrsel1').value;
      var itm=document.getElementById('img-show1');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr1').add(option);
    if (show1.style.display==="none") {
      show1.style.display="block"
      setcolor1.style.display="none";
    }
    else{
      show1.style.display="none"
      setcolor1.style.display="none";
    }
  }
  function showimg2(){
    var color=document.getElementById('clrsel2').value;
      var itm=document.getElementById('img-show2');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr2').add(option);
    if (show2.style.display==="none") {
      show2.style.display="block"
      setcolor2.style.display="none";
    }
    else{
      show2.style.display="none"
      setcolor2.style.display="none";
    }
  }
  function showimg3(){
    var color=document.getElementById('clrsel3').value;
      var itm=document.getElementById('img-show3');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr3').add(option);
    if (show3.style.display==="none") {
      show3.style.display="block"
      setcolor3.style.display="none";
    }
    else{
      show3.style.display="none"
      setcolor3.style.display="none";
    }
  }
  function showimg4(){
    var color=document.getElementById('clrsel4').value;
      var itm=document.getElementById('img-show4');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr4').add(option);
    if (show4.style.display==="none") {
      show4.style.display="block"
      setcolor4.style.display="none";
    }
    else{
      show4.style.display="none"
      setcolor4.style.display="none";
    }
  }
  function showimg5(){
    var color=document.getElementById('clrsel5').value;
      var itm=document.getElementById('img-show5');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr5').add(option);
    if (show5.style.display==="none") {
      show5.style.display="block"
      setcolor5.style.display="none";
    }
    else{
      show5.style.display="none"
      setcolor5.style.display="none";
    }
  }
  function showimg6(){
    var color=document.getElementById('clrsel6').value;
      var itm=document.getElementById('img-show6');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr6').add(option);
    if (show6.style.display==="none") {
      show6.style.display="block"
      setcolor6.style.display="none";
    }
    else{
      show6.style.display="none"
      setcolor6.style.display="none";
    }
  }
  function showimg7(){
    var color=document.getElementById('clrsel7').value;
      var itm=document.getElementById('img-show7');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr7').add(option);
    if (show7.style.display==="none") {
      show7.style.display="block"
      setcolor7.style.display="none";
    }
    else{
      show7.style.display="none"
      setcolor7.style.display="none";
    }
  }
  function showimg8(){
    var color=document.getElementById('clrsel8').value;
      var itm=document.getElementById('img-show8');
      itm.style.borderTop="5px solid";
      itm.style.borderColor=color;
      var option = document.createElement("option");
      option.text = color;
      option.value = color;
      document.getElementById('selectedclr8').add(option);
    if (show8.style.display==="none") {
      show8.style.display="block"
      setcolor8.style.display="none";
    }
    else{
      show8.style.display="none"
      setcolor8.style.display="none";
    }
  }
  function closeclr(n){
    
    if (n==1) {
      document.getElementById('img-show1').style.display="none";
    }
    if (n==2) {
      document.getElementById('img-show2').style.display="none";
    }
    if (n==3) {
      document.getElementById('img-show3').style.display="none";
    }
    if (n==4) {
      document.getElementById('img-show4').style.display="none";
    }
    if (n==5) {
      document.getElementById('img-show5').style.display="none";
    }
    if (n==6) {
      document.getElementById('img-show6').style.display="none";
    }
    if (n==7) {
      document.getElementById('img-show7').style.display="none";
    }
    if (n==8) {
      document.getElementById('img-show8').style.display="none";
    }
  }
</script>


<script type="text/javascript">
  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
      var id = 'img1'
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).attr('id',id).last().appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#draggy').on('change', function() {
        imagesPreview(this, 'div.gallery');

    });
});
</script>
<script type="text/javascript">
       var number = 1;
do {
  function showPreview(event, number){
    if(event.target.files.length > 0){
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById("file-ip-"+number+"-preview");
      let divClose = document.getElementById("div-"+number+"-close");
      preview.src = src;
      divClose.style.display = "block";
      preview.style.display = "block";
      preview.style.height= "60px";
      preview.style.width= "60px";
      preview.style.objectFit = "contain";
    } 
  }
  function myImgRemove(number) {
       document.getElementById("div-"+number+"-close").style.display = "none";
      document.getElementById("file-ip-"+number+"-preview").src = "/frontend/img/up-img.png";
      document.getElementById("file-ip-"+number).value = null;

      
    }
  number++;
}
while (number < 10);
</script>
    @endsection