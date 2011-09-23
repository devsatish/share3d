<?php

/**
 * dashboard actions.
 *
 * @package    Share3D
 * @subpackage dashboard
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

      $consumer_key = '4oE1kE5HDec0wHI3S9y0A';
      $consumer_secret = 'ZVU7EoDmdJwTrvPUDQH0mByZIVNsl8pFQdrmlqjPXnM';
      $oauthToken = '41609026-8fvLNxSobtXpPerK77mckjHv6Sw7rUpNSWQCfT3Bi';
      $oauthTokenSecret = 'GssmOxqXExuWYiI9ZMZSUGQfe2TSw8uRKxMvLgoA';
      $twitterObj = new EpiTwitter($consumer_key, $consumer_secret);


      $Twitter = new EpiTwitter($consumerKey, $consumerSecret);

      if(isset($_GET['oauth_token']) || (isset($_COOKIE['oauth_token']) && isset($_COOKIE['oauth_token_secret'])))
       {
        // user accepted access
	if( !isset($_COOKIE['oauth_token']) || !isset($_COOKIE['oauth_token_secret']) )
	{
		// user comes from twitter
                $Twitter->setToken($_GET['oauth_token']);
		$token = $Twitter->getAccessToken();
		setcookie('oauth_token', $token->oauth_token);
		setcookie('oauth_token_secret', $token->oauth_token_secret);
		$Twitter->setToken($token->oauth_token, $token->oauth_token_secret);

                $_SESSION['oauth_access_token'] = $token->oauth_token;
                $_SESSION['oauth_access_token_secret'] = $token->oauth_token_secret;

                $to = new TwitterOAuth($consumer_key, $consumer_secret, $token->oauth_token, $token->oauth_token_secret);
                $content = $to->get('account/verify_credentials');
                $user = simplexml_load_string($content);
                $this->userContent = $content;
                $this->userObj = $user;


	}
	else
	{
	 // user switched pages and came back or got here directly, stilled logged in
	 $Twitter->setToken($_COOKIE['oauth_token'],$_COOKIE['oauth_token_secret']);
	 $user= $Twitter->get_accountVerify_credentials();
    	$oauth_token=$_COOKIE['oauth_token'];
	$oauth_token_secret=$_COOKIE['oauth_token_secret'];
	// Storing token keys
	//$sql=mysql_query("update {$prefix}users SET oauth_token='$oauth_token',oauth_token_secret='$oauth_token_secret' where username='$user_session'");
	header('Location: http://173.48.138.120:8080/'); //Redirecting Page
	}



}
elseif(isset($_GET['denied']))
{
    $this->getUser()->setFlash( 'error', 'Access Denied: You must sign in through twitter first' );
    $this->forward('home', 'index');
    
}
else
{
    $this->getUser()->setFlash( 'error', 'Access Denied: Try logging in again' );
    $this->forward('home', 'index');
}


    //$this->forward('default', 'module');
  }

  public function executeTwitterAuth(sfWebRequest $request)
  {
     

   
  }

}
