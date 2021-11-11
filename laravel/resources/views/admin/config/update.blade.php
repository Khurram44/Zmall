@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> <?php echo $GetDatass->name; ?></a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Update <?php echo $GetDatass->name; ?></h4>
                                    
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
                                 <?php if($GetDatass->id == 2){
                                        $JobCat =  \DB::table('manage')->where('module_id', 1)->get();?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Category *</label>
                                                        <select class="initialized" name="parent_id" required="required">
                                                            <option value="">Select</option>
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            <option value="<?php echo $jc->id; ?>"
                                                                <?php if($GetData->parent_id == $jc->id){ echo "selected";}?>
                                                                ><?php echo $jc->name; ?></option>
                                                        <?php }
                                                    }?>
                                                        </select>
                                                    </div>
                                                </div> 
                                    <?php }elseif($GetDatass->id == 3){
                                        $JobCat =  \DB::table('manage')->where('module_id', 2)->get();?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Category *</label>
                                                        <select class="initialized" name="parent_id" required="required">
                                                            <option value="">Select</option>
                                                            <?php if(!empty($JobCat)){
                                                                        foreach($JobCat as $jc){?>
                                                            <option value="<?php echo $jc->id; ?>"
                                                                <?php if($GetData->parent_id == $jc->id){ echo "selected";}?>
                                                                ><?php echo $jc->name; ?></option>
                                                        <?php }
                                                    }?>
                                                        </select>
                                                    </div>
                                                </div> 
                                    <?php } ?>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" name="name"  class="form-control"   value="<?php echo $GetData->name;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Slug *</label>
                                            <input type="text" name="slug"  class="form-control" value="<?php echo $GetData->slug;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Meta Title*</label>
                                            <input type="text" name="meta_title"  class="form-control" value="<?php echo $GetData->meta_title;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Meta Description*</label>
                                            <input type="text" name="meta_des"  class="form-control" value="<?php echo $GetData->meta_description;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Meta Keyword *</label>
                                            <input type="text" name="meta_key"  class="form-control" value="<?php echo $GetData->meta_keyword;?>" required>
                                        </div>
                                    </div>
                                    <!-- if($GetDatass->id == 1){?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Image *</label>
                                                        <input type="file" name="image" class="form-control" required="required">

                                                    </div>
                                                </div> 
                                     -->
                            
                               
                        </div>
                        
                              
                           
                           
                           
                            <hr>
                            <div class="row">
                                <div class="col-lg-12 form-group">
                                    <input type="hidden" value="<?= $GetData->image; ?>" name="old_image">
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
