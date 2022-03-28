<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="wt_task1";
        
        $conn= new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
            echo "can't create connection object".$conn->connect_error;
        }
        return $conn;
    }

    function InsertData($fname,$lname,$age,$email,$designation,$preferredlanguage,$password,$imagetoupload,$tablename,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,lname,age,email,designation,preferredlanguage,password,image) VALUES ('$fname','$lname',$age,'$email','$designation','$preferredlanguage','$password','$imagetoupload')";

        if($conn->query($sqlstr)==TRUE)
        {
            echo "Data inserted";
        }
        else{
            echo "Can't Insert".$conn->error;
        }
    }


    function closecon($conn)
    {
        $conn->close();
    }
}
?>