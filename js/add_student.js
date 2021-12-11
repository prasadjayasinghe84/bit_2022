function save() {

    var stu_fname = $('#add_first_name').val();
    var stu_lname = $('#add_last_name').val();
    var stu_email = $('#stu_email').val();

    $.post('model/sql_add_student.php',
        {action:'save', stu_fname: stu_fname, stu_lname: stu_lname, stu_email: stu_email },
        function (e) { },
        'json');



}

function laodTable() {


    $.post('model/sql_add_student.php', {action:'select'},
        function (result) {

            var row = "";
            $.each(result, function (i, values) {
                // alert(values.id);
                row = row + "<tr><td>" + values.id + "</td><td>" + values.stu_fname+ "</td><td>" + values.stu_lname + "</td><td>"+values.stu_email+"</td></tr> ";

            });
            $('#stu_table tbody').html('').append(row);


        },


        'json');
}