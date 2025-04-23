<?php
       session_start();
       require("dbcon.php");
       use PhpOffice\PhpSpreadsheet\IOFactory;
       use PhpOffice\PhpSpreadsheet\Reader\Xlsx; 
       if(isset($_POST["btnsave"]))
       {
              
              $id=trim($_POST["txtid"]);
              $usertype=trim($_POST["txtusertype"]);
              $enno=trim($_POST["txtenno"]);
              $enno2=trim($_POST["txtenno2"]);
              $name=trim($_POST["txtstdname"]);
              $branch=trim($_POST["txtbranch"]);
              $year=trim($_POST["txtyear"]);
              $bloodg=trim($_POST["txtbloodg"]);
              $mobile=trim($_POST["txtmobile"]);
              $address=trim($_POST["txtaddress"]);
              $adhar=trim($_POST["txtuid"]);

              $fname=trim($_FILES["txtphoto"]["name"]);
              $ftempname=trim($_FILES["txtphoto"]["tmp_name"]);
              move_uploaded_file($ftempname,"../studentimg/".$fname);
              $path="../studentimg/".$fname;
              $sql="insert into tblstdinfo values('$id','$usertype','$enno','$enno2','$name','$branch','$year','$adhar','$path','$bloodg','$mobile','$address')";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Inserted')</script>";
                     echo "<script>open('../master/creatstudentinfo.php','_self')</script>";
              }
       }
       else if(isset($_POST["btnupdate"]))
       {
              $id=trim($_POST["txtid"]);
              $usertype=trim($_POST["txtusertype"]);
              $enno=trim($_POST["txtenno"]);
              $enno2=trim($_POST["txtenno2"]);
              $name=trim($_POST["txtstdname"]);
              $branch=trim($_POST["txtbranch"]);
              $year=trim($_POST["txtyear"]);
              $bloodg=trim($_POST["txtbloodg"]);
              $mobile=trim($_POST["txtmobile"]);
              $address=trim($_POST["txtaddress"]);
              $adhar=trim($_POST["txtuid"]);

              $fname=trim($_FILES["txtphoto"]["name"]);
              $ftempname=trim($_FILES["txtphoto"]["tmp_name"]);
              move_uploaded_file($ftempname,"../studentimg/".$fname);
              $path="../studentimg/".$fname;

              $sql="update tblstdinfo set usertype='$usertype',enNo='$enno',enno2='$enno2',name='$name',branch='$branch',year='$year',adhar='$adhar',photo='$path',blood='$bloodg',mono='$mobile',address='$address' where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Updated')</script>";
                     echo "<script>open('../master/showstdinfo.php','_self')</script>";
              }
              
       }
       else if(isset($_GET["btndelete"]))
       {
              $id=$_GET["id"]; 
              $sql="delete from tblstdinfo where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Deleted')</script>";
                     echo "<script>open('../master/showstdinfo.php','_self')</script>";
              }
       }
       else if(isset($_POST["btnstdexcelsave"]))
       {
              // Load the database configuration file 
          
              // Include PhpSpreadsheet library autoloader 
              require_once '../vendor/autoload.php'; 
            
                  // Allowed mime types 
                  $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
                   
                  // Validate whether selected file is a Excel file 
                  if(!empty($_FILES['txtexcelfile']['name']) && in_array($_FILES['txtexcelfile']['type'], $excelMimes))
                  { 
                       
                      // If the file is uploaded 
                      if(is_uploaded_file($_FILES['txtexcelfile']['tmp_name']))
                      { 
                          $reader = new Xlsx(); 
                          $spreadsheet = $reader->load($_FILES['txtexcelfile']['tmp_name']); 
                          $worksheet = $spreadsheet->getActiveSheet();  
                          $worksheet_arr = $worksheet->toArray(); 
               
                          // Remove header row 
                          unset($worksheet_arr[0]); 
               
                          foreach($worksheet_arr as $row)
                          { 
                              $id = trim($row[0]);
                              $usertype=trim($row[1]);
                              $enno1 = trim($row[2]);
                              $enno2 =trim($row[3]);
                              $name= trim($row[4]);
                              $branch=trim($row[5]);
                              $year= trim($row[6]);
                              $adhar= trim($row[7]);
                              $blood= trim($row[8]);
                              $mono= trim($row[9]);
                              $address= trim($row[10]);
                              $path= trim($row[11]);
               
                              // $sql="insert into tblstdinfo values('$id','$enno1','$enno2','$name','$branch','$year','$adhar','$path','$blood','$mono','$address')";
                              // if(mysqli_query($link,$sql))
                              // {
                              //        echo "<script>alert('Excel Record is Imported')</script>";
                              //        echo "<script>open('../master/showstdinfo.php','_self')</script>";
                              // }
                              // Check whether member already exists in the database with the same email 
                              $sql = "select * from tblstdinfo where enNo='$enno1'"; 
                              $res=mysqli_query($link,$sql);
                              if($res->num_rows > 0)
                              { 
                                  $fname=trim($_FILES["path"]["name"]);
                                  $ftempname=trim($_FILES["path"]["tmp_name"]);
                                  move_uploaded_file($ftempname,"../studentimg/".$fname);
                                  $path="../studentimg/".$fname;
                                  // Update member data in the database 
                                  // $db->query("UPDATE members SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'"); 
                                  $sql="update tblstdinfo set id='$id',enno2='$enno2',name='$name',branch='$branch',year='$year',adhar='$adhar',photo='$path',blood='$blood',mono='$mono',address='$address' where enNo='$enno1'";
                                  if(mysqli_query($link,$sql))
                                  {
                                         echo "<script>alert('Excel Record is Updated/Inserted')</script>";
                                         echo "<script>open('../master/showstdinfo.php','_self')</script>";
                                  }   
                              }
                              else
                              { 
                                  // Insert member data in the database 
                                  // $db->query("INSERT INTO members (first_name, last_name, email, phone, status, created, modified) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone."', '".$status."', NOW(), NOW())"); 
                                  $fname=trim($_FILES["path"]["name"]);
                                  $ftempname=trim($_FILES["path"]["tmp_name"]);
                                  move_uploaded_file($ftempname,"../studentimg/".$fname);
                                  $path="../studentimg/".$fname;
              
                                  $sql="insert into tblstdinfo values('$id','$usertype','$enno1','$enno2','$name','$branch','$year','$adhar','$path','$blood','$mono','$address')";
                                  if(mysqli_query($link,$sql))
                                  {
                                         echo "<script>alert('Excel Record is Imported')</script>";
                                         echo "<script>open('../master/creatstudentinfo.php','_self')</script>";
                                  }
                              } 
                       } 
                           
                          // $qstring = '?status=succ'; 
                      }
                      else
                      { 
                          // $qstring = '?status=err'; 
                      } 
                  }
                  else
                  { 
                      $qstring = '?status=invalid_file'; 
                  } 
               
       }
              // Redirect to the listing page 
              // header("Location: index.php".$qstring); 

       //Teacher Update , Save and Delete code started from here
       
       else if(isset($_POST["btnteachsave"]))
       {
              $id=trim($_POST["txtid"]);
              $usertype=trim($_POST["txtidusertype"]);
              $name=trim($_POST["txtname"]);
              $work=trim($_POST["txtwork"]);
              $bloodg=trim($_POST["txtbloodg"]);
              $mobile1=trim($_POST["txtmobile1"]);
              $mobile2=trim($_POST["txtmobile2"]);
              $address=trim($_POST["txtaddress"]);
              $adhar=trim($_POST["txtuid"]);

              $fname=trim($_FILES["txtphoto"]["name"]);
              $ftempname=trim($_FILES["txtphoto"]["tmp_name"]);
              move_uploaded_file($ftempname,"../teacherimg/".$fname);
              $path="../teacherimg/".$fname;
              $sql="insert into tblteachinfo values('$id','$usertype','$name','$work','$mobile1','$bloodg','$address','$mobile2','$path','$adhar')";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Inserted')</script>";
                     echo "<script>open('../master/teacheridcreate.php','_self')</script>";
              }
              
       }
       else if(isset($_POST["btnteachupdate"]))
       {
              $id=trim($_POST["txtid"]);
              $usertype=trim($_POST["txtusertype"]);
              $name=trim($_POST["txtname"]);
              $work=trim($_POST["txtwork"]);
              $bloodg=trim($_POST["txtbloodg"]);
              $mobile1=trim($_POST["txtmobile1"]);
              $mobile2=trim($_POST["txtmobile2"]);
              $address=trim($_POST["txtaddress"]);
              $adhar=trim($_POST["txtuid"]);

              $fname=trim($_FILES["txtphoto"]["name"]);
              $ftempname=trim($_FILES["txtphoto"]["tmp_name"]);
              move_uploaded_file($ftempname,"../teacherimg/".$fname);
              $path="../teacherimg/".$fname;

              $sql="update tblteachinfo set usertype='$usertype',name='$name',work='$work',bloodg='$bloodg',adhar='$adhar',mobile1='$mobile1',mobile2='$mobile2',address='$address', photo='$path' where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Updated')</script>";
                     echo "<script>open('../master/teacherinfoshow.php','_self')</script>";
              }
              
       }
       else if(isset($_POST["btnteachexcelsave"]))
       {
                // Load the database configuration file 
          
              // Include PhpSpreadsheet library autoloader 
              require_once '../vendor/autoload.php'; 
                   
                  // Allowed mime types 
                  $excelMimes = array('text/xls', 'text/xlsx', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); 
                   
                  // Validate whether selected file is a Excel file 
                  if(!empty($_FILES['txtexcelfile']['name']) && in_array($_FILES['txtexcelfile']['type'], $excelMimes))
                  { 
                       
                      // If the file is uploaded 
                      if(is_uploaded_file($_FILES['txtexcelfile']['tmp_name']))
                      { 
                          $reader = new Xlsx(); 
                          $spreadsheet = $reader->load($_FILES['txtexcelfile']['tmp_name']); 
                          $worksheet = $spreadsheet->getActiveSheet();  
                          $worksheet_arr = $worksheet->toArray(); 
               
                          // Remove header row 
                          unset($worksheet_arr[0]); 
               
                          foreach($worksheet_arr as $row)
                          { 
                            $id = trim($row[0]);
                            $usertype=trim($row[1]);
                            $name=trim($row[2]);
                            $work=trim($row[3]);
                            $bloodg=trim($row[4]);
                            $mobile1=trim($row[5]);
                            $mobile2=trim($row[6]);
                            $address=trim($row[7]);
                            $adhar=trim($row[8]);
                            $path=trim($row[9]);
                              // $sql="insert into tblstdinfo values('$id','$enno1','$enno2','$name','$branch','$year','$adhar','$path','$blood','$mono','$address')";
                              // if(mysqli_query($link,$sql))
                              // {
                              //        echo "<script>alert('Excel Record is Imported')</script>";
                              //        echo "<script>open('../master/showstdinfo.php','_self')</script>";
                              // }
                              // Check whether member already exists in the database with the same email 
                              $sql = "select * from tblteachinfo where id='$id'"; 
                              $res=mysqli_query($link,$sql);
                              if($res->num_rows > 0)
                              { 
                                   $fname=trim($_FILES["path"]["name"]);
                                   $ftempname=trim($_FILES["path"]["tmp_name"]);
                                   move_uploaded_file($ftempname,"../teacherimg/".$fname);
                                   $path="../teacherimg/".$fname;
                                  // Update member data in the database 
                                  // $db->query("UPDATE members SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', phone = '".$phone."', status = '".$status."', modified = NOW() WHERE email = '".$email."'"); 
                                  $sql="update tblteachinfo set usertype='$usertype',name='$name',work='$work',bloodg='$bloodg',adhar='$adhar',mobile1='$mobile1',mobile2='$mobile2',address='$address', photo='$path' where id='$id'";

                                  if(mysqli_query($link,$sql))
                                  {
                                         echo "<script>alert('Record Updated')</script>";
                                         echo "<script>open('../master/teacherinfoshow.php','_self')</script>";
                                  }
                              }
                              else
                              { 
                                  // Insert member data in the database 
                                  // $db->query("INSERT INTO members (first_name, last_name, email, phone, status, created, modified) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone."', '".$status."', NOW(), NOW())"); 
                                  $fname=trim($_FILES["path"]["name"]);
                                  $ftempname=trim($_FILES["path"]["tmp_name"]);
                                  move_uploaded_file($ftempname,"../studentimg/".$fname);
                                  $path="../studentimg/".$fname;
              
                                   $sql="insert into tblteachinfo values('$id','$usertype','$name','$work','$mobile1','$bloodg','$address','$mobile2','$path','$adhar')";
                                   if(mysqli_query($link,$sql))
                                   {
                                          echo "<script>alert('Record Inserted')</script>";
                                          echo "<script>open('../master/teacheridcreate.php','_self')</script>";
                                   }
                              } 
                       } 
                           
                          // $qstring = '?status=succ'; 
                      }
                      else
                      { 
                          // $qstring = '?status=err'; 
                      } 
                  }
                  else
                  { 
                      $qstring = '?status=invalid_file'; 
                  } 
               
       }
              // Redirect to the listing page 
              // header("Location: index.php".$qstring);

      
       else if(isset($_GET["btnteachdelete"]))
       {
              $id=$_GET["id"]; 
              $sql="delete from tblteachinfo where id='$id'";
              if(mysqli_query($link,$sql))
              {
                     echo "<script>alert('Record Deleted')</script>";
                     echo "<script>open('../master/teacherinfoshow.php','_self')</script>";
              }
       }
?>