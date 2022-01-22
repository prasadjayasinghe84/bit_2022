function comboloadGN(id){
   
$.post('model/sql_dropdown.php',{action:'gn',dsd:id},

    function(result){
        var opt='<option selected>Open this select menu</option>';
        $.each(result, function (i, values) {
            
          //opt= opt+ '<option value="'+values.gnd_id+'">'+values.gnd_name+'</option>';
          opt += '<option value="'+values.gnd_id+'">'+values.gnd_name+'</option>';
        });
        $('#combo_gn').html('').append(opt);
        $('select').trigger("chosen:updated");
       
    },
    'json');


}

function comboloadDSD(){
   
    $.post('model/sql_dropdown.php',{action:'ds_division'},
    
        function(result){
            var opt='<option selected>Open this select menu</option>';
            $.each(result, function (i, values) {
                
              //opt= opt+ '<option value="'+values.gnd_id+'">'+values.gnd_name+'</option>';
              opt += '<option value="'+values.dsd_id+'">'+values.dsd_name+'</option>';
            });
            $('#combo_dsd').html('').append(opt);
            $('select').trigger("chosen:updated");
        },
        'json');
    
    
    }