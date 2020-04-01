
<?php
   include("congfig1.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {


      
         $_SESSION['login_user'] = $username;

  
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>





<!doctype html>
<html>
        <head>
                <title> WorthyCrew </title>
                <link rel="stylesheet" href="style1.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
                 <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

                <style>
                    p{ 
                    position: fixed; 
                    top: -1300px; 
                    left: 100px; 
                    width: 100%; 
                    font-family:"Advent Pro", monospace;
                    position: fixed;
                    font-size: 40px;

                     color: #1CB920;
   

                        }

                        .container1 {
                    position: relative;
                    text-align: center;
                        color: black;
                        width: 100%;
                    margin: 0 auto;
                        }


                       



                     


                    .button1{

                      position: absolute;
                            bottom: 250px;
                             right: 830px;
                    
                    

                    }


                    .button2{

                      position: absolute;
                            bottom: -90px;
                             right: 30px;

                    
                    

                    }


                    .container2{
      padding: 30px;
       width: 400px;
  height: 450px;
  position: absolute;
  left: 70%;
  bottom: 120px;

     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  

}




.form-control{
  padding: 12px 15px;
}



                </style>
              <script type="text/javascript" src="birthday.js">
                
</script>
        
        </head>
        <body>  
            <header>
                <div class="container">
                    <a href="#" class="logo"></a>
                    <nav>
                            <ul>
                                <li class="active"><a href= "#home">HOME</a>
                                  <a href="#aboutus">ABOUT US</a>
                                  <a href="#login">LOGIN</a>
                                  <a href="#management">MANAGEMENT</a>
                                 
                                                

                                
                        
                            </ul>
                    
                             
                    </nav>
                
                
                
                </div>
            
            </header>
            <section>




                    <div id="home">
                    



                    <img src="mainlogo.jpg"style="width :100%;">

        
                    </div>
                    

                    <div id="aboutus">

                    <img src="aboutus.jpg"style="width :100%;">

                    
                     
                    </div>
                
                    
                    <div class= "container1"> 

                        <div id="login">
                           <div class= "container1"> 
                        <img src="login.jpg"style="width :100%;">
                        
                    
                                <div class="button1">

                                      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">REGISTER</button>

                                </div>



                                <div class="modal fade" id="myModal" role="dialog">
                                 <div class="modal-dialog">
    
      <!-- Modal content-->
                                <div class="modal-content">
                             <div class="modal-header" color="black">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">REGISTER </h4>
                                 </div>
                                <div class="modal-body">


                            <p1 align="">FIRST NAME</p1>
                            <input type1="text" id="fname" name="fname" maxlength="10" size="18">
                            
                            <p1 align="">  LAST NAME</p1>
                            <input type1="text" id="fname" name="lname" maxlength="10" size="20">
                            <br></br>
                               <p2>
                                 Your date of birth(DD/MM/YYYY):  
                                <input id="dob" maxlength="10" size="20">
                                 </p2> 

                                    <p2>
                                    Your age: <span id="age"></span>
                                </p2> 
                                <div style="margin-top: 20px;"></div>
                         
                                <p1 align="left"> MOBILE NUMBER</p1>
                                <input type1="text" id="mobile" name="mobile" maxlength="10" size="52">
                                 <br></br>
                                   
                                   <p1 align="left"> ADDRESS</p1>
                                <input type1="text" id="address" name="address" maxlength="200" size="60">
                                 <br></br>


                                <p1 align="left"> EMAIL ID</p1>
                                <input type1="text" id="email" name="email" maxlength="36" size="60">
                                 <br></br>
                         
                                <p1 align="left"> USERNAME</p1>
                                <input type1="text" id="Username" name="Username" maxlength="36" size="60">
                                 <br></br>

                                    <p1 align="left"> PASSWORD</p1>
                                <input type1="text" id="password" name="password" maxlength="36" size="60">
                                 <br></br>

                                 <p1 align="left"> CONFIRM PASSWORD</p1>
                                <input type1="text" id="password1" name="password1" maxlength="36" size="52">
                                 <br></br>

                                
                                      <button type="button" class="btn btn-info btn-lg" >SUBMIT</button>

                         </div>










                         <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         </div>
                         </div>
      
                    </div>
                     </div>


  


  <div>
  


  <form action="homepage.php" method="post">
    


    <div class="container2">
      
      <div class="row">
        <div class="col-sm-3">
          <h1>Registration</h1>
          <p>Fill up the form with correct values.</p>
          <hr class="mb-3">
         
          <label for="username"><b>username</b></label>
          <input class="form-control" id="username"  type="text" name="username" required>
          

          <label for="password"><b>Password</b></label>
          <input class="form-control" id="password"  type="password" name="password" required>
          <hr class="mb-3">


          <input class="btn btn-primary" type="submit" id="login" name="login" value="Sign Up">
        </div>
      </div>
    </div>
  </form>
</div>

  

                        </div>



                                   
                        </div>


                    
                    </div>
                

                        

                    <div id="management">
                    <img src="MANAGEMENT.jpg"style="width :100%;">
                    </div>

                    <div id="credits">
                    <img src="credits.jpg"style="width :100%;">
                    </div>


      
                    

              ></script>
                     
                
            </section>



    

            







        

              
</body>



</html>