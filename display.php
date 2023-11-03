<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yash 9202</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style3.css" rel="Stylesheet" type="text/css" />
   
    </head>

    <body>
        <header>
            <div class="flex">
                <div class="logo">
                    <a href="#"><img src="https://media-exp1.licdn.com/dms/image/C511BAQEGJPiKHbxtLw/company-background_10000/0/1557137917821?e=2159024400&v=beta&t=nUHpaENK7BNEu4cCx9LIIJ6P8k-jSutEN_7cX7nqVwI" width="50" height="50" alt="Game Warrior Logo" /></a>
                    <strong> PCACS</strong>
                </div >
                <nav>
                    <button id="nav-toggle" class="hamburger-menu">
                        <span class="strip"></span>
                        <span class="strip"></span>
                        <span class="strip"></span>
                    </button>
                   <ul id="nav-menu-container">
                        <li><a href="update.php">UPDATE YOUR DETAILS</a></li>
                        <li><a href="display.php">SEE YOUR DETAILS</a></li>
                    </ul>
                </nav>
                <a href="Login Page.php" id="login-register-button">
                <?php


   
                      
if ($_SESSION['count1']> 0 )
{
    echo $_SESSION['us_idd'];
}
else {
    echo "click here to login";
}
?><button id="logout" href="logout.php">Logout</button>
            </a>
            </div>
        </header>

        <main>
            <section id="reg-image">
            

    <div class=""><?php 
    $adnumber= $_SESSION['us_idd'];
    $dbhost='localhost';
    $dbname='College';
    $dbusername='root';
    $dbpass='';
    $con =mysqli_connect($dbhost,$dbusername,$dbpass,$dbname) or
            die("Could not connect " . mysqli_error($con));  
    $id = $adnumber;
    $query="SELECT * FROM Studentdetail where AdmissionNumber = '$adnumber'" ;
    $query_run = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($query_run))
    {      
    
    ?>
   
    <form name="myform" method="POST" action="" onsubmit="" >
    <table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>Credit Value</td>

<td><?php echo $row['CreditPoints']; ?>
  
     



       
</td>
</tr>
<tr>
<td>FIRST NAME</td>

<td><?php echo $row['First Name']; ?>
  
     



       
</td>
</tr>

<tr>
<td>MIDDLE NAME</td>
<td><?php echo $row['Middle Name']; ?>
</td>
</tr>
 

<tr>
<td>LAST NAME</td>
<td><?php echo $row['Last Name']; ?>
</td>
</tr>



 

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<?php echo $row['DOB']; ?>
</td>
</tr>
   
  
<tr>
<td>COLLEGE EMAIL ID</td>
<td><?php echo $row['Mes Id']; ?></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<?php echo $row['Contact']; ?>

</td>
</tr>
<tr>
<td>Gender</td>
<td><?php echo $row['Gender']; ?>
</td>
</tr>

 

 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><?php echo $row['City']; ?>
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><?php echo $row['Pin Code']; ?>
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td>
<?php echo $row['State']; ?>
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><?php echo $row['Country']; ?></td>
</tr>
<tr>
<td>YEAR</td>
<td>
<?php echo $row['College Year']; ?>

  </td>
  </tr>
  <tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
<?php echo $row['Course']; ?>
</td>
</tr>
 
<tr>


  <tr>
<td>ASSOCIATION</td>
<td><?php echo $row['Association']; ?>
    </td>
    <?php 
            }
            ?>
<?php 
    $adnumber= $_SESSION['us_idd'];
    $dbhost='localhost';
    $dbname='College';
    $dbusername='root';
    $dbpass='';
    $con =mysqli_connect($dbhost,$dbusername,$dbpass,$dbname) or
            die("Could not connect " . mysqli_error($con));  
    $id = $adnumber;
    $query="SELECT * FROM studentqualification where AdmissionNumber = '$adnumber'" ;
    $query_run = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($query_run))
    {      
    
    ?>
 

 
<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><?php echo $row['Class X Board']; ?></td>
<td><?php echo $row['Class X Percentage']; ?></td>
<td><?php echo $row['Class X Year of Passing']; ?></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><?php echo $row['Class XII Board']; ?></td>
<td><?php echo $row['Class XII Percentage']; ?></td>
<td><?php echo $row['Class XII Year of Passing']; ?></td>
</tr>
 

 
<tr>
<td></td>
<td></td>
<td align="center">_____________</td>
<td align="center">_____________</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->

  

</table>
               
            
           
           

        
        </div><?php 
            }
            ?>
    
    </section>


        </main>

        <footer>
            <div class="flex">
                <small>Copyright &copy; 2021 All rights reserved | This template is made with <span class="footer-heart">&#9829;</span> by <a href="https://colorlib.com" target="_blank">Yash</a>.</small>
                <ul>
                <li>
                        <a href="update.php">Update Details</a>
                    </li>
                    <li>
                        <a href="display.php">See your deatails</a>
                    </li>

                    
                </ul>
            </div>
        </footer>
    </body>
</html>