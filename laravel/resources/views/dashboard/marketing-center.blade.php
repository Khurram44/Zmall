@extends('dashboard.dash-layout.layout')
@section('content')
<style type="text/css">
  .title{
    margin-bottom: 16px;
    font-size: 18px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
  }
  .sub-title{
    font-size: 16px;
    font-weight: 500;
  }
  .m-events{
    position: relative;
    padding-top: 8px;
    overflow: hidden;
  }
  .sub-event{
    display: flex;
    justify-content: space-around;
    height: 100%;
    margin-right: 8px;
    background: #fafafa;
    border-radius: 2px;
    margin-top: 10px;
  }
  .m-events a{
    text-decoration: none;
    color: #333;
  }
  .sub-event a{
    text-decoration: none;
  }
  .event-inner{
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .ev-left{
    width: 178px;
    height: 62px;
   
  }
  .ev-left span{
    position: relative;
    top: 25%;
    text-align: center;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
    font-size: 16px;
   
    color: #fff;
    
  }
  .ev-right{
    width: 168px;
    height: 54px;
    padding: 8px 8px 0;
    display: -webkit-box;
    overflow: hidden;
    font-size: 14px;
    line-height: 18px;
    text-overflow: ellipsis;
    word-break: break-all;
    cursor: pointer;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    color: #666;
    background-color: #fafafa;
  }
  .bot-info{
    position: relative;
    bottom: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    border-radius: 2px;
  }
  .bot-info-inner{
    position: absolute;
    right: 0;
    text-transform: capitalize;
    bottom: -42px;
    z-index: 2;
    padding: 2px 10px 2px 20px;
    border-radius: 20px 0px 0px;
    font-size: 14px;
    line-height: 15px;
    background: #333;
    color: #fff;
    -webkit-transform-origin: right;
    transform-origin: right;
    opacity: .9;
  }
  .camp-e{
    display: flex;
  }
  .camp-e-inner{
    position: relative;
    display: flex;
    align-items: center;
    width: 346px;
    height: 88px;
    padding: 13px 16px;
    background-color: #fafafa;
    border-radius: 4px;
    margin: 10px 0px;
    margin-left: 10px;

  }
  .camp-e-inner:hover{
    box-shadow: 1px 1px 5px 1px hsl(0deg 0% 43% / 13%);
    cursor: pointer;
  }
  .camp-deta{

    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
  }
  .camp-img{
    width: 60px;
    height: 50px;
    margin-right: 24px;
    border-radius: 25px;
    
  }
  .camp-img img{
    width: 60px;
  }
  .camp-deta-t{
    margin-bottom: 4px;
    font-size: 14px;
    text-align: left;
  }
  .camp-deta-b{
    font-size: 12px;
    color: #999;
    text-align: left;
  }
  @media only screen and (max-width: 600px) {
     .sub-event {
        overflow-x: scroll;
        overflow-y: hidden;
        display: flex;
        justify-content: flex-start;
      }
      .camp-e-inner {
        position: relative;
        display: flex;
        align-items: center;
        width: 246px;
        height: auto;
        padding: 13px 16px;
        background-color: #fafafa;
        border-radius: 4px;
        margin: 10px 0px;
        margin-left: 10px;
        align-content: center;
        flex-wrap: nowrap;
        flex-direction: column;
    }
    .camp-e{
        overflow-x: scroll;
        overflow-y: hidden;
    }
    .col-res{
        padding: 5px;
        padding: 10px 20px;
        margin: auto !important;
        margin-top: 0px;
        width: 87% !important;
        background: #fff;
    }
    .camp-img {
    width: auto; 
    height: auto; 
    margin-right: 0;
    border-radius: 25px;
}
.camp-deta {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    align-content: center;
}.camp-deta-b {
    font-size: 12px;
    color: #999;
    text-align: center;
}
}
  
</style>
  <div class="row">
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff;">
      <div class="event-title">
        <span class="title">Zmall Events</span>
        <div class="m-events">
          <span class="sub-title">New Events</span>
          <div class="sub-event">
                <a href="/Vendor/all-sellers">
            <div class="event-inner">
              <div class="ev-left" style="background-color: #7DCAF6;">
                <span>All Sellers</span>
                <div class="bot-info">
                  <div class="bot-info-inner">
                    product campaign
                  </div>
                </div>
              </div>
              <div class="ev-right">
                Independent Day's <br>Top Deals
              </div>
            </div>
            </a>
                <a href="/Vendor/free-shipping">
                    <div class="event-inner">
                      <div class="ev-left" style="background-color: #EEA2D0;"> 
                        <span>Free Shipping</span>
                        <div class="bot-info">
                          <div class="bot-info-inner">
                            product campaign
                          </div>
                        </div>
                      </div>
                      <div class="ev-right">
                        Independent Day's <br>Free Shipping
                      </div>
                    </div>
                </a>
                <a href="/Vendor/vouchers">
                    <div class="event-inner">
                      <div class="ev-left" style="background-color: #FFAA01;">
                        <span>Exclusive Vouchers</span>
                        <div class="bot-info">
                          <div class="bot-info-inner">
                            voucher campaign
                          </div>
                        </div>
                      </div>
                      <div class="ev-right">
                         Independent Day's <br>Exclusive Vouchers
                      </div>
                    </div>
                </a>
          </div>
        </div>
        <div class="m-events">
          <span class="sub-title">Join Zmall Official Event</span>
          <div class="camp-e">
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 6@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Product Campaign</div>
                <div class="camp-deta-b">Join Zmall official campaigns to reach more shoppers</div>
              </div>
            </div>
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 5@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Voucher Campaign</div>
                <div class="camp-deta-b">Join Zmall official campaigns to reach more shoppers</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="m-mar">
          <h3>Boost sales with Promotion</h3><span id="tampo" style="font-family: 'Orbitron', sans-serif;font-weight: bold; color: red;"></span>
        </div> -->



    </div>
    <div class="col-sm-10 col-res" style="padding: 5px; padding: 10px 20px; margin-left: 25px; margin-top:5px; width: 82%; background:#fff;">
      <div class="event-title">
        <span class="title">Marketing Tools</span>
        <div class="m-events">
          <span class="sub-title">Boost Sales with Promotion</span>
          <div class="camp-e">
            <a href="/Vendor/vouchers">
              <div class="camp-e-inner">
                <div class="camp-img">
                  <img src="/frontend/img/icons/Asset 4@4x.png">
                </div>
                <div class="camp-deta">
                  <div class="camp-deta-t">Vouchers</div>
                  <div class="camp-deta-b">Increase orders by offering buyers reduced prices at checkout with vouchers</div>
                </div>
              </div>
            </a>
            <a href="/Vendor/all-sellers">
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 11@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Discount Promotions</div>
                <div class="camp-deta-b">Set discounts on your products to boost sales</div>
              </div>
            </div>
           </a>
           <a href="/Vendor/bundle-deal">
               <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 10@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Bundle Deal</div>
                <div class="camp-deta-b">Increase average spending per order by offering product bundle discounts</div>
              </div>
            </div>
           </a>
            
          </div>
          <div class="camp-e">
            <a href="/Vendor/add-on">
                  <div class="camp-e-inner">
                  <div class="camp-img">
                    <img src="/frontend/img/icons/Asset 3@4x.png">
                  </div>
                  <div class="camp-deta">
                    <div class="camp-deta-t">Add-on Deal</div>
                    <div class="camp-deta-b">Sell more products by offering add-on discounts or free gifts with min. spend</div>
                  </div>
                </div>
              </a>
            <a href="/Vendor/free-shipping">
             <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 8@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Shipping Fee Promotion</div>
                <div class="camp-deta-b">Set shipping fee discounts to attract shoppers to make orders</div>
              </div>
            </div>
          </a>
            <a href="#">
                <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 9@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">My Shop's Flash Deals</div>
                <div class="camp-deta-b">Boost product sales by creating limited-time discount offers in your shop</div>
              </div>
            </div>
            </a>
          </div>
          <span class="sub-title">Boost Sales with Promotion</span>
           <div class="camp-e" style="justify-content: flex-start;">
            
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 2@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Follow Prize</div>
                <div class="camp-deta-b">Encourage shoppers to follow your shop by rewarding new follower vouchers</div>
              </div>
            </div>
          </div>
          <span class="sub-title">Increase Your Shop Traffic</span>
          <div class="camp-e">
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 1@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t">Zmall Ads</div>
                <div class="camp-deta-b">Increase exposure and drive sales in high traffic areas on Zmall with ads</div>
              </div>
            </div>
            <a href="/Vendor/top-picks">
            <div class="camp-e-inner">
              <div class="camp-img">
                <img src="/frontend/img/icons/Asset 7@4x.png">
              </div>
              <div class="camp-deta">
                <div class="camp-deta-t"> Top Picks </div>
                <div class="camp-deta-b">Drive traffic to selected products by showing them on your product pages</div>
              </div>
            </div>
            </a>
          </div>
        </div>
      </div>

      <!-- <div class="m-mar">
          <h3>Boost sales with Promotion</h3><span id="tampo" style="font-family: 'Orbitron', sans-serif;font-weight: bold; color: red;"></span>
        </div> -->



    </div>
    
  </div>
  
@endsection