<?php

/**
 * home actions.
 *
 * @package    Share3D
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
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

      $this->twitterOauthUrl = $twitterObj->getAuthorizationUrl();
    $this->greetings = "Hello";
  }
}
