<?php

class Loewenstark_FacebookPlugin_Block_Facebook extends Mage_Core_Block_Template {
    /*
     * Modul active check
     * @return html
     */

    protected function _toHtml() {
        if (!Mage::getStoreConfigFlag('ls_facebookplugin/general/active')) {
            return '';
        }
        return parent::_toHtml();
    }

    /*
     *  Get plugin name
     *  @return string
     */

    public function getPluginName() {
        return Mage::getStoreConfig('ls_facebookplugin/general/name');
    }

    /*
     *  Get plugin url
     *  @return string
     */

    public function getUrl() {
        return Mage::getStoreConfig('ls_facebookplugin/general/href');
    }

    /*
     *  Get tab style
     *  @return array
     */

    public function getTabs() {
        return Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/tabs');
    }

    /*
     *  Get plugin width
     *  @return string
     */

    public function getWidth() {
        return Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/width');
    }

    /*
     *  Get plugin height
     *  @return string
     */

    public function getHeight() {
        return Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/height');
    }

    /*
     *  Convert boolean to string
     *  @return string
     */

    public function strbool($value) {
        return $value ? 'true' : 'false';
    }

    /*
     *  Get hide cover option
     *  @return boolean
     */

    public function getHideCover() {
        return $this->strbool(Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/hide_cover'));
    }

    /*
     *  Get show facepile option
     *  @return boolean
     */

    public function getShowFacepile() {
        return $this->strbool(Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/show_facepile'));
    }

    /*
     *  Get small header option
     *  @return boolean
     */

    public function getSmallHeader() {
        return $this->strbool(Mage::getStoreConfig('ls_facebookplugin/general_plugin_setup/small_header'));
    }

}
