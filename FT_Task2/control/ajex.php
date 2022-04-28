<?php

if($_POST["fname"]=="")
{
    echo "empty input"
}
else{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $results=$mydb->searchData("user",$conobj,$_POST["fname"]);
    if($results->num_rows>0)
    {
        echo"<table>";
        echo"<tr><th>First Name</th><th>Last Name</th><th>Age</th>";

        while($row=$results->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["fname"]."</td>";
            echo "</tr>";
        }
    }
    else{
        echo "No data";
    }

}



?>