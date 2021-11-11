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
                                    <h4>ORDERS Pending</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>SR</th>
                                                <th>Order.no</th>
                                                <th>Name</th>
                                                <th>Order Amount</th>
                                                <th>Payment</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($order as $op)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$op->order_no}}</td>
                                                <td>{{$op->first_name}} {{$op->last_name}}</td>
                                                <td>{{$op->grand_total}}</td>
                                                <td>{{$op->payment_method}}</td>
                                                <td>{{$op->added_on}}</td>
                                                 <td>
                                                    <a href="{{ url('admin/orders/order-details/'.base64_encode($op->order_no)) }}" title="View Order Details"><i class="fa fa-eye"></i></a>
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
