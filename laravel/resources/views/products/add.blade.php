

@extends('layouts.app')

@section('content')
@include('layouts.second-nav')



<script src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
<style type="text/css">
  .tab-pane{padding-top: 20px}

  @media only screen and (max-width: 360px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
@media only screen and (max-width: 375px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
@media only screen and (max-width: 414px)
  {
.bhoechie-tab-menu {
    display: block !important;
    margin: 0 auto;
    margin-top: 10px;
}
}
</style>



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
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">General</a></li>
    <li><a data-toggle="tab" href="#menu1">Linking</a></li>
    <li><a data-toggle="tab" href="#menu2">Options</a></li>
    <li><a data-toggle="tab" href="#menu3">Special</a></li>
    <li><a data-toggle="tab" href="#menu4">Images</a></li>
  </ul>
          <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <label for="p_name">Product Name:</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Product Name" tabindex="3">
              </div>
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>

          

          </div>
                <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                     <label for="email">Quantity:</label>
                       <input type="text" name="quantity" id="display_name" class="form-control" placeholder="Enter Quantity" tabindex="3">
                      
                    </div>
                    @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="email">Price:</label>
                       <input type="number" name="price" id="display_name" class="form-control" placeholder="Product Price" tabindex="3">
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
                      <select class="form-control" id="sel1" name="availability">
                        <option value="">Select </option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                        
                      </select>
                    </div>
                     
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="brand">Status:</label>
                      <select class="form-control" id="sel1" name="status">
                        <option value="">Select </option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        
                      </select>
                    </div>
                     
                </div>
                
            </div>

                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <h3 class="gsone">Description:</h3>
                        <textarea name="description" id="editor1" rows="10" cols="80"></textarea>
                      </div>
                      </div>
                    </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      
                     <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <label for="category">Category:</label>
                      <select class="form-control load_sub_types" id="load_sub_categories" name="category">
                       <option  value="">Select Category</option>
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
                      <select class="form-control load_sub_types  load_sub_categories" id="load_sub_categories_type" name="sub_category">
                        <option  value="">Select Sub Category</option>
                         
                      </select>
                    </div>
                     
                </div>

                </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="sub_categories">Type:</label>
                      <select class="form-control load_sub_categories_type" id="type" name="type">
                        <option  value="0">Select Type</option>
                         
                      </select>
                    </div>
                     
                </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" name="brand" class="form-control">
                      <!--<select class="form-control" id="sel1" name="brand">
                        <option value="">Select Brand</option>
                       @if(!empty($brand))
                              @foreach($brand as $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                            @endforeach
                        @endif
                      </select>-->
                    </div>
                     
                </div>
              </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      
      <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <table id="tblAddRow" border="1" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Value</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th><button type="button"  id="btnAddRow"  class="btn btn-success"><i class="fa fa-plus"></i> </button></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <select class="form-control" id="sel1" name="color[]" >
                                  <option  value="">Select Color</option>
                                  @if(!empty($color))
                                        @foreach($color as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                      @endforeach
                                      @endif
                                </select>
                              </td>
                              <td><input type="number" class="form-control" name="color_quantity[]" ></td>
                              <td>
                                <select class="form-control" id="sel1" name="color_price_type[]"  >
                                  <option value="add" >+</option>
                                  <option value="subtract">-</option>
                                </select>
                                <input type="number" class="form-control" name="color_price[]" value="0">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      
                    </div>
                     @error('color')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
      </div>
      <div class="row">    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    
                    <div class="form-group">
                        <label for="color">Size:</label>
                

                        <table id="tblAddRow2" border="1" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Value</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th><button type="button"  id="btnAddRow2"  class="btn btn-success"><i class="fa fa-plus"></i> </button></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <select class="form-control" id="sel1" name="size[]" >
                                  <option  value="">Select Size</option>
                                  @if(!empty($size))
                                        @foreach($size as $sz)
                                    <option value="{{ $sz->id }}">{{ $sz->name }}</option>
                                      @endforeach
                                      @endif
                                </select>
                              </td>
                              <td><input type="number" class="form-control" name="size_quantity[]" ></td>
                              <td>
                                <select class="form-control" id="sel1" name="size_price_type[]">
                                  <option value="add" >+</option>
                                  <option value="subtract">-</option>
                                </select>
                                <input type="number" class="form-control" name="size_price[]" value="0" >
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      
                    </div>
                    @error('size')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


               
                
                
            </div>

          
    </div>
    <div id="menu3" class="tab-pane fade">
       <div class="col-xs-12 col-sm-6 col-md-6">

                    <div class="form-group">
                      <input type="hidden" name="allow_sale" value="No">
                        
                       <input type="checkbox" name="allow_sale" class="allow_sale" value="Yes" >
                       <label for="email">Allow Sale:</label>
                    </div>
                   
                </div>
                <div style="clear: both;"></div>
                
            <div class="col-xs-12 col-sm-6 col-md-6 " >

                    <div class="form-group">
                        <label for="email">Discount Type:</label>
                       <select class="form-control" name="discount_type">
                         <option  value="">Select</option>
                         <option value="Fixed">Fixed Amount</option>
                         <option value="Percentage">In Percentage</option>
                       </select>
                    </div>
                   
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" >

                    <div class="form-group">
                        <label for="email">Discount:</label>
                       <input type="number" name="discount_price" class="form-control" value="0">
                    </div>
                   
                </div>
    </div>

    <div id="menu4" class="tab-pane fade">
       <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
                       <div class="multi-field-wrapper">
                                <div class="multi-fields">
                                  <div class="multi-field"  style="padding-bottom: 20px">
                                    <input type="file" name="image[]" multiple="multiple" style="float: left;"  accept="image/*">
                                    <button type="button" class="remove-field btn-xs btn-danger">Remove</button>
                                  </div>
                                </div>
                              <button type="button" class="add-field btn-xs btn-success">Add field</button>
                            </div>
                    </div>
                    

                </div>
    </div>
  </div>
            


                
            
               

              
<div style="clear: both;height: 20px"></div>


        
                          <div class="pull-right">
                             <a href="javascript:void();" class="primary-btn" onclick="window.history.go(-1); return false;">Back</a>
                             <input type="submit" name="saveproduct" class="primary-btn" value="save">
                            
                                
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
// Add button Delete in row
$('tbody tr')
    .find('td')
    //.append('<input type="button" value="Delete" class="del"/>')
    .parent() //traversing to 'tr' Element
    .append('<td><a href="#" class="delrow btn btn-danger"><i class="fa fa-minus"></i></a></td>');

// Add row the table
$('#btnAddRow').on('click', function() {
    var lastRow = $('#tblAddRow tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow tbody tr:last input').val('');
});


// Delete row on click in the table
$('#tblAddRow').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});


// Add row the table
$('#btnAddRow2').on('click', function() {
    var lastRow = $('#tblAddRow2 tbody tr:last').html();
    //alert(lastRow);
    $('#tblAddRow2 tbody').append('<tr>' + lastRow + '</tr>');
    $('#tblAddRow2 tbody tr:last input').val('');
});


// Delete row on click in the table
$('#tblAddRow2').on('click', 'tr a', function(e) {
    var lenRow = $('#tblAddRow2 tbody tr').length;
    e.preventDefault();
    if (lenRow == 1 || lenRow <= 1) {
        alert("Can't remove all row!");
    } else {
        $(this).parents('tr').remove();
    }
});

$('.allow_sale').click(function() {
      if(this.checked) {
          $(".allow_sale_fields").show();
      }else{
        $(".allow_sale_fields").hide();
      }       
  });
  CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');


$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
</script>



@endsection