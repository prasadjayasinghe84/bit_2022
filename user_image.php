<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/alertify.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" type="text/css" />
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
                        <label for="" class="col-sm-2 col-form-label">Email/User Name</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="sys_user_mail" name="sys_user_mail"
                                autocomplete="off" required>
                        </div>
                    </div>

                    <div class="mb-3 row">

                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary" id="Create_Account">Create Account</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>

        <div class="row">
            <div class="clo-md-12">
                <table class="table" id="system_user_table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Emali</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="image_upload" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="image_upload" action="" method="post" enctype="multipart/form-data">
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12" align="center">

                                    <img src="" width="180px" height="200px" id="previewing">
                                </div>
                                <div class="col-md-12" align="center">
                                    <div class="form-group ">

                                        <div class="col-md-8">
                                            <input class="form-control" type="text" id="pro_id" name="pro_id">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-3 control-label">Slect Image</label>
                                        <div class="col-md-8">
                                            <input class="form-control" type="file" name="pro_image" id="file">
                                        </div>



                                    </div>
                                    <div class="col-sm-12" align="center">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Upload Image</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">

                            </div>

                        </div>




                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/alertify.js" type="text/javascript"></script>
<script src="js/user_image.js" type="text/javascript"></script>
<script>
$('#Create_Account').click(
    function() {

        userAccount();
    }
);

$(window).on('load', function() {

    loadTable();
});

$('#file').change(function() {
    var reader = new FileReader();

    reader.onload = imageIsLoaded;
    reader.readAsDataURL(this.files[0])





});

function imageIsLoaded(e) {

    $('#previewing').attr('src', e.target.result);


}

$('#image_upload').on('submit', (function(e) {

    e.preventDefault();



    $.ajax({
        url: "model/sql_user_image.php", // Url to which the request is send
        type: "POST", // Type of request to be send, called as method
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false, // The content type used when sending data to the server.
        cache: false, // To unable request pages to be cached
        processData: false, // To send DOMDocument or non processed data file it is set to false
        success: function(data) // A function to be called if request succeeds
        {

        }
    });

}));
</script>

</html>