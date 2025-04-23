<?php
       require("../dbcon.php");
     
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
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
              <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
              <!--[if lt IE 9]>
                     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
                     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->

              <style>
                     /* div{
                            border: 1px solid black;
                     } */
                     .createuser1{
                            position: relative;
                            z-index: 2;
                          
                     }
                     .createuser2,.createuser3{
                            top: 70px;
                            padding: 20px;
                            background-color: rgba(255, 255, 255, 0.59);
                            box-shadow: 1px 1px 10px black;
                            border-radius: 10px;
                            right: 40px;
                      }
                      .createuser2{
                            margin: 0px 30px 0px 30px;
                      }
                      .user0{
                            z-index: 1;
                            height: 100%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                     }
                   
                     @media screen and (max-width:400px){
                            .createuser2{
                               margin-left:40px;
                            }
                     }
              </style>

              
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
              ?>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1">
                     
              
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     
              </div>
              
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 createuser2">
                            
                            <form action="../savepages/creatstdinfosave.php" method="POST" role="form" enctype="multipart/form-data">
                           
                                   <legend class="text-center">Create Staff Information</legend>
                                 
                                   <?php
                                          require("../dbcon.php");
                                          $sql="select max(id) from tblteachinfo";
                                          $res=mysqli_query($link,$sql);
                                          $rowcount=0;
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 if($row=mysqli_fetch_array($res))
                                                 {
                                                        $rowcount=$row[0]+1;
                                                 }
                                          }
                                          else
                                          {
                                                 $rowcount=1;
                                          } 
                                   ?> 
                                   
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <div class="form-group" style="display: none;">
                                          <input type="text" class="form-control" id="txtid" name="txtid" value=" <?php echo $rowcount ?>" readonly>

                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtidusertype" name="txtidusertype" autocomplete="off" placeholder="Type" list="dlist" require>
                                          <datalist id="dlist">
                                                 <?php
                                                        $sql="select * from tblidusertype";
                                                        $res=mysqli_query($link,$sql);
                                                       
                                                        if(mysqli_num_rows($res)> 0)
                                                        {
                                                               while( $row=mysqli_fetch_array($res) )
                                                               {
                                                                      if($row[1]!='Student')
                                                                      {
                                                                      ?>
                                                                      <option value="<?php echo $row[1]; ?>"> <?php echo $row[1]; ?> </option>
                                                                      <?php
                                                                      }
                                                               }
                                                        }
                                                 ?>
                                          </datalist>
                                         
                                   </div>
                                
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtname" name="txtname" placeholder="Full-Name" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtwork" name="txtwork" placeholder="Work" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtuid" name="txtuid" placeholder="Adhar-Card No" autocomplete="off" require>
                                   </div>

                                  
                               </div>  
                               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtmobile2" name="txtmobile2" placeholder="Mobile-NO-1" autocomplete="off" require>
                                   </div>
                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtmobile1" name="txtmobile1" placeholder="Mobile-NO-2" autocomplete="off">
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtbloodg" name="txtbloodg" placeholder="Blood-Group" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          <input type="text" class="form-control" id="txtaddress" name="txtaddress" placeholder="Address" autocomplete="off" require>
                                   </div>
                                   
                                  
                             </div>   
                             <div class="form-group" style="padding: 0px 14px">
                                          <input type="file" class="form-control" id="txtphoto" name="txtphoto" placeholder="Photo" autocomplete="off" require>
                            </div>  
                             
                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <button type="submit" name="btnteachsave" id="btnteachsave" class="btn btn-primary btn-block">Submit</button>
                             </div>

                        </form>
                            
                            <script>
                                   $(function(){
                                          $("#btnimport").click(function(){
                                                open('importexcelstaff.php','_self'); 
                                          })
                                   });
                            </script>
                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <button  id="btnimport" class="btn btn-success btn-block">Import-File</button>
                             </div>
                           
                     </div>
              </div>
              <script>
                     // window.onload = function get_body() {
                            
                     //        let body=document.getElementByTagName("body");
                     //        let bheight= getComputedStyle(body);
                           
                     //        console.log(bheight.getPropertyValue('height'));
                     //        alert(bheight);
                     //  };
              </script>
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
