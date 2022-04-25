function userAccount() {

    //var sys_user_id = $('#sys_user_id').val();
    var sys_user_name = $('#sys_user_name').val();

    var sys_user_mail = $('#sys_user_mail').val();



    $.post('model/sql_user_image.php',
        {
            action: 'insert',

            sys_user_name: sys_user_name,

            sys_user_mail: sys_user_mail
  },
        function (result) {

            $.each(result, function (index, msgData) {
                $('#pro_id').val(msgData.msg);

                $('#image_upload').modal('show')
            });


        }, 'json');








}


function loadTable() {
    $.post('model/sql_system_user.php', { action: 'select' },
        function (result) {

            var row = "";
            $.each(result, function (i, values) {


                row = row + "<tr><td>" + values.id + "</td><td>" + values.first_name + "</td><td>" + values.user_name + "</td><td><button class='btn btn-warning inactive_user' value='" + values.id + "' >Inactive Me</button></td><td><button class='btn btn-danger btn_delete_user' value='" + values.id + "'> <i class='bi bi-trash'></i> Delete </button></td></tr> ";



            });
            $('#system_user_table tbody').html('').append(row);


        },


        'json');


}

$(document).on('click', 'button.inactive_user', function () {
    var value = $(this).val();
    $.post('model/sql_system_user.php', { action: 'inactive_user', id: value },
        function (result) {

            $.each(result, function (index, msgData) {

                alertify.success(msgData.msg);

            });
            loadTable();
        }, 'json');

});

$(document).on('click', 'button.active_user', function () {
    var value = $(this).val();
    $.post('model/sql_system_user.php', { action: 'active_user', id: value },
        function (result) {
            //alert(e);

            $.each(result, function (index, msgData) {

                alertify.success(msgData.msg);

            });
            loadTable();
        }, 'json');

});
$(document).on('click', 'button.btn_delete_user', function () {
    var value = $(this).val();
    $.post('model/sql_system_user.php', { action: 'delete', id: value },
        function (result) {
            //alert(e);

            $.each(result, function (index, msgData) {

                alertify.success(msgData.msg);

            });
            loadTable();
        }, 'json');

});

function login() {

    var user_name = $('#staticEmail').val();
    var password = $('#inputPassword').val();

    $.post('control/user_login.php', { user: 'login', user_name: user_name, password: password }, function (result) {
        $.each(result, function (index, msgData) {

            if (msgData.msg === '1') {
                if (msgData.level === '1') {
                    /// window.location.replace('add_student_validate.php');

                    window.location.replace('dashboard_s_admin.php');

                } else if (msgData.level === '2') {
                    window.location.replace('dashboard_admin.php');

                } else if (msgData.level === '3') {
                    window.location.replace('add_student_validate.php');
                }


            } else {
                alertify.success(msgData.msg);
            }

        });
    }, 'json');

}

function logOut() {
    alert('nknck,xndc');

    $.post('control/user_login.php', { user: 'logout' }, function (result) {


        window.location.replace('index.php');


    }, 'json');
}