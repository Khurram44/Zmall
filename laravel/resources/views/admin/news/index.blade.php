@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> News</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                          <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{ url('/admin/news/addnews')}}">
                                        Add New
                                    </a>
                    </div>
                    <div class="row" style="height: 25px;"></div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box-inn-sp">

                                <div class="inn-title">
                                    <h4>Manage News</h4>
                                     
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
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
                                    <a  href="{{ url('editnews/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editnews<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editnews<?php echo $a->id;?>" action="{{ url('admin/news/editnews/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletnews/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletnews<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletnews<?php echo $a->id;?>" action="{{ url('admin/news/deletnews/'.$a->id)}}" method="POST" style="display: none;">
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
