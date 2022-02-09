<?php include "Controls/results.php"; ?>

<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>
______________________________________________________________________________________________________________________________________________________________________________________________________________
        <form action="" method="post">
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

                    <input type="radio" id="Junior" name="designation" value= "Junior" > Junior Programmer 
                    <input type="radio" id="Senior" name="designation" value= "Senior"> Senior Programmer
                    <input type="radio" id="Lead" name="designation" value= "Lead"> Project Lead
                </td>
                <td>
                    <?php echo $validateradio; ?>
                </td>

            </tr>
            <tr>
                <td>Preferred language:</td>
                <td>

                    <input type="checkbox" id="preferredLanguage1" name="preferredLanguage1"  value= "JAVA"> JAVA
                    <input type="checkbox" id="preferredLanguage2" name="preferredLanguage2" value= "PHP"> PHP
                    <input type="checkbox" id="preferredLanguage3" name="preferredLanguage3" value= "C++"> C++
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

        </table>

        <label for="myfile">Please choose a file </label>
        <input type="file" id="myfile" name="myfile"><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">


    </body>
</html>