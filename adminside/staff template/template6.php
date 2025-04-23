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
                     }
                     */
                     .createuser1{
                            z-index: 2;
                            position: relative;
                     }
                     .createuser2,.createuser3{
                            top: 50px;
                            padding: 20px;
                            background-color: white;
                            box-shadow: 1px 1px 10px black;
                            border-radius: 10px;
                      }
                      .createuser2{
                            margin: -30px 30px 0px 30px;
                            /* border: 1px solid black; */
                      }
                      .user0{
                            z-index: 1;
                            height: 200%;
                            background-color: rgba(45, 42, 42, 0.59);
                     }
                    .t2{
                     background-image: url("../image/back1.jpg");
                     height: 300px;
                     background-size: 100% 100%;
                     border: 1px solid #333;
                     padding: 5px;
                    }
                    .t3{
                     text-align: center;
                     margin:30px 0px 0px 155px;
                    }
                    img{
                     width: 110px;
                     height: 110px;
                     margin: 20px 0px 0px 10px;
                    }
                    .t4{
                     margin:-115px 0px 0px 200px;
                    }
                    .t6{
                     padding: 10px;
                    }
                   

              </style>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
             
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px">
                      
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" style="margin: 0px">
                              
                            
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 t6">
                                         
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t2">
                                         
                                        
                                       <div class="col-xs-8 col-sm-8 col-md-8 col-lg-9 t3">
                                          <p><small>Marathwada Shikshan Prasarak Mandal's</small></p>
                                          <p><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</small></b></p> 
                                          </div>
                                          <img src="<?php echo $path; ?>" alt="">
                                             
                                              <div class="t4">
                                              <p><small><b>Name:</b> <?php  echo $name; ?></small></p>
                                             <p><small><b>Work :</b> <?php  echo $work; ?></small></p>
                                             <p><small><b>Mo.No : </b><?php  echo $mobile1; ?> </small></p>
                                             <p><small><b>UID : </b><?php echo $adhar; ?></small></p>
                                             <p><smallb><b>Address : </b><?php echo $address; ?></small></p>
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
