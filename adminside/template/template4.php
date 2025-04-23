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
                     .main{
                        border:1px solid #333;
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
                     .c1{
                        color:white;
                        text-align:center;
                        font-size:12px;
                        background-color:#00008B;
                        padding:5px;
                        z-index: 4;
                     }
                   
                    #lobo{
                        width:60px;
                        height:60px;
                        border-radius:360px;
                        margin-top:35px;
                    }
                    #p1{
                        color:gold;
                    }
                    big{
                        font-size:20px;
                    }
                    .c2{
                        background-color:#00008B;
                        height:150px;
                        width:200px;
                        border-radius:0px 0px 360px 0px;
                    }
                  
                    .c4{
                        background-color:#00008B;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                    }
                   
                    #img{
                        margin:10px;
                        outline-style: solid;
                        outline-color: white;
                        outline-width: 4px;
                        width:115px;
                        height:115px;
                        border-radius:360px;
                    }
                   
                    .c5{
                        text-align:center;
                        color:#00008B;
                        padding:5px;
                    }
                    #b1{
                        color:#00008B;
                    }
                    .c1 p{
                        padding:0px;
                        margin:0px;
                    }
                    .c6{
                        margin-top:5px;
                        background-color:#00008B;
                        padding:5px;
                    }
                    .c7{
                        background-color:white;
                        border-radius:2px;
                    }
                    .c8{
                        background-color:yellow;
                        border-radius:10px;
                        margin-left:20px;
                        margin:2px;
                        width:140px;
                    }
                    .c9{
                        padding-left:80px;
                        color:white;
                    }
                    #m1{
                        display:flex;
                    }
                    #m1 p{
                        padding: 0px 0px 0px 7px;
                    }
                    .c10{
                        padding:5px;
                    }
                    hr{
                        padding:2px;
                        margin:2px;
                    }
                    .c9 p{
                        margin:0px;
                        padding:0px;
                    }
                    #b2{
                        margin-left:10px;
                        text-shadow:1px 1px 1px #fff;
                    }
                    .v1 p {
                        margin:0px;
                        padding:0px;
                    }
                    #s1{
                        font-weight:bold;
                        text-shadow:1px 1px 1px #333;
                        font-family:Time;
                    }
                   
                   

              </style>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
             
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px">
                      
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" style="margin: 0px">
                              
                              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                
                              </div>
                              
                              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 main">
                                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c1">
                                            
                                            <div class="col-xs-2 col-sm-2col-md-2 col-lg-2 class">
                                                <img src="../image/logo.png" alt="" id="lobo"> 
                                                <span id="s1">YCIP</span>
                                            </div>
                                            
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                            <p id="p1">Marathwada Shikshan Prasarak Mandal's</p>
                                            <p><b><big>YASHWANTRAO CHAVAN INSTITUE OF POLYTECHNIC, BEED</big></b></p>
                                            <P>Vidya Nagari,Barshi Road, Beed-431122, Ph.No.|:8275852182</P>
                                            <p>Approved by AICTE Delhi, DTE Mumbai,Govt.of Maharashtra,</p>
                                            <p>Affiliated to MSBTE, mumbai. DTE:2182 | MSBTE:1158</p>
                                        </div>
                                 </div>
                                       
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c4" style="margin:0px; padding:0px;">
                                    
                                  
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 c3">
                                    <img src="<?php echo $path; ?>" alt="" id="img">
                                    </div>
                                   
                                </div>
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c5">
                                    <h3><b><?php echo strtoupper($name); ?></b></big></p>
                                    </h3>
                                </div>
                                
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 v1">
                                     <p><b id="b1">MSBTE-No :- </b><?php echo $enno2 ?></p>
                                     <p><b id="b1">Class :- </b><?php echo  $year ?></p>
                                     <p><b id="b1">Mobile No :- </b><?php echo $mobile?></p>
                                     <p><b id="b1">Address :- </b><?php echo  $address?></p>

                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 v1">
                                     <p><b id="b1">CLG-No :- </b><?php echo $enno ?></p>
                                     <p><b id="b1">Blood Group :- </b><?php echo $blood?></p>
                                     <p><b id="b1">UID :- </b><?php echo $adhar ?></p>
                                     <p><b id="b1">Date of Birth :- </b><?php echo $branch ?></p>
                                    </div>
                                </div>
                                
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c6">
                                     
                                   
                                   <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 c7">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c8">
                                            Available Course
                                        </div>
                                     
                                   </div>
                                   
                                   <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 c9">
                                        <p>Civil Engineering, Computer Technology ,</p>
                                        <p>E&TC Engg.,Electrical Engg.,Mechanical Engg.</p>
                                   </div>
                                   
                                   
                                     
                                </div>                                      
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 c10">
                                    <hr>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="m1">
                                        
                                        <span class="glyphicon glyphicon-record" aria-hidden="true" style="margin-right:5px;"></span>
                                        
                                    <p>https://ycipbeed.in</p>
                                    </div>
                                    
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="m1">
                                        
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-right:5px;"></span>
                                        
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
