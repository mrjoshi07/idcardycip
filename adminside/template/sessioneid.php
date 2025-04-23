<?php
       require("../dbcon.php");
       session_start();
   
       if(!isset($_SESSION["eid"]))
       {   
              echo "<script>alert('Record Not Found')</script>";
              echo "<script>open('showstdinfo.php','_self')</script>";
       }

       $tempid=$_SESSION["eid"];
       $sql="select *from tblstdinfo where id='$tempid'";
       $res=mysqli_query($link,$sql);
       if(mysqli_num_rows($res)>0)
       {
              if($row=mysqli_fetch_array($res))
              {
                     $enno=trim($row["enNo"]);
                     $enno2=trim($row["enno2"]);
                     $name=trim($row["name"]);
                     $branch=trim($row["branch"]);
                     $year=trim($row["year"]);
                     $adhar=trim($row["adhar"]);
                     $blood=trim($row["blood"]);
                     $mobile=trim($row["mono"]);
                     $address=trim($row["address"]);
                     $path=trim($row["photo"]);
              }
       }
?>