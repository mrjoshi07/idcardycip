<?php
       require("../dbcon.php");
       session_start();

       if(!isset($_SESSION["sid"]))
       {   
              echo "<script>alert('Record Not Found')</script>";
              echo "<script>open('showstdinfo.php','_self')</script>";
       }

       $tempid=$_SESSION["sid"];
       $sql="select *from tblteachinfo where id='$tempid'";
       $res=mysqli_query($link,$sql);
       if(mysqli_num_rows($res)>0)
       {
              if($row=mysqli_fetch_array($res))
              {
                     $name=trim($row["name"]);
                     $work=trim($row["work"]);
                     $mobile1=trim($row["mobile1"]);
                     $bloodg=trim($row["bloodg"]);
                     $address=trim($row["address"]);
                     $usertype=trim($row["usertype"]);
                     $mobile2=trim($row["mobile2"]);
                     $adhar=trim($row["adhar"]);
                     $path=trim($row["photo"]);
              }
       }
?>