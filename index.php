<?php
session_start();
if(isset($_SESSION['agent'])){
 if(isset($_SESSION['server_ip'])){
     if(isset($_SESSION['level'])){
        if($_SESSION['level']==='1'){
            header("Location:dashboard_s_admin.php");
        }elseif($_SESSION['level']==='2'){
            header("Location:dashboard_admin.php");
        }elseif($_SESSION['level']==='3'){
            
        }elseif($_SESSION['level']==='4'){
            
        }
     }
 }


}






?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link href="css/alertify.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card" style="width: 18rem;">


            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <div class="card text-center col-6">
                    <div class="card-header">
                        Login into System
                    </div>
                    <div class="card-body">
                        <div>
                            <img src="img/user.png" class="" width="100" height="100" alt="...">
                        </div>
                        <form id="login">


                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="staticEmail" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="inputPassword" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg"><i
                                    class="bi bi-box-arrow-in-right"></i> Login</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        copyright @ 2022
                    </div>
                </div>





            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/alertify.js" type="text/javascript"></script>
<script src="js/system_user.js" type="text/javascript"></script>
<script>
$('#login').on('submit', function(e) {

    e.preventDefault();


    login();
});
</script>

</html>