<? include "library/twitteroauth.php"; ?>  /* Library named twitteroauth included, Abraham's file is preferred because it is most updated one */
<?php
define('CONSUMER_KEY', '16H0DXENnBLYtYvgCHsnORsmr');
define('CONSUMER_SECRET', 'gm6cPpjgaas7buVpWb4za1nXx2bOyeKJAbc4bz5KDEY2ba4lLA');
define('ACCESS_TOKEN', '267065405-rzc5Zgl7Ahz1nwX5QqWxd94Xp1eO7nXC45oai0Nf');
define('ACCESS_TOKEN_SECRET', 'kmC9uZQQBFLwpQQg909m8rfFO6OfjGoDsjSVcHK6ZYd3G');

/* These are my Twitter credentials */

$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=%23hometutor&result_type=mixed&count=100');  
?>


 /* 'mixed' type will show both, popular as well as recent tweets*/

/* q=%23 is used in line 9 because it stands for # in binary and we are looking for hashtags only  */


<html>
 
    <head>
    <meta charset="utf-8" />
    <title> qriyo-twitter-task </title>
    </head>
    <body>
    <?php foreach ($tweets->statuses as $key => $tweet) { ?>
    Tweet : <img src="<?=$tweet->user->profile_image_url;?>" /><?=$tweet->text; ?><br>
<?php } ?>
    
    </body>
</html>