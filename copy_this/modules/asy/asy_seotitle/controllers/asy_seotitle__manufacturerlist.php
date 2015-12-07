<?php

/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2015
 * @oxidversion OXID eShop PE, EE
 * @version     02.11.2015  2.0
 * @module		asy_seotitle
 * @extends     manufacturerlist => asy/asy_seotitle/controllers/asy_seotitle__manufacturerlist
 */
class asy_seotitle__manufacturerlist extends asy_seotitle__manufacturerlist_parent {

    public function getTitle() {
        if ($oManufacturer = $this->getActManufacturer()) {
            $sSeoTitle = $oVendor->oxmanufacturers__asy_seotitle->value;
            if (empty($sSeoTitle)) {
                // check field with sql because lazy loading is maybe activated
                $sSeoTitle = $this->_getSeoTitleFromDb($oManufacturer->oxmanufacturers__oxid->value);
            }
            if (!empty($sSeoTitle)) {
                return $sSeoTitle;
            } else {
                return parent::getTitle();
            }
        }
    }

    protected function _getSeoTitleFromDb($sOxid, $sField = 'asy_seotitle') {
        $oDb = oxDb::getDb();
        $sView = getViewName('oxmanufacturers');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);
        return $sResult;
    }

}
