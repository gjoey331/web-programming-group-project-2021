<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete International Package Appointment</title>
</head>
<?php 

if (isset($_GET['AppointID'])){
        $p=$_GET['AppointID'];
      
        $sql ="DELETE FROM `tblinternationalappoint` 
        WHERE (`AppointID`='".$p."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewinternationalappoint.php?UserID=$id","International package appointment is successfully deleted");
} 