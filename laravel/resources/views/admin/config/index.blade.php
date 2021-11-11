@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> <?php echo $GetData->name; ?></a>
                        </li>
                    </ul>
                </div>

                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                          <a style="float: right;"  class="btn btn-round btn-primary buttons-print" href="{{ url('/admin/config/add/'.$GetData->id)}}">
                                        Add New
                                    </a>
                    </div>
                    <div class="row" style="height: 25px;"></div>
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                @if(session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                                @endif

                                <div class="inn-title">
                                    <h4>Manage  <?php echo $GetData->name; ?></h4>
                                </div>
<!-- ---------------------------Start Of Sub Category------------------------------------------------ -->
                            @if($GetData->name == 'Sub Category') 
                            <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <h1>Women's fashion</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 1)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>
                                </tbody>
                                 </table>
                                    </div>
                            </div>
<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 2)
                                                <?php $sno++; ?>                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 323)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                    <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 510)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                  
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 516)
                                                 <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 745)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
<!-- ----------------------------------End Of Sub Category------------------------------------------- -->
                              
   <!-- ----------------------------------Type------------------------------------------- -->
                              @elseif($GetData->name == 'Type')
                                        <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Clothing)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 498)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                                <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>Slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Bags & Wallet)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 499)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Shoes)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 500)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                              <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Jewellery)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 501)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Watches)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 502)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 503)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                              <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Women's Fashion (Lingerie & Nightware)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 504)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion (Clothing)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 505)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion (Bags)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 506)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion (Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 507)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion (Shoes)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 508)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Men's Fashion (Watches)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 509)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair (Bath & Body)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 522)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                  <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair (Hair Care)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 523)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                  <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair (Makeup)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 524)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair (Skin Care)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 525)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Beauty,Health & Hair (Mens Grooming)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 526)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids (Girls)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 511)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids (Boys)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 512)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids (Babies & Toddlers)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 513)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids (Babies & Baby Care)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 514)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Kids (Baby Gear & Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 515)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Home)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 517)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Sports & Fitness)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 518)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Travel & Luggage)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 519)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Wellness) </h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 520)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Medical Supplies)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 521)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------ -->
                                 <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>LifeStyle  (Kitchen & Dining)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 767)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories (Mobile Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 680)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories (Camera Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 681)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories (Computer Accessories)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 682)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories (Wearables)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 683)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
                               <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               <th>slug</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                     <tbody>
                                        <h1>Electronic Accessories (Storage)</h1>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   
                                                               ?>
                                            <tr>
                                                @if($a->parent_id == 684)
                                                <?php $sno++; ?>
                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                              <td><?php echo $a->slug;?></td>
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                            @endif
                                        <?php }
                                    }?>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

<!-- ------------------------------------------------------------------------------------------------ -->
 <!-- ----------------------------------End Of Type------------------------------------------- -->
                                @else
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Sr.</th>
                                                <th>Name</th>
                                               
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($GetDatas)){
                                                $sno = 0;
                                                        foreach($GetDatas as $a){
                                                   $sno++;
                                                               ?>
                                            <tr>

                                                <td><?php echo $sno;?></td>
                                                <td><?php echo $a->name;?></td>
                                            
                                             
                                                
                                                <td>
                                    <a  href="{{ url('editconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('editconfig<?php echo $a->id;?>').submit();">
                                         <i class="material-icons">mode_edit</i>
                                    </a>

                                    <form id="editconfig<?php echo $a->id;?>" action="{{ url('admin/config/editconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                   

                                 <a  href="{{ url('deletconfig/'.$a->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('deletconfig<?php echo $a->id;?>').submit();">
                                                    <i class="material-icons">cancel</i>
                                    </a> 

                                    <form id="deletconfig<?php echo $a->id;?>" action="{{ url('admin/config/deletconfig/'.$a->id)}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </td>
                                            </tr>
                                        <?php }
                                    }?>
                                            
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
