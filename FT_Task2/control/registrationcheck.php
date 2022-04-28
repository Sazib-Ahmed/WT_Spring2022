<?php
include("../model/model.php");

$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$validateimage="";
$fname=$lname=$age=$email=$password=$designation=$preferredlanguage=$preferredlanguagearray="";
$vfname=$vlname=$vage=$vemail=$vcheckbox=$vradio=$vpassword=$vimage=0;

if(isset($_POST["submit"]))
{
    $fname=$_REQUEST["firstname"];
    $lname=$_REQUEST["lastname"];
    $age=$_REQUEST["age"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];

    if(isset($_REQUEST["designation"]))
    {
        $designation=$_REQUEST["designation"];
        $validateradio= $designation;
        $vradio=1;
    }
    else{
        $validateradio= "Please Select One Designation";
    }

    if(isset($_REQUEST["preferredlanguage"]))
    {
        $preferredlanguagearray=$_REQUEST["preferredlanguage"];
        $preferredlanguage= implode(',',$preferredlanguagearray);
        $validatecheckbox= $preferredlanguage;
        $vcheckbox=1;
    }
    else{
        $validatecheckbox = "Please Select at least One Language ";
    }

    


    if(empty($fname) || (strlen($fname)<3))
{
    $validatefname= "Please Enter Your First Name at least 3 character long";
}
else{
    $validatefname=$fname;
    $vfname=1;
}

if(empty($lname) || (strlen($lname)<4))
{
    $validatelname= "Please Enter Your Last Name at least 3 character long";
}
else{
    $validatelname=$lname;
    $vlname=1;
}

if(empty($age))
{
    $validateage= "Please Enter Your Age";
}
else{
    $validateage= $age;
    $vage=1;
}

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please Enter Your Email";
}
else{
    $validateemail= "Your Email is ".$email;
    $vemail=1;
}

if(empty($password))
{
    $validatepassword= "Please Enter Password";
}
else{
    $validatepassword= $password;
    $vpassword=1;
}


if(!empty($_FILES["image"]["name"])) 
{ 
    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

    $allowTypes = array('jpg','png','jpeg'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['image']['tmp_name']; 
        $imagetoupload = addslashes(file_get_contents($image));   
        $vimage=1;
    }
    else{ 
        $validateimage = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.'; 
    } 
}
else{ 
    $validateimage = 'Please select an image'; 
}


if($vfname==1 && $vlname==1 && $vage==1 && $vemail==1 && $vcheckbox==1 && $vradio==1 && $vpassword==1 && $vimage==1)
    {
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData("$fname","$lname",$age,"$email","$designation","$preferredlanguage","$password","$imagetoupload","user",$conobj);
    $mydb->closecon($conobj);
    
}
else{
    echo "Please Insert All Field";
    echo "<br>";

}
}


if(isset($_POST["search"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $results=$mydb->searchData("user",$conobj,$_POST["searchdata"]);
    if($results->num_rows>0)
    {
        echo"<table>";
        echo"<tr><th>First Name</th><th>Last Name</th><th>Age</th>";

        while($row=$results->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "<td>".$row["lname"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "</tr>";
        }
    }
    else{
        echo "No data";
    }
}


if(isset($_POST["fetch"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $results=$mydb->fetch("user",$conobj);
    if($results->num_rows>0)
    {
        echo"<table>";
        echo"<tr><th>First Name</th><th>Last Name</th><th>Age</th>";

        while($row=$results->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "<td>".$row["lname"]."</td>";
            echo "<td>".$row["age"]."</td>";
            echo "</tr>";
        }
    }
    else{
        echo "No data";
    }
}



if(isset($_POST["update"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $results=$mydb->updateData("user",$conobj,$_POST["fname"],$_POST["lname"]);

}


?>
