<?php
$startDate = new DateTime('2001-01-12');
$endDate = new DateTime('2010-05-26');
$oneDay = new DateInterval('P1D');
 try {
 	$db = new PDO('mysql:host=localhost; dbname=lakedata', 'homestead', 'secret');
 	$stmt = $db->prepare('INSERT INTO Weatherdata (date_recorded) VALUE (:date) '); 
 	while ($startDate <= $endDate){
 		$stmt->bindParam(':date', $startDate->format('Y-m-d'));
 		$stmt->execute();
 		$startDate->add($oneDay);
 	}
 } catch (Exception $e){
 	echo $e->getMessage();
 }
 echo "Done";