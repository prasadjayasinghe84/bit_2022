<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css"/>
        <link href="css/alertify.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
          <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <form>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="add_stu_id" name="add_stu_id" readonly autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="add_first_name" name="add_first_name" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="add_last_name" name="add_last_name" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stu_email" name="stu_email">
                        </div>
                    </div>
                    
                   
                    <div class="mb-3 row">

                        <button type="button" class="btn btn-primary col-md-6" id="save"><i class="bi bi-save"> Save</i> </button>
                        <!-- <button type="button" class="btn btn-primary col-md-6" id="update">Update</button> -->
                    </div>

                </form>

            </div>
            <div class="row">
                
            </div>

        </div>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/alertify.js" type="text/javascript"></script>
        <script src="js/print_1.js" type="text/javascript"></script>
       
        <script type="text/javascript">
            //alert("kskds");

            $(window).on('load', function () {

              
            });

            $('#save').click(
                    function () {

                        save();
                    }
            );

            

        </script>
    </body>
    <!--modal-->

    
</html>
