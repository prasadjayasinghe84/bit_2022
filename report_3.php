<?php
//if($_POST['nic']
require_once './sql/db.php';

$obj=new DB;
$link =$obj->link();

$query="SELECT `id`, `cus_name`, `cus_nic`, `cus_dob`, `cus_tel`, `cus_gender`, `cus_mar` FROM `customers` where `cus_nic` ='".$_POST['nic']."'" ;
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
            <form action="" method="POST" >

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="button-addon2" name="nic">
                    <button class="btn btn-outline-secondary" type="submit" id="view">View details</button>
                </div>


            </form>


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
$gender='';
    if($row['cus_gender']==='1'){
        $gender='Male';
    }else{
        $gender='female';
    }
    
   echo "<tr>  <td>Name:</td> <td>".$row['cus_name']."</td></tr>        <tr><td>NIC:</td> <td>".$row['cus_nic']."</td></tr>        <tr><td>Date of Birth:</td> <td>".$row['cus_dob']."</td></tr>        <tr><td>Tel. no:</td> <td>".$row['cus_tel']."</td></tr>        <tr><td>Gender:</td> <td>".$gender."</td></tr>";
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