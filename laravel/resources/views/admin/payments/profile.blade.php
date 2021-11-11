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
                                       <form method="POST" action="{{ route('saveadmin') }}"  id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"  required="required" value="<?php echo $GetData->name;?>">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control"  required="required" value="<?php echo $GetData->email;?>">
                                </div>
                                
                                <div class="col-lg-3 form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control"  value="">
                                </div>
                              <div class="col-lg-3 form-group">
                                    <label>Logo</label>
                                    <input type="file" name="image" class="form-control" >
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
