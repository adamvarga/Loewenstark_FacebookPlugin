Loewenstark_FacebookPlugin
=====================
- Dynamical Facebook Plugin for Magento
-------------------------------

Installation Instructions
-------------------------
1. Install the extension via GitHub, and deploy with modman.
2. Clear the cache, logout from the admin panel and then login again.
3. Change the config in System -> Configuration -> Loewenstark -> Facebook Plugin
4. Put the following code in template: (Default place in footer - If you want to change the position, please change the layout xml file)

```
<?php echo $this->getChildHtml('facebook.plugin'); ?>
```
4. You can style the template individually with css directly in facebook.css

Example setup:

![alt text](https://github.com/adamvarga/Loewenstark_FacebookPlugin/blob/master/facebook_setup.png)

Example frontend after styling:

![alt text](https://github.com/adamvarga/Loewenstark_FacebookPlugin/blob/master/facebook_frontend.png)

Uninstallation
--------------
1. Remove all extension files from your Magento installation OR
2. Modman remove Loewenstark_FacebookPlugin & modman clean

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/adamvarga).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Adam Varga
