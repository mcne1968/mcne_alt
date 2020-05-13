<?php
//Step1
 $db = mysqli_connect('db5000297056.hosting-data.io','dbu513178','2Nebras47#i','dbs290275')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h2> Preise & Leistungen</h2>

<?php
//Step2
$query = "SELECT * FROM Zugriff";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$sql = "INSERT INTO Zugriff (Datum, Anzahl) VALUES (CURRENT_TIMESTAMP,1)";
if(mysqli_query($db, $sql)){
    echo "DANKE";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}

//Step 4
mysqli_close($db);
?>
</body>
</html>
