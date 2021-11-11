@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> All Customers</a>
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
                                    <h4>Manage All Customers</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                              <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($GetData)){
                                                        foreach($GetData as $a){?>
                                            <tr>
                                                <td><?php echo $a->first_name." ".$a->last_name;?></td>
                                                <td><?php echo $a->email;?></td>
                                                <td><?php echo $a->phone;?></td>
                                                <td><?php echo ucfirst($a->status);?></td>
                                                <td>
                                                    <a href="#" title="Front End is Under Process"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('/admin/del-customer/'.$a->id)}}" title="Delete Users"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    }?>
                                            
                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
