<?php
session_start();

if($_SESSION['level']==='1'){
    if($_SESSION['agent']==md5($_SERVER['HTTP_USER_AGENT'])){
        if($_SESSION['server_ip']==$_SERVER['REMOTE_ADDR']){

        }else{
            header("Location:index.php"); 
        }
    }else{
        header("Location:index.php");
    }

}else{
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                            class="d-inline-block align-text-top">
                        Bootstrap
                    </a>
                    <span class="navbar-text">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <?php
                                echo $_SERVER['PHP_SELF'];

                                ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> <?php echo  $_SESSION['reg_name']; ?></a>
                            </li>
                            <li class="nav-item">
                                <button class="btn btn-outline-success" type="button" id="user_logout">Logout</button>
                            </li>
                        </ul>
                    </span>

                </div>
            </nav>

        </div>
    </div>

    <h1>Super Admin</h1>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/system_user.js" type="text/javascript"></script>
    <script>
    $('#user_logout').click(
        function() {

            logOut();
            
        }
    );
    </script>

</body>

</html>