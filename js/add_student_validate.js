function save() {

    var stu_id = $('#add_stu_id').val();
    var stu_fname = $('#add_first_name').val();
    var stu_lname = $('#add_last_name').val();
    var stu_email = $('#stu_email').val();

    if (stu_fname == '') {
        alertify.success('First name is empty');
    } else if (stu_lname == '') {
        alertify.success('Last name is empty');
    } else if (stu_email == '') {
        alertify.success('email is empty');
    } else {

        if (stu_id == '') {

            $.post('model/sql_add_student.php',
                { action: 'save', stu_fname: stu_fname, stu_lname: stu_lname, stu_email: stu_email },
                function (e) {
                    //Swal.fire('Any fool can use a computer');
                    alertify.alert('Student managment System', 'Successfuly save!');
                    clearText();
                    laodTable();
                },
                'json');



        } else {

            alertify.confirm('Confirm Title', 'Do you want to save changes?', function () {
                $.post('model/sql_add_student.php', { action: 'update', stu_id: stu_id, stu_fname: stu_fname, stu_lname: stu_lname, stu_email: stu_email }, function (e) {
                    alertify.success('Ok');
                    clearText();
                    laodTable();

                }, 'json');



            }
                , function () {
                    clearText();
                    alertify.error('Cancel')
                });



        }
    }



}

function laodTable() {


    $.post('model/sql_add_student.php', { action: 'select' },
        function (result) {

            var row = "";
            $.each(result, function (i, values) {
                // alert(values.id);
                row = row + "<tr><td>" + values.id + "</td><td>" + values.stu_fname + "</td><td>" + values.stu_lname + "</td><td>" + values.stu_email + "</td><td><button class='btn btn-success btn_select' value='" + values.id + "'> <i class='bi bi-eye'></i> Select </button> <button class='btn btn-danger btn_delete' value='" + values.id + "'> <i class='bi bi-trash'></i> Delete </button></td></tr> ";

            });
            $('#stu_table tbody').html('').append(row);


        },


        'json');
}


function selectRecord(data) {

    $.post('model/sql_add_student.php', { action: 'select_by_id', key: data },
        function (row) {
            $.each(row, function (i, record) {
                $('#add_stu_id').val(record.id);
                $('#add_first_name').val(record.stu_fname);
                $('#add_last_name').val(record.stu_lname);
                $('#stu_email').val(record.stu_email);

            });



        }, 'json');

}

function clearText() {
    $('#add_stu_id').val('');
    $('#add_first_name').val('');
    $('#add_last_name').val('');
    $('#stu_email').val('');


}

function deleteRecord(id) {
    alertify.confirm('Confirm Title', 'Are sure you want to delete this record', function () {
        $.post('model/sql_add_student.php', { action: 'delete', stu_id: id }, function (e) {
            alertify.success('Ok');
            laodTable();
        }, 'json');


    }
        , function () { alertify.error('Cancel') });





}