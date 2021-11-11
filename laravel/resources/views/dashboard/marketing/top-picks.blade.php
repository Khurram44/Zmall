@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
.top_pick_all{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.top_pick_l{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    }
.top_pick_r{
    height: 350px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    }
.tpo_picks_content{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.tpo_picks_content b{
    font-size: 22px;
    line-height: 24px;
    color: #333;
    font-weight: 500;
    }
.tpo_picks_content span{
    margin-top: 8px;
    font-size: 14px;
    line-height: 20px;
    color: #333;
}
.top_pick_title{
    color: #3a3a3a;
    font-weight: 500;
    margin: 10px;
    font-size: 24px;
    line-height: 26px;
    font-weight: var(--font-weight);
    }
.top_pick_btn{
    color: #fff;
    background: #fe9126;
    border: 0;
    outline: none;
    height: 40px;
    min-width: 80px;
    padding: 0 16px;
    font-size: 14px;
}
    @media only screen and (max-width: 600px) {
}

     
}
</style>
<div class="row">
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; height: 100%; width: 82%; background:#fff;">
       <div class="top_pick">
        <h2 class="top_pick_title">Top Picks</h2>
        <div class="row top_pick_all" style="padding: 100px 0;">
            <div class="top_pick_l">
               <img src="https://deo.shopeemobile.com/shopee/shopee-seller-live-sg/rootpages/static/modules/hotsale/image/introduce.945c91a.png" style="height: 406px;">
           </div>
           <div class="top_pick_r">
                <div class="tpo_picks_content">
                   <b>Gain more views to your shop</b>
                   <span>Display your shop's best-sellers on your product's detail pages to increase exposure of other products and gain more traffic.</span>
                </div>
               <div class="tpo_picks_content">
                   <b>Increase your orders</b>
                    <span>Boost your sales by cross-selling other products in the same page.</span>
               </div>
               <div>
                   <form>
                    <button class="top_pick_btn" formaction="/Vendor/top-picks/new">Create Top Picks collection now</button>
                   </form>
               </div>
           </div>
        </div>
       </div>
    </div>
</div>

@endsection