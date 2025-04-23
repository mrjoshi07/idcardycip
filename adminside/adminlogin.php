
<!DOCTYPE html>
<html lang="">
       <head>
              <meta charset="utf-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>Signin</title>
              <link rel="icon" href="../images/logo.png" type="png/x-icon" />
              <!-- Bootstrap CSS -->
              <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
             
             <style>
                     body{
                            background-color: rgba(227, 233, 243, 0.96);
                     }
                    .signin1{
                            width: 90%;
                            left: 5%;
                            height: 613px;
                            background-image: url("image/backgr1.png");
                            background-size: 100% 100%;     
                    } 
                    .signin2{ 
                            padding: 35px;
                            top: 200px;
                            left: 350px;
                            border-radius: 20px;
                            background-color: rgba(255, 255, 255, 0.96);
                            box-shadow: 1px 1px 10px black;
                    }
                    @media screen and (max-width:400px){
                            .signin2{ 
                            left:0px;
                            padding: 20px;
                            }
                    }
                  
              </style>
       </head>
       <body>
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 signin1">
                     
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 signin2">
                            
                            <form action="savepages/adminloginsave.php" method="POST" role="form">
                                  
                                   <div class="form-group">
                                          <input type="password" class="form-control" id="txtuserid" name="txtuserid" placeholder="User-ID" >
                                   </div>                   
                                   <!-- autocomplete="off" auto suggestion -->
                                   <div class="form-group">
                                          <input type="password" class="form-control" id="txtpassword" name="txtpassword" placeholder="Password">
                                   </div>


                                   <button type="submit" name="btnadminlogin" class="btn btn-primary btn-block">Log-In</button>
                            </form>
                            
                    </div>
                    
              </div>
                     

              <!-- jQuery -->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <!-- Bootstrap JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       </body>
</html>
