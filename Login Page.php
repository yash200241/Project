<?php
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style3.css" rel="Stylesheet" type="text/css" />
   <script>  

function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
 
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  else
  {
   window.open("update.php");
  }
}  
</script>
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
                <a href="Login Page.php" id="login-register-button"> <?php
            if(isset($_POST['submit']))
            {
                
                $dbhost='localhost';
                $dbname='College';
                $dbusername='root';
                $dbpass='';
                $con =mysqli_connect($dbhost,$dbusername,$dbpass,$dbname) or
        die("Could not connect " . mysqli_error($con));    

                $us_id1=$_POST['user_id'];
                $us_pass1=$_POST['user_password'];
                $sql="select * from Studentdetail where AdmissionNumber ='$us_id1' and password = '$us_pass1'";
                 $result = mysqli_query($con, $sql);
                 $count = mysqli_num_rows($result);
                 $_SESSION['count1'] = $count;
                
                  
                 if($_SESSION['count1']>0)
                 {
                   
                   
                   echo $_SESSION['us_idd'] ;
                   header('location:update.php');
                 }
                 else
                 {
                    echo "Try again ";
                 }
                 
                 $_SESSION['us_idd'] = $us_id1 ; 
                
                 

            }
               
            ?></a> 
            </div>
        </header>

        <main>
            <section id="loginpage-image">

    <div class="login-box">
    <img src="https://media-exp1.licdn.com/dms/image/C511BAQEGJPiKHbxtLw/company-background_10000/0/1557137917821?e=2159024400&v=beta&t=nUHpaENK7BNEu4cCx9LIIJ6P8k-jSutEN_7cX7nqVwI" class="avatar">
        <h1>Login Here</h1>
            <form name="myform" method="post" action="" onsubmit="return validateform()" >  
            <p>Admission No.</p>
            <input type="text" name="user_id" placeholder="Enter Admission Number">
            <p>Password</p>
            <input type="password" name="user_password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="reg.php">Registration</a>            
            <a href="adminlog.php">Admin Login</a>    
            </form>
         
        
        </div>
    </section>

        </main>

        <footer>
            <div class="flex">
                <small>Copyright &copy; 2021 All rights reserved | This template is made with <span class="footer-heart">&#9829;</span> by <a href="https://colorlib.com" target="_blank">Yash 9202</a>.</small>
               
            </div>
        </footer>

        <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
                let navMenu = document.getElementById('nav-menu-container');
                navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
            });
        </script>
    </body>
</html>