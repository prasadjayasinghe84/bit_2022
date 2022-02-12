<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/alertify.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form id='system_user_form' class='needs-validation'>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sys_user_id" name="sys_user_id" readonly
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sys_user_name" name="sys_user_name"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">User Level</label>
                        <div class="col-sm-10">
                            <select name="" id="sys_user_level">
                                <option value="1"> Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">Power User</option>
                                <option value="4">Viewer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email/User Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="sys_user_mail" name="sys_user_mail"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="sys_user_pass" name="sys_user_pass"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Re-Type Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="sys_user_con_pass" name="sys_user_con_pass"
                                autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <div class="row">
            <div class="clo-md-12">
                <table class="table" id="system_user_table" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>User level</th>
                            <th>Statues</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/alertify.js" type="text/javascript"></script>
<script src="js/system_user.js" type="text/javascript"></script>
<script>
        $('#system_user_form').on('submit', function(e) {

            e.preventDefault();

            userAccount();
        });
        $(window).on('load', function() {

            loadTable();
        });
</script>

</html>