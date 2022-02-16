<?php include "../Control/results.php"; ?>

<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>
______________________________________________________________________________________________________________________________________________________________________________________________________________
        <form action="" method="post" enctype="multipart/form-data">
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
                <td>
                    <?php echo $validateradio; ?>
                </td>

            </tr>
            <tr>
                <td>Preferred language:</td>
                <td>

                    <input type="checkbox" id="JAVA" name="JAVA"  value= "JAVA"> JAVA
                    <input type="checkbox" id="PHP" name="PHP" value= "PHP"> PHP
                    <input type="checkbox" id="C++" name="C++" value= "C++"> C++
                </td>

                <br>
                <td>
                    <?php echo $validatecheckbox; ?>
                    <?php echo $v1;?>
                    <?php echo $v2;?>
                    <?php echo $v3;?>
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

            </tr>
            <tr>

                <td><label for="filetoupload">Please choose a JPG file </label></td>
                <td><input type="file" id="filetoupload" name="filetoupload"><br></td>
                <td><?php echo $validatefiletoupload; ?> </td>

            </tr>

        </table>


        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

        </form>

    </body>
</html>