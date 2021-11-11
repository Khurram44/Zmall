@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Advertisemen</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                          <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{ url('/admin/advertisement/addadvertisement')}}">
                                        Add New
                                    </a>
                    </div>
                    <div class="row" style="height: 25px;"></div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box-inn-sp">

                                <div class="inn-title">
                                    <h4>Manage advertisement</h4>
                                     
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                     @foreach($GetData as $a)
                                    <tr>
                                        
                                        <td class="thumb">
                                            <img src="{{ asset('/storage/uploads/'.$a->image) }}" alt=""  style="width: 60px;height: 60px">
                                        </td>
                                                <td><?php echo $a->title;?></td>
                                                <td><?php echo $a->status;?></td>
                                               
                                                
                                                <td>
                                                <a  href="{{ url('editadvertisement/'.$a->id)}}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('editadvertisement<?php echo $a->id;?>').submit();">
                                                     <i class="material-icons">mode_edit</i>
                                                </a>

                                                <form id="editadvertisement<?php echo $a->id;?>" action="{{ url('admin/advertisement/editadvertisement/'.$a->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>

                                               

                                             <a  href="{{ url('deletadvertisement/'.$a->id)}}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('deletadvertisement<?php echo $a->id;?>').submit();">
                                                                <i class="material-icons">cancel</i>
                                                </a> 

                                                <form id="deletadvertisement<?php echo $a->id;?>" action="{{ url('admin/advertisement/deletadvertisement/'.$a->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                             </td>
                                            </tr>
                                            @endforeach
                                        
                                            
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
