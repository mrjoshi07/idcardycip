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
                        background-color: #D55209;
                        height: auto;
                        color: white;
                      }
                      .t2{
                        background-color: white;
                        height: 400px;
                        width:100px;
                      }
                      body {
            font-family: Arial, sans-serif;
        }
        .parallelogram {
	width: 100px;
	height: 50px;
	transform: skew(-30deg);
	background: #FFF;
        border:1px solid #333;
       }
        .card-template {
            max-width: 600px;
            background: #D14224;
            color: white;
            padding: 20px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }
        .parallelogram {
              border: none;
              width: 140px;
              height: 320px;
              color:black;
              left: 30px;
              display: flex;
              align-items: center;
              justify-content: center;
              background-color: white; /* Or any color */
              transform: skew(-20deg); /* Keeps the parallelogram shape */
              overflow: hidden; /* Prevents content from overflowing the skew */
              }

              .img1 {
              width: 130px;
              height: 130px;
              color:purple;
              font-family: Helvetica;     
               transform: skew(20deg); /* Neutralizing the skew effect */
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
              

              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 t1" >

                           
                     
                 

                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            
                      
                           
                           <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 parallelogram">
                                   <div class="img1">
                                          <img src="<?php echo $path; ?>" alt="" style="width:100px; height:100px; border-radius:10px; margin-left:10px;">
                                          <p style="text-align:center; margin-left:-57px;padding:4px;"><b>Principal</b> <br>
                                         <span style="font-size:12px;"> Yashwantrao Chavan Institute of Polytechnic<br> Beed</span></p>
                                   </div>
                           </div>
                          
                          
                            
                         
                            
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="left: 80px">
                            <img src="../image/logo.png" alt="" style="width:70px; height:70px; margin-left:100px;">
                           
                          
                                   <h3 style="text-align:center; padding:0px; margin:0px;"> <?php  echo $name; ?></h3>
                                   <p style="text-align:center;"> <?php  echo $work; ?></small></p>

                                   <p style="text-align: center"></p>
                                   <p style="text-align: center"><small>Marathwada Shikshan Prasarak Mandal's</small> <br><b>YASHWANTRAO CHAVAN INSTITUTE OF POLYTECHNIC, BEED</b></p> 
                                   <hr style="padding:0px; margin:0px;">
                                   <p style="text-align: center;"><?php echo $address ?> &nbsp;| <?php echo  $mobile1; ?> &nbsp;|  <?php  echo $bloodg; ?> <br><b>UID : </b><?php echo $adhar; ?></small></p>
                                   <p><small></small></p>
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
