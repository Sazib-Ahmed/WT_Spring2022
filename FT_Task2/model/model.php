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

    function searchData($tablename,$conn,$fname)
    {
       $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";
       $results=$conn->query($sqlstr);
       return $results;

    }

    function fetch($tablename,$conn)
    {
       $sqlstr="SELECT * FROM $tablename";
       $results=$conn->query($sqlstr);
       return $results;

    }

    function updateData($tablename,$conn,$fname,$lname)
    {
        //$sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname' WHERE fname='$fname'";
        $sqlstr="UPDATE $tablename SET lname='$lname' WHERE fname='$fname'";
        if($conn->query($sqlstr)==TRUE)
        {
            echo "update successful";
        }
        else{
            echo "cant't update";

        }
    }



    function closecon($conn)
    {
        $conn->close();
    }
}
?>