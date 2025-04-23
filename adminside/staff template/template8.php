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
                      .id-card {
                            height: 250px;;
                            background:rgb(238, 54, 54);
                            color: white;
                            padding: 15px;
                            border-radius: 0px 0px 0px 90px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                            text-align: center;
                      }
                      .t1{
                            height: 500px;
                            background-image: url("../image/idcard.png");
                            background-size: 100% 100%;
                      }
                      .c1{
                            display: flex;
                            align-items: center;
                            justify-content: center;
                      }
                     .c3{
                            color:white;
                             text-align: center;
                     }
                     p{
                            margin:0px;
                            padding: 0px;
                     }
                     #img1{
                            outline-width: 3px;
                            outline-color:#800000 ;
                            outline-style: solid;
                     }
                     .c4{
                            padding:20px 0px 0px 0px;
                            font-family:Verdana;
                     }
                     .c5{
                            padding:0px 20px 0px 20px;
                     }
                     .c6{
                            padding: 15px 0px 0px 0px;
                            color:white;
                     }
                     .c7{
                            padding:0px;
                            display: flex;
                     }
                     .c7 span{
                            padding:5px;
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
              
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                            
                     </div>
                     

                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 t1" >
                                  
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c1">
                                   <div class="col-xs-2 col-sm-2 col-md-1 col-lg-2 c2">
                                   <img src="../image/logo.png" alt="" style="width:70px; height:70px;">
                                   </div>
                                   
                                  
                                   
                                   <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 c3">
                                   <p style="color:yellow;"><small>Marathwada Shikshan Prasarak Mandal's</small></p><p><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</b></p><p>
                                   Vidya Nagar Barshi Road-431122
                                   </p> 
                                   </div>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                   <hr>
                                   
                                   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                          
                                   </div>
                                   
                                   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                   <img src="<?php echo $path; ?>" alt="" style="width:142px; height:142px; border-radius:10px; margin:-6px 0px 0px 2px; outline:0px 0px 2px 2px;" id="img1">
                                   </div>
                                   
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c4">
                                   <h4 style="text-align:center; padding:0px; margin:0px;"> <b><?php  echo $name; ?></b></h4>
                                   <p style="text-align:center;"> <b><?php  echo $work; ?></b></small></p>
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c5">
                                   <hr>
                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <p><small><b>Mo.No : </b><?php  echo $mobile1; ?> </small></p>
                                   <p><small><b>UID : </b><?php echo $adhar; ?></small></p>
                                            
                                   </div>
                                   
                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <p><small><b>Blood-Group  :</b> <?php  echo $bloodg; ?></small></p>
                                          <p><smallb><b>Address : </b><?php echo $address; ?></small></p>
                                   </div>
                                   
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c6">
                                   
                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 c7">
                                          <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                                          <p>https://ycipbeed.in</p>
                                   </div>
                                   
                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 c7">
                                          
                                          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                          
                                          <p>principal.ycip@gmail.com</p>
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
