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
                   
                </nav>
                <a href="Login Page.php" id="login-register-button">Login/Register </a>
            </div>
        </header>

        <main>
            <section id="reg-image">

    <div class="">
    <form name="myform" method="POST" action="" onsubmit="" >
    <table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>MIDDLE NAME</td>
<td><input type="text" name="Middle_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pswd" maxlength="30"style="display: 1;"/>

</td>
</tr>


 

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" id="birthday" name="birthday">
</td>
</tr>
  
<tr>
<td>ADMISSION NUMBER</td>
<td><input type="text" name="Admission_Number" maxlength="100" /></td>
</tr> 
  
<tr>
<td>COLLEGE EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" placeholder="Enter MES ID HERE" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 

 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 

 

 
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
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 

 
<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>
<select name="courses" id="courses">
  <option value="BSc CS">Bachelor of Science in Computer Science</option>
  <option value="BSc IT">Bachelor of Science in Information Technology</option>
  <option value="B Com">Bachelor of Commerce</option>
  <option value="BAF">Bachelor of Accounting in Finance</option>
</select>
</td>
</tr>
 
<tr>
<td>YEAR</td>
<td>
<select name="year" id="year">
  <option value="First">First</option>
  <option value="Second">Second</option>
  <option value="Third">Third</option>
</select>
  </td>
  </tr>

  <tr>
<td>ASSOCIATION</td>
<td><input type="text" name="association" maxlength="30"/>
</td>
</tr>
  
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
               
            </form>
            <?php
            if(isset($_POST['submit']))
            {
                $dbhost='localhost';
$dbname='College';
$dbusername='root';
$dbpass='';
$con =mysqli_connect($dbhost,$dbusername,$dbpass,$dbname) or
        die("Could not connect " . mysqli_error($con));    

        $fname=$_POST['First_Name'];
        $pswd1=$_POST['pswd'];
        $mname=$_POST['Middle_Name'];
        $Lname=$_POST['Last_Name'];
        $DofB=$_POST['birthday'];
        $adnumber=$_POST['Admission_Number'];
        $MesID=$_POST['Email_Id'];
        $Mnum=$_POST['Mobile_Number'];
        $gend=$_POST['Gender'];
        
        $Ct=$_POST['City'];
        $pin=$_POST['Pin_Code'];
        $st=$_POST['State'];
        $cou=$_POST['Country'];
        $XBoard=$_POST['ClassX_Board'];
        $XPercentage=$_POST['ClassX_Percentage'];
        $X_YPass=$_POST['ClassX_YrOfPassing'];
        $XIIBoard=$_POST['ClassXII_Board'];
        $XIIPercentage=$_POST['ClassXII_Percentage'];
        $XII_YPass=$_POST['ClassXII_YrOfPassing'];
        $Yr=$_POST['year'];
        $association1=$_POST['association'];
        $course=$_POST['courses'];
        if($association1 !=''){
            $credit=2;
        } 
        else{
            $credit = 0;
        }
        
                  $sql= "insert into Studentdetail value('$adnumber','$fname','$mname','$Lname','$DofB','$MesID','$Mnum','$gend','$Ct','$pin','$st','$cou','$Yr','$association1','$course','$credit','$pswd1')";
                  $sql2="insert into Studentqualification value('$adnumber','$XPercentage','$X_YPass','$XBoard','$XIIPercentage','$XII_YPass','$XIIBoard')";
                $result = mysqli_query($con, $sql);
                $result2= mysqli_query($con , $sql2);
                
                if( $fname!= "" && $mname!= "" && $Lname != "")
                {
                    if($result )
                    {
                    echo "Success";
                    }
                    else{
                    echo " you have not filled it correctly " ;
                }
            }


            }
            ?>
           

        
        </div>
    </section>


        </main>

        <footer>
            <div class="flex">
                <small>Copyright &copy; 2019 All rights reserved | This template is made with <span class="footer-heart">&#9829;</span> by <a href="https://colorlib.com" target="_blank">Colorlib</a>.</small>
                
                
            </div>
        </footer>
    </body>
</html>