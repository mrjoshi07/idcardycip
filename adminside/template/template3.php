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
                            background-color: rgba(45, 42, 42, 0.59);
                   
                      }
                      #t3 p{
                            padding: 0px;
                            margin: 4px;
                          
                      }
                      .t0{
                            background-color: rgba(239, 241, 76, 0.59);
                        
                      }
                    .t5 p{
                            text-align: center;
                    }
                    .t6 p{
                            margin: 0px;
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
                     

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 t1" id="t1" style="margin: 0px 0px; padding: 0px 0px;  border: 2px solid black">

                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t0" style="margin: 0px 0px; padding:0px 0px;  border: 2px solid rgba(76, 197, 241, 0.84);">

                            <div  class="col-xs-3 col-sm- col-md-3 col-lg-3 t2" id="t2" >
                                   <img src="../image/logo.png" alt="" style="width: 100px">
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 t3" id="t3" >
                                   <p>Marathwad Shikshan Prasarak Mandal's</p>
                                   <p style="color: red;"><b>Yashawantrao Chavan Institute Of Polytechnic,Beed</b></p>
                                   <p>Beed - 431122 (MS) Tel. 8275852182</p>
                                   <p>Email : ycip@gmail.com , Website : //ycipbeed.in </p>
                            </div>
                     </div>
                                                                                                                                          
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t4" style="margin: 0px 0px; padding: 0px 0px;" >
                                   
                                   <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 t5" style="margin: 5px 0px 0px 10px; padding: 0px 0px;">
                                           <img src="<?php echo $path; ?>" alt="" style="width: 150px; height: 150px; border: 1px solid black">
                                           <p style="color: red; font-size: 25px">2024 - 2025</p>

                                          
                                   </div>

                                   
                                   <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 t6" style="margin: 25px 0px 0px 30px; padding: 0px 0px;">

                                   <p style="color:  rgb(167, 8, 8);"><big><b id="b1"><?php echo strtoupper($name); ?></b></big></p>

                                      
                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                 <p><b>MSBTE-No -</b><big> <?php echo $enno2; ?></big></p>
                                                 <p><b>Class - </b><big><?php echo $branch; ?></big></p>
                                                 <p><b>Mo.No - </b><big><?php echo $mobile; ?></big></p>
                                                 <p><b>Blood-Group </b> - <big><?php echo $blood; ?></big></p>
                                      </div>
                                      
                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                 <p><b>CLG-PRN No -</b><big> <?php echo $enno; ?></big></p>
                                                 <p><b>Year - </b><big><?php echo $year; ?></big></p>
                                                 <p><b>Add - </b><big><?php echo $address; ?></big></p>
                                                 <p><b>UID -</b><big> <?php echo $adhar; ?></big></p>
                                      </div>
                                      
                                     
                                   </div>
                                    
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" style="margin: 35px 0px 0px 30px; padding: 0px 0px;">
                                           
                                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                           <img src="../image/signature1.png" alt=""  style="width: 150px; height: 50px">
                                           <p>Librarian</p>
                                           </div>
                                           
                                        
                                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                 <img src="../image/sign.png" alt=""  style="width: 150px; height: 50px;">
                                                 <p style="text-align: center">Principle</p>
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
