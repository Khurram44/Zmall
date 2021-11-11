@extends('dashboard.dash-layout.layout')
@section('content')
<style>
    .top-order-content{
        display: flex;
        align-items: center;
    }
    .top-order-content li{
        display: flex;
        align-items: center;
        color: #666;   
        padding: 0 16px;
        height: 56px;
        cursor: pointer;
    }
    .top-order-content li.active{
        color: #fe9126;
        border-bottom: 2px solid #fe9126;
        font-weight: 600;
    }
    .order-all{
        padding: 0 40px;
    }
    .dataTables_wrapper .dataTables_filter input {
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 5px;
        background-color: transparent;
        margin-left: 3px;
        outline: none;
    }
    .dataTables_wrapper .dataTables_length select {
        border: 1px solid #ddd;
        border-radius: 3px;
        background-color: transparent;
        padding: 4px;
        outline: none;
    }
    @media screen and (max-width:  800px){

    }
</style>
<div class="row">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
             {{ session('status') }}
        </div>
    @endif
		<div class="col-sm-10" style="padding: 5px; margin-left: 25px; margin-top:5px; background: #fff; height: 830px; overflow-y: auto;">
				<div class="top-order">
                    <ul class="top-order-content">
                        <li class="active" onclick="show_all();" id="list_all">All</li>
                        <li onclick="show_unpaid();" id="list_unpaid">Unpaid</li>
                        <li onclick="show_toship();" id="list_toship">To Ship</li>
                        <li onclick="show_shipping();" id="list_shipping">Shipping</li>
                        <li onclick="show_completed();" id="list_completed">Completed</li>
                        <li onclick="show_cancellation();" id="list_cancellation">Cancellation</li>
                        <li onclick="show_return();" id="list_return">Return/Refund</li>
                    </ul>           
                </div>
                <div class="order-all">
                    <div class="order-detail" id="menu_all">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_unpaid" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_toship" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_shipping" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_completed" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_cancellation" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="order-detail" id="menu_return" style="display:none;">
                        <table class="table table-borderless display" id="order_all">
                            <thead>
                                <tr>
                                    <th>Product(s)</th>
                                    <th>Order Total</th>
                                    <th>Status </th>
                                    <th>Countdown</th>
                                    <th>Channel</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                                <tr>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sdf</td>
                                    <td>-sd</td>
                                    <td>sdg-</td>
                                    <td>sd-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>	
		</div>
</div>
<script type="text/javascript">
    var a = document.getElementById('menu_all');
    var b = document.getElementById('menu_unpaid');
    var c = document.getElementById('menu_toship');
    var d = document.getElementById('menu_shipping');
    var e = document.getElementById('menu_completed');
    var f = document.getElementById('menu_cancellation');
    var g = document.getElementById('menu_return');

    function show_all(){  

    if(a.style.display==="none") {
        a.style.display="block";
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
        f.style.display="none";
        g.style.display="none";
       document.getElementById("list_all").classList.add('active');
       document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    
        }
        else{
            a.style.display="block";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
            f.style.display="none";
            g.style.display="none";
            document.getElementById("list_all").classList.add('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
        }
    }
    function show_unpaid(){
    if (b.style.display==="none") {
        a.style.display="none";
        b.style.display="block";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
        f.style.display="none";
        g.style.display="none";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.add('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    }
    else{
            a.style.display="none";
            b.style.display="block";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
            f.style.display="none";
            g.style.display="none";
            document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.add('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    }
    }
    function show_toship(){
    if (c.style.display==="none") {
        a.style.display="none";
        c.style.display="block";
        b.style.display="none";
        d.style.display="none";
        e.style.display="none";
        f.style.display="none";
        g.style.display="none";
         document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.add('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');

    }
    else{
            a.style.display="none";
            b.style.display="none";
            c.style.display="block";
            d.style.display="none";
            e.style.display="none";
            f.style.display="none";
            g.style.display="none";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.add('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    }
    }
    function show_shipping(){
    if (d.style.display==="none") {
        a.style.display="none";
        d.style.display="block";
        c.style.display="none";
        b.style.display="none";
        e.style.display="none";
        f.style.display="none";
        g.style.display="none";
       document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.add('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');


    }
    else{
         a.style.display="none";
            b.style.display="none";
            c.style.display="none";
            d.style.display="block";
            e.style.display="none";
            f.style.display="none";
            g.style.display="none";
       document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.add('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    }
    }
    function show_completed(){
    if (e.style.display==="none") {
        a.style.display="none";
        e.style.display="block";
        c.style.display="none";
        d.style.display="none";
        b.style.display="none";
        f.style.display="none";
        g.style.display="none";
       document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.add('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');

    }
    else{
         a.style.display="none";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="block";
            f.style.display="none";
            g.style.display="none";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.add('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.remove('active');
    }
    }
    function show_cancellation(){
    if (f.style.display==="none") {
        a.style.display="none";
        f.style.display="block";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
        b.style.display="none";
        g.style.display="none";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.add('active');
            document.getElementById("list_return").classList.remove('active');

    }
    else{
         a.style.display="none";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
            f.style.display="block";
            g.style.display="none";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.add('active');
            document.getElementById("list_return").classList.remove('active');
    }
    }
    function show_return(){
    if (g.style.display==="none") {
        b.style.display="none";
        c.style.display="none";
        d.style.display="none";
        e.style.display="none";
        f.style.display="none";
        g.style.display="block";
        document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.add('active');

    }
    else{
            a.style.display="none";
            b.style.display="none";
            c.style.display="none";
            d.style.display="none";
            e.style.display="none";
            f.style.display="none";
            g.style.display="block";
            document.getElementById("list_all").classList.remove('active');
            document.getElementById("list_unpaid").classList.remove('active');
            document.getElementById("list_toship").classList.remove('active');
            document.getElementById("list_shipping").classList.remove('active');
            document.getElementById("list_completed").classList.remove('active');
            document.getElementById("list_cancellation").classList.remove('active');
            document.getElementById("list_return").classList.add('active');
    }
    }
</script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#order_all').DataTable();
    });
</script>
@endsection