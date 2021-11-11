@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Shippment</a>
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
                                    <h4>All Shippment</h4>
                                     
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                <form method="post" action="{{route('saveshippment')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Enter Amount</label>
                                        <input type="text" name="amount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        
                                        <input type="submit" name="addshippment" class="btn btn-primary" value="save">
                                    </div>

                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
