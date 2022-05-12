<?php

require_once './sql/db.php';

$obj=new DB;
$link =$obj->link();

$query="SELECT `id`, `stu_id`, `sub_1`, `sub_2`, `sub_3` FROM `students_marks`";

$result=mysqli_query($link, $query);

    $records=array();

    while ($row=mysqli_fetch_assoc($result)) {
        
        $records[]=$row;

    }
   // var_dump($records);


    //mysqli_free_result($result);

    //mysqli_close($link);
function grade($x){
 $grade='';
    if($x>=75){
        $grade='A';
    }else{
        if($x>=65){
            $grade='B';
        }else{
            if($x>=50){
                $grade='C';
            }else{
                if($x>=35){
                    $grade='S';
                }else{
                    $grade='F';
                }
            }
        }
    }

 return $grade;
}

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
    <table class="table">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>SUbject 1</th>
                <th>SUbject 2</th>
                <th>SUbject 3</th>
                <th>Total</th>
                <th>Rank</th>
                <th>AVG</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>S</th>
                <th>F</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $stu_cou=0;
$tot_sub_1=0;
$tot_sub_2=0;
$tot_sub_3=0;
$tot_sub_1_less_40=0;
$tot_sub_1_than_40=0;
$tot_sub_2_less_40=0;
$tot_sub_2_than_40=0;
$tot_sub_3_less_40=0;
$tot_sub_3_than_40=0;

foreach($records as $row){
    $tot_A=0;
    $tot_B=0;
    $tot_C=0;
    $tot_S=0;
    $tot_F=0;


    $stu_cou++;
    $tot=$row['sub_1']+$row['sub_2']+$row['sub_3'];
    $avg=$tot/3;
    $tot_sub_1=  $tot_sub_1+$row['sub_1'];
    $tot_sub_2=  $tot_sub_2+$row['sub_2'];
    $tot_sub_3=  $tot_sub_2+ $row['sub_3'];
     
    if($row['sub_1']<40){
        $tot_sub_1_less_40++; 

    }else{
        $tot_sub_1_than_40++;
    }
    if($row['sub_2']<40){
        $tot_sub_2_less_40++; 

    }else{
        $tot_sub_2_than_40++;
    }
    if($row['sub_3']<40){
        $tot_sub_3_less_40++; 

    }else{
        $tot_sub_3_than_40++;
    }

    if(grade($row['sub_1'])==='A'){
        $tot_A++;
    }elseif(grade($row['sub_1'])==='B'){
        $tot_B++;
    }elseif(grade($row['sub_1'])==='C'){
        $tot_C++;
    }elseif(grade($row['sub_1'])==='S'){
        $tot_S++;
    }elseif(grade($row['sub_1'])==='F'){
        $tot_F++;
    }
    if(grade($row['sub_2'])==='A'){
        $tot_A++;
    }elseif(grade($row['sub_2'])==='B'){
        $tot_B++;
    }elseif(grade($row['sub_2'])==='C'){
        $tot_C++;
    }elseif(grade($row['sub_2'])==='S'){
        $tot_S++;
    }elseif(grade($row['sub_2'])==='F'){
        $tot_F++;
    }
    if(grade($row['sub_3'])==='A'){
        $tot_A++;
    }elseif(grade($row['sub_3'])==='B'){
        $tot_B++;
    }elseif(grade($row['sub_3'])==='C'){
        $tot_C++;
    }elseif(grade($row['sub_3'])==='S'){
        $tot_S++;
    }elseif(grade($row['sub_3'])==='F'){
        $tot_F++;
    }

    echo"<tr>
    <td>".$row['stu_id']."</td>
    <td>".$row['sub_1']."</td>
    <td>".$row['sub_2']."</td>
    <td>".$row['sub_3']."</td>
    <td class='stu_tot'>".$tot."</td>
    <td >rank</td>
    <td>".number_format((float)$avg, 2, '.', '')."</td>
    <td>".$tot_A."</td>
    <td>".$tot_B."</td>
    <td>".$tot_C."</td>
    <td>".$tot_S."</td>
    <td>".$tot_F."</td>
    </tr>";
}
echo"<tr>
<td>".$stu_cou."</td>
<td>".$tot_sub_1."</td>
<td>".$tot_sub_2."</td>
<td>".$tot_sub_3."</td>
<td></td>
<td></td>
<td></td>
</tr>";
$avg_sub_1=$tot_sub_1/$stu_cou;
$avg_sub_2=$tot_sub_2/$stu_cou;
$avg_sub_3=$tot_sub_3/$stu_cou;
echo"<tr>
<td></td>
<td>".number_format((float)$avg_sub_1, 2, '.', '')."</td>
<td>".number_format((float)$avg_sub_2, 2, '.', '')."</td>
<td>".number_format((float)$avg_sub_3, 2, '.', '')."</td>
<td></td>
<td></td>
<td></td>
</tr>";
echo"<tr>
<td>less than 40</td>
<td>".$tot_sub_1_less_40."</td>
<td>".$tot_sub_2_less_40."</td>
<td>".$tot_sub_3_less_40."</td>
<td></td>
<td></td>
<td></td>
</tr>";
echo"<tr>
<td>grater than 40</td>
<td>".$tot_sub_1_than_40."</td>
<td>".$tot_sub_2_than_40."</td>
<td>".$tot_sub_3_than_40."</td>
<td></td>
<td></td>
<td></td>
</tr>";
?>
        </tbody>

    </table>
</body>
<script src="js/jquery.js" type="text/javascript"></script>
<script>
$(window).on('load', function() {

    var totalLIst = $('.stu_tot')
        .map(function() {


            return $(this).text();
        })
        .get()
        .sort(function(a, b) {
            return a - b;
        })
        .reduce(function(a, b) {
            if (b != a[0])
                a.unshift(b);
            return a;

        }, []);


    totalLIst.forEach((v, i) => {
        $('.stu_tot').filter(function() {
            return $(this).text() == v;
        }).next().text(i + 1);
    });

});
</script>

</html>