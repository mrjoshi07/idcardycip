<?php
       session_start();
       if(!isset($_SESSION["name"]))
       {
              echo"<script>open('../adminlogin.php','_self')</script>";
       }
?>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
       .header1{
              z-index: 2;
              color: white;
              background-color: rgba(45, 42, 42, 0.64);
              filter: drop-shadow(1px 1px 10px  rgba(45, 42, 42, 0.66));
       }
       .header2{
              margin: 0px 0px;
              padding: 0px 0px;
              top: 0px;
              left: 100px;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            
       }
       .header2 h1{
             font-size:36px;
       }
       .header3 h3{
              font-size:25px;
       }
       .header3{
              margin: 0px 0px;
              padding: 0px 0px;
              top: 0px;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              text-align: center;
       }
       @media screen and (max-width:400px){
              .header2{
                     left: 0px;
              }
              .header2 h1{
                     text-align: center;
                     font-size: 20px;
              }
              .header3 h3{
                     margin: 0px 0px 5px 0px;  
                     padding: 0px 0px;
                     font-size:12px;
              }
       }
     
</style>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header1" style="margin: 0px 0px; padding: 0px 0px;">
       
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header2" style="margin: 0px 0px; padding: 0px 0px;">
               <h1>ATHARVA IT SOLUTION'S</h1>
       </div>
       
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 header3" style="margin: 0px 0px; padding: 0px 0px;">
              <h3><?php echo $_SESSION["name"]; ?></h3>
       </div>
       
</div>
