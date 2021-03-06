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
 * @version     20.06.2018 3.0.2
 */

namespace AlphaSys\AsySeoTitle\Controller;

class ContentController extends ContentController_parent {

    public function getTitle() {
        if ( $oContent = $this->getContent() ) {
            $sSeoTitle = $oContent->oxcontents__asy_seotitle->value;
            if (empty($sSeoTitle)) {
                // check field with sql because lazy loading is maybe activated
                $sSeoTitle = $this->_getSeoTitleFromDb($oContent->oxcontents__oxid->value);
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
        $sView = getViewName('oxcontents');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);
        return $sResult;
    }

}
