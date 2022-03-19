function save_id() {

    var stu_id = $('#add_stu_id').val();
    var stu_fname = $('#add_first_name').val();
    var stu_lname = $('#add_last_name').val();
    var stu_email = $('#stu_email').val();



    if (stu_id == '') {

        $.post('model/sql_get_auto_id.php',
            { action: 'save', stu_fname: stu_fname, stu_lname: stu_lname, stu_email: stu_email },
            function (e) {
                //Swal.fire('Any fool can use a computer');
                //alertify.alert('Student managment System', 'Successfuly save!');
                $.each(e, function (i, values) {
                    alertify.alert("Your id is : "+values.last_id);
                });
                //clearText();
                //laodTable();
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
                alertify.error('Cancel') });



    }

}
