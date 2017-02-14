<?php



session_start();

require_once 'autoload.php';

include 'functions.php';


// Initialize the twitter OATH

use Abraham\TwitterOAuth\TwitterOAuth;
 
define('CONSUMER_KEY', 'CCHrWjn2hro12rWsxuPUgVdoN');
define('CONSUMER_SECRET', 'ArhpeSDlNNmpyACHZB1X0ecwJ7IlDY5FeWdU8YL6QTJ7zp1fYd');
define('ACCESS_TOKEN', '728116790430031872-5x1A4QlWI2xl62pbj64jJdostpOcySR');
define('ACCESS_TOKEN_SECRET', '6QGe8GQtCakhgV3ptdRPf5YPotIaKJ5VMsx99LlrRU0NG');


// Calling the authentication  

$toa = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);


// Set the query to search over the Twitter

if($_POST['handle'] != "") {


    $query = array(
 
       "q" => $_POST['handle'],

    );

    // Initialize the Twitter Class

    $twitts = new TwitterClass;

    // Pass the json data into variable

    $results = $twitts -> search($query, $toa); // search the handler name into the api of twitter

    $tweets  = $twitts -> arrange_tweets($results, $_POST['line']);  // Pass the json data into variable

    $data = $twitts -> array_sort($tweets, 'count', SORT_DESC);  // to arrange the the array into descending sorting


  //Looping to arrange the data into html code and send it back to the index page

    foreach ($data as $key => $value) {

      echo '<div class="line" data-id="'.$value['image'].'" data-toggle="modal">';
      echo '<strong>'.$value['name'].'</strong>'; 
      echo '<img class="margin-left-20" src='.$value['image'].'>';
      echo '<p>'.$value['text'].'</p>';
      echo '<p>'.$value['date'].' <i class="fa fa-retweet margin-left-4" aria-hidden="true"></i>: '.$value['count'].' <i class="fa fa-heart margin-left-4" aria-hidden="true"></i>: '.$value['favorite'].'</p>';
      echo '</div>';

    
    }




} else {

     echo "no data";
}
 
