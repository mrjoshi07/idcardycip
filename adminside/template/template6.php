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
                            border: 1px solid black;
                      }
                      .user0{
                            z-index: 1;
                            height: 200%;
                            background-color: rgba(45, 42, 42, 0.59);
                     }
                     #img{
                        width:80px;
                        height:100px;
                     }
                     #img1{
                        width:130px;
                        height:150px;
                     }
                     .c1{
                        padding-top:30px;
                        text-align:center;
                     }
                     .c2{
                        background-color:blue;
                        color:white;
                        text-align:center;
                     }
                     .c3{
                        padding-top:10px;
                     }
                     .c4 p{
                        padding:0px 1px 0px 0px;
                        margin:0px 1px 0px 0px;
                     }
                     .c5{
                        margin-top:17px;
                     }
                     .c6{
                        box-shadow:1px 1px 10px  #333;
                        border-radius:20px;
                     }
                     @media screen and (max-width:400px){
                        
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
                            
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c6">
    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                            <img src="../image/logo.png" alt="" id="img">
                                        </div>
                                        
                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 c1">
                                            <p><big><b>YASHWANTRAO CHAVAN INSTITUE OF POLYTECHNIC, BEED</big></b></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c2">
                                        <h4><b>Vidya Nagari,Barshi Road, Beed-431122</b></h4>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c3">
                                         
                                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <img src="<?php echo $path; ?>" alt="" id="img1">
                                            </div>
                                            
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c5">
                                                
                                                <img src="../image/sign.png" class="img-responsive" alt="Image">
                                                <span><b>Principal Sign</b></span>
                                                
                                            </div>
                                            
                                         
                                         </div>
                                         
                                         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 c4">
                                         <p style="color:  rgb(167, 8, 8); text-align: center;"><big><b id="b1"><?php echo strtoupper($name); ?></b></big></p>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <p><b id="b1">MSBTE Enroll No :- </b><?php echo $enno2 ?></p>
                                            <p><b id="b1">CLG-No :- </b><?php echo $enno2 ?></p>
                                                <p><b id="b1">Class :- </b><?php echo  $year ?></p>
                                                <p><b id="b1">Mobile No :- </b><?php echo $mobile?></p>
                                                <p><b id="b1">Address :- </b><?php echo  $address?></p>
                                                <p><b id="b1">Blood Group :- </b><?php echo $blood?></p>
                                                <p><b id="b1">Aadhar No :- </b><?php echo $adhar ?></p>
                                                <p><b id="b1">Date of Birth :- </b><?php echo $branch ?></p>
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                
                                            </div>
                                            
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                            <img src="../image/signature1.png" class="img-responsive" alt="Image">
                                            <span><b>Student's Sign</b></span>
                                            </div>
                                            
                                           
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
