@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Pending Subscription </a>
                        </li>
                    </ul>
                </div>
               @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Pending Subscription </h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                              <thead>
                                            <tr>
                                                <th>#No</th>
                                                <th>Name</th>
                                                <th>Store Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Package</th>
                                                <th>Starting From</th>
                                                <th>Ending On</th>
                                                <th>Screenshot</th>
                                                <th>Transcation Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php $a = 0; ?>
                                           @if(!empty($user))
                                           @foreach($user as $u)
                                           <?php $a++; ?>
                                           <tr>
                                            <td><?php echo $a; ?></td>
                                            <td>{{$u->first_name}} {{$u->last_name}}</td>
                                            <td>{{$u->storeinfo->store_name}}</td>
                                            <td>{{$u->email}}</td>
                                            <td>{{$u->phone}}</td>
                                            <td>{{$u->subscription_package}}</td>
                                            <td>{{$u->starting_date}}</td>
                                            <td>{{$u->ending_date}}</td>
                                            <td>@if(!empty($u->subscription_screenshot))<a style="color: blue;" href="{{ asset('/frontend/transactions/'.$u->subscription_screenshot) }}">Transtion Image</a>@else Nill @endif</td>
                                            <td>@if(!empty($u->subscription_transtion_id)){{$u->subscription_transtion_id}}@else Nill @endif</td>
                                            <td><a href="{{url('/admin/package/approve/'.$u->id)}}" style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Approve</a></td>
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
