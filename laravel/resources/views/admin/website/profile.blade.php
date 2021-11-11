@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Account Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Account Settings</h4>
                               

                                </div>
                                <div class="tab-inn">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="table-desi">
                                       <form method="POST" action="{{ route('saveadmin') }}"  id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control"  required="required" value="<?php echo $GetData->first_name;?>">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control"  required="required" value="<?php echo $GetData->last_name;?>">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control"  required="required" value="<?php echo $GetData->email;?>">
                                </div>
                                
                                <div class="col-lg-3 form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control"  value="">
                                </div>
                              
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-3 form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control" >
                                    <br>
                                    <?php if(!empty($GetData->image)){?>
                                        <img src="{{ asset('/storage/uploads/'.$GetData->image) }}" style="height: 200px;width: 200px">
                                    <?php }?>
                                </div>
                            </div>
   
                         
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="submit" value="Submit" name="account_settings" class="btn btn-success pull-right">
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
