@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Orders</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                @if(!empty($service_pending))
                                <div class="inn-title">
                                    <h4>Service Pending</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Service</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Store Name</th>
                                                <th>Description</th>.
                                                <th>File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($service_pending as $op)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$op->first_name}}</td>
                                                <td>{{$op->last_name}}</td>
                                                <td>{{$op->service}}</td>
                                                <td>{{$op->email}}</td>
                                                <td>{{$op->cell_no}}</td>
                                                <td>{{$op->store_name}}</td>
                                                <td>{!!$op->description!!}</td>
                                                @if(!empty($op->file))
                                                <td>{{$op->file}}</td>
                                                @else
                                                <td></td>
                                                @endif
                                                 <td>
                                                    <a href="{{url('/admin/service/approve/'.$op->id)}}" style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Approve</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                      
                                            
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($service_approve))
                                <div class="inn-title">
                                    <h4>Service Approved</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Service</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Store Name</th>
                                                <th>Description</th>.
                                                <th>File</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($service_approve as $op)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$op->first_name}}</td>
                                                <td>{{$op->last_name}}</td>
                                                <td>{{$op->service}}</td>
                                                <td>{{$op->email}}</td>
                                                <td>{{$op->cell_no}}</td>
                                                <td>{{$op->store_name}}</td>
                                                <td>{!!$op->description!!}</td>
                                                @if(!empty($op->file))
                                                <td>{{$op->file}}</td>
                                                @else
                                                <td></td>
                                                @endif
                                                 <td>
                                                    <a style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Approved</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                      
                                            
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
