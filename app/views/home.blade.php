<?php
	$file = File::get('data/Environmental_Data_2001.txt');

//puts the file in a json format
	$jsonfile = json_encode($file);

	//puts the json file into a readable json
	$parsedjson = json_decode($jsonfile);
	var_dump($parsedjson);
	if (is_string($parsedjson) ){
		echo "say yes";
	}
	else {
		echo "not a string";
	}

/*$filed = fopen('data/Environmental_Data_2001.txt', 'r');

//fgets opens the resource
	$filecontents = fgets($filed);
	var_dump($filecontents);

	$parsedjson = json_encode($filecontents);
	var_dump($parsedjson);
*/
var_dump('data/Environmental_Data_2001.txt');
echo "Hello";