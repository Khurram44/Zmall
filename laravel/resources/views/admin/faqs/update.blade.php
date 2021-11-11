@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add Faqs</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Faqs</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="table-desi">
                                       <form method="POST" action=""  id="registerForm" class="clearfix">
                            @csrf
                             <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                <label>Category *</label>
                                <select name="category">
                                <option disabled>Select</option>
                                <option value="Order">Order</option>
                                <option value="Voucher">Voucher</option>
                                <option value="Cashback">Cashback</option>
                                <option value="Payment">Payment</option>
                                <option value="Shipment & Delivery">Shipment & Delivery</option>
                                <option value="Returns/Exchanges">Returns/ Exchanges</option>
                                </select>
                                </div>
                                </div> 
                                    
            
                        </div>
                             <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Question *</label>
                                            <input type="text" name="question"  class="form-control"   value="<?php echo $GetData->question;?>" required>
                                        </div>
                                    </div> 
                                    
            
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-6">
                                  
                                         <div class="form-group">
                                            <label>Answer *</label>
                                        <textarea name="answer" id="editor1" rows="10" cols="80"><?php echo $GetData->answer;?></textarea>
                                        </div>
                                </div>
                                    
                                  
                                </div>
                                 
                           
                           <div class="row clearfix">
                                <div class="col-sm-12">
                              
                                    <input type="hidden" name="add" value="add">
                                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> 
                                </div>
                                </div>
                           
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Submit" name="update" class="btn btn-success pull-right">
                                </div>
                                
                            </div>
                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <script type="text/javascript">
				CKEDITOR.replace( 'editor1' );
			</script>
@endsection
