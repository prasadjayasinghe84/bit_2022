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
                        <label for="" class="col-sm-2 col-form-label">Tel No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stu_tel_no" name="stu_tel_no" placeholder="0711234567">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stu_email" name="stu_email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stu_nic" name="stu_nic" placeholder="0711234567">
                        </div>
                    </div>
                   
                    <div class="mb-3 row">

                        <button type="button" class="btn btn-primary col-md-6" id="save"><i class="bi bi-save"> Save</i> </button>
                        <!-- <button type="button" class="btn btn-primary col-md-6" id="update">Update</button> -->
                    </div>

                </form>

            </div>
            <div class="row">
                <div class="col-md-12" >
                    <table class="table table-striped" id="stu_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last name</th>
                                <th>E- Mail</th>
                                <th>action</th>
                            </tr> 
                        </thead>
                        <tbody>

                        </tbody>
                    </table>   
                </div>
            </div>

        </div>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/alertify.js" type="text/javascript"></script>
        <script src="js/add_student_validate.js" type="text/javascript"></script>
       
        <script type="text/javascript">
            //alert("kskds");

            $(window).on('load', function () {

                laodTable();
            });

            $('#save').click(
                    function () {


                        save();
                    }
            );

            $(document).on('click', 'button.btn_select', function () {
                var value=$(this).val();
            
               selectRecord(value);
            });
            $(document).on('click', 'button.btn_delete', function () {
                var value=$(this).val();
                deleteRecord(value);
              
            });

        </script>
    </body>
    <!--modal-->

    
</html>
