<?php 
/**
 * Mobile methods
 * 
 * @package sfMobilePlugin
 */
class sfMobileUtil
{
  /**
   * Checks if user agent is a mobile browser user (iphone, android etc)
   *
   * @param null|string $user_agent
   * @return boolean
   */
  public static function isMobile($user_agent = null)
  {
    if (!$user_agent) $user_agent = $_SERVER['HTTP_USER_AGENT'];
    
    return preg_match(sfConfig::get('app_mobile_browser_regexp_1'), $user_agent) || preg_match(sfConfig::get('app_mobile_browser_regexp_2'), substr($user_agent, 0, 4));
  }
  
  /**
   * Targetting iPad (including iPad Facebook app)
   * 
   * @param null|string $user_agent
   * @return boolean
   */
  public function isIPad($user_agent = null)
  {
    if (!$user_agent) $user_agent = $_SERVER['HTTP_USER_AGENT'];
    
    return (false !== strstr($user_agent, 'iPad'));
  }
  
  /**
   * Targetting iPad Facebook app only
   * 
   * @param null|string $user_agent
   * @return boolean
   */
  public function isIPadApp($user_agent = null)
  {
    if (!$user_agent) $user_agent = $_SERVER['HTTP_USER_AGENT'];
    
    return (false !== strstr($user_agent, 'FBForIPhone'));
  }
}