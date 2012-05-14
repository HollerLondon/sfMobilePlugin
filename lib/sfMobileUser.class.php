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
}