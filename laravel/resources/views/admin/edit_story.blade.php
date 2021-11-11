@extends('layouts.admin')

@section('content')

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Seller Story</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>EDIT STORY</h4>
                                    
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <form method="post" action="{{route('savestory')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                      <label for="name">NAME:</label>
                                      <input type="text" class="form-control" id="usr" name="u_name" value="{{$story->name}}">
                                    </div>
                                <div class="form-group">
                                  <label for="comment">STORY:</label>
                                  <textarea class="form-control" rows="5" id="comment" name="description">{{$story->description}}</textarea>
                                  </div>
                                  <div class="form-group">
                                  <label class="fileContainer"> <span>UPLOAD IMAGE</span>
                                  <input type="file" name="image" value="{{$story->image}}">
                                  <img class="img-thumbnail"width="200" height="200" class="preview"  name="image" src="{{ asset('/storage/uploads/'.$story->image) }}"/>
                                  </label>
                              </div>
                                  <input type="hidden" name="rowid" value="{{$story->id}}" >
                                  <input type="submit" name="savestory" value="save" class="btn btn-default" >

                                  </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
@endsection
