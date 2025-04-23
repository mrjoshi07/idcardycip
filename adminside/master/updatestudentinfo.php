<?php
       require("../dbcon.php");
       if(isset($_GET["btnupdate"]))
       {   
              $id=trim($_GET["id"]);
       }
       else
       {
              echo "<script>alert('Record Not Found')</script>";
              echo "<script>open('showstudentinfo.php','_self')</script>";
       }

       $sql="select *from tblstdinfo where id='$id'";
       $res=mysqli_query($link,$sql);
       if(mysqli_num_rows($res)>0)
       {
              if($row=mysqli_fetch_array($res))
              {
                     $usertype=trim($row["usertype"]);
                     $enno=trim($row["enNo"]);
                     $enno2=trim($row["enno2"]);
                     $name=trim($row["name"]);
                     $branch=trim($row["branch"]);
                     $year=trim($row["year"]);
                     $adhar=trim($row["adhar"]);
                     $blood=trim($row["blood"]);
                     $mobile=trim($row["mono"]);
                     $address=trim($row["address"]);
                     $path=trim($row["photo"]);
              }
       }
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
                            z-index: 2;
                            position: relative;
                     }
                     .createuser2,.createuser3{
                            top: 100px;
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
                    
              </style>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              <?php
                     include("../header/header.php");
                    
              ?>
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1">
                     
              
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                     
              </div>
              
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 createuser2">
                            
                            <form action="../savepages/creatstdinfosave.php" method="POST" role="form" enctype="multipart/form-data">
                           
                                   <legend class="text-center">Update Student Info</legend>
                                 
                               
                                   
                              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <div class="form-group" style="display: none;">
                                          <label for=""></label>
                                          <input type="text" class="form-control" id="txtid" name="txtid" value=" <?php echo $id ?>" readonly>
                                   </div>

                                   <div class="form-group" style="display: none;">
                                          <label for=""></label>
                                          <input type="text" class="form-control" id="txtusertype" name="txtusertype" value=" <?php echo $usertype ?>" list="dlist" >
                                          <datalist id="dlist">
                                                 <?php
                                                        $sql="select * from tblidusertype";
                                                        $res=mysqli_query($link,$sql);
                                                       
                                                        if(mysqli_num_rows($res)> 0)
                                                        {
                                                               while( $row=mysqli_fetch_array($res) )
                                                               {
                                                                      if($row[1]=='Student')
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
                                     
                                          <input type="text" class="form-control" id="txtenno" name="txtenno" placeholder="Enrollment-No" value=" <?php echo $enno ?>" autocomplete="off" require>
                                   </div>
                            
                                   <div class="form-group">
                                      
                                          <input type="text" class="form-control" id="txtstdname" name="txtstdname" placeholder="Full-Name" value=" <?php echo $name ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                       
                                          <input type="text" class="form-control" id="txtbranch" name="txtbranch" placeholder="Branch" value=" <?php echo $branch ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                       
                                          <input type="text" class="form-control" id="txtyear" name="txtyear" placeholder="Year" value=" <?php echo $year ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                         
                                          <input type="text" class="form-control" id="txtuid" name="txtuid" placeholder="Adhar-Card No" value=" <?php echo $adhar ?>" autocomplete="off" require>
                                   </div>
                               </div>  
                               <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <div class="form-group">
                                        
                                          <input type="text" class="form-control" id="txtenno2" name="txtenno2" placeholder="MSBTE-Enrollment No" value=" <?php echo $enno2 ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                        
                                          <input type="text" class="form-control" id="txtmobile" name="txtmobile" placeholder="Mobile-NO" value=" <?php echo $mobile ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                          
                                          <input type="text" class="form-control" id="txtbloodg" name="txtbloodg" placeholder="Blood-Group" value=" <?php echo $blood ?>" autocomplete="off" require>
                                   </div>

                                   <div class="form-group">
                                      
                                          <input type="text" class="form-control" id="txtaddress" name="txtaddress" placeholder="Address" value=" <?php echo $address ?>" autocomplete="off" require>
                                   </div>
                                  
                                   <div class="form-group">
                                       
                                          <input type="file" class="form-control" id="txtphoto" name="txtphoto" placeholder="Photo" value="<?php echo $path ?>" autocomplete="off" >
                                   </div>
                             </div>
                             
                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <button type="submit" name="btnupdate" id="btnupdate" class="btn btn-primary btn-block">Update</button>
                             </div>

                             <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                   <button type="button" class="btn btn-danger btn-block" onclick="op()">Exit</button> 
                             </div>
                                     
                            <script>
                                   function op()
                                   {
                                          open('showstdinfo.php','_self');
                                   }
                            </script>
                            </form>
                            
                     </div>
                     
                     
                
                     
                    
                     
              </div>
              
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
