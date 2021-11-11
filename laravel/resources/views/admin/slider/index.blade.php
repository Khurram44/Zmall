@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Slider</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                          <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{ url('/admin/slider/addslider')}}">
                                        Add New
                                    </a>
                    </div>
                    <div class="row" style="height: 25px;"></div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box-inn-sp">

                                <div class="inn-title">
                                    <h4>Manage Slider</h4>
                                     
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($GetData)){
                                                    foreach($GetData as $a){?>
                                            <tr>
                                                <td><?php echo $a->title;?></td>
                                                <td><?php echo $a->description;?></td>
                                               
                                                
                                                <td>
                                                <a  href="{{ url('editslider/'.$a->id)}}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('editslider<?php echo $a->id;?>').submit();">
                                                     <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="editslider<?php echo $a->id;?>" action="{{ url('admin/slider/editslider/'.$a->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                               

                                             <a  href="{{ url('deletslider/'.$a->id)}}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('deletslider<?php echo $a->id;?>').submit();">
                                                                <i class="material-icons">cancel</i>
                                                </a> 

                                                <form id="deletslider<?php echo $a->id;?>" action="{{ url('admin/slider/deletslider/'.$a->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                             </td>
                                            </tr>
                                        <?php }
                                    }?>
                                            
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
