<?php
include("../control/registrationcheck.php");
?>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
        <h2>Registration</h2><br>
        <b>___________________________________________________________________________________________________________________</b>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname"></td> 
                <td><?php echo $validatefname; ?> </td>
            </tr>

            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lastname"> </td>
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

        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">

        
        </form>
    </body>
</html>