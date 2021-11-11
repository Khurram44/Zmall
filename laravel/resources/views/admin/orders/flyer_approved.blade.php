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
                                <div class="inn-title">
                                    <h4>APPROVE FLAYERS</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Order No</th>
                                                <th>User Id</th>
                                                <th>Quantity</th>
                                                <th>Size</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Slip</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $a = 0; ?>
                                        @foreach ($flyer_approved as $op)
                                            <tr>
                                                <?php $a++; ?>
                                                <td><?php echo $a; ?></td>
                                                <td>{{$op->order_no}}</td>
                                                <td>{{$op->owner_id}}</td>
                                                <td>{{$op->quantity}}</td>
                                                <td>{{$op->size}}</td>
                                                <td>{{$op->total_amount}}</td>
                                                <td>{{$op->created_at}}</td>
                                                 <td>
                                                    <a href="{{asset('download-trax-slip/'.$op->slip_link)}}" style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Download</a>
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
