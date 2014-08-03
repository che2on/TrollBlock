    
	 <?php
	 require 'OAuth.php';
	 require 'twitteroauth.php';
	 
	 $message= "TrollBlock random message";
     define("CONSUMER_KEY", "i5QKzo83g5fSc1fiiX2t7XA9X");
     define("CONSUMER_SECRET", "qETdegvqL2movPrPnei8XB9smLsdWoIzvxuC2wTAJPfRD1EblN");
     define("OAUTH_TOKEN", "15975725-j1aYEx8yUwAbEzq0fMgelHVnBAePN4bWIuKnbHTvD");
     define("OAUTH_SECRET", "ThvusHjTgVADMcSTFkSlnlNX1yzYt9QKfRb38RzxeEygn");
     $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
     $connection->get('account/verify_credentials');
     $connection->post('statuses/update',array('status' => " $message "));
     ?>