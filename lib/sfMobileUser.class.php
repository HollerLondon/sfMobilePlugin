<?php 
/**
 * If your myUser class is this basic class extend this class
 * 
 * @package sfMobilePlugin
 *
 */
class sfMobileUser extends sfBasicSecurityUser
{
  /**
   * Checks if users is a mobile browser user (iphone, android etc)
   *
   * @param null|string $user_agent
   * @return boolean
   */
  public function isMobile($user_agent = null)
  {
    return sfMobileUtil::isMobile($user_agent);
  }
  
  /**
   * Targetting iPad (including iPad Facebook app)
   * 
   * @param null|string $user_agent
   * @return boolean
   */
  public function isIPad($user_agent = null)
  {
    return sfMobileUtil::isIPad($user_agent);
  }
  
  /**
   * Targetting iPad Facebook app only
   * 
   * @param null|string $user_agent
   * @return boolean
   */
  public function isIPadApp($user_agent = null)
  {
    return sfMobileUtil::isIPadApp($user_agent);
  }
}