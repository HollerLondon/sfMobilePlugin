sfMobilePlugin
==============

Provides a server-side method of detecting whether a user is on a mobile device

Usage:
------

Enable plugin

If you're using the basic `myUser` class in your application, then extend `sfMobileUser`.  If you are extending `sfGuardSecurityUser`, then extend `sfMobileGuardUser` instead.

Using it in a template:

       <?php if ($sf_user->isMobile()) : ?><p>Mobile user</p><?php endif; ?>

Using it in the controller:

       <?php if ($this->getUser()->isMobile()) $this->setLayout('mobile'); ?>
       
       
Tests:
------

Currently tests 778 user agents - mobile and desktop based on the regexp in the config

In your project configuration:

      /**
       * Connect tests for plugins
       */
      public function setupPlugins()
      {
        $this->pluginConfigurations['sfMobilePlugin']->connectTests();
      }
      
Run:

      ./symfony test:unit sfMobileUser