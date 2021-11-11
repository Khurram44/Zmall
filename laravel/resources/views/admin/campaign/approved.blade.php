@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Approved Campaign</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Approved Campaign</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Sub Category</th>
                                                <th>Location</th>
                                                <th>Funding Goal</th>
                                                <th>Goal Achieved</th>
                                                <th>Min. Invest</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($MyCampaign)){
                                                        foreach($MyCampaign as $a){?>
                                            <tr>
                                                <td><?php echo $a->title;?></td>
                                                <td><?php echo $a->category->name;?></td>
                                                <td><?php echo $a->subcategory->name;?></td>
                                                <td><?php echo $a->project_location;?></td>
                                                <td><?php echo $a->total_goal_achieved;?></td>
                                                <td><?php echo "$".number_format($a->funding_goal);?></td>
                                                <td><?php echo "$".number_format($a->minimum_investment);?></td>
                                                
                                                <td><?php echo ucfirst($a->status);?></td>
                                                <td>
                                                    <?php if($a->status != 'approved'){?>
                                                    <a href="{{ url('aprrovedcampaign/'.$a->id)}}" title="Approve"><i class="fa fa-check"></i></a>
                                                    <?php }?>
                                                    <?php if($a->status != 'rejected'){?>
                                                    <a href="{{ url('disapprovedcampaign/'.$a->id)}}" title="Disapprove"><i class="fa fa-close"></i></a>
                                                    <?php }?>
                                                    <a href="{{ url('campaign_detail/'.$a->id)}}" title="View" target="_blank"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        <?php }
                                    }?>
                                            
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
