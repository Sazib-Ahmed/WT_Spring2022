<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";
$validatecheckbox="";
$validateradio="";
$validatepassword="";
$validatefiletoupload="";
$v1=$v2=$v3=NULL;
$fname=$lname=$age=$email=$password=$designation=NULL;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["firstname"];
$lname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$designation=$_REQUEST["designation"];
if(empty($fname) || (strlen($fname)<6))
{
    $validatefname= "Please Enter Your First Name";
}
else{
    $validatefname=$fname;
}


if(empty($lname) || (strlen($lname)<5))
{
    $validatelname= "Please Enter Your Last Name";
}
else{
    $validatelname=$lname;
}


if(empty($age))
{
    $validateage= "Please Enter Your Age";
}
else{
    $validateage= $age;
}


if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="Please Enter Your Email";
}
else{
    $validateemail= "Your Email is ".$email;
}


if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["C++"]))
{
    $validatecheckbox = "Please Select at least One Language ";
}
else{
   if(isset($_REQUEST["JAVA"]))
   {
       $v1= $_REQUEST["JAVA"];
   }
   if(isset($_REQUEST["PHP"]))
   { 
       $v2= $_REQUEST["PHP"];
   }
   if(isset($_REQUEST["C++"]))
   {
       $v3= $_REQUEST["C++"];
   }
}


if(isset($designation))
{
    $validateradio= $designation;
}
else{
    $validateradio= "Please Select at least One Designation";
}


if(empty($password))
{
    $validatepassword= "Please Enter Password";
}
else{
    $validatepassword= $password;
}


if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], "../Files/".$fname.date(" Y-m-d")." .jpg")) 
{
    $validatefiletoupload="File uploaded";
}
else{
    $validatefiletoupload="Please Choose a JPG File.";
}

$formdata = array(
    'firstName'=> $fname,
    'lastName'=> $lname,
    'age'=> $age,
    'designation'=>$designation,
    'preferredLanguage1'=> $v1,
    'preferredLanguage2'=> $v2,
    'preferredLanguage3'=> $v3,
    'email'=>$email,
    'password'=>$password
    );
$existingdata = file_get_contents('../Data/data.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
if(empty($fname) || (strlen($fname)<6) || empty($lname) || (strlen($lname)<5) || empty($age) || empty($email) || empty($password))
{
    echo "Please Enter Everything Correctly";
}
else{
    if(file_put_contents("../Data/data.json", $jsondata)) 
    {
        echo "Data successfully saved <br>";
    }
    else
        echo "no data saved";
}
        
$data = file_get_contents("../Data/data.json");
$mydata = json_decode($data);

}
?>