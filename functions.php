<?php

class TwitterClass { 



  function search(array $query, $toa) {

    // get the value of the tweets

    return $toa->get('search/tweets', $query);

  }



  // function to re arrange the array to descending.

  function array_sort($array, $on, $order) {


      $new_array = array();
      $sortable_array = array();

      if (count($array) > 0) {

          foreach ($array as $k => $v) {

              if (is_array($v)) {

                  foreach ($v as $k2 => $v2) {

                      if ($k2 == $on) {

                          $sortable_array[$k] = $v2;

                      }
                  }

              } else {

                  $sortable_array[$k] = $v;
              }
          }

          switch ($order) {

              case SORT_ASC:
                  asort($sortable_array);
              break;

              case SORT_DESC:
                  arsort($sortable_array);
              break;
          }

          foreach ($sortable_array as $k => $v) {

              $new_array[$k] = $array[$k];
          }
      }

      return $new_array;
  }


  //function that arrange the twitter array to smaller array

  function arrange_tweets($tweets, $line)
  {

    $i = 1; 
    $tweet_array = null;
    $retweet_score = 0;
    $likes = 0;

    foreach ($tweets->statuses as $result) {


         if($line >= $i) {
            
            if($result->retweet_count != 0)

                if($result->favorite_count == "") {


                    $likes = 0;


                }


                $tweet_array[] = array(

                  'name'     => $result->user->screen_name,

                  'count'    => $result->retweet_count,

                  'favorite' => $likes,

                  'text'     => $result->text,

                  'image'    => $result->user->profile_image_url,

                  'date'     => $result->created_at

            );
          }


         $i++;

    }   

    return $tweet_array;

  }

}

 
