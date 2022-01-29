<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>


<!-- CSS -->
<style>
.myTable { 
  width: 70%;
  align: center;
  text-align: center;
  background-color: lemonchiffon;
  border-collapse: collapse; 
  font-size:15px;
  }
.myTable th { 
  background-color: goldenrod;
  color: white; 
  font-size:15px;
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid goldenrod; 
  font-size:15px;
  }

  .form-box {
    margin: auto auto;
    border-radius: 10px;
    padding-top:2px;
    box-shadow: 0 0 10px rgb(255 255 255);
    position: absolute;
    top: 10px;
    bottom: 0;
    left: 0;
    right: 0;
    color: #fff;
    width: 75%;
    height: 33%;
    align: center;
    text-align: center;
    font-size:25px;

}
.h1{
    margin:10% 10%;
    text-align:center;
    color:white;
}
</style>

</head>

<body Background="1324.jpeg" style="background-size:cover">
<?php
    include('connect/connection.php');
?>
<div style=overflow:auto;height:850px;width:auto;>
<br/>
<h1 class="h1"> REGISTERED USER </h1>
<table   border="1px"class="form-box">
    <thead class="" >
        <th>#</th>
      <th>Name</th>             
         <th>Address</th>
        <th>Mobile No</th>
        <th>Email ID</th>
        </thead>
    <tbody>
<?php

 $result = mysqli_query($connect,"SELECT * FROM login") or trigger_error(mysqli_error($conn)); 
 $i=0;
 while($row = mysqli_fetch_array($result)){ 
 foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
 $i+=1;
 echo "<tr>";  
  echo '<td>'.$i.'</td>';
 //echo "<td valign='top'>" . nl2br( $row['id']) . "</td>"; 
 echo "<td valign='center'>" . nl2br( $row['name']) . "</td>";
 echo "<td valign='center'>" . nl2br( $row['address']) . "</td>";  
 echo "<td valign='center'>" . nl2br( $row['mno']) . "</td>";  
 echo "<td valign='center'>" . nl2br( $row['email']) . "</td>";  
 } 
 echo "</tbody></table>"; 
 ?>

