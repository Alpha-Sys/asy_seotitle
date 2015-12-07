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
 * @extends     alist => asy/asy_seotitle/controllers/asy_seotitle__alist
 */
class asy_seotitle__alist extends asy_seotitle__alist_parent {

    public function getTitle() {
        if ($oCategory = $this->getActCategory()) {
            $sSeoTitle = $oCategory->oxcategories__asy_seotitle->value;
            if (empty($sSeoTitle)) {
                // check field with sql because lazy loading is maybe activated
                $sSeoTitle = $this->_getSeoTitleFromDb($oCategory->oxcategories__oxid->value);
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
        $sView = getViewName('oxcategories');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);
        return $sResult;
    }

}
