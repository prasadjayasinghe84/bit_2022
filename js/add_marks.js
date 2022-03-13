function addStudentMarks() {

    var table_values = new Array();

    $("#stu_table_mark > tbody>tr").each(function () {
        // var row=$(this);
        var row = {};
        row.stu_id = $(this).find("TD").eq(0).html();
        row.stu_name = $(this).find("TD").eq(1).html();
        row.stu_mark = $(this).find("TD").eq(2).html();
        table_values.push(row);



    });

    $.post("model/sql_add_marks.php",{table: table_values}, function () {

    },'json');


}