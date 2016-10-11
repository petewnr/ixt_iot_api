<?PHP
// add new Teams

require "inc/conn.php";

$form_name = $_POST['name'];
$form_desc = $_POST['description'];
$form_city = $_POST['city'];
$form_captain = $_POST['captain'];
$form_coach = $_POST['coach'];

try
{
	$qrystmt = $conn->prepare("INSERT INTO teams (name, description, city, captain, coach) VALUES (:newname, :newdesc, :newcity, :newcaptain, :newcoach)");
	$qrystmt->bindParam(':newname', $form_name, PDO::PARAM_STR);
	$qrystmt->bindParam(':newdesc', $form_desc, PDO::PARAM_STR);
	$qrystmt->bindParam(':newcity', $form_city, PDO::PARAM_STR);
	$qrystmt->bindParam(':newcaptain', $form_captain, PDO::PARAM_STR);
	$qrystmt->bindParam(':newcoach', $form_coach, PDO::PARAM_STR);
	
	$qrystmt->execute();
	
	
	$last_id = $conn->lastInsertId();
	
	echo "Team ".$form_name." added to DB as id:".$last_id;
}
catch (PDOException $e)
{
	echo "Error in GET all team details"/$e->getMessage();
}
	
?>