@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Our Teams</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Our Teams</h4>
                                    
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
                                       <form method="POST" action="{{ route('ourteamsadd') }}"  id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            
                             <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" name="title"  class="form-control"   value="" required>
                                        </div>
                                    </div> 
                                    
                            <div class="form-group form-float col-sm-6">
                                    <label> Image</label>
                                    <input type="file" class="form-control" name="image" id="photo" accept=".png, .jpg, .jpeg" onchange="readFile(this);" multiple>
                                </div>
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-6">
                                  
                                         <div class="form-group">
                                            <label>Designation *</label>
                                        <input type="text" name="description"  class="form-control"   value="" required>
                                           <!--  <textarea name="description" class="form-control" required></textarea> -->
                                        </div>
                                </div>
                                   <div class="col-lg-6 form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" name="twitter_link" class="form-control" value="" >
                                </div>   
                                  
                                </div>
                                 
                           <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" name="facebook_link" class="form-control" value="" >
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Gplus Link</label>
                                    <input type="text" name="gplus_link" class="form-control" value="" >
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" name="instagram_link" class="form-control" value="" >
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
