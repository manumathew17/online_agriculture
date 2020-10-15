<html>
    <head>
        <title>admin area</title>
         <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
       
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
        <style>
            table{
                margin-top: 100px;
               border: none;
                width=100%;
               
               
                
                
            }
            th{ text-align:left;
                background-color: darkblue;
                color:white;
                padding:10px;
                text-align:left;
                
                
                font-size:20px;
                font-weight:bold;
              }
                          td{
                height :auto;
                vertcal-align:bottom;
                padding:10px;
                text-align:center;
                
               
            }
           
            tr:hover{background-color: white;
           }
            tr:nth-child(even){background-color:#f2f2f2;}
            
        </style>
    </head>
    <body>
    <body>
        <div>
            <?php
                require 'header3.php';
            ?></div>
</html>
<?php
include('connection.php');

$sql="select * from users_items as s, users as u, items as p where s.status='Confirmed' and s.user_id=u.id and s.item_id=p.id;";
$result=mysqli_query($con,$sql);
echo "<center>
<table border=2>
<tr>
<th>id</th>
<th>user id</th>
<th>product</th>
<th>email</th>
<th>contact</th>
<th>city</th>
<th>address</th>
<th>quantity</th>
<th>price</th>
<th>total price</th>
<th>click to confirm</th>
</tr>";

while($row=mysqli_fetch_array($result))
    
{
    $price=$row['price']*$row['quantity'];
echo "<tr>";
echo "<td>" . $row['id1'] . "</td>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $price ."</td>";
echo "<td><a href='finalconfirmproduct.php?id=" . $row['id1'] . "' class='btn btn-block btn-primary' name='add' value='add'>proceed</a> </td> </center>";
    

}
?>