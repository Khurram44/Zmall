@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>About Us</h4>
                                    
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
                                       <form method="POST" enctype="multipart/form-data" action="{{ route('saveadmin') }}"  id="registerForm" class="clearfix">
                            @csrf
<div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" >
                                </div>

                                <div class="col-lg-6 form-group">
                                    <label>Video Link</label>
                                    <input type="text" name="video_link" class="form-control"  required="required" value="<?php echo $GetData->video_link;?>">
                                </div>
                                <div id="photos" class="row clearfix">
                                <?php if(!empty($GetData->image)){
                                        $Images = explode(",",$GetData->image);
                                        if(count($Images) > 1){
                                        foreach($Images as $i){?>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img src="{{ asset('storage/uploads/'.$i) }}" class="img-thumbnail">
                                    </div>
                                <?php }
                                    }else{?>
                                         <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img src="{{ asset('storage/uploads/'.$GetData->image) }}" class="img-thumbnail">
                                    </div>
                                 <?php   }
                            }?>
                                  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label>Description</label>
                                    <textarea style="height: 300px" name="description" class="form-control" id="" ><?php echo $GetData->description;?></textarea>
                                </div>
                            </div>
                           
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Submit" name="about_us" class="btn btn-success pull-right">
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
