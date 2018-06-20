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

class ArticleListController extends ArticleListController_parent {

    public function getSeoTitle() {
        if ($oCategory = $this->getActCategory()) {
            $sSeoTitle = $oCategory->oxcategories__asy_seotitle->value;
            if (empty($sSeoTitle)) {
                // check field with sql because lazy loading is maybe activated
                $sSeoTitle = $this->_getSeoTitleFromDb($oCategory->oxcategories__oxid->value);
            }
            return $sSeoTitle;
        }
    }

    protected function _getSeoTitleFromDb($sOxid, $sField = 'asy_seotitle') {
        $oDb = \OxidEsales\Eshop\Core\DatabaseProvider::getDb();
        $sView = getViewName('oxcategories');
        $sSelect = "Select $sField from $sView where oxid = '$sOxid'";
        $sResult = $oDb->getOne($sSelect);
        return $sResult;
    }
    
    /**
     * Returns full page title
     *
     * @return string
     */
    public function getPageTitle()
    {
        $sSeoTitle = $this->getSeoTitle();
        if(empty($sSeoTitle)){
            //no seo title is set, so process the parent call
            return parent::getPageTitle();
        }
        
        $sTitle = '';

        $aTitleParts = array();
        $aTitleParts[] = $this->getTitlePrefix();
        $aTitleParts[] = $sSeoTitle;
        $aTitleParts[] = $this->getTitleSuffix();
        $aTitleParts[] = $this->getTitlePageSuffix();

        $aTitleParts = array_filter($aTitleParts);

        if (count($aTitleParts)) {
            $sTitle = implode(' | ', $aTitleParts);
        }


        return $sTitle;
    }

}
