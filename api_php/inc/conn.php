<?PHP
// dbconnection

$servername = "localhost";
$username = "justawebuser";
$password = "just**a__web**user";

try
{
	$conn = new PDO("mysql:host=$servername;dbname=amazingdb", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected to amazingdb successfully";
}
catch (PDOException $e)
{
	//echo "Connection failed: ".$e->getMessage();
}


?>