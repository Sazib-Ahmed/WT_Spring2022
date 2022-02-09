<?php
$validatefname="";
$validatelname="";
$validateage="";
$validateemail="";

$validatecheckbox="";
$validateradio="";
$validatepassword="";
$v1=$v2=$v3="";
$fname=$lname=$age=$email=$designation=$password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$fname=$_REQUEST["firstname"];
$lname=$_REQUEST["lastname"];
$age=$_REQUEST["age"];
$email=$_REQUEST["email"];
$email=$_REQUEST["password"];
if(empty($_REQUEST["firstname"]) || (strlen($_REQUEST["firstname"])<6))
{
    $validatefname= "you must enter First Name";

}
else
{
    $fname=$_REQUEST["firstname"];
}


if(empty($_REQUEST["lastname"]) || (strlen($_REQUEST["lastname"])<5))
{
    $validatelname= "you must enter Last Name";

}
else
{
    $lname=$_REQUEST["lastname"];
}


if(isset($_REQUEST["age"]))
{
    $validateage= $_REQUEST["age"];
}
else{
    $validatereage= "please enter age";
}



if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}


if(!isset($_REQUEST["preferredLanguage1"])&&!isset($_REQUEST["preferredLanguage2"])&&!isset($_REQUEST["preferredLanguage3"]))
{
    $validatecheckbox = "please select at least one checkbox";
    
}
else{
   if(isset($_REQUEST["preferredLanguage1"]))
   {
       $v1= $_REQUEST["preferredLanguage1"];
   }
   if(isset($_REQUEST["preferredLanguage2"]))
   { 
       $v2= $_REQUEST["preferredLanguage2"];
   }
   if(isset($_REQUEST["preferredLanguage3"]))
   {
    $v3= $_REQUEST["preferredLanguage3"];
   }
}

if(isset($_REQUEST["designation"]))
{
    $validateradio= $_REQUEST["designation"];
}
else{
    $validateradio= "please select at least one radio";
}

if(isset($_REQUEST["password"]))
{
    $validatepassword= $_REQUEST["password"];
}
else{
    $validaterepassword= "please enter password";
}

}
?>