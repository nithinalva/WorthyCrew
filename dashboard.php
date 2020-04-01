<?php
   include('session.php');

     
?>
<html>



<!DOCTYPE html>
<html>
<title>W3.CSS</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style2.css">
       <link href="css/bootstrap.css" rel="stylesheet">
<style>

.smalltext{

  font-size: 9px;
  color :White;
     margin-top:-16px ;
     margin-left: 366px;
     color: #34C80B;


}


.largetext{

  font-size: 15px;
  color :White;
   margin-left: 66px;

}

.jobdetails{
    padding: 30px;
       width: 1300px;
  height: 450px;
  position: absolute;
  left: 14%;
  bottom: 200px;
    vertical-align: baseline;
 margin: 0 auto;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     
     }



.yourjobs-conatiner {
    padding: 30px;
       width: 1300px;
  height: 450px;
  position: absolute;
  left: 14%;
  bottom: 200px;
    vertical-align: baseline;
 margin: 0 auto;
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     overflow-y: scroll;
     display: none;
     }


.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: #000!important;
    background-color: #333 !important;
}

.w3-light-grey, .w3-hover-light-grey:hover, .w3-light-gray, .w3-hover-light-gray:hover {
    color: white!important;
    background-color: #333 !important;
}

      </style>
      


     </head>
   



   <body>




     <header>
                <div class="container">
                    <a href="#" class="logo"></a>
                    <nav>
                            <ul>
                                <li class="active">

                                      <div class="largetext">

                                         <a href="">Post a Job</a>
                                         <a href = "Dashboard">Dashboard</a>
                                        <a href = "logout.php">Sign Out</a>
                                        <a1>Welcome <?php echo $login_session; ?> </a1>
                                      </div>
                                   


                                      <div class=smalltext>
                                        <a1>USER</a1>

                                      </div>




                                        
                                                

                                </li>
                        
                            </ul>
                    
                             
                    </nav>
                
                
                
                </div>
            
            </header>


<body>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card"  style="width:190px; top: 90px;">
  <a href="#" class="w3-bar-item w3-button" onclick="myFunction()">Your Activites</a>
  <button class="w3-button w3-block w3-left-align" >
  Accordion <i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Link</a>
    <a href="#" class="w3-bar-item w3-button">Link</a>
  </div>

  <div class="w3-dropdown-click">
    <button class="w3-button" onclick="myDropFunc()">
      Dropdown <i class="fa fa-caret-down"></i>
    </button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-white w3-card">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>

<div class="w3-container" style="margin-left:160px">


   
 <div class="yourjobs-conatiner" id="yourjobs-conatiner">

      <div class="row">


      <?php

      $con=mysqli_connect('localhost','root',"");

        mysqli_select_db($con,'worthycrew');

     //   if($con){
      //    echo "conenction  success";

    //    }
  //      else
//          echo"fail";

          $query = 'SELECT jobid,jobname,jobtype,city,salary FROM jobdetails where postedby="'. $login_session .'"';

          $queryfire=mysqli_query($con,$query);

          $num=mysqli_num_rows($queryfire);


          if($num>0)
          {
            while($card=mysqli_fetch_array($queryfire)){

              ?>

              <div class="col-sm-2">

                    <form>
                        <div class="card" style="width: 120%; height: 100%">
                            <h6 class="card-title bg-info text-white p-2 text-uppercase"><?php echo $card['jobname']?></h6>
                             

                            <div class="card-body"><p>
                                   <b>JOB ID:</b><?php echo $card['jobid']?> </p>

                                 <b>JOB NAME:</b><?php echo $card['jobname']?> </p>

                              <b>JOB TYPE:</b><?php echo $card['jobtype']?> </p>
                              <b>SALARY:</b><?php echo $card['salary']?> </p>
                              

                            <?php

                             $_SESSION['regName'] = $card['jobid'];
                             
                            

                          

                            



                             ?>

                            

                          



                            </div>
                            <div class="card-footer">

                              <form method="get" action="jobdetails.php">
                              
                            <a href="jobdetails.php?jobid=<?php echo $card['jobid'] ?>">Apply/View</a>
                               
                              </form>



                            </div>



                        </div>


                    </form>



              </div>

              <?php
                    }


          }

      ?>





</div>



  </div>




                         










</div>



            <div class=jobdetails id="ia">
                    <table class="table">
                      <thead>
                        <tr>
                           
                           <th> JOB ID</th>
                           <th>JOB NAME</th>
                           <th>NAME</th>
                           <th>ACTIONS</th>




                       

                        </tr>
                           </thead>
                         <tbody>
                      
                      
                                    <?php

                                          $conn=mysqli_connect("localhost","root","","worthycrew");
                                          $result=mysqli_query($conn," SELECT  * FROM postedjobs");

                                          while($row=mysqli_fetch_array($result)):





                                    ?>


                                      <tr>

                                          <td><?php echo $row['jobid'];?></td>
                                          <td><?php echo $row['jobname'];?></td>
                                          <td><?php echo $row['name'];?></td>


                                      </tr>

                                        <?php endwhile; ?>


                       
                                          </tbody>

                    </table>
                   
                    <link rel="stylesheet" href="C:\xampp\htdocs\worthycrew12\css\bootstrap.css"/>
                          

                    <script  src="C:\xampp\htdocs\worthycrew12\tables\DataTables-1.10.20\js\dataTables.jqueryui"></script>
                                
                      <script  src="C:\xampp\htdocs\worthycrew12\tables\DataTables-1.10.20\js\jquery.dataTables.js"></script>
                      <script src="C:\xampp\htdocs\worthycrew12\tables\DataTables-1.10.20\js\dataTables.bootstrap4.js"></script>


                    <script >
                   
               $(".table").DataTable();
               
                    </script>



            </div>

</body>




<script>
function myFunction() {
  document.getElementById("yourjobs-conatiner").style.display = "block";
   document.getElementById("ia").style.display = "none";
}
</script>



































</body>
</html>
