

@extends('layouts.app')

@section('content')
@include('layouts.second-nav')



<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>




   <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
    <div class="row">
      


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
                     @include('layouts.left-tab')
 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">


                  <!-- DIV START OF WHISHLISH -->

                <div class="bhoechie-tab-content active">
                  
            <!-- row -->
            <div class="row">
                <div class="clearfix section-white p-sm">
                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Add New Product</h3>
                            </div>
                        
                        <!-- product add -->
                        <form  method="POST" action="" enctype="multipart/form-data">
                            @csrf
          
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="p_name">Product Name:</label>
                        <input type="text" class="form-control input-lg" id="email" name="p_name" placeholder="Product Name" tabindex="3">
                    </div>
                    @error('p_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="brand">Select Brand:</label>
                      <select class="form-control input-lg" id="sel1" name="brand">
                        <option>Select Brand</option>
                        <option value="b1">B1</option>
                        <option value="b2">B2</option>
                        <option value="b3">B3</option>
                        <option value="b4">B4</option>
                      </select>
                    </div>
                     
                </div>

                </div>


                     <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="category">Category:</label>
                      <select class="form-control input-lg" id="sel1" value="category" name="category">
                        <
                        @if(!empty($categories))
                              @foreach($categories as $ca)
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                            @endif
                        
                        
                      </select>
                      
                    </div>
                    @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="sub_categories">Sub Category:</label>
                      <select class="form-control input-lg" id="sel1" name="sub_categories">
                        <option>Select Sub Category</option>
                         @if(!empty($sub_categories))
                              @foreach($sub_categories as $sca)
                            <option value="{{ $sca->id }}">{{ $sca->name }}</option>
                            @endforeach
                            @endif

                      </select>
                    </div>
                     
                </div>

                </div>

                  <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="color">Color:</label>
                      <select class="form-control input-lg" id="sel1" name="color">
                        <option>Select color</option>
                        @if(!empty($color))
                              @foreach($color as $cl)
                            <option value="{{ $cl->id }}">{{ $cl->name }}</option>
                            @endforeach
                            @endif
                      </select>
                    </div>
                     @error('color')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="size">Size:</label>
                      <select class="form-control input-lg" id="sel1" name="size">
                        <option>Select size</option>
                        @if(!empty($size))
                              @foreach($size as $sz)
                            <option value="{{ $sz->id }}">{{ $sz->name }}</option>
                            @endforeach
                            @endif
                        
                        
                      </select>
                      
                    </div>
                    @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                
                
            </div>

                <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                     <label for="email">Quantity:</label>
                       <input type="text" name="quantity" id="display_name" class="form-control input-lg" placeholder="Enter Quantity" tabindex="3">
                      
                    </div>
                    @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="email">Price:</label>
                       <input type="text" name="price" id="display_name" class="form-control input-lg" placeholder="Product Price" tabindex="3">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

               

                </div>
               
                
            
               

              
            
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="brand">Availability:</label>
                      <select class="form-control input-lg" id="sel1" name="availability">
                        <option>Select </option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        
                      </select>
                    </div>
                     
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6">

                    <div class="form-group">
                        <label for="email">Upload Product Image:</label>
                       <input type="file" id="myFile" name="file_path ">
                    </div>
                    @error('file_path')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
           
               
            </div>

            <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="brand">Status:</label>
                      <select class="form-control input-lg" id="sel1" name="status">
                        <option>Select </option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        
                      </select>
                    </div>
                     
                </div>
                
            </div>
                      <div class="row">
                      <div class="col-md-12">
                        <h3 class="gsone">Description:</h3>
                        <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea><br>
                      </div>
                    </div>


        
                          <div class="pull-right">
                             <input type="submit" name="saveproduct" class="primary-btn" value="save">
                             <a href="dashboardven-productmanagment.php" class="primary-btn">Back</a>
                                
                            </div>
            
            
        </form>
                          
                        </div>

                    </div>
                </div>
                
            </div>
            <!-- /row -->
     


                </div>
                <!-- DIV END OF WHISHLISH -->

                
       
            </div>
        
    
        

        </div>

<!--  -->


  </div>
</div>
        <!-- /container -->
    </div>
    <!-- /section -->
<!-- FOOTER -->
<script type="text/javascript">
  CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
</script>



@endsection