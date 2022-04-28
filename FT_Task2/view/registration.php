<?php
include("../control/registrationcheck.php");
?>
<html>
    <head>
<link rel="stylesheet" href="../CSS/mystyle.css" type="text/css">
</head>
    <body>
    <div class="header">
  <h1>Registration</h1>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>
</div>
</div>


        <div class="position">
        <p>Hello, This is my webpage.</p>
</div>
        <form action="" method="post" enctype="multipart/form-data" onsubmit="return namecheck()">
        <h2>Registration</h2><br>
        <b>___________________________________________________________________________________________________________________</b>
        
        <div class="sticky">
<div class="topnav">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname" id="fname"></td> 
                <p id="message"></p>
                <td><?php echo $validatefname; ?> </td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lastname" id="lname"> </td>
                
                <td><?php echo $validatelname; ?> </td>
            </tr>

            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"> </td>
                <td><?php echo $validateage; ?> </td>
            </tr>

            <tr>
                <td>Designation:</td>
                <td>
                    <input type="radio"  name="designation" <?php if (isset($designation) && $designation=="Junior Programmer")?> value= "Junior Programmer" > Junior Programmer 
                    <input type="radio"  name="designation" <?php if (isset($designation) && $designation=="Senior Programmer")?> value= "Senior Programmer"> Senior Programmer
                    <input type="radio"  name="designation" <?php if (isset($designation) && $designation=="Project Lead")?> value= "Senior Programmer"> Project Lead        
                </td>
                <td><?php echo $validateradio; ?> </td>
            </tr>

            <tr>
                <td>Preferred language:</td>
                <td>
                    <input type="checkbox" id="JAVA" name="preferredlanguage[]"  value= "JAVA"> JAVA
                    <input type="checkbox" id="PHP" name="preferredlanguage[]" value= "PHP"> PHP
                    <input type="checkbox" id="C++" name="preferredlanguage[]" value= "C++"> C++
                </td>
                <br>
                <td>
                    <?php echo $validatecheckbox; ?>
                </td>
                <br>

            </tr>

            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"> </td>
                <td><?php echo $validateemail; ?> </td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"> </td>
                <td><?php echo $validatepassword; ?> </td>
            </tr>

            <tr>

                <td><label for="filetoupload">Please choose a JPG file </label></td>
                <td><input type="file" name="image"><br></td>
                <td><?php echo $validateimage; ?> </td>
            </tr>

        </table>

        <input type="submit" name="submit" class="button submitbutton" value="Submit" onclick="namecheck()">
        <input type="reset" class="button resetbutton" value="Reset">
        </div>
</div>
        
        </form>


        <form action="" method="post" enctype="multipart/form-data">
        <h2>See All Data</h2><br>

        <input type="submit" name="fetch" value="Fetch Data">
        </form>





        <form action="" method="post" enctype="multipart/form-data">
        <h2>To See Data</h2><br>
        <b>___________________________________________________________________________________________________________________</b>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="searchdata" id="fname" onkeyup="" ></td> 
               
            </tr>

        </table>

        <input type="submit" name="search" value="Search">
        <input type="reset" value="Reset">
        </form>


        <form action="" method="post" enctype="multipart/form-data">
        <h2>Update</h2><br>
        <b>___________________________________________________________________________________________________________________</b>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" value="<?php echo $fname; ?>"> </td> 
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" value="<?php echo $lname; ?>"> </td> 
            </tr>

        </table>

        <input type="submit" name="update" value="Update">
        <input type="reset" value="Reset">
        </form>


        <form action="" method="post" enctype="multipart/form-data">
        <h2>Delete</h2><br>
        <b>___________________________________________________________________________________________________________________</b>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>

        </table>

        <input type="submit" name="Delete" value="Delete">
        </form>




        
        </form>

    <script src="../js/myjs.js"></script>
    </body>
</html>