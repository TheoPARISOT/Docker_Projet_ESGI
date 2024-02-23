<h1><strong>App 1</strong></h1>

<?php

try{
	$db = new PDO('mysql:host=database1;dbname=app1;port=3306', 'app1', 'app1');	
}catch(Exception $exception){
	echo "Database connection error";
}

echo "Successfully connected !"; 
