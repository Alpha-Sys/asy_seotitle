<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>
 * @copyright   (C) Alpha-Sys 2008-2018
 * @module      asy_seotitle
 * @version     22.01.2018 3.0.0
 */

namespace AlphaSys\AsySeoTitle\Controller;

class VendorListController extends VendorListController_parent {

    public function getTitle() {
        if ($oVendor = $this->getActVendor()) {
            $sSeoTitle = $oVendor->oxvendor__asy_seotitle->value;
            if (empty($sSeoTitle)) {
                // check field with sql because lazy loading is maybe activated
                $sSeoTitle = $this->_getSeoTitleFromDb($oVendor->oxvendor__oxid->value);
            }
            if (!empty($sSeoTitle)) {
                return $sSeoTitle;
            } else {
                return parent::getTitle();
            }
        }
    }

    protected function _getSeoTitleFromDb($sOxid, $sField = 'asy_seotitle') {
        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
        $sView = getViewName('oxvendor');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);
        return $sResult;
    }

}
