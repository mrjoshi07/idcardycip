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
                      .t2{
                            background-image: url("../image/back4.jpg");
                            background-size: 100% 100%;
                            height: auto;
                      }
                      .t3 img{
                            width: 100px;
                            height: 100px;
                       }
                       .t5{
                            text-align: center;
                            padding-top: 10px;
                       }
                       .t3{
                            display: flex;
                            align-items: center;
                            justify-content: center;
                       }
                       .t4{
                            text-align: center;
                            font-family: 'Times New Roman', Times, serif;
                       }
                       .t6{
                            padding-left: 180px;
                            margin-bottom: 70px;
                       }
                       .t7{
                            display: flex;
                            justify-content: center;
                            align-items: center;
                       }
                       
                     @media screen and (max-width:400px){
                          
                           
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
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100% ; ">
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px 0px 0px; position: absolute">
       </div>
                     
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px 0px 0px 0px;" >  
              
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" >
         
         
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              
         </div>
         

              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 t2">
                     
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t7">
                     <img src="../image/logo.png" alt="" style="width:50px; height:50px"> 

                     </div>
                     
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t5">                  
                 <p><small>Marathwada Shikshan Prasarak Mandal's</small><br>
                    <small><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</b></small><br>
                    <small>Vidya Nagari,Barshi Road, Beed-431122, Ph.No.|:8275852182</small>
                    </p>
                     </div>
                     
                   
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t3">
                     <img src="<?php echo $path; ?>" alt="">

                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t4">
                     <h4><?php  echo $name; ?></h4>
                     <h5><?php  echo $work; ?>
                     </h5>
                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t6">
                            <p><small><b>MO.NO : </b><?php  echo $mobile1; ?> </small></p>
                            <p><small><b>UID : </b><?php echo $adhar; ?></small></p>
                            <p><small><b>ADDRESS :</b> <?php echo $address; ?></small></p>
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
