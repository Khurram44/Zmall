@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Wallet</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Wallet</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                       
                    <div class="ad-v2-hom-info-inn">
                        <ul>
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa fa-usd"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Today Funds</p>
                                    <h3><?php echo "$".number_format($today_funds,2);?></h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-2">
                                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa fa-usd"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> This Week Funds</p>
                                    <h3><?php echo "$".number_format($this_week_funds,2);?></h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-3">
                                    <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa fa-usd"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> This Month Funds</p>
                                    <h3><?php echo "$".number_format($this_month_funds,2);?></h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-4">
                                    <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa fa-usd"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Funds</p>
                                    <h3><?php echo "$".number_format($all_sum_funds,2);?></h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Wallet History</h4>

                                </div>
                                <div class="tab-inn">

                                <div class="row">
                                      <div class="col-md-12">
                                     <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="dataTable">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>User</th>
                                                <th>Amount</th>
                                                <th>Payment Method</th>
                                                <th>Added On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($all_funds)){
                                              $sno = 1;
                                                        foreach($all_funds as $a){?>
                                            <tr>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo ucfirst($a->addedbyname->name);?></td>
                                                <td><?php echo "$".number_format($a->amount);?></td>
                                                <td><?php echo $a->payment_method;?></td>
                                                <td><?php echo date("d M, Y h:s a",strtotime($a->created_at));?></td>

                                            </tr>
                                        <?php 
                                        $sno++; }
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
                </div>
            </div>
       
@endsection
