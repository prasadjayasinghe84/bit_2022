function save() {

    //alert($('#reg_cus_name').val()); 

    var cus_id = $('#reg_cus_id').val();
    var reg_cus_name = $('#reg_cus_name').val();
    var reg_cus_nic = $('#reg_cus_nic').val();
    var reg_cus_dob = $('#reg_cus_dob').val();
    var reg_cus_tel = $('#reg_cus_tel').val();
    var reg_cus_mar = $('#reg_cus_mar').val();
    var reg_cus_gender = $('#reg_cus_gender').val();
    if (cus_id === '') {
// var a=1;
// if(a==1)->true
// if(a===1)->true
// if(a=='1') ->true
// if(a==='1') ->false
        // alert('hkhshd'); 
        $.post('db.php',
            {
                reg_cus_name: reg_cus_name,
                reg_cus_nic: reg_cus_nic,
                reg_cus_dob: reg_cus_dob,
                reg_cus_tel: reg_cus_tel,
                reg_cus_mar: reg_cus_mar,
                reg_cus_gender: reg_cus_gender
            },
            function (value) {
                // alert(value);
                tableLoad();
            }
            , 'json'
        );
    } else {

        $.post('update.php',
            {
                cus_id: cus_id,
                reg_cus_name: reg_cus_name,
                reg_cus_nic: reg_cus_nic,
                reg_cus_dob: reg_cus_dob,
                reg_cus_tel: reg_cus_tel,
                reg_cus_mar: reg_cus_mar,
                reg_cus_gender: reg_cus_gender
            },
            function (result) {
                $.each(result, function (index, res) {
                    // alert(res.msg);
                    $('#myModal').modal('show');
                });
                tableLoad();
            }, 'json');


    }




}

function tableLoad() {

    $.post('select.php', {},
        function (result) {

            var row = "";
            $.each(result, function (i, values) {
                // alert(values.id);
                row = row + "<tr><td>" + values.id + "</td><td>" + values.cus_name + "</td><td>" + values.cus_nic + "</td><td>" + values.cus_dob + "</td><td>" + values.cus_tel + "</td><td>" + values.cus_mar + "</td><td>" + values.cus_gender + "</td><td><button class='btn btn-info btn_edit' value='" + values.id + "' >Select</button></td></tr> ";

            });
            $('#cus_table tbody').html('').append(row);

            //alert(result);
        },
        'json');

}


function selectRecord(id) {

    $.post('getRecord.php', { key: id }, function (result) {

        $.each(result, function (i, row) {
            $('#reg_cus_id').val(id);
            $('#reg_cus_name').val(row.cus_name);
            $('#reg_cus_nic').val(row.cus_nic);
            $('#reg_cus_dob').val(row.cus_dob);
            $('#reg_cus_tel').val(row.cus_tel);
            $('#reg_cus_mar').val(row.cus_mar);
            $('#reg_cus_gender').val(row.cus_gender);
        });
    }, 'json');
}

function updateRecord() {

}


