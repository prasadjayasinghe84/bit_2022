function save() {

    var stu_id = $('#add_stu_id').val();
    var stu_fname = $('#add_first_name').val();
    var stu_lname = $('#add_last_name').val();
    var stu_email = $('#stu_email').val();



    if (stu_id == '') {

        $.post('model/sql_print_1.php',
            { action: 'save', stu_fname: stu_fname, stu_lname: stu_lname, stu_email: stu_email },
            function (e) {

                var last_id = '';

                clearText();
                $.each(e, function (i, record) {
                    last_id = record.msg;
                    alertify.alert("Your id is : " + record.msg);

                    window.location="print_1_r.php?print_id="+last_id;
                });


            },
            'json');



    }

}






function clearText() {
    $('#add_stu_id').val('');
    $('#add_first_name').val('');
    $('#add_last_name').val('');
    $('#stu_email').val('');


}

