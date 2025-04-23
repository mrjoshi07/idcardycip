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
                            background-color: white;
                            box-shadow: 1px 1px 10px black;
                            border-radius: 10px;
                            right: 40px;
                      }
                      .createuser2{
                            margin: -30px 30px 0px 30px;
                            border: 1px solid black;
                      }
                      .user0{
                            z-index: 1;
                            height: 100%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                     }
                     .logo{
                            text-align: center;
                          
                     }
                     .logo img{
                            height: 70px;
                            width: 70px;
                           
                     }
                     .stdimg{
                            
                            text-align: center;
                     }
                     .stdimg1{
                            width: 100%;
                            height: 150px;
                     }
                     .stdimg1 img{
                            width: 120px;
                            height: 120px;
                     }
                     .stdinfo{
                            margin-left:30px;
                            float: left;
                            text-align: left;  
                     }
                     .stdinfo2{
                            margin-right:30px;
                            float: right;
                            text-align: left;  
                     }
                     .sign{
                            top: 20px;
                     }
                     .sign img{
                            width: 50px;
                            height: 50px;
                     }
                     .m1{
                        font-family:Time;
                     }
                     .sign1{
                            float: left;
                            text-align: left;   
                     }
                     .sign3{
                            float: right;
                            text-align: right;   
                     }
                     p{
                            margin:0px;
                            padding:0px;
                     }
                     #p2{
                                font-size:17px;
                                color:red;
                            }
                            #b1{
                                color:red;
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
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">
              
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
              <div>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px">
                      
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser4" style="margin: 0px">
                             
                             <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin: 0px">
                                   
                             </div>

                             
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 createuser2" >
                                   
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 logo" style="margin: 0px">
                                   <img src="../image/logo.png" alt="">
                                   <p id="p1"><b>Maharashtra State Board of Technical Education</b></p>
                                   <p id="p2"><b>Yashwantrao Chavan Institue of Polytechnic,Beed</b></p>
                                   <p id="p1">Polytechnic College In Bid Rural, Maharashtra</p>
                               </div>
                               
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 stdimg" style="margin: 0px">
                                   <div class="stdimg1">
                                      <img src="<?php echo $path; ?>" alt="">
                                       <p style="color:  rgb(167, 8, 8);"><big><b id="b1"><?php echo strtoupper($name); ?></b></big></p>
                                   </div>
                                 
                               </div>
                               
                               <div class="stdinfo" >
                                   <p class="m1"><b>Branch :- </b></></p>
                                   <p class="m1"><b>Year :- </b></p>
                                   <p class="m1"><b>CLG-En-No :- </b></p>
                                   <p class="m1"><b>MSBTE-No :- </b></p>
                                   <p class="m1"><b>Mobile No :- </b></p>
                                   <p class="m1"><b>UID :- </b></p>
                                   <p class="m1"><b>Blood Group :- </b></p>
                                   <p class="m1"><b>Address :- </b></p>
                               </div>
                               
                               <div class="stdinfo2" >
                                   <p class="m1"><?php echo $branch; ?></p>
                                   <p class="m1"><?php echo $year; ?></p>
                                   <p class="m1"><?php echo $enno; ?></p>
                                   <p class="m1"><?php echo $enno2; ?></p>
                                   <p class="m1"><?php echo $mobile; ?></p>
                                   <p class="m1"><?php echo $adhar; ?></p>
                                   <p class="m1"><?php echo $blood; ?></p>
                                   <p class="m1"><?php echo $address; ?></p>
                               </div>
                               
                                  
                               
                               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sign">
                                   <div class="sign1">
                                          <img src="../image/sign.png" alt="">
                                          <p>Librarian</p>
                                   </div> 
                                 
                                   <div class="sign3">
                                          <img src="../image/sign.png" alt="">
                                          <p>Principle</p>
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
