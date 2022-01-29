function tableLoad(){

        var row
    $.post('model/sql_datatable.php',{},
        function(collection){

            $.each(collection, function (indexInArray, valueOfElement) { 
            
                


                row = row + "<tr><td>" + valueOfElement.gnd_id + "</td><td>" + valueOfElement.gnd_code + "</td><td>" + valueOfElement.gnd_name +"</td></tr> ";

            });



            $('#gnTable tbody').html('').append(row);

            if($.fn.DataTable.isDataTable('#gnTable')){
                $('#gnTable').DataTable().destroy();
                $('#gnTable tbody').empty();
                $('#gnTable tbody').html('').append(row);
                $('#gnTable').DataTable();
            }else{
                $('#gnTable tbody').html('').append(row);
                $('#gnTable').DataTable();
            }


        },'json');
}