<h1><strong>App 2</strong></h1>

<?php

try{
	$db = new PDO('mysql:host=database2;dbname=app2;port=3306', 'app2', 'app2');	
}catch(Exception $exception){
	echo "Database connection error";
}

echo "Successfully connected !"; 
