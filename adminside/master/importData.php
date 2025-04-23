<?php 
 
// Load the database configuration file 
include_once '../dbcon.php'; 
// Include PhpSpreadsheet library autoloader 
require_once '../vendor/autoload.php'; 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx; 
 
if(isset($_POST['btnexcelsave']))
{ 
     
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
?>