@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Update Advertisement</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Update Advertisement</h4>
                                    
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
                                       <form method="POST" action="" method="POST" id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            
                             <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Title *</label>
                                            <input type="text" name="title"  class="form-control"   value="<?php echo $GetData->title;?>" required>
                                        </div>
                                    </div> 
                                    
                            <div class="form-group form-float col-sm-6">
                                    <label> Image</label>
                                    <br>
                                   
                                    <input type="file" class="form-control" name="image" id="photo" accept=".png, .jpg, .jpeg" onchange="readFile(this);">
                                     <img style="width: 9%; height: 32px" class="preview"  name="image" src="{{ asset('/storage/uploads/'.$GetData->image) }}"/>
                                    
                                </div>
                               
                        </div>
                        <div class="row clearfix">
                             
                            <div class="col-lg-6 form-group">
                                    <label>Button Title</label>
                                    <input type="text" name="button_title" class="form-control"  value="<?php echo $GetData->button_title;?>">
                                </div>

                      <div class="col-lg-6 form-group">
                                    <label>Button Link</label>
                                    <input type="text" name="button_link" class="form-control" value="<?php echo $GetData->button_link;?>" >
                                </div>
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-12">
                                  
                                         <div class="form-group">
                                            <label>Section *</label>

                                      <select name="section" id="section">
                                      <option value="selection" >Select</option>
                                         <option value="slider" @if($GetData->section === 'slider') selected='selected' @endif}}>Slider</option>
                                         <option value="flash sale"@if($GetData->section === 'flash sale') selected='selected' @endif}}>Flash Sale</option>
                                         <option value="top trending" @if($GetData->section === 'top trending') selected='selected' @endif}}>Top Trending</option>
                                                    </select>
                                           
                                        </div>
                                </div>
                                      
                                 
                                </div>

                                <div class="row clearfix">
                          <div class="col-sm-12">
                                  
                                        <div class="form-group">
                                            <label>Status *</label>

                                      <select name="status" id="status">
                                         <option value="active" @if($GetData->status === 'active') selected='selected' @endif}} >Active</option>
                                         <option value="in active" @if($GetData->status === 'in active') selected='selected' @endif}}>In Active</option>
                                                    </select>
                                           
                                        </div>
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
       
@endsection
