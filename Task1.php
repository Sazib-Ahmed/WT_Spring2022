<!Doctype html>
<html>
    <body>
        <h2>Registration Form </h2>
______________________________________________________________________________________________________________________________________________________________________________________________________________
        <form action="/action_page.php">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstName">
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="lastName"> </td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"> </td>

            </tr>
            <tr>
                <td>Designation:</td>
                <td>
                    <input type="radio" name="designation"> Junior Programmer 
                    <input type="radio" name="designation"> Senior Programmer
                    <input type="radio" name="designation"> Project Lead
                </td>

            </tr>
            <tr>
                <td>Preferred language:</td>
                <td>
                    <input type="checkbox" name="preferredLanguage1"> JAVA
                    <input type="checkbox" name="preferredLanguage2"> PHP
                    <input type="checkbox" name="preferredLanguage3"> C++
                </td>

            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"> </td>

            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"> </td>

            </tr>

        </table>

        <label for="myfile">Please choose a file </label>
        <input type="file" id="myfile" name="myfile"><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

    </body>
</html>