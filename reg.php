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
                            <input type="text" class="form-control" id="reg_cus_id" name="reg_cus_id" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reg_cus_name" name="reg_cus_name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">NIC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reg_cus_nic" name="reg_cus_nic">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">DOB</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="reg_cus_dob" name="reg_cus_dob">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Tel No.</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reg_cus_tel" name="reg_cus_tel">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Marks</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="reg_cus_mar" name="reg_cus_mar">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="reg_cus_gender" name="reg_cus_gender">

                                <option value="1">Male</option>
                                <option value="2">Two</option>
                                <option value="3" selected>Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">

                        <button type="button" class="btn btn-primary col-md-6" id="save">Save</button>
                        <button type="button" class="btn btn-primary col-md-6" id="update">Update</button>
                    </div>

                </form>

            </div>
            <div class="row">
                <div class="col-md-12" >
                    <table class="table table-striped" id="cus_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>NIC</th>
                                <th>DOB</th>
                                <th>TEl No.</th>
                                <th>Marks</th>
                                <th>Gender</th>
                                <th>Action</th>
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
        <script src="js/reg.js" type="text/javascript"></script>

        <script type="text/javascript">
            //alert("kskds");

            $(window).on('load', function () {

                tableLoad();
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
            $('#update').click(
                    function () {

                        updateRecord();
                    }
            );

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
