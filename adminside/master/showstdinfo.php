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
              <style>
                     /* div{
                            border: 1px solid black;
                     } */
                     .createuser1{
                            z-index: 2;
                            position: relative;
                            
                     }
                     .createuser2,.createuser3{
                            top: 60px;
                            padding: 20px;
                            background-color: rgba(255, 255, 255, 0.78);
                            box-shadow: 1px 1px 10px black;
                          
                      }
                      .createuser2{
                            /* margin: 0px 30px 0px 30px; */
                      }
                      .user0{
                            z-index: 1;
                            height: 100%;
                            background-color: rgba(45, 42, 42, 0.59);
                   
                     }
                     span{
                            color: white;
                            font-size: 18px;
                            padding: 10px;
                     }
              </style>
              <script>
                     $(function(){
                            $(".check").hide();
                            $(".span").click(function(){
                                   $(".check").toggle();
                            });
                    
                    
                     // var tableControl= document.getElementById('mytable');
                     // $("#display").on("click","tr",function(event){
                     //        var values=[];
                     //        var count=0;
                     //        $(this).find("td").each(function(){
                     //               values[count]=$(this).text();
                     //               count++;
                     //        });
                            // var result=[];
                            // var id=0;
                            // result[id]=.val(values[2]);
                            // $("#txtsearchname").val(values[2]);  
                            // alert(id);
                            // $('input:checkbox:checked', tableControl).each(function() {
                            //        result.push($(this).parent().next().text());
                            // });
                            // alert(result);
                     });

              // });
              </script>
       </head>
       <body style="background-image: url('../image/backgr3.jpg'); background-size: 100%;">
              <?php
                     include("../header/header.php");
                     include("../header/menubar.php");
                     include("../savepages/search.php");
              ?>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 user0" style="margin: 0px 0px; position: absolute">
                     
              </div>
              
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser1" style="margin: 0px 0px; padding:        10px 10px">
                     
              
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="margin: 0px 0px; padding: 0px 10px; top: 50px">
                     
                     <span class="glyphicon glyphicon-align-left span" aria-hidden="true"></span>
                     
              </div>
              
      
               <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="margin: 0px 0px; padding: 0px 10px; top: 50px">
                     
                     <form action="" method="POST" role="form">
                            <div class="form-group">
                                   <input type="text" class="form-control" id="txtsearchname" placeholder="Search">
                            </div>
                     </form>
                     
              </div>
              
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 createuser2" style="margin: 0px 0px; padding: 10px 10px">

                             <div class="table-responsive">
                                   <table class="table table-hover" id="mytable">
                                   <thead>
                                   <tr>
                                          <th class="check"></th>
                                          <th>No</th>
                                          <th>CLG-En-No</th>
                                          <th>MSBTE-En-No</th>
                                          <th>Name</th>
                                          <th>Branch</th>
                                          <th>Year</th>
                                          <th>Adhar</th>
                                          <th>Blood-Group</th>
                                          <th>Mobile</th>
                                          <th>Address</th>
                                          <th>Update</th>
                                          <th>Create-Idcard</th>
                                          <th>Delete</th>
                                   </tr>
                            </thead>
                            <tbody id="display">
                                  <?php
                                          $i=1;
                                          $sql="select *from tblstdinfo";
                                          $res=mysqli_query($link,$sql);
                                          if(mysqli_num_rows($res)>0)
                                          {
                                                 while($row=mysqli_fetch_array($res))
                                                 {
                                                        echo "<tr id='t1'>";
                                                        echo "<td class='check'><input id='check2' type='checkbox' name='check[]'></td>";
                                                        echo "<td>".$i; "</td>";
                                                        echo "<td>".$row["enNo"]; "</td>";
                                                        echo "<td>".$row["enno2"]; "</td>";
                                                        echo "<td>".$row["name"]; "</td>";
                                                        echo "<td>".$row["branch"]; "</td>";
                                                        echo "<td>".$row["year"]; "</td>";
                                                        echo "<td>".$row["adhar"]; "</td>";
                                                        echo "<td>".$row["blood"]; "</td>";
                                                        echo "<td>".$row["mono"]; "</td>";
                                                        echo "<td>".$row["address"]; "</td>";

                                                 ?>
                                                     <td><a href="updatestudentinfo.php?btnupdate=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-success">Update</a> </td> 
                                                     
                                                     <td><a href="template.php?btngetid=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-primary">Get-Id-Card</a></td> 

                                                     <td><a href="../savepages/creatstdinfosave.php?btndelete=&id=<?php echo $row["id"]; ?>" type="button" class="btn btn-danger">Delete</a></td> 

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
