@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Compaign</a>
                        </li>
                    </ul>
                </div>

                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                          <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{ url('/admin/campaign/add/')}}">
                                        Add New
                                    </a>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Compaign</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Campaign Title</th>
                                                <th>Campaign Code</th>
                                                <th>Type</th>
                                                <th>Register Timing</th>
                                                <th>Starting Time</th>
                                                <th>Ending Time</th>
                                                <th>Seller</th>
                                                <th>Products</th>
                                                <th>Description</th>
                                                <th>banner</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php $a = 0; ?>
                                        @foreach ($campaign as $op)
                                            <tr>
                                                <?php $a++; ?>
                                                <td><?php echo $a; ?></td>
                                                <td>{{$op->compaign_title}}</td>
                                                <td>{{$op->campaign_code}}</td>
                                                <td>{{$op->type}}</td>
                                                <td>{{$op->register_time}}</td>
                                                <td>{{$op->starting_time}}</td>
                                                <td>{{$op->ending_time}}</td>
                                                <td>{{$op->total_seller}}</td>
                                                <td>{{$op->total_products}}</td>
                                                <td>{{$op->description}}</td>
                                                <td>{{$op->banner}}</td>
                                            
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
