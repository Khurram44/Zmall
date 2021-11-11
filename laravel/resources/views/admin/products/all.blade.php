@extends('layouts.admin')

@section('content')
@if(session()->has('message'))
    <div class="col-12 col-sm-12 alert alert-success">
        {{ session()->get('message') }}
        
    </div>

@endif
           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> All Users</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    @if(!empty($Approved))
                                    <h4>Manage Approved Products</h4>
                                    @endif
                                    @if(!empty($Pending))
                                    <h4>Pending Products</h4>
                                    @endif
                                    @if(!empty($Rejected))
                                    <h4> Rejected Products</h4>
                                    @endif
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">

                                        <table class="table table-hover">
                                  <thead>
                                    <tr>
                                       
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        
                                        <!-- <th class="text-center" style="width: 10%;">Status</th>              -->                           
                                        <th class="text-center">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @if(!empty($Approved))
                               @foreach($Approved as $p)
                                    <tr>
                                        
                                        <td class="thumb">
                                            <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}" alt=""  style="width: 60px;height: 60px">
                                        </td>
                                        <td class="details">
                                            <a href="{{url('product-detail/'.$p->slug)}}"><?= wordwrap($p->title, 30, "<br>", true); ?></a>
                                            <ul>
                                                <li><span>{{$p->size}}</span></li>
                                                <li><span>{{$p->color}}</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">{{$p->categoryinfo->name}}</td>
                                        <td class="price text-left">{{ "PKR ".number_format($p->price,2) }}</td>
                                        <td class="price text-left">{{$p->quantity}}</td>
                               
                                       
                                        <!-- <td class="price text-center"><STRONG>Live</STRONG></td> -->
                                        <td class="text-center">
                                            <a href="{{url('/admin/products/product-page/'.$p->slug)}}"><i class="fa fa-eye icon-whish" title="View Details"></i></a>
                                            <a href="{{url('edit-product/'.$p->id)}}"><i class="fa fa-pencil icon-whish"></i></a>
                                            <a href="{{url('del-product/'.$p->id)}}"  onclick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash icon-whish"></i></a>
                                            </td>

                                    </tr>   
                                    @endforeach
                                   @endif 
                                    @if(!empty($Pending))
                               @foreach($Pending as $p)
                                    <tr>
                                        <td class="thumb">
                                            <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}" alt=""  style="width: 60px;height: 60px">
                                        </td>
                                        <td class="details">
                                            <a href="{{url('product-detail/'.$p->slug)}}"><?= wordwrap($p->title, 30, "<br>", true); ?></a>
                                            <ul>
                                                <li><span>{{$p->size}}</span></li>
                                                <li><span>{{$p->color}}</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">{{$p->categoryinfo->name}}</td>
                                        <td class="price text-left">{{ "PKR ".number_format($p->price,2) }}</td>
                                        <td class="price text-left">{{$p->quantity}}</td>
                                        <td class="text-center">
                                            <a href="{{url('/admin/products/approve-product/'.$p->id)}}" style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Approve</a>
                                            <a href="{{url('/admin/products/reject-reason/'.$p->id)}}" style="padding:5px 10px; margin-left:5px; background:red; color:#fff;">Reject</a>
                                        </td>
                                    </tr> 
                                    @endforeach
                                   @endif
                                    @if(!empty($Rejected))
                               @foreach($Rejected as $p)
                                    <tr>
                                        
                                        <td class="thumb">
                                            <img src="{{ asset('frontend/storage/uploads/'.$p->images) }}" alt=""  style="width: 60px;height: 60px">
                                        </td>
                                        <td class="details">
                                            <a href="{{url('product-detail/'.$p->slug)}}"><?= wordwrap($p->title, 30, "<br>", true); ?></a>
                                            <ul>
                                                <li><span>{{$p->size}}</span></li>
                                                <li><span>{{$p->color}}</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-left">{{$p->categoryinfo->name}}</td>
                                        <td class="price text-left">{{ "PKR ".number_format($p->price,2) }}</td>
                                        <td class="price text-left">{{$p->quantity}}</td>
                                    </tr>   
                                    @endforeach
                                   @endif
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
