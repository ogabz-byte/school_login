<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- validation -->
<!-- <script>
	
    function validate(){
    var firstname = document.forms["myform"]["fname"].value;
    var lastname = document.forms["myform"]["lname"].value;
    var email = document.forms["myform"]["mail"].value;
    var passcode = document.forms["myform"]["pcode"].value;
    var confirm = document.forms["myform"]["cpcode"].value;
    var phonenumber = document.forms["myform"]["pnumber"].value;
    var birthdate = document.forms["myform"]["bdate"].value;
    var course = document.forms["myform"]["course"].value;
    

        if (firstname=="" || firstname=="null") {
            alert("Please enter Firstname?");
            return false ;
        }

        else if (lastname=="" || lastname=="null") {
            alert("Please enter Lastname?");
            return false ;
        }

        else if (email=="" || email=="null") {
            alert("Please enter email?");
            return false ;
        }	
        
        else if (passcode=="" || passcode=="null") {
            alert("Please enter Password?");
            return false ;
        }
        else if (confirm != passcode) {
            alert("Your confirmed password does not Correspond with your Password");
            return false ;	

        }

        else if (phonenumber=="" || phonenumber=="null") {
            alert("Please enter phone number?");
            return false ;
        }	
        

        else if (birthdate=="" || birthdate=="null") {
            alert("no birthdate");
            return false ;
        }
        else if (course=="" || course=="null") {
            alert("input the course of your choice");
            return false ;	

        }
    }

</script> -->
        <section class="header">
            <div class="heading">
            <nav>
                <h3>logo</h3>

                <ul id="ul">
                    <a href="home.php" >home</a>
                    <a href="aboutus.php">about</a>
                    <a href="register.php" class="active" >register</a>
                    <a href="contactus.php">contact us</a>
                </ul>

                <a href="home.php" class="login">login</a>
                

                <h3 id="menu-btn" onclick="toggle()">&#9776;</h3>

                
            </nav>
        </div>

            <div class="sub-header">
                <div class="sub-head">
                <h1>register now <br> and begin your journey</h1>
                <span></span>
                <p>Lorem ipsum dolor, sit amet consectetur <br> adipisicing elit. Quos natus nam laboriosam.</p>
            </div>
        </div>
        </section>

<!--end of the head -->


    <main>
        <form name="myform" class="rform" action="processed.php" method="post" onsubmit="return validate()">
        <input type="text" name="fname" placeholder="firstname" required>
        <input type="text" name="lname" placeholder="lastname" required>
        <input type="email" name="mail" placeholder="email" required>
        <input type="password" name="pcode" placeholder="password" required>
        <input type="password" name="cpcode" placeholder="confirm password" required>
        <input type="number" name="pnumber" placeholder="phone number" required>
        <input type="date" name="bdate" placeholder="birth date" required>
        <input type="text" name="course" placeholder="course" required>
        <button type="submit" name="submit"> register</a></button>
        </form>
    </main>

    <script src="js/home.js"></script>
</body>
</html>