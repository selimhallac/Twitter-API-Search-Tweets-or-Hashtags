<?php 
/**
 * Twitter API SEARCH
 * Selim Hallaç
 * selimhallac@gmail.com
 */

include "twitteroauth/twitteroauth.php";

$consumer_key = "";
$consumer_secret = "";
$access_token = "";
$access_token_secret = "";

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=merhaba&result_type=recent&count=20');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Twitter API SEARCH</title>
</head>
<body>
<?php foreach ($tweets->statuses as $key => $tweet) { ?>
    Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
<?php } ?>
  

</body>
</html>