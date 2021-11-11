@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"><?php echo $Module_id->name; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add New <?php echo $Module_id->name; ?></h4>
                                    
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
                                       <form method="POST" action="{{ route('storeconfig') }}"  id="registerForm" class="clearfix" enctype="multipart/form-data">
                            @csrf
                            
                             <div class="row clearfix">
                                    <?php if($Module_id->id == 2){
                                        $JobCat =  \DB::table('manage')->where('module_id', 1)->where('is_deleted',0)->get();?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Category *</label>
                                                        <select class="initialized" name="parent_id" required="required">
                                                            <option value="">Select</option>
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                        <?php }
                                                    }?>
                                                        </select>
                                                    </div>
                                                </div> 
                                    <?php }elseif($Module_id->id == 3){
                                        $JobCat =  \DB::table('manage')->where('module_id', 2)->where('is_deleted',0)->get();?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Category *</label>
                                                        <select class="initialized" name="parent_id" required="required">
                                                            
                                                            <option value="">Select</option>
                                                            <optgroup label="Women's Fashion">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 1)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                     <optgroup label="Men's Fashion">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 2)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                     <optgroup label="Beauty, Health & Hair">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 323)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                    <optgroup label="Kids">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 510)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                    <optgroup label="LifeStyle ">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 516)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                    <optgroup label="Electronic Accessories ">
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            @if($jc->parent_id == 745)
                                                            <option value="<?php echo $jc->id; ?>"><?php echo $jc->name; ?></option>
                                                            @endif
                                                        <?php }
                                                    }?></optgroup>
                                                        </select>
                                                    </div>
                                                </div> 
                                    <?php } ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" name="name"  class="form-control"   value="" required>
                                        </div>
                                    </div> 
                                    <?php if($Module_id->id == 1){?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Image *</label>
                                                        <input type="file" name="image" class="form-control" required="required">
                                                    </div>
                                                </div> 
                                    <?php } ?>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Slug *</label>
                                            <input type="text" name="slug"  class="form-control"   value="" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Title *</label>
                                            <input type="text" name="meta_title"  class="form-control"   value="" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Discription *</label>
                                            <input type="text" name="meta_des"  class="form-control"   value="" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Meta Keyword *</label>
                                            <input type="text" name="meta_key"  class="form-control"   value="" required>
                                        </div>
                                    </div> 

                           
                          
                        </div>
                      
                                 
            
                           
                           
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                     <input type="hidden" name="rowid" value="{{$Module_id->id}}">
                                     <input type="hidden" name="old_image" value="">
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
