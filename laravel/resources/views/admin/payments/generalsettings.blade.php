@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> General Settings</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage General Settings</h4>
                                    
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
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control"  required="required" value="<?php echo $GetData->email;?>">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control"  value="<?php echo $GetData->phone;?>" >
                                </div>

                                <div class="col-lg-3 form-group">
                                    <label>Paypal Email</label>
                                    <input type="text" name="paypal_email_id" class="form-control"  value="<?php echo $GetData->paypal_email_id;?>">
                                </div>
                                <div class="col-lg-3 form-group">
                                    <label>Logo</label>
                                    <input type="file" name="image" class="form-control" >
                                </div>
                             
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Facebook Link</label>
                                    <input type="text" name="facebook_link" class="form-control" value="<?php echo $GetData->facebook_link;?>" >
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Gplus Link</label>
                                    <input type="text" name="gplus_link" class="form-control" value="<?php echo $GetData->gplus_link;?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Twitter Link</label>
                                    <input type="text" name="twitter_link" class="form-control" value="<?php echo $GetData->twitter_link;?>" >
                                </div>
                            
                                <div class="col-lg-6 form-group">
                                    <label>Instagram Link</label>
                                    <input type="text" name="instagram_link" class="form-control" value="<?php echo $GetData->instagram_link;?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <label>Short Description</label>
                                    <textarea style="height: 300px" name="short_description" class="form-control" ><?php echo $GetData->short_description;?></textarea>
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
