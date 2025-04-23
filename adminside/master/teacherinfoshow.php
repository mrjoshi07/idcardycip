<?php
       require("../dbcon.php");
       // include("../staff template/sessioneid.php");
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
              <style>
                     .createuser1{
                           position: relative;
                         
                     }
                     .createuser2,.createuser3{
                            top: 50px;
                            padding: 20px;
                            background-color: rgba(255, 255, 255, 0.78);
                            box-shadow: 1px 1px 10px black;
                            /* border-radius: 10px; */
                            z-index: 2;
                          
                      }
                      .user0{
                            z-index: 1;
                            height: 120%;
                            background-color: rgba(45, 42, 42, 0.59);
                     }
              </style>
              <!-- <script>
                     function setEqualHeight() {
                     var d2 = document.getElementsByTagName("body");
                     var d3 = document.getElementsByClassName("user0");

                     d3.style.height = d2.offsetHeight+ "px";
                     
                     }
                     window.onload=setEqualHeight;
                     window.onresize = setEqualHeight;
              </script> -->
       </head>
       <body style=" background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     include("../savepages/search.php");
              ?>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute; padding: 0px">
                     
              </div>
              
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                     
               </div>
                     
             
              <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="margin: 0px 0px; padding: 0px 10px; top: 50px; z-index: 2;">
              
                     <form action="" method="POST" role="form">
                            <div class="form-group">
                                   <input type="text" class="form-control" id="txtsearchname" placeholder="Search">
                            </div>
                     </form>
                     
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px 0px; padding: 0px 10px">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" style="margin: 0px 0px; padding: 10px 10px">
                     
                      <div class="table-responsive">
                                   <table class="table table-hover table-bordered">
                                   <thead>
                                   <tr>
                                          <th>No</th>
                                          <th>Name</th>
                                          <th style="display: none">Type</th>
                                          <th>Work</th>
                                          <th>Adhar</th>
                                          <th>Blood-Group</th>
                                          <th>Mobile1</th>
                                          <th>Mobile2</th>
                                          <th>Address</th>
                                          <th>Update</th>
                                          <th>Creat</th>
                                          <th>Delete</th>
                                   </tr>
                            </thead>
                            <tbody id="display">
                                  <?php
                                          $i=1;
                                          $sql="select *from tblteachinfo";
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo "<tr id='t1'>";
                                                        echo "<td>".$i; "</td>";
                                                        echo "<td>".$row["name"]; "</td>";
                                                        echo "<td style='display: none'>".$row["usertype"]; "</td>";
                                                        echo "<td>".$row["work"]; "</td>";
                                                        echo "<td>".$row["adhar"]; "</td>";
                                                        echo "<td>".$row["bloodg"]; "</td>";
                                                        echo "<td>".$row["mobile1"]; "</td>";
                                                        echo "<td>".$row["mobile2"]; "</td>";
                                                   
                                                        echo "<td>".$row["address"]; "</td>";

                                                 ?>
                                                     <td><a href="teacherupdate.php?btnupdate=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-success">Update</a> </td> 
                                                     
                                                     <td><a href="templatestaff.php?btngetid=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Get-Id-Card</a></td> 

                                                     <td><a href="../savepages/creatstdinfosave.php?btnteachdelete=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">Delete</a></td> 

                                                 <?php
                                                        echo "</tr>";

                                                        $i=$i+1;
                                                 }
                                          }
                                  ?>
                            </tbody>

                                   </table>
                           
                             </div>                                    
                            
                     </div>
                     
              </div>
              
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
