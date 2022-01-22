<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/chosen.css" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
  <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Select Gn</label>
        <div class="col-sm-10">
            <select class="form-select form-select-sm " aria-label=".form-select-sm example">
            <option >Open this select menu</option>
            <option value="1" selected>One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Select DSD</label>
        <div class="col-sm-10">
            <select class="form-select form-select-sm chosen-select" aria-label=".form-select-sm example" id='combo_dsd'>
            
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label">Select Gn</label>
        <div class="col-sm-10">
            <select class="form-select form-select-sm chosen-select" aria-label=".form-select-sm example" id='combo_gn'>
            
            </select>
        </div>
    </div>
  </div>
   
</div>
</div>
    


<script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/chosen.jquery.js" type="text/javascript"></script>
        <script src="js/dropdown.js" type="text/javascript"></script>
        <script>
            $(".chosen-select").chosen();
            $(window).on('load', function () {

            
            comboloadDSD();

            });
            $('#combo_dsd').change(function(){
               

                comboloadGN( $(this).val());
            });

        </script>

</body>
</html>

