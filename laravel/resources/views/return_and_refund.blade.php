@extends('layouts.app')

@section('content')
@include('layouts.second-nav')
<style type="text/css">
.pxlr-club-faq{
    margin-top: 20px;
}
  .table_row_color
  {
    background: #fe9126;
    color: white;
  }
.panel-group {
    margin-bottom: 0;
}
.panel-group .panel {
    border-radius: 0;
    box-shadow: none;
}
.panel-group .panel .panel-heading {
    padding: 0;
}
.panel-group .panel .panel-heading h4 a {
    background: #f6f9fc;
    display: block;
    font-size: 15px;
    line-height: 20px;
    padding: 15px;
    text-decoration: none;
    transition: 0.15s all ease-in-out;
}
.panel-group .panel .panel-heading h4 a:hover, .panel-group .panel .panel-heading h4 a:not(.collapsed) {
    /*background: #fff;*/
    transition: 0.15s all ease-in-out;
}
.panel-group .panel .panel-heading h4 a:not(.collapsed) i:before {
    content: "-";
    font-size: 30px;
    line-height: 10px;
}
.panel-group .panel .panel-heading h4 a i {
    color: #fe9126;
    font-size: 12px;
}
.panel-group .panel .panel-body {
    padding-top: 0;
}
.panel-group .panel .panel-heading + .panel-collapse > .list-group,
.panel-group .panel .panel-heading + .panel-collapse > .panel-body {
    border-top: none;
}
.panel-group .panel + .panel {
    border-top: none;
    margin-top: 0;
}
.faq-left{
    padding: 10px;
}
.faq-left ul li{
    list-style: none;
    margin-top: 20px;
}
.faq-left ul li a{
    color: #666;
    font-size: 16px;
     font-weight: 500;
    text-decoration: none;
    padding: 10px 20px;
}
.faq-left ul li a.active{
    color: #fe9126;
    font-weight: 800;
}
.des-mod{
    margin-top: 120px;
    margin-bottom: 200px;
}
</style>


<div class="container des-mod">
    <div class="row">
        <div class="col-sm-3">
            <div class="faq-left">
                <ul>
                    <li><a href="#" class="active" onclick="refund();">Refund</a></li>
                    <li><a href="#" onclick="ret();">Return</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="fa1-right">
                <div class="pxlr-club-faq" id="refund">
                    <div class="content">
                        <div class="panel-group" id="accordion" role="tablist"
                             aria-multiselectable="true">
                            @foreach($return_refund as $index => $f)
                             @if($f->category == 'Return')
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$f->id}}" aria-expanded="false" aria-controls="{{$f->id}}">{{$f->question}} <i class="pull-right fa fa-plus"></i></a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="{{$f->id}}" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body pxlr-faq-body">
                                      <br>
                                      <p>{!!$f->answer!!}</p>

                                    </div>
                                </div>
                            </div>
                             @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="pxlr-club-faq" id="ret" style="display: none;">
                    <div class="content">
                        <div class="panel-group" id="accordion" role="tablist"
                             aria-multiselectable="true">
                            @foreach($return_refund as $index => $f)
                             @if($f->category == 'Refund')
                            <div class="panel panel-default">
                                <div class="panel-heading" id="headingOne" role="tab">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{{$f->id}}" aria-expanded="false" aria-controls="{{$f->id}}">{{$f->question}} <i class="pull-right fa fa-plus"></i></a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="{{$f->id}}" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body pxlr-faq-body">
                                      <br>
                                      <p>{!!$f->answer!!}</p>

                                    </div>
                                </div>
                            </div>
                             @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    var a= document.getElementById("refund");
    var b= document.getElementById("ret");
    function refund(){

        if (a.style.display==="none") {
            a.style.display="block";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";

        }
        else{
            a.style.display="block";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
        }

    }
        function ret(){
        if (b.style.display==="none") {
            b.style.display="block";
            a.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";

        }
        else{
            b.style.display="block";
            a.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
        }

    }
</script>
<!-- <script type="text/javascript">
    var el = document.querySelectorAll('.faq-left ul li a');
        for (let i = 0; i < el.length; i++) {
          el[i].onclick = function() {
            var c = 0;
            while (c < el.length) {
              el[c++].className = 'slide';
            }
            el[i].className = 'slide active';
          };
        }
</script> -->
@endsection
