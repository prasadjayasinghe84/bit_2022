<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"/>
    <title>DATA TABLE</title>
</head>
<body>
<table  class="table table-striped" style="width:100%" id="gnTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>GND NAME</th>
                
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
                <th>CODE</th>
                <th>GND NAME</th>
                
            </tr>
        </tfoot>
    </table>
    </body>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
        <script src="js/datatable.js" type="text/javascript"></script>
       
        <script type="text/javascript">
            $(document).ready(function() {
                //alert('ready');
                //tableLoad();
                 $('#gnTable').DataTable();
            } );

            $(window).on('load', function () {
                //alert('load')
                tableLoad();
});

        </script>
</html>       