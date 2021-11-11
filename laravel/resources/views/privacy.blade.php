@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style>
    .content_menu_custom{
        height:auto;
        margin:100px;
    }
    .form-control:focus{
        outline:none;
        border:1px solid #ddd;
        box-shadow: none;
    }
</style>
           <div class="sb2-2" style="margin-top:60px;">
                <div class="sb2-2-2">
                    
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Privacy</h4>

                                </div>
                                <div class="tab-inn">
                                    <div class="table-desi">
                            <div class="row">
                                <div class="col-lg-12 form-group">
                               
                                    <textarea readonly style="height: 700px;" name="description" class="form-control" id="editor1"> 
                            
                                  <?php echo strip_tags($GetData->description)?> 
                                  </textarea>
                                </div>
                            </div>
                           
                            <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
