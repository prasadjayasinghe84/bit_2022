<?php
require_once './sql/db.php';

$obj=new DB;
$link =$obj->link();

$query="SELECT `id`, `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`, `cus_mar` FROM `customers`";
$result=mysqli_query($link, $query);

    $records=array();

    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;

    }
    //var_dump($records);


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
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>NIC</th>
                <th>Date of Birth</th>
                <th>Te. no</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>

<?php
foreach($records as $row){
$gender='';
    if($row['cus_gender']==='1'){
        $gender='Male';
    }else{
        $gender='female';
    }
    
    
    echo"<tr>    <td>".$row['cus_name']."</td>    <td>".$row['cus_nic']."</td>    <td>".$row['cus_dob']."</td>    <td>".$row['cus_tel']."</td>    <td>".$gender."</td></tr>";
     
}
?>
</tbody>
    </table>





    <button type="button" class="btn btn-primary d-print-none" id='print_r'>Print</button>
    <script src="js/jquery.js" type="text/javascript"></script>


    <script>
    $(window).on('load', function() {






    });

    $('#print_r').click(
        function() {

            window.print();;
        }
    );
    </script>
</body>


</html>