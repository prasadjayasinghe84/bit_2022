<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name=""
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stu_name" name=""
                            autocomplete="off" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Mark</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stu_mark" name=""
                            autocomplete="off" required>
                    </div>
                </div>
                <button id='add_mark'>Add</button>
            </div>
           <div class="col-md-6">
               <table class="table table-hover" id='stu_table_mark'>
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Mark</th>
                           <th>Remove</th>
                       </tr>
                   </thead>
                   <tbody></tbody>
               </table>

           </div>
        </div>

    </div>
    <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script>
            $('#add_mark').click(function(e){
                var row="<tr><td>"+$('#id').val()+"</td><td>"+$('#stu_name').val()+"</td><td>"+$('#stu_mark').val()+"</td><td><button class='btn btn-danger remove_row' type='button' id=''>X</button></td></tr>";
                $('#stu_table_mark > tbody:last-child').append(row);
                
            });
            $(document).on('click' ,'button.remove_row',function(){
                $(this).closest('tr').remove();
                return false;

            });

        </script>
</body>

</html>