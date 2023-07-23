<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <style>

        table{
            margin-left: auto;
            margin-right: auto;
            width:80%;
            padding:10px;
        }

        td{
            padding:10px;
            font-size:16px;
            
           
        
        }

        th{
            padding:15px;
            font-size:25px;
          
           
            
        }
    </style>
<script>
    
    function hello(paravalue){
        
        var printContents = document.getElementById(paravalue).innerHTML;
     var originalContents = document.body.innerHTML;
    

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
    }

    if (history.previous)
{
    document.location="http://www.google.com";
}
    </script>

</head>

<body>
<div id="divone">
<?php


$connection=mysqli_connect('localhost','root','','booking');


$sql = mysqli_query($connection,"SELECT * FROM booking_det ORDER BY id DESC LIMIT 1");
$sql2 = mysqli_query($connection,"SELECT * FROM bus WHERE id=1");
$sql3 = mysqli_query($connection,"SELECT * FROM bus WHERE id=2");
$sql4 = mysqli_query($connection,"SELECT * FROM bus WHERE id=3");
$sql5 = mysqli_query($connection,"SELECT * FROM bus WHERE id=4");
$sql6 = mysqli_query($connection,"SELECT * FROM bus WHERE id=5");
$sql7 = mysqli_query($connection,"SELECT * FROM bus WHERE id=6");
$sql8 = mysqli_query($connection,"SELECT * FROM booking_info ORDER BY id DESC LIMIT 1");



$print_data = mysqli_fetch_row($sql);
$print_data2 = mysqli_fetch_row($sql2);
$print_data3 = mysqli_fetch_row($sql3);
$print_data4 = mysqli_fetch_row($sql4);
$print_data5 = mysqli_fetch_row($sql5);
$print_data6 = mysqli_fetch_row($sql6);
$print_data7 = mysqli_fetch_row($sql7);
$print_data8 = mysqli_fetch_row($sql8);


if($print_data8[4]=="Veg biryani" OR $print_data8[4]=="Veg Thali"){
    $price = 125;
}
if($print_data8[4]=="Medium Veg Burger" OR $print_data8[4]=="Cheese Pizza"){
    $price = 300;
}
if($print_data8[4]=="Non veg biryani"){
    $price = 180;
}
if($print_data8[5]=="Tea" OR $print_data8[5]=="Coffee"){
    $price2 = 25;
}
if($print_data8[5]=="Coconut Water" OR $print_data8[5]=="Orange Juice" OR $print_data8[5]=="Coke"){
    $price2 = 50;
}
if($print_data8[4]=="None"){
    $price = 0;
}
if($print_data8[5]=="None"){
    $price2 = 0;
}


if($print_data8[8]!=NULL){
    $i=1;
}
if($print_data8[9]!=NULL){
    $i=2;
}
if($print_data8[10]!=NULL){
    $i=3;
}
if($print_data8[11]!=NULL){
    $i=4;
}


echo "<table style=' margin-top: 25px; border:1px solid;'>";  
    echo "<tr><th >Bus Company</th><th >Passenger Ticket</th></tr>";
    echo "<tr><td>Name:&nbsp&nbsp&nbsp&nbsp$print_data8[1]</td><td>Gender:&nbsp&nbsp&nbsp&nbsp$print_data8[2]</td></tr>";
    echo "<tr><td>Seats:&nbsp&nbsp&nbsp&nbsp$print_data8[8]&nbsp&nbsp$print_data8[9]&nbsp&nbsp$print_data8[10]&nbsp&nbsp$print_data8[11]</td><td>Age:&nbsp&nbsp&nbsp&nbsp$print_data8[3]</td></tr>";
    echo "<tr ><td style=' border-bottom: 1px solid;'>Food Preference:&nbsp&nbsp&nbsp&nbsp$print_data8[4]</td><td style=' border-bottom: 1px solid;'>Drink Preference:&nbsp&nbsp&nbsp&nbsp$print_data8[5]</td></tr>";
    if($print_data[1]=="Delhi"){
        $tf = $print_data2[5]*$i;
        $fprice = ($print_data2[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data2[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data2[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data2[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
        }
    if($print_data[1]=="Mumbai"){
        $tf = $print_data3[5]*$i;
        $fprice = ($print_data3[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data3[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data3[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data3[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
            
       }
    if($print_data[1]=="Jaipur"){
        $tf = $print_data4[5]*$i;
        $fprice = ($print_data4[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data4[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data4[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data4[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
        }
    if($print_data[1]=="Lucknow"){
        $tf = $print_data5[5]*$i;
        $fprice = ($print_data5[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data5[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data5[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data5[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
            }   
    if($print_data[1]=="Dehradun"){
        $tf = $print_data6[5]*$i;
        $fprice = ($print_data6[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data6[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data6[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data6[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
             }               
    if($print_data[1]=="Agra"){
        $tf = $print_data7[5]*$i;
        $fprice = ($print_data7[5]*$i)+$price+$price2;
        echo "<tr><td>Bus:&nbsp&nbsp&nbsp&nbsp$print_data7[1]</td><td> </td></tr>";
        echo "<tr><td>Departure Date & Time:&nbsp&nbsp&nbsp&nbsp$print_data[3]&nbsp|&nbsp$print_data7[3]</td><td style='text-align:right;'>Ticket Price:&nbsp$tf Rs.</td></tr>";
        echo "<tr><td>Departure:&nbsp&nbsp&nbsp&nbsp$print_data7[2]</td> <td style='text-align:right;'>Food:&nbsp$price Rs. </td></tr>";
        echo "<tr><td>Destination:&nbsp&nbsp&nbsp&nbsp$print_data[2] Bus Terminal</td><td  style='text-align:right;'>Drinks:&nbsp$price2 Rs </td></tr>";
        echo "<tr><td style=' font-size: 25px;'>Ticket No.&nbsp&nbsp$print_data8[0]</td> <td style='text-align:right;  font-size: 25px;'>Total:&nbsp$fprice Rs.</td></tr>";
    }
echo "</table>";

$query = "insert into earnings(earnings) values('$fprice')";

    $run = mysqli_query($connection, $query);
    $connection->close();

?>
</div>

<button style='margin: auto; display:block; margin-top:20px;'onclick="hello('divone')">Print Ticket</button>

</body>
</html>