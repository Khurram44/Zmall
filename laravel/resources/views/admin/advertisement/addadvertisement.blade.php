@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Add New Advertisement</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New Advertisementr</h4>
                                    

                                </div>
                                <div class="tab-inn">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="table-desi">
                                       <form method="POST" action="{{ route('addadvertisement') }}"  id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            
                             <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Title *</label>
                                            <input type="text" name="title"  class="form-control"   value="" required>
                                        </div>
                                    </div>  
                                   
                                    
                            <div class="form-group form-float col-sm-6">
                                    <label> Image</label>
                                    <input type="file" class="form-control" name="image" id="photo" accept=".png, .jpg, .jpeg" onchange="readFile(this);" multiple>
                                </div>
                        </div>
                        <div class="row clearfix">
                         <div class="col-lg-6 form-group">
                                    <label> Button Title</label>
                                    <input type="text" name="button_title" class="form-control"  value="">
                                </div>
                      <div class="col-lg-6 form-group">
                                    <label>Button Link</label>
                                    <input type="text" name="button_link" class="form-control" value="" >
                                </div>
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-12">
                                  
                                         <div class="form-group">
                                            <label>Section *</label>
                                        
                                         <select name="section" id="section">
                                      <option value="selection">Select</option>
                                         <option value="slider">Slider</option>
                                         <option value="flash sale">Flash Sale</option>
                                         <option value="top trending">Top Trending</option>
                                                    </select>
                                        </div>
                                </div>
                                    
                                  
                                </div>


                                 <div class="row clearfix">
                          <div class="col-sm-12">
                                  
                                         <div class="form-group">
                                            <label>Status*</label>
                                        
                                        
                                         <select name="status" id="status">
                                      <option value="status">Status</option>
                                         <option value="active">Active</option>
                                         <option value="in active">In active</option>
                                                    </select>
                                        </div>
                                </div>
                                    
                                  
                                </div>
                                
                      
                           
                           
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Submit" name="add" class="btn btn-success pull-right">
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
