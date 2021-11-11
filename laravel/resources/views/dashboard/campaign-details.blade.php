@extends('dashboard.dash-layout.layout')
@section('content')

<style>
    .left-ban{
    background: url("/frontend/img/vendor_dash/addpro-banner.jpg") !important;
    background-repeat: no-repeat !important;
        background-size: cover !important;
        object-fit:cover;
        padding-bottom: 30px;
        width: 100%;
        -webkit-box-shadow: 0 0 4px 0 hsl(0deg 0% 40% / 20%);
        box-shadow: 0 0 4px 0 hsl(0deg 0% 40% / 20%);
        padding: 10px;
        height: 400px;
    }
    input[type='radio']:after {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: -1px;
        left: -1px;
        position: relative;
        background-color: #fff;
        border: 2px solid #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
        
    }

    input[type='radio']:checked:after {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        top: -1px;
        left: -1px;
        position: relative;
        background-color: #fff;
        border: 2px solid green;
        content: '';
        display: inline-block;
        visibility: visible;
        outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
        
    }
    .slider {
      -webkit-appearance: none;
      width: 100%;
      height: 7px;
      background: #fff;
      outline: none;
      opacity: 0.8;
      -webkit-transition: .2s;
      transition: opacity .2s;
    }

    .slider:hover {
      opacity: 1;
    }

    .slider::-webkit-slider-thumb {
      -webkit-appearance: none !important;
      appearance: none !important;
      width: 20px;
      outline: none;
      height: 20px;
      border: 2px solid #fff;
      border-radius:50%;
      background: #fe9126;
      cursor: pointer;
    }

    .slider::-moz-range-thumb {
    
      width: 20px;
      outline: none;
      height: 20px;
      border: 2px solid #fff;
      border-radius:50%;
      background: #fff;
      cursor: pointer;
    }
    .stats-div{
        height: 350px;
    }
    .stats-report{
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      vertical-align: middle;
      height: 100%;
    }
    .stats-report h3{
      text-align: center;
      margin-top: 0px;
    }
    .stats-report-inner{
      display: flex;
      justify-content: space-between;
 
      vertical-align: middle;
    }
    .stats-report-inner-t{
      display: flex;
      flex: 6;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      vertical-align: middle;
    }
    .stats-report-inner-t span:nth-child(1){
      font-weight: bold;
      font-size: 16px;
      color: #666;
    }
    .stats-report-inner-t span:nth-child(2){
      font-weight: bold;
      font-size: 26px;
    }
    @media screen and (max-width:  800px){
      .col-res{
        width: 100% !important;
        margin-right: 0px
        padding: 0px 5px !important;
        margin-left: 20px !important;
      }
    }
    .campaign-events-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 15px 0;
        
    }
    .campaign-events a{
        margin: 0 auto;
        padding: 5px;
        border:1px solid #e6e7eb;
        text-decoration: none;
        color: #333;

    }
    .camp-img img{
        height: 160px;
        object-fit: contain;
    }
    .down-counter{
        padding: 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: space-around;
    }
    .timer{
        display: flex;
        justify-content: space-between;
        width: 200px;
    }   
    .time-inner{
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .camp-desc p{
        font-weight: 700;
        line-height: 1.5em;
        font-size: 1.3em;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        overflow: hidden;
        -webkit-box-orient: vertical;
        color: #333;
    }
    .camp-date p{
        color: #999;
        font-size: .9em;
    }
    .camp-type{
        color: #333;
        margin-top: 8px;
        } 

    .camp-type p{
        
        margin: 0;
        font-size: 14px;
    }

    .time-inner p:nth-child(1){
        font-size: 20px;
        margin-bottom: 0px;
    }
    .camp-btn{
        margin: 8px;
        display: flex;
        justify-content: flex-start;
        align-content: space-around;
        align-items: center;
    }
    .camp-btn p:nth-child(1){
        margin: 0;
        height: 28px;
        padding: 0 16px;
        font-size: 14px;
        line-height: 26px;
        background-color: #fe9126;
        text-decoration: none;
        color: #fff;
    }
    .camp-btn p:nth-child(2){
        font-size: 14px;
        color: #666;
        margin-bottom: 0;
        margin-left: 10px;
    }
    .camp-btn p:nth-child(3){
        font-size: 14px;
        color: #666;
        margin-bottom: 0;
        margin-left: 10px;
    }
    .det-img{
        overflow: hidden;
    }
    .det-img img{
        width: 100%;
        object-fit: contain;
    }
    .camp-details h2{
        float: left;
    margin: 0;
    line-height: 26px;
    font-size: 22px;
}
    .join a{
        margin: 0;
        height: 28px;
        padding: 6px 16px;
        font-size: 14px;
        line-height: 26px;
        background-color: #fe9126;
        text-decoration: none;
        color: #fff;
    }
</style>

@error('name')
 <script>
        alert({{ $message }});
    </script>
@enderror
<div class="row" style="width:100%;">
    <div class="camp-details">
                <h2 style="padding: 5px; margin-left: 30px;">{{$campaign->compaign_title}}</h2>
            </div>
        <div class="col-sm-10 col-res" style="padding: 15px; margin-left: 25px; background: #fff;">
            
            <div class="row">
                <div class="col-sm-5">
                    <div class="det-img">
                        <img src="{{ asset('/public/frontend/storage/uploads/'.$campaign->banner) }}" class="img-fluid">
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <p>{{$campaign->description}}</p>
                </div>
                <div class="col-sm-4">
                   <div class="app-det">
                       <b>Campaign Period( 8 Days)</b>
                       <p>{{\Carbon\Carbon::parse($campaign->starting_time)->isoFormat('MMM Do YYYY')}} to {{\Carbon\Carbon::parse($campaign->ending_time)->isoFormat('MMM Do YYYY')}}</p>
                       <b>Registration Ends in</b>
                       <p>{{\Carbon\Carbon::parse($campaign->register_time)->isoFormat('MMM Do YYYY')}}</p>
                   </div>
                   <div class="join">
                       <a href="{{ url('/Vendor/add-campaign/'.$campaign->id)}}">Join Now</a>
                   </div>
                   
                </div>
            </div>
        </div>
        

      </div>
@endsection