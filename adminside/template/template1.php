<?php
       include("sessioneid.php");
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
                            height: 100%;
                            background-color: rgba(58, 53, 53, 0.59);
                   
                      }
                      .t1{
                            background-color:rgb(255, 255, 255);
                            border: 2px solid black;
                      }
                      .t2{
                            background-color:rgb(66, 108, 122);
                            
                      }
                      .t21 p{
                            margin: -10px 0px 10px 32px;
                            color: white;
                          
                      }
                      .t22 p{
                            margin: 0px;
                            text-align: center;
                            color: white;
                      }
                      .t31,.t33{
                            padding: 3px;
                            margin: 2px 0px 0px 0px;
                            background-color:rgb(66, 108, 122);
                            border-radius: 10px;
                      }
                      .t32{
                            background-color: white;
                            border-radius: 10px;
                      }
                      .t32 p{
                            margin: 0px;
                            text-align: center;
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

                     @media print {
                     }
              </style>
              <script>
                     $(function(){
                            $("#t1").click(function(){
                                   open('../template/template3.php','_self');
                            });
                     });
              </script>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px 0px 0px; position: absolute">
       </div>
                     
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px 0px 0px 0px;" >  
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" >
        
              
              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                     
              </div>
              

           <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 t1" >
               
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t2" style="margin: 0px 0px 0px 0px; padding: 0px 0px 7px 0px">
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t21">
                            <img src="../image/logo.png" alt="" style="width: 100px; height: 100px">
                            <p><b>YCIP</b></p>
                     </div>
                     
                     
                     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 t22" style="margin: 0px 0px 0px 00px; padding: 0px">
                            <p><small>Marathwada Shikshan Prasarak Mandal's</small></p>
                            <p style="color: yellow"><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</small></b></p> 
                            <P><small>Vidya Nagari,Barshi Road, Beed-431122, Ph.No.|:8275852182</small></P>
                            <p><small>Approved by AICTE Delhi, DTE Mumbai,Govt.of Maharashtra,</small></p>
                            <p><small>Affiliated to MSBTE, mumbai. DTE:2182 | MSBTE:1158</small></p>
                     </div>
                     

               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t3">
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t31">
                            
                     </div>
                     
                     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 t32" style="margin: -7px 0px 0px 0px; padding: 0px">
                            <p><small>STUDENT ID CARD</small></p>
                     </div>
                                         
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t33">
                            
                     </div>
                     
                     
               </div>
               
               
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t4" style="margin: 10px 0px; ">
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t41" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">
                            <img src="<?php echo $path; ?>" alt="" style="width: 110px; height: 150px; border: 1px solid black">
                            <p style="color: red; font-size: 20px">2024 - 2025</p>
                     </div>

                     
                     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 t42"  style="margin: 0px 0px 0px 15px; padding: 0px 0px 0px 0px">
                            <p><small>Name  : <?php  echo strtoupper($name);?> </small></p>
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">
                                   <p><small>CLG-No : <?php echo $enno; ?></small></p>
                                   <p><small>Class : <?php  echo $branch; ?></small></p>
                                   <p><small>Mo.No : <?php  echo $mobile; ?> </small></p>
                                   <p><small>Blood-Group  : <?php  echo $blood; ?></small></p>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">
                                   <p><small>MSBTE-No : <?php echo $enno2; ?></small></p>
                                   <p><small>Year : <?php echo $year; ?></small></p>
                                   <p><small>UID : <?php echo $adhar; ?></small></p>
                                   <p><small>Add : <?php echo $address; ?></small></p>
                            </div>

                           
                           <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7"  style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">

                           </div>
                             
                          
                          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                   <img src="../image/signature1.png" alt="" style="width: 100px; height: 30px">
                                   <p  style=" margin: 0px 0px 0px 0px; text-align: center;"><small>Liabrarian</small></p>
                          </div>
                          
                     </div>
                     
                     
               </div>
               
                          
           </div>
                     
       </div>
           
       </div>
              
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
