<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
       ul {
            list-style: none;
            padding: 0;
            margin: 0;
           
        }

        ul li {
            position: relative;
            display: inline-block;
            padding: 0px;
            color: white;
            cursor: pointer;
        }
       .menubar1{
              padding: 10px 0px;
              margin: 0px 0px;
              text-align: left;
              top: 5px;
              z-index: 3;
            
       }
      .menubar1 a{
              text-decoration: none;
              padding:0px 10px 10px 10px;
              color: white;
              font-weight: bold;
              font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
       }
       .menubar2{
              margin: 0px 0px 0px 20px;
              float: left;
              color: white;
       }
       .menubar2 span{
              font-size: 20px;
       }
       #sub2{
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #444;
            width: 100px;
        }
       #sub2 li {
            display: block;
            padding: 10px 7px;
            color: white;
        }
        #sub4{
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #444;
            width: 100px;
        }
       #sub4 li {
            display: block;
            padding: 10px 7px;
            color: white;
        }
      
       @media screen and (max-width:400px){
              .menubar1{
                  display:flex;
              }
              .menubar3{
                     display: ;
                     margin-top:-15px;
              }
              ul li{
                     display: block;
                     padding: 5px;
                     text-align: left;
              }
       }
</style>

<script>          
       function logout(){
              ans=confirm("Do you want logout...")
              if(ans)
              {
                     open("../savepages/logout.php","_self"); 
              }
              else
              {
                     alert("You click cancel...");
              }
       }

       $(function(){
              // $(".menubar3").slideUp(3000);
              $("#menubar2").click(function(){
                     $(".menubar3").slideToggle(function(){
              
                     });
              });
       });
       $(function(){
              $("#sub2").slideUp();
              $("#sub1").click(function(){

                     $("#sub2").slideToggle();
                     $("#sub4").slideUp();
              });

              $("#sub4").slideUp();
              $("#sub3").click(function(){

                     $("#sub4").slideToggle();
                     $("#sub2").slideUp();
              });
       });
    
            
      

</script>   
<script>
       //  $(document).ready(function () {
            
       //      $(".sub1").click(
       //          function () {
       //              $(this).find(".sub2").slideDown();
       //          },
       //          function () {
       //              $(this).find(".sub2").slideUp();
       //          }
       //      );
       //  });
       //  $(document).ready(function () {
       //        $(".sub1").click(function () {
       //        $(this).find(".sub2").slideToggle();
       //        });
       // });
 </script>


       
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menubar1" id="menubar1">

<div class="menubar2" id="menubar2">
       <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
</div>

<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 menubar3" id="menubar3">

       <ul>
              <li><a href="../master/user.php">User</a></li>
              <li><a href="../master/createuser.php">Create-User</a></li>
              <li><a href="../master/createiduser.php">Create-ID-User</a></li>
              <li id="sub1"><a>Create-ID </a>
                     <ul id="sub2">
                            <li><a href="../master/creatstudentinfo.php">Student</a></li>
                            <li><a href="../master/teacheridcreate.php">Employe</a></li>
                     </ul>
              </li>
              <li id="sub3"><a>Information</a>
                     <ul id="sub4">
                            <li><a href="../master/showstdinfo.php">Student</a></li>
                            <li><a href="../master/teacherinfoshow.php">Employe</a></li>
                     </ul>
              </li>
              <li><a onclick="logout()">
                     <span class="glyphicon glyphicon-off" aria-hidden="true"></span>  
              </a></li>
       </ul>
</div>       
</div>


