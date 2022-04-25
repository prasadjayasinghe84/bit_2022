<?php

require_once './sql/db.php';
$id=$_GET['print_id'];
$obj=new DB;
$link =$obj->link();

$query="SELECT  `id`, `stu_fname`, `stu_lname`, `stu_email` FROM `students` WHERE `id`=".$id ;

$result=mysqli_query($link, $query);

    $records=array();

    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;

    }
   // var_dump($records);


    //mysqli_free_result($result);

    //mysqli_close($link);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row d-print-none ">
        


            <button type="button" class="btn btn-primary " id='print_r'>Print</button>
            <script src="js/jquery.js" type="text/javascript"></script>
           
        </div>
<div class="row">
<table>
    <thead>
<tr>
    <th colspan="2">Student Details</th>
</tr>

    </thead>
    <tbody>
<?php
    foreach($records as $row){

    
   echo "<tr>  <td>Name:</td> <td>".$row['stu_fname']."</td></tr> <tr>  <td>Name:</td> <td>".$row['stu_lname']."</td></tr></tr> <tr>  <td>Name:</td> <td>".$row['stu_email']."</td></tr>";
}
   
   
   ?> 


        
    </tbody>
</table>


</div>

        <script>
            $(window).on('load', function() {






            });



            $('#view').click(
                function() {


                }
            );

            $('#print_r').click(
                function() {

                    window.print();;
                }
            );
            </script>
    </div>










</body>


</html>