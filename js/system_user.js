function userAccount() {

    var sys_user_id = $('#sys_user_id').val();
    var sys_user_name = $('#sys_user_name').val();
    var sys_user_level = $('#sys_user_level').val();
    var sys_user_mail = $('#sys_user_mail').val();
    var sys_user_pass = $('#sys_user_pass').val();
    var sys_user_con_pass = $('#sys_user_con_pass').val();
    if (sys_user_pass === sys_user_con_pass) {

        $.post('model/sql_system_user.php',
            {
                action: 'insert',
                sys_user_name: sys_user_name,
                sys_user_level: sys_user_level,
                sys_user_mail: sys_user_mail,
                sys_user_pass: sys_user_pass
            },
            function (result) {

                $.each(result, function (index, msgData) {

                    alert(msgData.msg + " " + msgData.error)

                });

            }, 'json');

    } else {
        alert('password mis match');
    }






}


function loadTable() {
    $.post('model/sql_system_user.php', { action: 'select' },
        function (result) {

            var row = "";
            $.each(result, function (i, values) {
                var user_level_name = '';
                if (values.user_level === '1') {
                    user_level_name = 'Super Admin';
                } else if (values.user_level === '2') {
                    user_level_name = 'Admin'
                } else if (values.user_level === '3') {
                    user_level_name = 'Power User'
                } else if (values.user_level === '4') {
                    user_level_name = 'Viewer'
                }
                if (values.statues === '1') {
                    row = row + "<tr><td>" + values.id + "</td><td>" + values.first_name + "</td><td>" + values.user_name + "</td><td>" + user_level_name + "</td><td><button class='btn btn-warning inactive_user' value='" + values.id + "' >Inactive Me</button></td><td><button class='btn btn-danger btn_delete_user' value='" + values.id + "'> <i class='bi bi-trash'></i> Delete </button></td></tr> ";

                } else {
                    row = row + "<tr><td>" + values.id + "</td><td>" + values.first_name + "</td><td>" + values.user_name + "</td><td>" + user_level_name + "</td><td><button class='btn btn-info active_user' value='" + values.id + "' >Active Me</button></td><td><button class='btn btn-danger btn_delete_user' value='" + values.id + "'> <i class='bi bi-trash'></i> Delete </button></td></tr> ";

                }

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

    $.post('control/user_login.php', { user:'login', user_name: user_name, password: password }, function (result) {
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