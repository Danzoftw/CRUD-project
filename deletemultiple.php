 <?php
 require_once 'dbconnect.php';
 
 //print_r($_POST['ids']);
$arr = $_POST['ids'];


$i = 0;
	foreach ($arr as &$value) {
		
		//print_r($arr[$i]);

		$arrid = $arr[$i];

		$sql = "DELETE FROM  `crud` WHERE id = '$arrid'";

        $results = $conn->query($sql);

		$i++;
		
	}
	
?>