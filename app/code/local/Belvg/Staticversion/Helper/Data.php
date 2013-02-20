<?php
/**
 * @author: A.A.Treitjak
 * @copyright: 2012 - 2013 BelVG.com
 */

class Belvg_Staticversion_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_CONFIG_PATH = 'staticversion/settings/';

    public function isEnabled()
    {
        return (bool) $this->_getConfigValue('enabled');
    }

    public function getVersion()
    {
        return urlencode($this->_getConfigValue('version'));
    }

    protected function _getConfigValue($key)
    {
        return Mage::getStoreConfig(self::XML_CONFIG_PATH . $key);
    }
}
