<?php

/**
 * Class Lucasvanstaden_Checkoutstep_Helper_Data
 * Change to the namespace that your purchased extension was given
 */
class ProxiBlue_PulsestormCheckoutstepGroups_Helper_Data extends Lucasvanstaden_Checkoutstep_Helper_Data
{

    /**
     * Adjusted to check for allowed groups
     *
     * @return bool
     */
    public function isOn()
    {
        if (Mage::getSingleton('customer/session')->isLoggedIn()) {
            $_customer = Mage::getSingleton('customer/session')->getCustomer();
            if (is_object($_customer) && $_customer->getId()) {
                $notAllowedForGroups = explode(',', Mage::getStoreConfig('checkout/pulsestorm_checkoutstep/groups'));
                if (in_array($_customer->getGroupId(), $notAllowedForGroups)) {
                    return false;
                }
            }
        }
        return parent::isOn();
    }

}