<?php
   require("dbcon.php");
   session_start();
   if(isset($_POST["btnsaveuser"]))
   {
      function exceptionHandler($exception) {
         echo "". $exception->getMessage();
     }
     set_exception_handler("exceptionHandler");

      $id=trim($_POST["txtid"]);
      $usertype=trim($_POST["txtusertype"]);   
      $sql="select *from tblusertype where id='$id'";
      $res=mysqli_query($link,$sql);
      if(mysqli_num_rows($res)>0)
      {

         $sql="delete from tblusertype where id='$id'";
          if(mysqli_query($link,$sql)){
            echo "<script>alert('Record updated....')</script>";
            echo"<script>open('../master/user.php','_self')</script>";       
          }

      } 
 
      $sql="insert into tblusertype values('$id','$usertype')";
      if(mysqli_query($link,$sql))
      {
         echo "<script>alert('Record inserted....')</script>";
         echo"<script>open('../master/user.php','_self')</script>";       
      }
      mysqli_close($link);    
  
   }
   else if(isset($_GET["btndelete"]))
   {
        $id=$_GET["id"];
       $sql="delete from tblusertype where id='$id'";
       if(mysqli_query($link,$sql))
       {
           echo "<script>alert('Recrod is Deleted')</script>";
           echo "<script>open('../master/user.php','_self')</script>";          
       }
   }
   else if(isset($_POST["btnsaveidusertype"]))
   {
      $id=trim($_POST["txtid"]);
      $idusertype=trim($_POST["txtidusertype"]);   
      $sql="select *from tblidusertype where id='$id'";
      $res=mysqli_query($link,$sql);
      if(mysqli_num_rows($res)>0)
      {

         $sql="delete from tblidusertype where id='$id'";
          if(mysqli_query($link,$sql)){
            echo "<script>alert('Record updated....')</script>";
            echo"<script>open('../master/creatstudentinfo.php','_self')</script>";       
          }

      } 
 
      $sql="insert into tblidusertype values('$id','$idusertype')";
      if(mysqli_query($link,$sql))
      {
         echo "<script>alert('Record inserted....')</script>";
         echo"<script>open('../master/creatstudentinfo.php','_self')</script>";       
      }
      mysqli_close($link);    
   }
?>