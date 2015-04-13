<?php

$title = "spiderman";



$title = urlencode($title);

$json=file_get_contents("http://www.omdbapi.com/?s=$title&plot=full&r=json");

$details=json_decode($json);

//Check if respose contains the movie information
//if($details->Response=='True')
//{   echo "coucou";
    //Print the movie information
    //echo "IMDB-ID : ".$details->imdbID.'<br>';
    //echo "Title : ".$details->Title.'<br>';
    //echo "Year : ".$details->Year.'<br>';
    //echo "Rated : ".$details->Rated.'<br>';
    //echo "Poster Image Path: ".$details->Poster.'<br>';
    //echo "<img src=\"$details->Poster\"><br>";
    //echo "Released Date: ".$details->Released.'<br>';
    //echo "Runtime : ".$details->Runtime.'<br>';
    //echo "Genre : ".$details->Genre.'<br>';
    //echo "Director : ".$details->Director.'<br>';
    //echo "Writer : ".$details->Writer.'<br>';
    //echo "Actors : ".$details->Actors.'<br>';
    //echo "Plot : ".$details->Plot.'<br>';
    //echo "Language : ".$details->Language.'<br>';
    //echo "Country : ".$details->Country.'<br>';
    //echo "Awards : ".$details->Awards.'<br>';
    //echo "Metascore : ".$details->Metascore.'<br>';
    //echo "IMDB Rating : ".$details->imdbRating.'<br>';
    //echo "IMDB Votes : ".$details->imdbVotes.'<br>';
    //foreach ($details as $key => $value)
    //{
    //    echo "coucou";
        //echo $key.' : '.$value.'<br />';
    //}
    echo count($details);
    var_dump($details);
//}
//Show message if the movie information is not returned by APIs
//else
//{
//    echo "Movie information not available.Please confirm title";
//}
?>
