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
                            /* border: 1px solid black; */
                            border: none;
                           
                      }
                      .user0{
                            z-index: 1;
                            height: 100%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                      }
                      #t1{
                            background-color: #FEDCDB;
                      }
                     
                      img{
                            width: 150px;
                            height: 150px;
                            margin:40px 0px 0px 40px;
                            border-radius: 20px;
                      }
                      .t2{
                            text-align: center;
                           font-family: Georgia, 'Times New Roman', Times, serif;
                      }
                      #t3{
                            background-color: white;
                            padding:20px;
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
                            $("#t1").click(function(){
                                   open('../staff template/template3.php','_self');
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
                     

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 t1" id="t1" style="padding:15px;">
                     
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t3" style="margin: 0px 0px 0px 0px; padding:5px; background-color: white;">
                     
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t21">
                            <img src="../image/logo.png" alt="" style="width: 70px; height: 70px; margin-top:-1px">
                     </div>
                     
                     
                     <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 t22" style="margin: 0px 0px 0px 00px; padding: 0px; text-align: center;">
                            <p><small>Marathwada Shikshan Prasarak Mandal's</small></p>
                            <p><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</small></b></p> 
                            <P><small>Vidya Nagari,Barshi Road, Beed-431122, Ph.No.|:8275852182</small></P>
                           
                     </div>
                     

               </div>
                     
                        
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                              
                        <img src="<?php echo $path; ?>" alt="">

                              
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t2">
                            <p><h3><?php  echo strtoupper($name);?> </h3>
                                   <h5> <b><?php  echo $work; ?></b></h5>
                            </p>
                            <hr>
                            </div>
                            
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                       
                                   <p><small><b>MO.NO : </b><?php  echo $mobile1; ?> </small></p>
                                   <p><small><b>BLOOD-GROUP  :</b> <?php  echo $bloodg; ?></small></p>
                                   <p><small><b>UID :</b> <?php echo $adhar; ?></small></p>
                                   <p><small><b>Add :</b> <?php echo $address; ?></small></p>
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
