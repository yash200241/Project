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
                $sql="select * from admin where ID ='$us_id1' and Password = '$us_pass1'";
                 $result = mysqli_query($con, $sql);
                 $count = mysqli_num_rows($result);
                 $_SESSION['count2'] = $count;
                
                  
                 if($_SESSION['count2']>0)
                 {
                   
                   
                   echo $_SESSION['us_idd1'] ;
                   header('location:admin.php');
                 }
                 else
                 {
                    echo "click here to login ";
                 }
                 
                 $_SESSION['us_idd1'] = $us_id1 ; 
                
                 

            }
               
            ?></a> 
            </div>
        </header>

        <main>
            <section id="loginpage-image">

    <div class="login-box">
    <img src="https://media-exp1.licdn.com/dms/image/C511BAQEGJPiKHbxtLw/company-background_10000/0/1557137917821?e=2159024400&v=beta&t=nUHpaENK7BNEu4cCx9LIIJ6P8k-jSutEN_7cX7nqVwI" class="avatar">
        <h1>Admin Login</h1>
            <form name="myform" method="post" action="" onsubmit="return validateform()" >  
            <p>Admin ID</p>
            <input type="text" name="user_id" placeholder="Enter Admin Id">
            <p>Password</p>
            <input type="password" name="user_password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="reg.php">Registration</a>            
            <a href="Login Page.php">Student Login</a>    
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