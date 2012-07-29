<?php
$rt_api_key = 'ahsyeuuwz2rpjubcjcegyyjy';
if($_REQUEST['name']) {
	$movie_name = $_REQUEST['name'];
	//$movie_name = 'batman begins';
	$movie_name = urlencode($movie_name);
	$endpoint = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=' . $rt_api_key . '&q=' . $movie_name;
	// setup curl to make a call to the endpoint.
	$session = curl_init($endpoint);
	// indicates that we want the response back.
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	// exec curl and get the data back
	$data = curl_exec($session);
	// remember to close the curl session once we are finished retrieveing the data
	curl_close($session);

	// decode the json data to make it easier to parse the php
	$search_results = json_decode($data);
	if ($search_results === NULL) die('Error parsing json');

	// play with the data!
	$movies = $search_results->movies;
	$str =  '<div class="well"><h2>Found '.$search_results->total . ' results for '.$movie_name.'</h2>';
	foreach ($movies as $movie) {
  		$str = $str. '<h3>' . $movie->title.'</h3>';
  		$str = $str. '<img src="' . $movie->posters->thumbnail . '" />';
	}
	echo $str.'</div>';
	//echo $data;
}
?>