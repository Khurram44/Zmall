@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Seller Story</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{url('admin/seller/add-story')}}">
                                        Add New
                                    </a><br><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Seller Story</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    @if(session()->has('status'))
                                    <div class="alert alert-success">
                                        {{session()->get('status')}}
                                    </div>
                                    @endif

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">

                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                    @foreach($GetData as $s)      
                                            <tr>
                                                
                                            <td class="thumb"><img src="{{ asset('storage/uploads/'.$s->image)}}" class="img-thumbnail"width="200" height="200" alt="image here"></td>
                                                
                                                <td>{{$s->name}}</td>
                                                <td>{{$s->description}}</td>
                                               
                                                
                                                
                                             
                                                
                                                <td>
                                                    <a href="{{url('/admin/seller/edit-story/'.$s->id)}}" title="Front End is Under Process"><i class="fa fa-pencil icon-whish"></i></a><br><br>

                                                    <a href="{{url('/admin/seller/del-story/'.$s->id)}}" onclick="return confirm('Are you sure to delete?')" title="Front End is Under Process"><i class="fa fa-trash icon-whish"></i></a>
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
