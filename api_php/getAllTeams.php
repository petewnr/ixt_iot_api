<?PHP

// get all team details

require "inc/conn.php";

try
{
	$qrystmt = $conn->prepare("SELECT * FROM teams");
	$qrystmt->execute();
	
	$result = $qrystmt->fetchAll();
	
	echo json_encode($result);
}
catch (PDOException $e)
{
	echo "Error in GET all team details"/$e->getMessage();
}

	
?>