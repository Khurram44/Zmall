<script>
$(function() {

  $(".load_sub_types").change(function(e) {
    var value = $(this).val(); 
    var section = $(this).attr("id"); 
    var _token = "{{ csrf_token() }}";
    $.post("{{ url('loadsubtypes')}}", {value:value,_token:_token}, function(result){
            $("."+section).html(result);
        });
    
  });
$(".load_province_cities").change(function(e) {
    var value = $(this).val(); 
    var _token = "{{ csrf_token() }}";
    $.post("{{ url('loadprovincebasecities')}}", {value:value,_token:_token}, function(result){
            $(".citiesdropdownfield").html(result);
        }); 
  });
});
</script>

