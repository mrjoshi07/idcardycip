<?php
       require("../dbcon.php");
       session_start();
       if(isset($_GET["btngetid"]))
       {   
              $_SESSION["sid"]=trim($_GET["id"]);
       }
       else
       {
              echo "<script>alert('Record Not Found')</script>";
              echo "<script>open('showstdinfo.php','_self')</script>";
       }
?>
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Title Page</title>
              <link rel="icon" href="../images/logo.png" type="png/x-icon" />
              <!-- Bootstrap CSS -->
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <style>
                     /* div{
                            border: 1px solid black;
                     } */
                     .createuser1{
                            z-index: 2;
                            position: relative;
                     }
                     .createuser2,.createuser3{
                            top: 50px;
                            padding: 20px;
                            background-color: rgba(255, 255, 255, 0.59);
                            box-shadow: 1px 1px 10px black;
                            border-radius: 10px;
                            right: 30px;
                      }
                      .createuser2{
                            margin: 0px 30px 0px 30px;
                            border: 1px solid black;
                          
                            
                      }
                      .user0{
                            z-index: 1;
                            height: 120%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                     }
                     #t1{
                            display: inline-block; 
                            justify-items: center;
                            margin: 0px 30px
                     }
                    #t1 img{
                            width: 200px;
                          
                    }
                    
                     @media screen and (max-width:400px){
                            .stdinfo{

                                   margin:-15px 0px 0px 5px;
                                   font-size:10px;
                            }
                            .stdinfo2{
                                   margin:-15px 0px 0px 0px;
                                   padding-left:1px;
                                   font-size:9px;
                            }
                            .stdinfo2 p{
                                   padding-top:2px;
                            }
                            .sign img{
                                   width:50px;
                                   height:50px;
                            }
                            #p1{
                                   font-size:12px;
                            }
                            #b1{
                                   font-size:11px;
                            }
                            .stdimg1 img{
                            width: 90px;
                            height: 90px;
                             }
                           
                     }

              </style>
              <script>
                     $(function(){
                            $(".t1").click(function(){
                                   open('../staff template/template3.php','_self');
                            });

                            $(".t2").click(function(){
                                   open('../staff template/template2.php','_self');
                            });

                            $(".t3").click(function(){
                                   open('../staff template/template4.php','_self');
                            });

                            $(".t4").click(function(){
                                   open('../staff template/template1.php','_self');
                            });

                            $(".t5").click(function(){
                                   open('../staff template/template5.php','_self');
                            });

                            $(".t6").click(function(){
                                   open('../staff template/template6.php','_self');
                            });
                            $(".t7").click(function(){
                                   open('../staff template/template7.php','_self');
                            });
                            $(".t8").click(function(){
                                   open('../staff template/template8.php','_self');
                            });

                            $("#btnexit").click(function(){
                                   open('teacherinfoshow.php','_self');
                            });


                     });
              </script>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
       </div>
                     
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" >
              
          <button type="button" id="btnexit" class="btn btn-danger">Back</button>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2">
            
                     <div id="t1" class="t1">
                            <img src="../image/im2.png" alt="" >
                            <p>Template 1</p>
                     </div>

                     <div id="t1" class="t6">
                            <img src="../image/im1.png" alt="">
                            <p>Template 2</p>
                     </div>
                   
                     <div id="t1" class="t7">
                            <img src="../image/im5.jpg" alt="">
                            <p>Template 3</p>
                     </div>
                     <div id="t1" class="t5">
                            <img src="../image/im3.png" alt="" >
                            <p>Template 4</p>
                     </div>
                    

                     <div id="t1" class="t4">
                            <img src="../image/im4.png" alt="">
                            <p>Template 5</p>
                     </div>
                     <div id="t1" class="t8">
                            <img src="../image/idcard.jpg" alt="" style="height:200px;">
                            <p>Template 5</p>
                     </div>
                   
                   
                   
              </div>

            
              
       </div>
              
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
