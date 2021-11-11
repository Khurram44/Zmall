@extends('layouts.admin')

@section('content')
<div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                      
                    </ul>
                </div> 
                <!--== DASHBOARD INFO ==--> 
                <div class="ad-v2-hom-info">
                    <div class="ad-v2-hom-info-inn">
                        <ul>
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Products</p>
                                    <h3>{{$all_products->count()}}</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-2">
                                    <span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Orders</p>
                                    <h3>{{$all_orders->count()}}</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-3">
                                    <span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Users</p>
                                    <h3>{{$all_users->count()}}</h3>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="ad-hom-box ad-hom-box-4">
                                    <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-address-card-o"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i> Total Vendors</p>
                                    <h3>{{$all_vendors->count()}}</h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="container" style="height: 400px"></div>
                        </div>
                        
                    </div>
                </div>
          
          
            </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Yearly Order Details'
    },

    xAxis: {
        type: 'datetime',
        dateTimeLabelFormats: { // don't display the dummy year
            month: '%e. %b',
            year: '%b'
        },
        title: {
            text: 'Date'
        }
    },
    yAxis: {
        title: {
            text: 'Amount'
        },
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%e. %b}: ${point.y:.2f}'
    },

    plotOptions: {
        series: {
            marker: {
                enabled: true
            }
        }
    },

    colors: ['#6CF', '#036', '#000'],

    // Define the data points. All series have a dummy year
    // of 1970/71 in order to be compared on the same x axis. Note
    // that in JavaScript, months start at 0 for January, 1 for February etc.
    <?php
    $funds_details = [];
    $investment_details = [];
    if(!empty($monthly_dates)){
        foreach ($monthly_dates as $m) {
            $FundsInfo = \DB::table('user_funds_history')
            ->where('type', 'Funds Added')
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m-%d')='".$m->date."' ")
            ->sum('amount');

            $InvestmentInfo = \DB::table('user_funds_history')
            ->where('type', 'Investment')
            ->whereRaw("DATE_FORMAT(created_at, '%Y-%m-%d')='".$m->date."' ")
            ->sum('amount');


            $funds_details[] = '[Date.UTC('.date("Y, m, d",strtotime($m->date)).'), '.$FundsInfo.']';
            $investment_details[] = '[Date.UTC('.date("Y, m, d",strtotime($m->date)).'), '.abs($InvestmentInfo).']';
        }
    }

    ?>
    series: [{
        name: "Funds",
        data: [<?php echo join(",",$funds_details); ?>]
    }, {
        name: "Investment",
        data: [<?php echo join(",",$investment_details); ?>]
    }],

    responsive: { 
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                plotOptions: {
                    series: {
                        marker: {
                            radius: 2.5
                        }
                    }
                }
            }
        }]
    }
});
</script>
@endsection
