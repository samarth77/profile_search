<?php 
$profiles = [
	[
		'id' => 1, 
		'name' => 'Saurabh'
	], 
	[
		'id' => 2, 
		'name' => 'Anuj'
	], 
	[
		'id' => 3, 
		'name' => 'Ajeet'
	], 
	[
		'id' => 4, 
		'name' => 'VIvek'
	], 
	[
		'id' => 5, 
		'name' => 'Anurag'
	], 
	[
		'id' => 6, 
		'name' => 'Ravi'
	], 
	[
		'id' => 7, 
		'name' => 'Nishant'
	], 
	[
		'id' => 8, 
		'name' => 'Alok'
	], 
	[
		'id' => 9, 
		'name' => 'Abhishek'
	], 
	[
		'id' => 10, 
		'name' => 'Abhimanyu'
	]
]; 
if(isset($_GET['term'])){
	
	$term = $_GET['term']; 
	$response = '';
	if($profiles){
		foreach($profiles as $user){
			$response .= '<li><a href="#'.$user['id'].'"><img src="./download.png" class="img-rounded" width="50px" alt="Cinque Terre"> '.$user['name'].'</a></li>';
		} 
	} else {
		$response .= '<li><a href="#">No records!</a></li>';
	}
	echo $response;
	
} 
?>
