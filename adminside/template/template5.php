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
                            height: 200%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                      }
                      .temp5{
                            background-color: rgba(206, 227, 152, 0.76);
                            border: 2px solid black;
                      }
                      .t1{
                            text-align: center;
                            background-color: rgba(101, 138, 205, 0.57);
                      }
                      .t11 p{
                            margin: 0px 0px;
                            color: white;
                      }
                      .t2,.t5{
                            text-align: center;
                      }
                      .t2 p{
                            margin: 0px;
                            font-weight: bold;
                      }
                      .t3{
                            text-align: center;
                      }
                      .t4 p{
                            margin: 0px;
                      }
                      .t41 p{
                            margin: 1.5px 0px 0px 0px;
                      }
                      .t42 p{
                            margin: 1px 0px 0px 0px;
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
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px 0px 0px; position: absolute">
       </div>
                     
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px 0px 0px 0px;" >  
              
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" >
         
         
         <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
              
         </div>
         

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 temp5" style="margin: 0px 0px 0px 0px; padding: 0px">

             
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t1"  style="margin: 0px 0px 0px 0px; padding: 0px">
              
                 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="margin: 0px 0px 0px 0px; padding: 0px">
                     <img src="../image/logo.png" alt="" style="width: 100px; height: 100px">
                 </div>                 

                 <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 t11" style="margin: 0px 0px 0px 0px; padding: 5px">
                     <p><small>Marathwad Shikshan Prasarak Mandal's</small></p>
                     <p style="color: orange;"><b>Yashawantrao Chavan Institute Of Polytechnic,Beed</b></p>
                     <p><small>Beed - 431122 (MS) Tel. 8275852182</small></p>
                     <p><small>Email : ycip@gmail.com , Website : //ycipbeed.in </small></p>
                 </div>

             </div>
                 
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t2"  style="margin: 0px 0px 0px 0px; padding: 0px">
                     <p>Student ID Card</p>
                     <p>Academic Year 2024-2025</p>
              </div>

              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t3">
                <img src="<?php echo $path; ?>" alt="" style="width: 100px; height: 100px; border: 1px solid black">
                <p style="color:  rgb(247, 28, 28);"><big><b id="b1"><?php echo strtoupper($name); ?></b></big></p>
              </div>
              
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t4">
                     
                     <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
                            
                     </div>
                     
                      <div class="col-xs-6 col-sm-3 col-md-4 col-lg-4 t41">
                            <p>Class - </p>
                            <p>CLG-No -</p> 
                            <p>MSBTE-No -</p> 
                            <p>Mo.No - </p>
                            <p>Blood-Group - </p>
                            <p>Year - </p>
                            <p>UID - </p>
                            <p>Add - </p>
                     </div>
                     
                     <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 t42">
                            <p><b><?php echo $branch; ?></b></p>
                            <p><b><?php echo $enno; ?></b></p>
                            <p><b><?php echo $enno2; ?></b></p>
                            <p><b><?php echo $mobile; ?></b></p>
                            <p><b><?php echo $blood; ?></b></p>
                            <p><b><?php echo $enno; ?></b></p>
                            <p><b><?php echo $year; ?></b></p>
                            <p><b><?php echo $adhar; ?></b></p>
                            <p><b><?php echo $address; ?></b></p>
                     </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 t5">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin: 20px 0px 0px -15px; padding: 0px;">
                     </div>

                     
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin: 0px 0px 0px 0px; padding: 0px;">
                            <img src="../image/sign.png" alt=""  style="width: 100px; height: 50px;">
                            <p style="text-align: center">Principle</p>
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
