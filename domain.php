
<head>
<title>GBA2021 ARI</title>
</head>
<body>

	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gb21ari";
$RollNumber = $_POST["RollNumber"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  DT-1 FROM gb21ari WHERE RollNumber = $RollNumber LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="list"> Domain Test: ' . $row["DT-1"]. '</div>';
	}

$conn-> close();

?>	

<p> *** Rank is Calculated based on 721 Students  data from 2017-2021 Btach into Consideration</p>
</body>