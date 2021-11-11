@extends('layouts.admin')

@section('content')

<style type="text/css">
    input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
    background-color: transparent;
    border: none;
    border: 1px solid #ddd;
    border-radius: 0;
    outline: none;
    height: 30px;
    padding: 0 10px;
}
input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]), input[type=password]:focus:not([readonly]), input[type=email]:focus:not([readonly]), input[type=url]:focus:not([readonly]), input[type=time]:focus:not([readonly]), input[type=date]:focus:not([readonly]), input[type=datetime]:focus:not([readonly]), input[type=datetime-local]:focus:not([readonly]), input[type=tel]:focus:not([readonly]), input[type=number]:focus:not([readonly]), input[type=search]:focus:not([readonly]), textarea.materialize-textarea:focus:not([readonly]) {
    border-bottom: 1px solid #ddd;
    box-shadow: 0 1px 0 0 #ddd;
}
.dataTables_filter label{
    font-weight: bold !important;
    color: #333 !important;
}
</style>

           <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Companies </a>
                        </li>
                    </ul>
                </div>
               @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                <div class="sb2-2-3 content_menu_custom">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Manage Companies </h4>
                                    
                                    <!-- <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a> -->
                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover" id="tablecomp">
                                              <thead>
                                                <tr>
                                                    <th>#NO</th>
                                                    <th>Name</th>
                                                    <th>Store Name</th>
                                                    <th>Email</th>
                                                    <th>City</th>
                                                    <th>Phone No</th>
                                                    <th>Created On</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <?php $b = 0; ?>
                                            <?php if(!empty($GetData)){
                                                        foreach($GetData as $a){?>
                                            <tr>
                                                <?php $b++; ?>
                                                <td><?php echo $b; ?></td>
                                                <td><?php echo $a->first_name." ".$a->last_name;?></td>
                                                @if(!empty($a->storeinfo->store_name))
                                                <td>{{ $a->storeinfo->store_name }}</td>
                                                @else
                                                <td>-- NO Store Register --</td>
                                                @endif
                                                <td><?php echo $a->email;?></td>
                                                @if(!empty($a->storeinfo->city))
                                                <td>{{ $a->storeinfo->city }}</td>
                                                @else
                                                <td>-- No City --</td>
                                                @endif
                                                <td><?php echo $a->phone;?></td>
                                                <td>{{$a->created_at->isoFormat('MMM Do YYYY')}}</td>
                                                <td style="display: flex;">
                                                    @if(!empty($a->admin_comment))
                                                    <a href="" title="Comment" data-toggle="modal"  data-target="#commentmodal"><i class="fa fa-comments-o" style="background: dodgerblue;" onclick="selectuser('{{$a->id}}','{{$a->admin_comment}}');"></i></a>
                                                    @else
                                                    <a href="" title="Comment" data-toggle="modal" data-target="#commentmodal"><i class="fa fa-comments-o" onclick="selectuser('{{$a->id}}','{{$a->admin_comment}}');"></i></a>
                                                    @endif
                                                    <a href="{{url('/admin/users/vendordashboard/'.$a->id)}}" title="View Store"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('/admin/del-vendor/'.$a->id)}}" title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                               
                                            </tr>
                                        <?php }
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

 <div class="modal fade" id="commentmodal" tabindex="-1" role="dialog" aria-labelledby="commentmodal" aria-hidden="true" style="background: transparent; box-shadow: none;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background: #fff; box-shadow: none;">
      <div class="modal-header" style="display: flex;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="width: 95%;">Write yor comment...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="{{url('/admin/saveComment/')}}">
      <div class="modal-body">
               <div class="form-group">
                <input type="hidden" name="user_id" id="user_id" value="">
                <textarea class="form-control" name="message_admin" id="message-text" style="min-height: 150px;">
                </textarea>
              </div>
      </div>
      <div class="modal-footer" style="background: #fff; display:flex; justify-content: flex-end; align-items: center;" >
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin: 0 5px; background: #888; outline: none;">Close</button>
        <button type="submit" class="btn btn-primary" style="margin: 0 5px; outline: none;">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

       
<script type="text/javascript">

$(document).ready(function(){
$('#tablecomp').DataTable({
        paging: false,
        
    });
});

function selectuser(id,msg){
    document.getElementById('user_id').value = id;
    document.getElementById('message-text').value = msg;
}

</script> 

@endsection
