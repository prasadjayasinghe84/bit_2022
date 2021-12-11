<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
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

                        <button type="button" class="btn btn-primary col-md-6" id="save">Save</button>
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
        <script src="js/add_student.js" type="text/javascript"></script>

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
//            $('.btn_edit').click(
//                    function () {
//                       
//                      
//                    }
//            );
            $(document).on('click', 'button.btn_edit', function () {
                // var value=$(this).val();
                //selectRecord(value);
                selectRecord($(this).val());
            });
            // $('#update').click(
            //         function () {

            //             updateRecord();
            //         }
            // );

        </script>
    </body>
    <!--modal-->

    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">SMS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success" role="alert">
                        This is a success alert—check it out!
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</html>
