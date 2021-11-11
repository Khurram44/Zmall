@extends('layouts.admin')

@section('content')

           <div class="container">
               <div class="row">
                     <select id="category" onchange="showcate();">
                         <option value="">Select category</option>
                         @if(!empty($category))
                              @foreach($category as $ca)
                            <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                            @endforeach
                            @endif
                     </select>
                     <select id="sub">
                         
                     </select>
               </div>
           </div>
    <script type="text/javascript">
        function showcate(){
          //  $('#sub').appendChild(`<option value="0" disabled selected>Select The City*</option>`);
            $('#sub').append($('<option>', {
    value: 1,
    text: 'My option'
}));
        }

        
    </script>
@endsection


 