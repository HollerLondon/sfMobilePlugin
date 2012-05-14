<?php 
/**
 * If your myUser class needs to extend sfGuardSecurityUser
 * extend this class instead
 * 
 * @package sfMobilePlugin
 *
 */
class sfMobileGuardUser extends sfGuardSecurityUser
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