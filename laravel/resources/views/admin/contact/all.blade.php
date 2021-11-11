@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
               
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ALL CONTACTS</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->
                                    @if(session()->has('status'))
                                    <div class="alert alert-success">
                                        {{session()->get('status')}}
                                    </div>
                                    @endif

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">

                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                      
                                          
                                        

                                        @foreach($contact as $con)
                                               <tr>

                                                <td>{{$con->first_name}} {{$con->last_name}}</td>
                                                <td>{{$con->email}}</td>
                                                <td>{{$con->subject}}</td>
                                                <td>{{$con->message}}</td>
                                             </tr>
                                            @endforeach
                                                
                                            
                                               
                                            
                                           
                                        
                                    
                                            
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
