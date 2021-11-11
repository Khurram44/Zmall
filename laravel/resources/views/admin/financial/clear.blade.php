@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#">Payment</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Clear Payment</h4>
                                    
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
                                                <th>Vendor Id</th>
                                                <th>Total Amount</th>
                                                <th>Comission</th>
                                                <th>Delivery Charges</th>
                                                <th>Vendor Remaining Amount</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $a = 0; ?>
                                        @foreach ($clearOrder as $op)
                                            <tr>
                                                <?php $a++; ?>
                                                <td><?php echo $a; ?></td>
                                                <td>{{$op->order_no}}</td>
                                                @foreach($order_detail as $d)
                                                @if($d->order_id == $op->id)
                                                <td>{{$d->vendor_id}}</td>
                                                @endif
                                                @endforeach
                                                <?php $comission = "";
                                                $comission = $op->sub_total*15/100; ?>
                                                <td>{{$op->grand_total}}</td>
                                                <td>{{$comission}}</td>
                                                <td>{{$op->shipment_charges}}</td>
                                                <td>{{$op->grand_total - $op->shipment_charges - $comission }}</td>
                                                <td>{{$op->added_on}}</td>
                                                <td>
                                                    <a href="{{url('/admin/payment/approve-payment/'.$op->id)}}" style="padding:5px 10px; margin-left:5px; background:green; color:#fff;"></i>Sent</a>
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
